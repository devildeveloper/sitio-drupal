<!-- Home Page-->
<div id="index">            
  <img id="cycle-loader" src="images/loading.gif" alt="" />       
  <!-- Full Screen Slider-->
  <div id="maximage" class="clearfix">  
    <div>
      <img src="sliders_home/fap.jpg" alt=""  />
        <div class="pattern"></div>
          <div class="in-slide-content" style="display:none;">
          <h1>Slider 1</h1>
          <p><p>Este es el Slider del Home numero 1 :)</p>
          </p>
          </div>
    </div>     
  </div>
  <!--/Full Screen Slider-->
</div>
    <!--/Home Page-->
  <!-- Navigation-->
<nav id="navigation">    
  <a href="<?php print $front_page ;?>" class="logo"></a>
    <?php echo (render($page['header']));?>
</nav>
    <!--/Navigation-->
  <!-- About Us-->
  <div id="nosotros">
        <!-- Container-->
    <div class="container clearfix">

      <h1 class="color mb">Quienes Somos</h1>
            
            <p class="big-paragraph"><p>Somos un equipo que trabaja convencido en la sincronizaci&oacute;n de la vida cotidiana con el mundo digital. Trabajamos constantemente en la innovaci&oacute;n de sistemas que permitan a los usuarios y a las empresas estar cada vez m&aacute;s conectadas en base a experiencias memorables generadas a trav&eacute;s a de plataformas digitales.</p>
</p>
            
            
            <br><br><br>
            
            
            <div class="one_third">
            
              <h3 class="black mb"><p>Expertise</p>
</h3>
                
                                            
                                              
                <div class="meter">
                    <div style="width:90%"><p class="white">Pagina web ( 90% )</p></div>
                </div>
                                          
                <div class="meter">
                    <div style="width:100%"><p class="white">Css ( 100% )</p></div>
                </div>
                          
            </div>
            
            <div class="two_third last">
            
              <h3 class="black mb"></h3>
                
                <p><p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p>La selecci&oacute;n del equipo de trabajo es un factor importante del &eacute;xito de cada uno de nuestros proyectos.&nbsp;</p>

<p>&quot;Recluta a los mejores, forma un buen grupo humano en donde cada uno aporte lo suyo&quot; S.J</p>
</p> 
              
            </div>  

    </div>
        <!--/Container-->
        <!-- Our Team-->
        <div class="ourteam">
    
        
        <!-- Container-->
    <div class="container clearfix">

    <h1 class="color mb">Equipo</h1>
    <br><br>
    <?php print $equipo; ?>
    </div>
        <!--/Container-->

  </div><!--/Our Team-->
        

  </div><!--/About Us-->
    
        
  <!-- Separator1-->
  <div id="separator1">

    <div class="pattern"></div>
    <div class="separator1-bg"></div>
        
    <div class="container">
      
        <h3 class="white center">
        <?php echo (render($page['banner1']));?>
         <a id="main-content"></a>
        <?php print $messages; ?>
        <?php print render($tabs); ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?>
            <ul class="action-links"><?php print render($action_links); ?></ul>
        <?php endif; ?>
        </h3>
                <p style="text-align:center"></p>
      
    </div>

  </div>
    <!--/Separator1-->
    
    
  <!-- Our Services-->
  <div id="ourservices">
    
        
        
        <!-- Container-->
    <div class="container clearfix">

    <h1 class="color mb">Servicios</h1>
            
            <p class="big-paragraph"><p>Especialistas en desarrollo y comunicaci&oacute;n digital.&nbsp;</p>
.</p>
            <br><br><br><br>      
            <?php print $servicios ; ?>
            
            
            
                    
            <!--/Client Delivering-->
    </div>
        <!--/Container-->
        
        
        
        
        <!-- Newsletter-->
        <div class="newsletter">
        
          <div class="container clearfix">
            
              <h3 class="white newsletter">Suscribete:</h3>
            <div id="suscritoya" style="display:none;"><h2 style="color:#fff;">Suscrito Correctamente!</h2></div>
              <div id="ocultartemierda"><form id="newsletter"  method="post">
                    <input type="text" id="email" name="email" placeholder="Ingresa tu Email" required class="newsletter-email">
                    <input type="text" id="nombre" name="nombre" placeholder="Ingresa tu Nombre" required class="newsletter-name">
                    <button type="submit" id="suscribirse" class="newsletter-sent">Enviar</button>
                </form></div>
            
            </div>
        
        </div>
        <!--/Newsletter-->

  </div><!--/Our Services-->

  <!-- Separator2-->
  <div id="separator2">

    <div class="pattern"></div>
        <div class="separator2-bg"></div>
        
    <div class="container">     
            <h3 class="white center">
            <?php echo (render($page['banner2']));?>
             <a id="main-content"></a>
            <?php print $messages; ?>
            <?php print render($tabs); ?>
            <?php print render($page['help']); ?>
            <?php if ($action_links): ?>
                <ul class="action-links"><?php print render($action_links); ?></ul>
            <?php endif; ?>
            </h3>
            <p class="white" style="text-align:center"></p>     
    </div>

  </div>
    <!--/Separator2-->

  <!-- Portfolio-->
  <div id="portfolio">
        <!-- Portfolio Filters-->
        <div class="projects-filters">
            <!-- Container--> 
            <div class="container clearfix">
                <h1 class="white left">Portafolio</h1>
                <!-- Filters-->
                <div id="filters">
                    <nav class="primary">
                        <ul>
                        <li><a href="#" class="selected" data-filter="*">Todos los proyectos</a></li>
                       
                                                
                           
                             <li><a href="#" data-filter=".gatos">Gatos</a></li>
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
        
                    <li class="gatos">
                <div class="view">
                    <a class="group1" href="project.php?id=11" title="Portafolio"><img src="imagenes_portafolio/descarga.jpg" alt="" width="420" height="420" />      
                        <div class="mask">                    
                            <h5>Gatos</h5>
                            <p>Gatos</p>
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
                        <h1 class="black mb"><p><?php echo (render($page['banner3']));?></p>
</h1>                
                        <h5>Williams - Solgas</h5>            
                        </li>
                        
                        
                                                
                        
                    </ul>
                    <!--/Testimonials List-->
                    
                    
                    <!-- Testimonials Pagination-->
                   <!-- <a id="prev" class="t-prev" href="#"></a>
                    <a id="next" class="t-next" href="#"></a>
                   --> <!--/Testimonials Pagination-->
                    
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
                
                <div class="client"><a href="likedinweb"><img src="<?php print base_path() . drupal_get_path('theme', 'sync_theme') .'/images/client1.png';?>" alt=""/></a></div>
                
                <div class="client"><a href=""><img src="<?php print base_path() . drupal_get_path('theme', 'sync_theme') .'/images/client2.png';?>" alt=""/></a></div>
                
                <div class="client"><a href="http://twitter.com/Twitter web"><img src="<?php print base_path() . drupal_get_path('theme', 'sync_theme') .'/images/client3.png';?>" alt=""/></a></div>
                
                <div class="client"><a href="Yahoo web"><img src="<?php print base_path() . drupal_get_path('theme', 'sync_theme') .'/images/client4.png';?>" alt=""/></a></div>
                
                <div class="client"><a href="http://youtube.com/"><img src="<?php print base_path() . drupal_get_path('theme', 'sync_theme') .'/images/client5.png';?>" alt=""/></a></div>
                
                <div class="client"><a href="http://facebook.com/https://www.facebook.com/pages/Sync-MKT/459844787381562?fref=ts"><img src="<?php print base_path() . drupal_get_path('theme', 'sync_theme') .'/images/client6.png';?>" alt=""/></a></div>
                
            </div>

  </div>
    <!--/Separator3-->

  <!-- Contact-->
  <div id="contact">
    
      <!-- Contact Header-->
    <div class="contact-header">
      
            
            <!-- Container-->
            <div class="container clearfix">
            
            
            
                <!-- Contact Details-->
                <div class="two_fourth">
                
                    <h3 class="black mb">Contactanos</h3>
                    
                    <p><p>&iquest;Te apasiona la tecnolog&iacute;a y el mundo digital?&nbsp;</p>

<p>Escr&iacute;benos a ilovesync@sync.com.pe</p>
</p>
                
                </div>
                <!--/Contact Details-->
                
                
                <!-- Contact New York-->
                
                
                     <div class="one_fourth">               
                
                    <h3 class="black mb">Miraflores, Lima - Perú</h3>
                    
                    <p>info@sync.com.pe</p>

<p>&nbsp;</p>
                    
                    <br>
                    
                    <p class="black"><strong>941.377.609</strong></p> 
                
                </div>
               
                <!--/Contact Berlin-->
                <div class="one_fourth last">               
                
                    <h3 class="black mb">Denver, Colorado - USA</h3>
                    
                                        
                    <br>
                    
                    <p class="black"><strong>720.436.8134</strong></p> 
                
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
            
                <h2 class="black mb">Envianos un Mensaje</h2>
                
                <div id="message"></div>
                
               <div id="ocultaryapese"> <form method="post" id="contactando">
    
                <div class="one_half">
                
                    <input name="name" type="text" id="name" size="30"  placeholder="Ingresa tu Nombre" required >
                    <input name="email" type="text" id="email" size="30" placeholder="Ingresa tu Email" required>
                    <input name="phone" type="text" id="phone" size="30" placeholder="Ingresa tu Telefono" required >
                
                </div>
                
                <div class="one_half last">
                
                    <textarea name="comments" cols="40" rows="3" id="comments" placeholder="Ingresa tu Mensaje" required >Mensaje</textarea>
                
                </div>
                
                  <input type="submit" class="send_message" id="contactar" value="Enviar" />
                    
              </form></div>
                
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

  </div>
    <!--/Footer-->

<footer> 
    <?php print render($page['footer']); ?>
</footer>
<?php print render($page['bottom']); ?>

  
