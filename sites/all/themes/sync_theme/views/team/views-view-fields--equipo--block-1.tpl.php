<div class="team">
    <?php $url=explode(',',$fields['field_social']->content) ;?>
    <img class="user" src="<?php print $fields['field_equipo_imagen']->content;?>" width="225" height="260" alt="">           
    <div class="team-overlay">                
        <h5 class="black"><?php print $fields['field_equipo_nombre']->content;?></h5>
        <p class="team-function"><?php print $fields['field_equipo_cargo']->content;?></p>
        <p class="team-description"><p><?php print $fields['field_bio']->content;?></p>.</p>
        <div class="team-social">
            <a href="<?php print  $url[0] ;?>" target="_blank">
                <img src="<?php print base_path() . drupal_get_path('theme', 'sync_theme') .'/images/icon_facebook.png'?>" alt="">
            </a>
        </div>
        <div class="team-social">
            <a href="<?php print $url[1]  ;?>" target="_blank">
            <img src="<?php print base_path() . drupal_get_path('theme', 'sync_theme') .'/images/icon_twitter.png'?>" alt="">
            </a>
        </div>
        <div class="team-social">
            <a href="<?php print $url[2]  ;?>" target="_blank">
            <img src="<?php print base_path() . drupal_get_path('theme', 'sync_theme') .'/images/icon_google.png'?>" alt="">
            </a>
        </div>
        <div class="team-social">
            <a href="<?php print $url[3]  ;?>" target="_blank">
            <img src="<?php print base_path() . drupal_get_path('theme', 'sync_theme') .'/images/icon_linkedin.png'?>" alt="">
            </a>
        </div>                
    </div>
</div>