<?php

function upc_preprocess_page(&$variables, $hook) {
    $domain = $_SERVER['HTTP_HOST'];  
    $url_ = "http://" . $domain . $_SERVER['REQUEST_URI']; 
    $variables['url_']=$url_;
    $arg0 = arg(0);
    $arg1 = arg(1);

    if (isset($variables['node']->type) && $variables['node']->type == "upc_principal") {
        $variables['theme_hook_suggestions'][] = 'page__front';
        $titlepost = field_get_items('node', $variables['node'], 'field_upcsecprinc_title_post');
        $descripcion = field_get_items('node', $variables['node'], 'field_upcsecprinc_desc_princ');
        $imagen = field_get_items('node', $variables['node'], 'field_upcsecprinc_img_princ');
        if (isset($imagen[0]['uri'])) {
            $imagen = image_style_url('img_portada_blog', $imagen[0]['uri']);
        } else {
            $imagen = base_path() . drupal_get_path('theme', 'upc') . "/img/covers/cover01.jpg";
        }
        $urlpost = field_get_items('node', $variables['node'], 'field_upcsecprinc_url_post');
        $variables['titlepost'] = $titlepost[0]['value'];
        $variables['descripcion'] = $descripcion[0]['value'];
        $variables['urlpost'] = $urlpost[0]['url'];
        $variables['imagen'] = $imagen;
    } elseif (isset($variables['node']->type) && $variables['node']->type == 'upc_home_pagina_primaria') {
        $variables['theme_hook_suggestions'][] = 'page__home__page';
        $block = views_embed_view('upc_home_block_dest', 'block', $variables['node']->nid);
        $imagen =  field_get_items('node', $variables['node'], 'field_page_home_pri_img');
        $titulo_contenido = field_get_items('node', $variables['node'], 'field_page_home_pri_title');
        $contenido = field_get_items('node', $variables['node'], 'body');
        $descargas = field_view_field('node', $variables['node'], 'field_page_home_pri_download');
        $posdescargas = field_get_items('node', $variables['node'], 'field_page_home_pri_posdow');
        
        if (isset($imagen[0]['uri'])) {
            $imagen = image_style_url('img_portada_blog', $imagen[0]['uri']);
        } else {
            $imagen = base_path() . drupal_get_path('theme', 'upc_pre') . "/img/covers/cover01.jpg";
        }
        $variables['title_home'] = t('UPC');
        $variables['imagen'] = $imagen;
        $variables['bloquedest'] =  $block ;
        $variables['titulo_contenido'] = $titulo_contenido[0]['value'];;
        $variables['url_home'] = '/';
        $variables['contenido'] = $contenido[0]['value'];
        $variables['descargas'] = $descargas;
        $variables['posdescargas'] = $posdescargas[0]['value'];
    } elseif (isset($variables['node']->type) && $variables['node']->type == "upc_home_pagina_secundaria") {
        $variables['theme_hook_suggestions'][] = 'page__home__page';
        $id = $variables['node']->og_group_ref['und'][0]['target_id'];
        $father = node_load($id);
        $block = views_embed_view('upc_home_block_dest', 'block', $father->nid);
        $imagen =  field_get_items('node', $father, 'field_page_home_pri_img');
        $titulo_contenido = field_get_items('node', $variables['node'], 'field_page_home_pri_title');
        $contenido = field_get_items('node', $variables['node'], 'body');
        $descargas = field_view_field('node', $variables['node'], 'field_page_home_sec_downloads');
        $posdescargas = field_get_items('node', $variables['node'], 'field_page_home_sec_posdow');
        if ($imagen) {
            $imagen = image_style_url('img_portada_blog', $imagen[0]['uri']);
        } else {
            $imagen = base_path() . drupal_get_path('theme', 'upc_pre') . "/img/covers/cover01.jpg";
        }
      
        $variables['title_home'] = t('UPC');
        $variables['imagen'] = $imagen;
        $variables['bloquedest'] =  $block ;
        $variables['titulo_contenido'] = $titulo_contenido[0]['value'];;
        $variables['url_home'] = '/';
        $variables['contenido'] = $contenido[0]['value'];
        $variables['descargas'] = $descargas;
        $variables['posdescargas'] = $posdescargas[0]['value'];
        
    } elseif ($arg0 == "buscar") {
        $variables['theme_hook_suggestions'][] = 'page__busqueda';
        $variables['imagen'] = base_path() . drupal_get_path('theme', 'upc') . "/img/covers/resultado-de-busqueda.jpg";
        $variables['title_blog'] = $fields->title;
        $variables['url_blog'] = $fields->url;
    } elseif ($arg0 == "user" && is_numeric($arg1)) {
        $variables['theme_hook_suggestions'][] = 'page__user';
        $user = user_load($arg1);
        $tid = og_get_groups_by_user($user);
        if (isset($tid['node'])) {
            $tid = reset($tid['node']);
        } else {
            $tid = "default";
        }
        $fields = upc_blogs_get_blog_header($tid);
        $variables['imagen'] = $fields->imagen;
        $variables['title_blog'] = $fields->title;
        $variables['url_blog'] = $fields->url;
    } elseif ($arg0 == "user" && !user_is_logged_in()) {
        $variables['theme_hook_suggestions'][] = 'page__user_login';
    } else{
        $variables['theme_hook_suggestions'][] = 'page__404';
         $variables['imagen'] = base_path() . drupal_get_path('theme', 'upc') . "/img/covers/404.jpg";
        $urlprincipal = domain_default();
        $variables['url_post'] = $urlprincipal['scheme'] . '://' . $urlprincipal['subdomain'];
    }
}
function sync_theme(){
	$items=array();
	$items['user_login']=array(
		'render element'=>'form','path'=>drupal_get_path('theme','sync_theme').'/templates',
		'template'=>'user-login'
	);
	$items['user_pass']=array(
		'render element'=>'path'=>drupal_get_path('theme','sync_theme').'/templates',
		'template'=>'user-pass'
	);
	return $items
}
?>