<?php
/**
 * @file
 * Contains the theme's functions to manipulate Drupal's default markup.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728096
 */


function fm_preprocess_html(&$variables, $hook) {
  
  drupal_add_css('http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700|Open+Sans:400,600', array('type' => 'external', 'weight' => 0,)); 

  // get rid of .no-sidebars class that Drupal adds
  //$variables['classes_array'] = array_diff($variables['classes_array'], array(
  //  'no-sidebars',
  //));
}


// breadcrumbs
   
// function fm_breadcrumb($variables) {
  
//   if (count($variables['breadcrumb']) > 0) {
//     $lastitem = sizeof($variables['breadcrumb']);
//     $title = drupal_get_title();
//     $crumbs = '<ul class="breadcrumb">';
//     $a=1;
//     foreach($variables['breadcrumb'] as $value) {
//         if ($a!=$lastitem){
//          $crumbs .= '<li class="breadcrumb-'.$a.'">'. $value . ' ' . '</li>' . '<li class="breadcrumb-sep">'. '&frasl;' . ' ' . '</li>';
//          $a++;
//         }
          
//           else {
//             $crumbs .= '<li class="breadcrumb-last">' . $value . '</li>';          }
//     }
//     $crumbs .= '</ul>';
//   return $crumbs;
// }


/**
 * Override or insert variables into the page templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("page" in this case.)
 */
/* -- Delete this line if you want to use this function
function fm_preprocess_page(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert variables into the node templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("node" in this case.)
 */
/* -- Delete this line if you want to use this function
function fm_preprocess_node(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');

  // Optionally, run node-type-specific preprocess functions, like
  // fm_preprocess_node_page() or fm_preprocess_node_story().
  $function = __FUNCTION__ . '_' . $variables['node']->type;
  if (function_exists($function)) {
    $function($variables, $hook);
  }
}
// */

/**
 * Override or insert variables into the comment templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("comment" in this case.)
 */
/* -- Delete this line if you want to use this function
function fm_preprocess_comment(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert variables into the region templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("region" in this case.)
 */
/* -- Delete this line if you want to use this function
function fm_preprocess_region(&$variables, $hook) {
  //if (strpos($variables['region'], 'sidebar_') === 0) {
  //  $variables['theme_hook_suggestions'] = array_diff($variables['theme_hook_suggestions'], array('region__sidebar'));
  //}
}
// */

