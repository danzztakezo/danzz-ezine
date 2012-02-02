<?php
$b = $this->config->site_url();
?>

<div class='panel'>
	<h2>Agenda Kami</h2><hr/>
		
	<div style="margin: 10px 0px 10px 10px">
		<?php echo $pagination ?>
	</div>
	
  <ul style="list-style: none; margin: 0px;">
	<?php
	  if(isset($messages)){
	    foreach($messages as $m){
	    ?>
	      <li style="margin-top: 5px;">
	        <h4><strong><?php echo $m->name ?></strong></h4>
	        <div class='time'><?php echo $m->agendastime . " (" . $m->venue . ")" ?></div>
	        <div><?php echo substr($m->indescription, 0, 300)  ?></div>
	        <div><a href="<?php echo $b . "agendas/detail/" . $m->id ?>">Lihat selengkapnya...</a></div><hr/>
        </li>
	    <?php  
	    }
	  } 
	?>
	</ul>
	
	<div style="margin-left: 10px">
		<?php echo $pagination ?>
	</div>
</div>