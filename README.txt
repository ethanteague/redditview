Redditview for Drupal
====================
This is a simple module that wraps around a php translation
of the reddit api. Upon activation, Redditview creates a
block that will pull in a set number of the most popular
items from the users subreddit of choice, including the item
title, preview thumb (if available - with link to original image),
and a link to the comments associated with the subreddit item.
The api can be extended much further to include commenting from
drupal, upvote count, etc.

Before activating this module, you will need to install the
api found here:
https://github.com/jcleblanc/reddit-php-sdk/blob/master/reddit.php
in your libraries directory, in a new directory called reddit_api.
So, it will look like "/libraries/reddit_api/reddit.php"


Once activated, this module creates a db table that is populated with:

Reddit Username
Reddit password
subreddit name
Number of posts to return

The form is found here: admin/config/redditview/form-fill

I intend to develop this module more and add featured
to include upvote count, commenting, as well as views
integration, and js prettifying. Right now, I'm placing
this rudimentary implementation to gauge interest
in this project / module.

Project page: http://drupal.org/sandbox/EthanT/1995950
