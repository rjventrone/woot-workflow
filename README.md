#Woot Workflow
***
This is a simple Alfred workflow written in PHP that uses the Woot API to get all daily deals. This class uses [David Ferguson's Workflow class](http://dferg.us/workflows-class/), which takes a lot of the tedious work out of creating a workflow.


##How to use
***
- Download [Wootfred.alfredworkflow](https://github.com/rjventrone/woot-workflow/blob/master/Wootfred.alfredworkflow) to your machine and double click it to import into Alfred.
- Sign up for a Woot API key [here](https://account.Woot.com/welcome?ReturnUrl=%2fapplications "here").
- Launch Alfred and add your API Key to the workflow by typing `wootkey <Enter>`, paste in your API key, and press `<Enter>`.
- Woot Workflow stores your key in `wootkey.json` inside the workflow. If you need to delete your key for any reason, just delete that file. If you want to update your API Key, you can type `wootkey` again and re-enter your Woot API key, or you can edit the file directly.
- To display today's deals, launch Alfred and type `woot daily`. You will see today's list of deals. You can select a deal to launch it in your default web browser.



##Documentation
***
For more documentation on the Woot API, you can check out [Woot's API here](http://API.Woot.com/2 "Title")


##TODO
***
1. Get a list of items for one category.
2. Display icon next to deals that are having a Wootoff.
3. Order deals predictably.
