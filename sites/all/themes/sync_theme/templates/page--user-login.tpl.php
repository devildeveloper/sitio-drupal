<div id="fb-root"></div>
<!-- B G  T E X T U R E S -->
<div class="bg-005 blog-bg"></div>
<!-- H E A D E R -->
<header>
    <div class="navbar navbar-fixed-top menu-main">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar collapsed" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a class="sprite home brand" href="<?php print $front_page; ?>"></a>
                <?php print render($page['header']); ?>
            </div>
        </div>
    </div>
    <div class="cover-banner static login">
        <!-- C O N T E N T  C O V E R-->
        <div class="cover-banner-content">
            <div class="container">
                <div class="logo black">
                    <a href="<?php print $front_page ?>">
                        <h1>UPC</h1>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="wrap seccion">

    <section>
        <div class="container white">
            <a id="main-content"></a>
            <?php print $messages; ?> 
            <div class="row"> 
                <div class="column12">
                    <div class="row-fluid">
                        <div class="column7">
                            <div class="login-cover">                                
                                <img src="<?php print $base_path.  drupal_get_path('theme', 'upc_blog_theme') ?>/img/covers/cover-login.jpg">
                            </div>
                        </div>
                        <div class="column5">
                            <div class="login">
                                <?php print render($page['content']); ?>  
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>

<!-- F O O T E R -->
<footer> 
    <?php print render($page['footer']); ?>
</footer>
<?php print render($page['bottom']); ?>