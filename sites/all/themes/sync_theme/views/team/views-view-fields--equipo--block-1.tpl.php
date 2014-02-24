<img class="user" src="<?php print $fields['field_equipo_imagen']->content;?>" width="225" height="260" alt="">           
<div class="team-overlay">                
    <h5 class="black"><?php print $fields['field_equipo_nombre']->content;?></h5>
    <p class="team-function"><?php print $fields['field_equipo_cargo']->content;?></p>
    <p class="team-description"><p><?php print $fields['field_bio']->content;?></p>.</p>
    <div class="team-social">
        <a href="http://facebook.com/jorgeandres.tortu" target="_blank">
            <img src="<?php print base_path() . drupal_get_path('theme', 'sync_theme') .'/images/icon_facebook.png'?>" alt="">
        </a>
    </div>
    <div class="team-social">
        <a href="http://twitter.com/" target="_blank">
        <img src="<?php print base_path() . drupal_get_path('theme', 'sync_theme') .'/images/icon_twitter.png'?>" alt="">
        </a>
    </div>
    <div class="team-social">
        <a href="103934120172718605388/posts" target="_blank">
        <img src="<?php print base_path() . drupal_get_path('theme', 'sync_theme') .'/images/icon_google.png'?>" alt="">
        </a>
    </div>
    <div class="team-social">
        <a href="profile/view?id=184924287&trk=nav_responsive_tab_profile_pic" target="_blank">
        <img src="<?php print base_path() . drupal_get_path('theme', 'sync_theme') .'/images/icon_linkedin.png'?>" alt="">
        </a>
    </div>                
</div>
<?php print $fields['field_social']->content ;?>