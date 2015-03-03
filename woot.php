<?php  


require('workflow.php');

/**
* Name:         Woot
* Description:  This PHP class object provides a simple function that makes a call to woots api for daily deals.
* Author:       Robert Ventrone
* Revised:      01/25/2015
* Version:      0.0.1
*
*
* things to do:
*               - pass in a site you want the deals for
*               - make it so you can add in your own api key
*/
class Woot {
    
  public $alfred;
  public $test;
  
  public $wootKey;
  public $baseURL;
  public $apiVersion;


  function __construct() {
    $this->alfred = new Workflows();     
  }


  public function urlBuilder() {
    $this->baseURL = 'http://api.woot.com';
    $this->wootKey = $this->alfred->read('wootkey.json');
    $this->apiVersion = '2';
    echo "string";
    echo $this->wootKey[0];
  }

  public function setKey($key = null) {
    $this->alfred->write([$key],'wootkey.json');
  }

  public function getAllDeals() {
    $ch = curl_init();

    // Set url
    curl_setopt($ch, CURLOPT_URL, 'http://api.woot.com/2/events.json?eventType=Daily&key=ee48b69977e94473aa3a775a25d7c84f');

    // Set method
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

    // Set options
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    

    // Send the request & save response to $resp
    $resp = curl_exec($ch);

    if(!$resp) {
      echo "Error";
      die('Error: "' . curl_error($ch) . '" - Code: ' . curl_errno($ch));
    } else {
      $resp = json_decode($resp);
      
      foreach($resp as $site){
        date_default_timezone_set('UTC');
        
        $date = new DateTime($site->EndDate);
        
        $formatedDate = $date->format('m-d-Y');
    
        foreach($site->Offers as $offer){
          $price = $offer->Items[0]->SalePrice;
          
          if($offer->SoldOut){
            $soldOut = 'Item sold out';
          } else {
            $soldOut = 'Get it while its hot';
          }
          
        }

        $subtitle = $site->Site.' - $'.$price.' - '.$soldOut;

        $this->alfred->result($site->Id,$site->Site,$site->Title,$subtitle,'/icons/wooteicon.png');
        
      }
      echo $this->alfred->toxml();
    }

    // Close request to clear up some resources
    curl_close($ch);
  }
  

}



?>