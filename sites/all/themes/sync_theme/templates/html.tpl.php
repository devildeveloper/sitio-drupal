<!DOCTYPE html>
<html lang="en">
    <head >
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">    
        <meta name="description" content="">
        <meta name="author" content="jose.allpas@gmail.com">      
        <?php print $head; ?>
        <title><?php print $head_title; ?></title>

        <!-- Styles
        +++++++++++++ -->	
        <?php print $styles; ?>
        <!-- jQuery via Google + local fallback, see h5bp.com -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php drupal_get_path('theme', 'upc_blog_theme') ?>js/jquery-1.7.2.min.js"><\/script>')</script>
        <!-- Livestrap JS: compiled and minified -->
        <?php print $scripts; ?>
    </head>
    <body >
        <?php print $page_top; ?>
        <?php print $page; ?>
        <?php print $page_bottom; ?>
        <!-- ==============================================
                     JavaScript below! 															-->


    </body>
</html>
