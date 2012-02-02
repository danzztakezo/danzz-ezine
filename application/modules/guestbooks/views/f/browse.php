<?php
$b = $this->config->site_url();
$url_add_guestbooks = $b . "guestbooks/add"; 
?>

<div class='panel'>
	<h2>Buku Tamu</h2><hr/>
		
	<div style="margin: 10px 0px 10px 10px">
		<?php echo $pagination; if($pagination != "") {echo "&nbsp;&nbsp;";} ?>[ <a href="<?php echo $url_add_guestbooks ?>">Isi Buku Tamu</a> ]
	</div>
	
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
		<?php echo $pagination; if($pagination != "") {echo "&nbsp;&nbsp;";} ?>[ <a href="<?php echo $url_add_guestbooks ?>">Isi Buku Tamu</a> ]
	</div>
</div>