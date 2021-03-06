<?php

function sync_theme_preprocess_page(&$variables, $hook) {

    $arg0 = arg(0);
    $arg1 = arg(1);

    if (isset($variables['node']->type) && $variables['node']->type == "portada") {
        $variables['theme_hook_suggestions'][] = 'page__portada';
    }
}  
function sync_theme_preprocess_html(&$vars) {
  $node = menu_get_object();
  
  if ($node && $node->type=='portafolio') {
    $vars['theme_hook_suggestions'][] = 'page__portfolio';
    $vars['node']=$node;
    $imagen = field_get_items('node', $vars['node'], 'field_imagen');
    $imagen = image_style_url('portfolio-full', $imagen[0]['uri']);
    $vars['imagen']=$imagen;
  }
}
function sync_theme() {
    $items = array();
    // create custom user-login.tpl.php
    $items['user_login'] = array(
        'render element' => 'form', 'path' => drupal_get_path('theme', 'sync_theme') . '/templates',
        'template' => 'page__login'
    );
    return $items;
}
function sync_theme_menu_tree__menu_menu_home($variables) {

    return '<ul id="menu">' . $variables['tree'] . '</ul>';
}

function sync_theme_menu_link__menu_menu_home(array $variables) {
    $element = $variables['element'];         
    $url = explode('#',$element['#href'])[1];
    $active = '';
    if($element['#title'] == "INICIO"){
        $active = 'class="current"';
    }
    return '<li '.$active.'><a href="#' . $url . '">' . $element['#title'] . '</a></li>';  
}