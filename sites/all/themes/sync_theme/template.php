<?php

function sync_theme_preprocess_page(&$variables, $hook) {
    $domain = $_SERVER['HTTP_HOST'];  
    $url_ = "http://" . $domain . $_SERVER['REQUEST_URI']; 
    $variables['url_']=$url_;
    $arg0 = arg(0);
    $arg1 = arg(1);    
    if ($arg0 == "user" && is_numeric($arg1)) {
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
		'render element'->'form','path'->drupal_get_path('theme','sync_theme').'/templates',
		'template'->'user-login'
	);
	$items['user_pass']=array(
		'render element'->'path'->drupal_get_path('theme','sync_theme').'/templates',
		'template'->'user-pass'
	);
	return $items
}