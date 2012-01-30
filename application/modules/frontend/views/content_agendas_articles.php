<div class="panel">
	<div style="float: left; width: 320px; padding: 5px;">
		<h3>Agenda Kami</h3><hr/>
    <ul style="list-style: none; margin: 0px;">
  	<?php
  	  if(isset($agendas)){
  	    foreach($agendas as $m){
  	    ?>
  	      <li style="margin-top: 5px;">
  	        <h4><strong><?php echo $m->intitle ?></strong></h4>
  	        <div class='contact'><?php echo $m->venue . " " . $m->agendastime ?></div>
  	        <div><?php echo substr($m->indescription, 0, 300) ?></div><hr/>
          </li>
  	    <?php
  	    }
  	  } 
  	?>
  	</ul>
	</div>
	<div style="width: 320px; margin-left: 330px; padding: 5px">
		<h3>Artikel</h3><hr/>
    <ul style="list-style: none; margin: 0px;">
  	<?php
  	  if(isset($articles)){
  	    foreach($articles as $m){
  	    ?>
  	      <li style="margin-top: 5px;">
  	        <h4><strong><?php echo $m->intitle ?></strong></h4>
  	        <div><?php echo substr($m->incontent, 0, 300) ?></div><hr/>
          </li>
  	    <?php
  	    }
  	  } 
  	?>
  	</ul>
	</div>
	<div style="clear: both">
	</div>
</div>