<?php $nid= $fields['field_block_portfolio_content']->content ;?>
<li class="view <?php print $fields['field_catgoria_de_portfolio']->content ;?>">
    <div class="view">
        <a class="group1" href="<?php print '/node/'. $nid ;?>" title="Portfolio" target="_blank">
        	<img src="<?php print $fields['field_block_img']->content;?>" alt="">	 		
            <div class="mask">                    
                <h5><?php print $fields['field_block_title']->content; ?></h5>
                <p><?php print $fields['field_block_desc']->content ;?></p>
            </div>
        </a>
    </div>   
 </li> 
  