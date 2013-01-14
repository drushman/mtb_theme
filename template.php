<?php
/**
 * @file
 * Contains theme override functions and preprocess functions for the theme.
 *
 * ABOUT THE TEMPLATE.PHP FILE
 *
 *   The template.php file is one of the most useful files when creating or
 *   modifying Drupal themes. You can add new regions for block content, modify
 *   or override Drupal's theme functions, intercept or make additional
 *   variables available to your theme, and create custom PHP logic. For more
 *   information, please visit the Theme Developer's Guide on Drupal.org:
 *   http://drupal.org/theme-guide
 *
 * OVERRIDING THEME FUNCTIONS
 *
 *   The Drupal theme system uses special theme functions to generate HTML
 *   output automatically. Often we wish to customize this HTML output. To do
 *   this, we have to override the theme function. You have to first find the
 *   theme function that generates the output, and then "catch" it and modify it
 *   here. The easiest way to do it is to copy the original function in its
 *   entirety and paste it here, changing the prefix from theme_ to mtb_.
 *   For example:
 *
 *     original: theme_breadcrumb()
 *     theme override: mtb_breadcrumb()
 *
 *   where mtb is the name of your sub-theme. For example, the
 *   zen_classic theme would define a zen_classic_breadcrumb() function.
 *
 *   If you would like to override any of the theme functions used in Zen core,
 *   you should first look at how Zen core implements those functions:
 *     theme_breadcrumbs()      in zen/template.php
 *     theme_menu_item_link()   in zen/template.php
 *     theme_menu_local_tasks() in zen/template.php
 *
 *   For more information, please visit the Theme Developer's Guide on
 *   Drupal.org: http://drupal.org/node/173880
 *
 * CREATE OR MODIFY VARIABLES FOR YOUR THEME
 *
 *   Each tpl.php template file has several variables which hold various pieces
 *   of content. You can modify those variables (or add new ones) before they
 *   are used in the template files by using preprocess functions.
 *
 *   This makes THEME_preprocess_HOOK() functions the most powerful functions
 *   available to themers.
 *
 *   It works by having one preprocess function for each template file or its
 *   derivatives (called template suggestions). For example:
 *     THEME_preprocess_page    alters the variables for page.tpl.php
 *     THEME_preprocess_node    alters the variables for node.tpl.php or
 *                              for node-forum.tpl.php
 *     THEME_preprocess_comment alters the variables for comment.tpl.php
 *     THEME_preprocess_block   alters the variables for block.tpl.php
 *
 *   For more information on preprocess functions and template suggestions,
 *   please visit the Theme Developer's Guide on Drupal.org:
 *   http://drupal.org/node/223440
 *   and http://drupal.org/node/190815#template-suggestions
 */


/**
 * Implementation of HOOK_theme().
 */
function mtb_theme(&$existing, $type, $theme, $path) {
  $hooks = zen_theme($existing, $type, $theme, $path);
  // Add your theme hooks like this:
  /*
  $hooks['hook_name_here'] = array( // Details go here );
  */
  // @TODO: Needs detailed comments. Patches welcome!
  return $hooks;
}

/**
 * Override or insert variables into all templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered (name of the .tpl.php file.)
 */
/* -- Delete this line if you want to use this function
function mtb_preprocess(&$vars, $hook) {
  $vars['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert variables into the page templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("page" in this case.)
 */

function mtb_preprocess_page(&$vars, $hook) {
  //$vars['sample_variable'] = t('Lorem ipsum.');
  $user_logged_in = user_is_logged_in();
  if ($user_logged_in) {
    $account_id = $GLOBALS['user']->uid;
    $account = user_load($account_id);
    $user_id = $account->uid;
    $user_fields = content_profile_load('profile', $user_id);
  }
  $vars['user_profile_about'] = t($user_fields->field_profile_about[0]['value']);
  $vars['user_profile_fitness'] = t($user_fields->field_profile_fitness[0]['value']);
  $vars['user_profile_bikes'] = array();
  $vars['user_profile_bikes'] = $user_fields->field_profile_bikes;
  $vars['user_profile_location'] = t($user_fields->field_profile_location[0]['value']);
  $vars['user_profile'] = $user_fields;

  // To remove a class from $classes_array, use array_diff().
  //$vars['classes_array'] = array_diff($vars['classes_array'], array('class-to-remove'));
}

/**
 * Preprocess for theme('kml_placemark_wkt').
 */
function mtb_preprocess_kml_placemark_wkt(&$vars) {
  // Set style url based on track length.
  // See available styles in kml-style.tpl.php in this theme.
  // The array key below is incorrect - once I can figure out the correct key I'm sure this will work.  
  $length = !empty($vars['row']->node_data_field_track_size_field_track_length_value) ? $vars['row']->node_data_field_track_size_field_track_length_value : 0;

  switch (TRUE){

    case ($length >= 10 AND $length < 14):      // C1 L4 between 10 and 14 
      $vars['styleURL'] = '#OrangeTrack';
    break;

    case ($length >= 6 AND $length < 10):       // C2 L3 between 6 and 10 
      $vars['styleURL'] = '#OrangeRedTrack';
    break;

    case ($length >= 14 AND $length < 18):      // C3 L5 between 14 and 18 
      $vars['styleURL'] = '#GoldenTrack';
    break;	

    case ($length >= 3 AND $length < 6):        // C4 L2 between 3 and 6 
      $vars['styleURL'] = '#RedOrngTrack';
    break;

    case ($length >= 18 AND $length < 23):      // C5 L6 between 18 and 23 
      $vars['styleURL'] = '#YellowTrack';
    break;

    case ($length >= 23 AND $length < 29):      // C6 L7 between 23 and 29 
      $vars['styleURL'] = '#YellowGrnTrack';
    break;

    case ($length >= 0 AND $length < 3):        // C7 L1 between 0 and 3 
      $vars['styleURL'] = '#RedTrack';
    break;

    case ($length >= 29 AND $length < 36):      // C8 L8 between 29 and 36 
      $vars['styleURL'] = '#LimeGrnTrack';
    break;

    case ($length >= 36 AND $length < 44):      // C9 L9 between 36 and 44 
      $vars['styleURL'] = '#GreenYlwTrack';
    break;	

    case ($length >= 44 AND $length < 53):      // C10 L10 between 44 and 53 
      $vars['styleURL'] = '#GreenTrack';
    break;

    case ($length >= 53 AND $length < 63):      // C11 L11 between 53 and 63 
      $vars['styleURL'] = '#GreenAquaTrack';
    break;

    case ($length >= 63 AND $length < 73):      // C12 L12 between 63 and 73 
      $vars['styleURL'] = '#AquaGrnTrack';
    break;	

    case ($length >= 73 AND $length < 83):      // C13 L13 between 73 and 83 
      $vars['styleURL'] = '#AquaTrack';
    break;

    case ($length >= 83 AND $length < 94):      // C14 L14 between 83 and 94 
      $vars['styleURL'] = '#CyanTrack';
    break;	

    case ($length >= 94 AND $length < 107):     // C15 L15 between 94 and 107 
      $vars['styleURL'] = '#CyanBlueTrack';
    break;

    case ($length >= 107 AND $length < 124):    // C16 L16 between 107 and 124 
      $vars['styleURL'] = '#SkyBlueTrack';
    break;

    case ($length >= 124 AND $length < 145):    // C17 L17 between 124 and 145 
      $vars['styleURL'] = '#BabyBlueTrack';
    break;	

    case ($length >= 145 AND $length < 170):    // C18 L18 between 145 and 170
      $vars['styleURL'] = '#OtherBlueTrack';
    break;

    case ($length >= 170 AND $length < 200):    // C19 L19 between 170 and 200 
      $vars['styleURL'] = '#BlueTrack';
    break;

    case ($length >= 200):                      // C20 L20 greater than 200km 
      $vars['styleURL'] = '#DeepBlueTrack';
    break;		
		
    default:                //default
      $vars['styleURL'] = '#GoldenTrack';
    break;
  }
}

/**
 * Override or insert variables into the node templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("node" in this case.)
 */
/* -- Delete this line if you want to use this function
function mtb_preprocess_node(&$vars, $hook) {
  $vars['sample_variable'] = t('Lorem ipsum.');

  // Optionally, run node-type-specific preprocess functions, like
  // mtb_preprocess_node_page() or mtb_preprocess_node_story().
  $function = __FUNCTION__ . '_' . $vars['node']->type;
  if (function_exists($function)) {
    $function($vars, $hook);
  }
}
// */

/**
 * Override or insert variables into the comment templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("comment" in this case.)
 */
/* -- Delete this line if you want to use this function
function mtb_preprocess_comment(&$vars, $hook) {
  $vars['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert variables into the block templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("block" in this case.)
 */
/* -- Delete this line if you want to use this function
function mtb_preprocess_block(&$vars, $hook) {
  $vars['sample_variable'] = t('Lorem ipsum.');
}
// */
