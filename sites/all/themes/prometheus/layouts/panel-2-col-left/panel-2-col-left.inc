<?php

// Plugin definition
$plugin = array(
  'title' => t('Responsive, sidebar left, stacked'),
  'category' => t('Columns: 2'),
  'icon' => 'panel-2-col-left.png',
  'theme' => 'panel-2-col-left',
  'css' => 'css/layouts/panel-2-col-left/panel-2-col-left.css',
  'regions' => array(
  'top' => t('Content Top'),
  'middle' => t('Middle column'),
  'left' => t('Left sidebar'),
  'bottom' => t('Content Bottom')
  ),
);
