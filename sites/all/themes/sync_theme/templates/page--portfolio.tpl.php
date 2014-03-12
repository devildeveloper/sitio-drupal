<div class="project_page clearfix">   
    <div class="flexslider clearfix">
        <ul class="slides" style="margin:0;padding:0">
            <li>
                <img src="<?php print $imagen ;?>" />
            </li>  
        </ul> 
    </div> 
    <div class="project_content clearfix">
        <div class="three_fourth">
        	<h4 class="black mb"><?php print $node->field_nombre_del_proyecto['und'][0]['value'];?></h4>
            <p><?php print $node->field_contenido['und'][0]['value'] ;?></p>
            <a class="btn-small" href="<?php print $node->field_ruta['und'][0]['value'];?>">Ir al sitio del proyecto</a> 
		</div>
        <?php $lista=explode(',', $node->field_lista_de_trabajos['und'][0]['value']) ;?>
        <div class="one_fourth last">
        	<h4 class="black mb">Lo que hicimos :</h4>
            <ul class="categories">
                <?php foreach ($lista as $key){ ?>
                    <li><?php print $key;?></li>                
                <?php } ?>              
            </ul>
		</div>  
	</div>        
</div>   