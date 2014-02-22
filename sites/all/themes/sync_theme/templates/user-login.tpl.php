<h2>Iniciar Sesión</h2> 
<?php
print drupal_render($form['form_build_id']);
print drupal_render($form['form_id']);
?>
<div class="row-fluid">
    <?php print drupal_render($form['name']); ?>
</div>
<div class="row-fluid">
    <?php print drupal_render($form['pass']); ?>
</div>
<div class="row-fluid">
    <label class="checkbox">
        <?php print l('¿No puedes acceder a tu cuenta?', 'user/password'); ?>
    </label>    
    <?php print drupal_render($form['submit']); ?>

    <!--<?php print drupal_render($form['submit_google']); ?>

    <p class="btn" id='custom'>
        <?php
        $link = fboauth_action_link_properties('connect');
        $ruta = base_path() . drupal_get_path('theme', 'upc') . '/img/facebook-login-button.png';
        print l(t("<img src ='$ruta' width='150' style='height:35px !important;'/>"), $link['href'], array('query' => $link['query'], 'html' => TRUE));
        ?>

    </p>
    <?php print theme('twitter_signin_button');?>-->
</div>
<!--<script>
    var custom = document.getElementById('custom');
    custom.childNodes[2].textContent = "";
</script>-->
<style>
    #custom{
        padding: 1px;
        box-shadow: 0px 0px 3px rgba(0,0,0,.4);
        position: none;
        display: inline-block;
        margin: 0;
        margin-left: 10px;
    }
    #edit-submit-google{
        margin: 0;
        position: none;
        display: inline-block;
    }
    .login .form-signin input{
        float:none;
    }
</style>
<!--<div class="row-fluid message">
    <a href="#">¿Es la primera vez que utilizas el correo de upc?</a>
</div>- ->