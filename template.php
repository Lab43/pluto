<?php

# Change the default meta content-type tag to the shorter HTML5 version
function boron_html_head_alter(&$head_elements) {
  $head_elements['system_meta_content_type']['#attributes'] = array(
    'charset' => 'utf-8'
  );
}

# Changes the search form to use the HTML5 "search" input attribute
function boron_preprocess_search_block_form(&$vars) {
  $vars['search_form'] = str_replace('type="text"', 'type="search"', $vars['search_form']);
}


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


# Wrap menus in nav elements
function pluto_menu_tree($variables) {
  return '<nav class="menu"><ul>' . $variables['tree'] . '</ul></nav>';
}

?>