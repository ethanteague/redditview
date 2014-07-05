<?php

/**
 * @file
 * Additional functions for the redditview module
 */

/**
 * The default css file for module.
 */
drupal_add_css(drupal_get_path('module', 'redditview') . '/redditview.css', array('group' => CSS_DEFAULT, 'type' => 'file'));
 /**
  * Creates reddit object to be passed to hook_block_view content.
  */
function redditview_object() {
  $dir_path = libraries_get_path('reddit_api');
  require_once $dir_path . '/reddit.php';
  $result = db_select('redditview_user_info', 'user')->fields('user')->execute()->fetchAssoc();
  $reddit = new reddit($result['user'], $result['pass']);
  $oresponse = $reddit->getListing($result['section'], $result['posts']);
  $aresponse_kids = !empty($oresponse->data->children) ? $oresponse->data->children : '';
  return $aresponse_kids;
}
