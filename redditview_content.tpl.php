<?php
/**
 * @file
 * This template handles the layout of the main Redditview block.
 *
 * Variables available:
 * - $items: Subject and content
 */

if (!empty($items['content'])):
    $aresponseitem = '<div id="red-block-wrap">';
    foreach ($items['content'] as $item):
      $the_link = $item->data->url;
      $the_title = truncate_utf8($item->data->title, 20, $wordsafe = FALSE, $add_ellipsis = TRUE, $min_wordsafe_length = 1);
      $the_comments = 'http://reddit.com/' . $item->data->permalink;
      $aresponseitem .= '
        <div class="red-item-wrap">
           <div class="red-title"><a href="' . $the_link . '">' . $the_title . '</a></div>
           <a href="' . $the_link . '"><img class="red-thumb" src="' . $item->data->thumbnail . '"/></a>
           <div class="red-comments"><a href="' . $the_comments . '" target="_blank">Comments</a></div>
         </div>
       ';
    endforeach;
    $aresponseitem .= '<div style="clear:both"></div></div>';
    print $aresponseitem;
  else :
    print '<a href="/redditview/form-fill">Click hee to complete the Redditview block form</a>';
  endif;
