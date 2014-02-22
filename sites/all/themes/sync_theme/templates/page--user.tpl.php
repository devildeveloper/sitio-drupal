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
</header>

<div class="cover-banner">
    <img src="<?php print $imagen; ?>" />
    <div class="cover-banner-content">
        <div class="container">
            <div class="logo"><a href="<?php print $front_page; ?>"><h1>UPC</h1></a></div>
            <?php if (isset($title_blog)): ?>
                <a href="<?php print $url_blog; ?>"><h2><?php print $title_blog; ?></h2></a>                   
            <?php endif; ?>  
        </div>
    </div>
</div>

<div class="wrap">

    <section>
        <div class="container white post">
            <a id="main-content"></a>
            <?php print $messages; ?>
            <?php print render($tabs); ?>
            <?php print render($page['help']); ?>
            <?php if ($action_links): ?>
                <ul class="action-links"><?php print render($action_links); ?></ul>
            <?php endif; ?>

            <div class="row">
                <section>
                    <div class="column3 content">
                        <div class="row-fluid">
                            <?php $sidebar_first = render($page['sidebar_first']); ?>                      
                            <?php if ($sidebar_first): ?>
                                <?php print $sidebar_first; ?>                 
                            <?php endif; ?>
                        </div>
                    </div>
                    <!-- C O N T E N T  S E C T I O N -->
                </section>
                <!-- C O N T E N T  S E C T I O N -->
                <section>
                    <div class="column5 content">
                        <div class="row-fluid">
                            <div class="info-author">
                                <?php print render($page['content']); ?>  
                                <?php print render($page['post_content']); ?>   
                            </div>
                        </div>
                    </div>
                </section>


                <section>
                    <div class="column4 siderbar">
                        <?php $sidebar_second = render($page['sidebar_second']); ?>                      
                        <?php if ($sidebar_second): ?>
                            <?php print $sidebar_second; ?>                 
                        <?php endif; ?>
                    </div>
                </section>
            </div>
        </div>
    </section>
</div>

<!-- F O O T E R -->
<footer> 
    <?php print render($page['footer']); ?>
</footer>
<?php print render($page['bottom']); ?>