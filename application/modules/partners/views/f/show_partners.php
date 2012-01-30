<div class='panel'>
	<h3>Partners</h3><hr/>
  <ul style="list-style: none; margin: 0px;">
	<?php
	  if(isset($partners)){
	    foreach($partners as $m){
	    ?>
	      <li style="margin-top: 5px;">
	        <h4><strong><?php echo $m->name ?></strong></h4>
	        <div class='contact'><?php echo $m->email ?></div>
	        <div><a href="<?php echo $m->url ?>" target="_blank"><?php echo $m->url ?></a></div><hr/>
        </li>
	    <?php
	    }
	  } 
	?>
	</ul>
</div>