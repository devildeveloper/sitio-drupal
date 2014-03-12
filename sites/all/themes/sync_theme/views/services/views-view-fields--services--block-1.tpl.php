<?php if ($fields['counter']->content % 2 == 0 ){ ?>
	<div class="two_fourth last">
<?php }else { ?>
	<div class="two_fourth">
<?php } ?> 
	<div class="heading-and-icon">
		<img width="60" height="60" src="<?php print $fields['field_icono']->content ;?>" alt="">
		<h3 class="black mb"><?php print $fields['field_nombre']->content ;?></h3>
	</div>
	<p></p>
	<p><?php print $fields['field_descripcion']->content ;?></p>
		<p></p>
	<br><br><br><br>
</div>