<?php

function sync_theme_preprocess_page(&$variables, $hook) {

    $arg0 = arg(0);
    $arg1 = arg(1);

    if (isset($variables['node']->type) && $variables['node']->type == "portada") {
        $variables['theme_hook_suggestions'][] = 'page__portada';
        // $titlepost = field_get_items('node', $variables['node'], 'field_secpre_title_post');
        // $descripcion = field_get_items('node', $variables['node'], 'field_secpre_desc_princ');
        // $imagen = field_get_items('node', $variables['node'], 'field_secpre_img_princ');
        //$equipo = views_embed_view('equipo', 'block_1', $variables['node']->nid);
        //$servicios = views_embed_view('services', 'block_1', $variables['node']->nid);
        // if (isset($imagen[0]['uri'])) {
        //     $imagen = image_style_url('img_portada_blog', $imagen[0]['uri']);
        // } else {
        //     $imagen = base_path() . drupal_get_path('theme', 'upc_pre') . "/img/covers/cover01.jpg";
        // }
        // $urlpost = field_get_items('node', $variables['node'], 'field_secpre_url_post');
        // $variables['titlepost'] = $titlepost[0]['value'];
        // $variables['descripcion'] = $descripcion[0]['value'];
        // $variables['urlpost'] = $urlpost[0]['url'];
        // $variables['imagen'] = $imagen;
       // $variables['equipo'] = $equipo;
        //$variables['servicios'] = $servicios;
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
    $url = url($element['#href']);
    $active = '';
    $acturl = "/";
    if($element['#title'] == "INICIO"){
        $active = 'class="current"';

    }
    return '<li '.$active.'><a href="' . $url . '">' . $element['#title'] . '</a></li>';  
}