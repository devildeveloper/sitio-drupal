  
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
    <h2 id="logo">Eleven<span class="color dot"><strong>.</strong></span></h2>
    <?php echo (render($page['header']));?>
</nav>
<!--/Navigation-->
<!-- About Us-->
<div id="aboutus">      
    <!-- Container-->
    <div class="container clearfix">
        <h1 class="black mb">About Us</h1>    
        <p class="big-paragraph">Nullam dictum felis eu pede mollis pretium. Cras dapibus. Vivamus elementum se semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae seasne eleifend acenimin viverra quis feugiat a telus.</p>              
        <br><br><br>           
        <div class="one_third">
            <h3 class="black mb">Our skills</h3>                          
            <div class="meter">
                <div style="width:75%"><p class="white">Web Design ( 75% )</p></div>
            </div>
            <div class="meter">
                <div style="width:60%"><p class="white">Web Development ( 60% )</p></div>
            </div>
            <div class="meter">
                    <div style="width:85%"><p class="white">Brand Identity ( 85% )</p></div>
            </div>
        </div>
        <div class="two_third last">
            <h3 class="black mb">Who we are</h3> 
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin mauris ut cursus. Phasellus sapien quam, egestas non tempor quis, elementum quis dui. Aliquam erat volutpat. In sit amet lectus nisi. In a elit sed velit placerat interdum a quis erat. Sed eget nibh quis turpis venenatis eleifend non eu augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin mauris ut cursus.<br><br>
            Phasellus sapien quam, egestas non tempor quis, elementum quis dui. Aliquam erat volutpat. In sit amet lectus nisi. In a elit sed velit placerat interdum a quis erat. Sed eget nibh quis turpis venenatis eleifend non eu augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin consequat sollicitudin mauris ut cursus. Phasellus sapien quam, egestas non tempor quis, elementum quis dui. Aliquam erat volutpat. In sit amet</p> 
                
        </div>  
    </div>
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
        <h1 class="black mb">Our Services</h1> 
        <p class="big-paragraph">Nullam dictum felis eu pede mollis pretium. Cras dapibus. Vivamus elementum se semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae seasne eleifend acenimin viverra quis feugiat 
        a telus.</p>
        <br><br><br><br>
        <?php print render($page['services']) ; ?>
    </div>
    <!--/Container-->        
    <!-- Newsletter-->
    <div class="newsletter">
        <div class="container clearfix">
            <h3 class="white newsletter">Our newsletter:</h3>
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
            <div id="filters">
                <nav class="primary">
                    <ul>
                    <li><a href="" class="selected" data-filter="*">All Projects</a></li>
                    <li><a href="" data-filter=".cat1">Web Design</a></li>
                    <li><a href="" data-filter=".cat2">Photography</a></li>
                    <li><a href="" data-filter=".cat3">Branding</a></li>
                    </ul>
                </nav>
            </div>
            <!--/Filters-->
        </div>
        <!--/Container-->
    </div>
    <!--/Portfolio Filters-->  
    <!-- Portfolio List-->
    <ul class="portfolio">
        <li class="view cat3 cat1">
            <div class="view">
                <a class="group1" href="project.html" title="Portfolio"><img src="images/portfolio/1_thumb.jpg" alt="" />           
                    <div class="mask">                    
                        <h5>Nullam dictum felis eu mollis</h5>
                        <p>wedding / portrait</p>
                    </div>
                </a>
            </div>   
        </li>
    </ul>
    <!--/Portfolio List-->
    <!-- Testimonials-->
    <div id="testimonials">
        <!-- Container-->
        <div class="container clearfix">
            <!-- Testimonials Carousel-->
            <div class="carousel_testimonials">
                <!-- Testimonials List-->
                <ul id="testimonials-carousel">
                    <li>
                        <h1 class="black mb">Lorem ipsum dolor sit amet consectetur adipiscing aliquam</h1>                
                        <h5>John Taylor - Company</h5>            
                    </li>                        
                </ul>
                <!--/Testimonials List-->
                <!-- Testimonials Pagination-->
                <a id="prev" class="t-prev" href="#"></a>
                <a id="next" class="t-next" href="#"></a>
                <!--/Testimonials Pagination-->    
            </div>
        <!--/Testimonials Carousel-->
        </div>
        <!--/Container-->
    </div>
    <!--/Testimonials-->    
</div>
<!--/Portfolio-->
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
<div id="news">
    <!-- Container-->
    <div class="container-news">
        <h1>Stay tuned. Read our news</h1>
        <!-- News Carousel-->
        <div class="list_carousel">
            <!-- News List-->
            <ul id="news-carousel"> 
                <li>
                    <div class="news">
                    <img src="images/news1.jpg"  alt=""  />         
                    <div class="mask">                    
                    <a class="group1 icon zoom" href="news.html" title="News"></a>
                    </div>
                    </div>
                    
                    <div class="news-intro">
                    <a class="group1" href="news.html" title="News"><h5>Marketplace License Update</h5></a>
                    <p class="news-date">09/10/2013</p> 
                    <p>FlexSlider hosts many features, and there's a chance you'll find yourself needing to read up on a few of them. Below is aowed by detailed information and tips regarding each property.</p>
                    <a class="btn-small group1" href="news.html" title="News">View Details</a>
                    </div>
                </li>  
            </ul>
            <!--/News List-->
            <!-- News Navigation-->
            <div id="news-navigation">              
                <a id="prev2" class="prev" href="#"></a>
                <a id="next2" class="next" href="#"></a>
            </div>
            <!-- News Navigation-->               
        </div>
        <!--/News Carousel-->
    </div>
    <!--/Container-->
    <!-- Twitter-->
    <div class="twitter">
    
        <div class="container">
        
        <div class="twitter-image"><img src="images/twitter.png" alt=""></div>
        
        <h2>"Lorem ipsum dolor sit amet consectetur adipiscing aliquam est lectus mattis in sodales congue"</h2>
        
        <p class="white">@Eleven - November 13th, 2013</p>
            
        </div>
    
    </div>
    <!--/Twitter-->
</div>
<!--/News--> 
<!--/Separator4-->
<div id="separator4">

    <div class="pattern"></div>
    
    <div class="separator4-bg"></div>
    
</div>
<!--/Separator4-->
<!-- Contact-->
<div id="contact">
    <!-- Contact Header-->
    <div class="contact-header">
    <!-- Container-->
        <div class="container clearfix">
            <!-- Contact Details-->
            <div class="two_fourth">          
                <h3 class="black mb">Contact Details</h3>
                <p>Nullam dictum felis eu pede mollis pretium. Cras dapibus. Vivamus elementum se semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae seasne eleifend acenimin viverra quis feugiat a telus.
                    <br><br>
                    <span class="color">Keep in touch!</span>
                </p>
                    
            </div>
            <!--/Contact Details-->  
            <!-- Contact New York-->
            <div class="one_fourth">
                <h3 class="black mb">New York</h3>
                <p>Nullam dictum felis eu pede mollis pretium. Cras dapibus vivamus<br><span class="color">newyork@eleven.com</span></p>
                <br>
                <p class="black"><strong>( 495 ) 663 287 547</strong></p>
            </div>
            <!--/Contact New York-->      
            <!-- Contact Berlin-->
            <div class="one_fourth last">
                <h3 class="black mb">Berlin</h3>
                <p>Nullam dictum felis eu pede mollis pretium. Cras dapibus vivamus<br><span class="color">berlin@eleven.com</span></p>
                <br>
                <p class="black"><strong>( 495 ) 663 287 547</strong></p>
            </div>
            <!--/Contact Berlin-->
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
            <form method="post" action="contact.php" name="contactform" id="contactform">
                <div class="one_half">
                    <input name="name" type="text" id="name" size="30"  onfocus="if(this.value == 'Name') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Name'; }" value="Name" >
                    <input name="email" type="text" id="email" size="30" onfocus="if(this.value == 'E-mail') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'E-mail'; }" value="E-mail" >
                    <input name="phone" type="text" id="phone" size="30" onfocus="if(this.value == 'Phone') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Phone'; }" value="Phone" >
                </div>
                <div class="one_half last">
                    <textarea name="comments" cols="40" rows="3" id="comments" onfocus="if(this.value == 'Message') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Message'; }" >Message</textarea>
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