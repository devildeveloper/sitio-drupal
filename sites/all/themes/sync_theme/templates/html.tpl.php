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
       
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
       <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-35318166-1', 'af.cm');
      ga('send', 'pageview');

</script>
        <?php print $scripts; ?>   

    </body>
</html>
