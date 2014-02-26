<?php

function sync_theme_preprocess_page(&$variables, $hook) {

    $arg0 = arg(0);
    $arg1 = arg(1);

    if (isset($variables['node']->type) && $variables['node']->type == "portada") {
        $variables['theme_hook_suggestions'][] = 'page__portada';
    }
    var_dump($variables['node']);
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
    $url = url($element['#href']);
    $active = '';
    $acturl = "/";
    if($element['#title'] == "INICIO"){
        $active = 'class="current"';

    }
    return '<li '.$active.'><a href="' . $url . '">' . $element['#title'] . '</a></li>';  
}