<?php

function foundation_preprocess_html(&$variables) {
	drupal_add_js(drupal_get_path('theme', 'foundation') .'/js/foundation.js');
  drupal_add_js(drupal_get_path('theme', 'foundation') .'/js/jcaption.js');
  drupal_add_css(path_to_theme() . '/css/ie-lte-8.css', array('group' => CSS_THEME, 'browsers' => array('IE' => 'lte IE 8', '!IE' => FALSE), 'preprocess' => FALSE, 'weight' => 90));
 drupal_add_css(path_to_theme() . '/css/social-buttons.css');
}

function foundation_preprocess_article(&$vars) {
  if (variable_get('node_submitted_' . $vars['node']->type, TRUE)) {
    $date = format_date($vars['node']->created, 'M jS, Y');
    $vars['submitted'] = t('Postted by !username on !datetime', array('!username' => $vars['name'], '!datetime' => $date));
  }
}

function foundation_breadcrumb($variables) {
	
   if (count($variables['breadcrumb']) > 0) {
     $lastitem = sizeof($variables['breadcrumb']);
     $title = drupal_get_title();
     $crumbs = '<ul class="breadcrumbs">';
		 $crumbs .= '<li class="breadcrumb-lead">You are here:</li>';
     $a=1;
     foreach($variables['breadcrumb'] as $value) {
         if ($a!=$lastitem){
          $crumbs .= '<li class="breadcrumb-'.$a.'">'. $value . ' ' . '</li>' . '<li class="breadcrumb-sep">'. '››' . ' ' . '</li>';
          $a++;
         }
				 else {
             $crumbs .= '<li class="breadcrumb-last">' . $value . '</li>' . '<li class="breadcrumb-sep">'. '››' . ' ' . '</li>' . '<li class="breadcrumb-current">'.$title.'</li> ';
         }
     }
     $crumbs .= '</ul>';
   return $crumbs;
   }
  
}