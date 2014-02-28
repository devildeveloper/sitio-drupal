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
    </head>
    <body onLoad="initialize()">
        <?php print $page_top; ?>
        <?php print $page; ?>
        <?php print $page_bottom; ?>
        <!-- ==============================================
        
               JavaScript below! 				-->
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>    
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <?php print $scripts; ?>   
        <!--/Google map -->   
    </body>
</html>
