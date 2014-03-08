<!-- Home Page-->
<div id="index">    
    <a href="" id="arrow_left"><img src="<?php print base_path() . drupal_get_path('theme', 'sync_theme') .'/images/arrow_left.png' ;?>" alt="Slide Left" /></a>
    <a href="" id="arrow_right"><img src="<?php print base_path() . drupal_get_path('theme', 'sync_theme') .'/images/arrow_right.png' ;?>" alt="Slide Right" /></a>         
    <img id="cycle-loader" src="<?php print base_path() . drupal_get_path('theme', 'sync_theme') .'/images/loading.gif';?>" alt="" />       
    <?php print render($page['sliderTop']); ?> 
</div>
<!--/Home Page-->
<!-- Navigation-->
<nav id="navigation">
    <h2 id="logo"><img width="330" src="<?php print $logo ;?>" alt=""> </h2>
    <?php echo (render($page['header']));?>
</nav>
<!--/Navigation-->
<!-- About Us-->
<div id="aboutus">    
    <a id="main-content"></a>
    <?php print $messages; ?>
    <?php print render($tabs); ?>
    <?php print render($page['help']); ?>
    <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
    <?php endif; ?>  
    <!-- Container-->
    <?php print render($page['about']); ?>
    <!--/Container-->
    <!-- Our Team-->
    <div class="ourteam">
        <!-- Container-->
        <div class="container clearfix">
            <h1 class="color mb">Equipo</h1>
            <br><br>
            <?php print render($page['team']); ?>
        </div>
        <!--/Container-->
    </div><!--/Our Team-->
</div><!--/About Us-->
<!-- Separator1-->
<?php print render($page['banner1']) ;?>        
<!--/Separator1--> 
<!-- Our Services-->
<div id="ourservices">
    <!-- Container-->
    <div class="container clearfix">
        <?php print render($page['ourservices']) ;?>
        <?php print render($page['services']) ; ?>
    </div>
    <!--/Container-->        
    <!-- Newsletter-->
    <div class="newsletter">
        <div class="container clearfix">
            <h3 class="white newsletter">Suscribete:</h3>
            <form id="newsletter"  method="post">
                <input type="text" onfocus="if(this.value == 'E-mail here') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'E-mail here'; }" value="E-mail here" class="newsletter-email">
                <input type="text" onfocus="if(this.value == 'Your name') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Your name'; }" value="Your name" class="newsletter-name">
                <button type="submit" class="newsletter-sent">Submit</button>
            </form>
        </div>
    </div>
    <!--/Newsletter-->
</div><!--/Our Services-->   
<?php print render($page['banner2']) ;?>  
<!-- Portfolio-->
<div id="portfolio">
    <!-- Portfolio Filters-->
    <div class="projects-filters">
        <!-- Container-->   
        <div class="container clearfix">
            <h1 class="white left">Portfolio</h1>
            <!-- Filters-->
            <?php print render($page['portfolio_terms']);?>
            <!--/Filters-->
        </div>
        <!--/Container-->
    </div>
    <!--/Portfolio Filters-->  
    <!-- Portfolio List-->
    <?php print render($page['portfolio']) ;?>
    <!--/Portfolio List-->
    <!-- Testimonials-->
    <!--/Testimonials-->    
</div>
<!--/Portfolio-->
<?php print render($page['banner3']);?>
<!-- Separator3-->
<div id="separator3">
    <div class="pattern"></div>
    <div class="separator3-bg"></div>
    <div class="container clearfix">
        <div class="client">
            <a href="likedinweb"><img src="<?php print base_path() . drupal_get_path('theme', 'sync_theme') .'/images/client1.png';?>" alt=""/></a>
        </div>        
        <div class="client">
            <a href=""><img src="<?php print base_path() . drupal_get_path('theme', 'sync_theme') .'/images/client2.png';?>" alt=""/></a>
        </div>        
        <div class="client">
            <a href="http://twitter.com/Twitter web"><img src="<?php print base_path() . drupal_get_path('theme', 'sync_theme') .'/images/client3.png';?>" alt=""/></a>
        </div>        
        <div class="client">
            <a href="Yahoo web"><img src="<?php print base_path() . drupal_get_path('theme', 'sync_theme') .'/images/client4.png';?>" alt=""/></a>
        </div>        
        <div class="client">
            <a href="http://youtube.com/"><img src="<?php print base_path() . drupal_get_path('theme', 'sync_theme') .'/images/client5.png';?>" alt=""/></a>
        </div>        
        <div class="client">
            <a href="http://facebook.com/https://www.facebook.com/pages/Sync-MKT/459844787381562?fref=ts"><img src="<?php print base_path() . drupal_get_path('theme', 'sync_theme') .'/images/client6.png';?>" alt=""/></a>
        </div>          
    </div>
</div>
<!--/Separator3-->
<!-- News-->

<!--/News--> 

<!-- Contact-->
<div id="contact">
    <!-- Contact Header-->
    <div class="contact-header">
    <!-- Container-->
        <div class="container clearfix">
            <!-- Contact Details-->
            <div class="two_fourth">          
                <h3 class="black mb">Contactanos</h3>
                <p>¿Te apasiona la tecnología y el mundo digital? 
                    Escríbenos a ilovesync@sync.com.pe
                </p>
                    
            </div>
            <!--/Contact Details-->  
            <!-- Contact New York-->
            <div class="one_fourth">
                <h3 class="black mb">Miraflores, Lima - Perú</h3>
                <p>info@sync.com.pe
                </p>
                <br>
                <p class="black"><strong>941 377 609</strong></p>
            </div>
            <!--/Contact New York-->      

        </div> 
        <!--/Container-->
    </div>
    <!-- Contact Header--> 
    <!-- Map-->
    <div id="map_canvas"></div>
    <!--End Map-->
    <!-- Contact Form-->
    <div class="contact-form">
        <!-- Container-->
        <div class="container clearfix">
            <h2 class="black mb">Send us a message</h2>
            <div id="message"></div>
            <form method="post" action="http://forms.melodysoft.com" name="contactform" id="contactform">
                <input type="hidden" name="id" value="sync_contact">
                <div class="one_half">
                    <input required name="name" type="text" id="name" size="30"  placeholder="Name" >
                    <input required name="email" type="text" id="email" size="30" placeholder="E-Mail" >
                    <input required name="phone" type="text" id="phone" size="30" placeholder="Phone" >
                </div>
                <div class="one_half last">
                    <textarea name="comments" cols="40" rows="3" id="comments" placeholder="Comments">Message</textarea>
                </div>
                <input type="submit" class="send_message" id="submit" value="Submit" />
            </form>
        </div>
        <!--/Container-->
    </div>
        <!--/Contact Form-->
</div>
<!--/Contact-->
<!-- Footer-->
<div class="footer">    
    <div class="container clearfix">
        <ul class="contactus">
            <li><span class="mail">Email: info@sync.com.pe</span></li>
            <li><span class="phone">Telefono: 941-377-609</span></li>
        </ul>
        <div class="footer-social"><a href="http://facebook.com/" target="_blank"><img src="<?php print base_path() . drupal_get_path('theme', 'sync_theme') .'/images/footer_facebook.png' ;?>" alt=""></a></div>
        <div class="footer-social"><a href="http://twitter.com/" target="_blank"><img src="<?php print base_path() . drupal_get_path('theme', 'sync_theme') .'/images/footer_twitter.png';?>" alt=""></a></div>
        <div class="footer-social"><a href="http://google.com/" target="_blank"><img src="<?php print base_path() . drupal_get_path('theme', 'sync_theme') .'/images/footer_google.png' ;?>" alt=""></a></div>
        <div class="footer-social"><a href="http://linkedin.com/" target="_blank"><img src="<?php print base_path() . drupal_get_path('theme', 'sync_theme') .'/images/footer_linkedin.png';?>" alt=""></a></div>
        <div class="footer-social"><a href="http://dribble.com/" target="_blank"><img src="<?php print base_path() . drupal_get_path('theme', 'sync_theme') .'/images/footer_dribble.png';?>" alt=""></a></div>
        <div class="footer-social"><a href="http://pinterest.com/" target="_blank"><img src="<?php print base_path() . drupal_get_path('theme', 'sync_theme') .'/images/footer_pinterest.png';?>" alt=""></a></div>
        <div class="footer-social"><a href="#" target="_blank"><img src="<?php print base_path() . drupal_get_path('theme', 'sync_theme') .'/images/footer_rss.png';?>" alt=""></a></div>
        <div class="copyright">        
            <p>&copy; 2104 Sync. Derechos Reservados</p>        
        </div>
    </div> 
    <?php print render($page['footer']); ?>   
</div>
<!--/Footer-->
<?php print render($page['bottom']); ?>
<!--/Footer-->