<div class='panel'>
	<h3>Buku Tamu</h3><hr/>
  <ul style="list-style: none; margin: 0px;">
	<?php
	  if(isset($messages)){
	    foreach($messages as $m){
	    ?>
	      <li style="margin-top: 5px;">
	        <h4><strong><?php echo $m->name ?></strong></h4>
	        <div class='time'><?php echo $m->entrytime ?></div>
	        <div><?php echo $m->incontent ?></div><hr/>
        </li>
	    <?php
	    }
	  } 
	?>
	</ul>
	
	<div style="margin-left: 10px">
		<a href="#">Isi Buku Tamu</a>
	</div>
</div>