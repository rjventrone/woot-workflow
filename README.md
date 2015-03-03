#Woot Workflow
***
This is a simple Alfred workflow written in PHP that uses the woot api to get all daily deals. This class uses David Ferguson Workflow class, which takes alot of the tedious work out of creating a workflow


##How to use
***
- First you will need to signup for a woot API key [here](https://account.woot.com/welcome?ReturnUrl=%2fapplications "here")
- Then you will need to add you key to the workflow by typing `wootkey`
- The key is store in wootkey.json in the workflow. If you need to delete you key for any reason just delete that file. If you want to update your wootkey you can type wootkey and re-enter you woot api key or you can edit the file directly.
- To make a call to woot type `woot daily` and you will get a list of all the daily deals woot has to offer



##Documentation
***
For more documentation on the woot api you can check out [woots api here](http://api.woot.com/2 "Title")


##TODO
***
1. make it so you can get a list of items for one category
2. put a icon next to deals that are having a wootoff