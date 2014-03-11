<div class="project_page clearfix">        
    <div class="flexslider clearfix">
        <ul class="slides">
            <li>
                <img src="<?php print 'sites/default/files/styles/portfolio-full/public/'.$node->field_imagen['und'][0]['filename'] ;?>" />
            </li>  
        </ul> 
    </div> 
    <div class="project_content clearfix">
        <div class="three_fourth">
        	<h4 class="black mb">Overview</h4>
            <p><?php print $node->field_contenido['und'][0]['value'] ;?></p>
            <a class="btn-small" href="#">Launch website</a> 
		</div>
        <div class="one_fourth last">
        	<h4 class="black mb">What we did</h4>
            <ul class="categories">
                <li><a href="#">eCommerce</a></li>
                <li><a href="#">Flash Animation &amp; Ads</a></li>
                <li><a href="#">TV Advertising</a></li>
                <li><a href="#">Online Magazines</a></li>
                <li><a href="#">Email marketing</a></li>                
            </ul>
		</div>  
	</div>        
</div>   