<?php

function pluto_preprocess_html(&$vars) {

  # Force ie to use latest rendering engine, or Chrome Frame
  $meta_ie_render_engine = array(
    '#type' => 'html_tag',
    '#tag' => 'meta',
    '#attributes' => array(
      'content' =>  'IE=edge,chrome=1',
      'http-equiv' => 'X-UA-Compatible',
    )
  );
  drupal_add_html_head($meta_ie_render_engine, 'meta_ie_render_engine');
  
  # mobile viewport
  $meta_viewport = array(
    '#type' => 'html_tag',
    '#tag' => 'meta',
    '#attributes' => array(
      'content' =>  'width=device-width',
      'name' => 'viewport',
    )
  );
  drupal_add_html_head($meta_viewport, 'meta_viewport');
  
}

?>