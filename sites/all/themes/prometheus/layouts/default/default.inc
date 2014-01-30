<?php


function fm_zen_default_panels_layouts() {
// Plugin definition
$plugin = array(
  'title' => t('FM Zen 3 column default'),
  'category' => t('Columns: 3'),
  'icon' => 'icon.png',
  'theme' => 'default',
  'css' => 'css/layouts/default/default-layout.css',
  'regions' => array(
  'top' => t('Content Top'),
  'left' => t('Left side'),
  'middle' => t('Middle column'),
  'right' => t('Right side'),
  'bottom' => t('Content Bottom')
  ),
);
 return $items;
}