<?php $url=explode(',',$fields['field_catgoria']->content) ;?>
<li class="view <?php foreach ($url as $cat ){ print $cat.' '; }?> isotope-item">
    <div class="view">
        <a class="group1 cboxElement" href="project.html" title="Portfolio">
        	<img src="images/portfolio/1_thumb.jpg" alt="">			
            <div class="mask">                    
                <h5><?php print $fields['field_nombre_del_proyecto']->content; ?></h5>
                <p><?php print $fields['field_subtitulo']->content ;?></p>
            </div>
        </a>
    </div>   
 </li>
