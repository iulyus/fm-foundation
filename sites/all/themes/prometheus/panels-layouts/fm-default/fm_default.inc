<?php

/**
 * Implementation of hook_panels_layouts()
 */
// Plugin definition
$plugin = array(
  'title' => t('FM Three column default'),
  'category' => t('Columns: 3'),
  'icon' => 'icon.png',
  'theme' => 'fm_default',
  'css' => 'css/panels-layouts/default/default-layout.css',
  'regions' => array(
  'top' => t('Content Top'),
  'left' => t('Left side'),
  'middle' => t('Middle column'),
  'right' => t('Right side'),
  'bottom' => t('Content Bottom')
  ),
);

