<?php

// Plugin definition
$plugin = array(
  'title' => t('Responsive, sidebar right, stacked'),
  'category' => t('Columns: 2'),
  'icon' => 'panel-2-col-right.png',
  'theme' => 'panel-2-col-right',
  'css' => 'css/layouts/panel-2-col-right/panel-2-col-right.css',
  'regions' => array(
  'top' => t('Content Top'),
  'middle' => t('Middle column'),
  'right' => t('Right sidebar'),
  'bottom' => t('Content Bottom')
  ),
);
