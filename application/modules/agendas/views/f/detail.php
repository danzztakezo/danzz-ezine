<?php
$b = $this->config->site_url();
?>

<div class='panel'>
	<?php if(isset($agenda) && (count($agenda) > 0)){ ?>
	<h2><?php echo $agenda->name ?></h2><hr/>
	<div class='time'><?php echo $agenda->agendastime . " (" . $agenda->venue . ")" ?></div>
	<div style="margin: 10px auto;"><p><?php echo $agenda->indescription ?></p></div>
	<?php } ?>
</div>