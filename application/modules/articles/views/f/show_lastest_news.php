<?php
  $b = $this->config->base_url();
  $bjs = $b . "js/";
  $bimages = $b . "images/";
?>

<!-- LOFSLIDER NEWS -->
<script type="text/javascript" src="<?php echo $bjs ?>lofslidernews/jquery.easing.js"></script>
<script type="text/javascript" src="<?php echo $bjs ?>lofslidernews/script.js"></script>
<link type="text/css" href="<?php echo $bjs ?>lofslidernews/css/layout.css" rel="stylesheet" />
<link type="text/css" href="<?php echo $bjs ?>lofslidernews/css/style.css" rel="stylesheet" />

<script type="text/javascript">
 $(document).ready( function(){	
		$('#lofslidecontent45').lofJSidernews({
			interval:2000,
			easing:'easeInOutQuad',
			duration:1200,
			auto:true });
	});
</script>

<style>
	ul.lof-main-wapper li {
		position:relative;	
	}
</style>

<div class="panel">
<div id="lofslidecontent45" class="lof-slidecontent">
	<div class="preload"><div></div></div>
		
		<div class="lof-main-outer">
    	<ul class="lof-main-wapper">
    		<li>
        	<img src="<?php echo $bimages ?>news/1.jpg" title="Brownies" height="300" width="600">
        	<!-- 
          <div class="lof-main-item-desc">
          <h3><a target="_parent" title="Newsflash 2" href="#">Brownies</a></h3>
          	<p>Brownies Lezat dan Bergizi</p>
          </div>
          -->
        </li>
        
    		<li>
        	<img src="<?php echo $bimages ?>news/2.jpg" title="Brownies" height="300" width="600">
        </li>
        
    		<li>
        	<img src="<?php echo $bimages ?>news/3.jpg" title="Brownies" height="300" width="600">
        </li>
        
    		<li>
        	<img src="<?php echo $bimages ?>news/4.jpg" title="Brownies" height="300" width="600">
        </li>
        
    		<li>
        	<img src="<?php echo $bimages ?>news/5.jpg" title="Brownies" height="300" width="600">
        </li>
      </ul>  	
		</div>

		<!-- NAVIGATOR -->
    <div class="lof-navigator-outer">
    	<ul class="lof-navigator">
    		<li>
    			<div>
    				<img src="<?php echo $bimages ?>news/thumbs/1.png" />
    					<h3>Barang Lelang Mobil Pejabat Korupsi</h3>
    					<span>Kue baulu yang lezat</span> Membuat Anda ketagihan...
    			</div>
    		</li>
    		<li>
    			<div>
    				<img src="<?php echo $bimages ?>news/thumbs/2.png" />
    					<h3>Barang Lelang Mobil Pejabat Korupsi</h3>
    					<span>Kue baulu yang lezat</span> Membuat Anda ketagihan...
    			</div>
    		</li>
    		<li>
    			<div>
    				<img src="<?php echo $bimages ?>news/thumbs/3.png" />
    					<h3>Barang Lelang Mobil Pejabat Korupsi</h3>
    					<span>Kue baulu yang lezat</span> Membuat Anda ketagihan...
    			</div>
    		</li>
    		<li>
    			<div>
    				<img src="<?php echo $bimages ?>news/thumbs/4.png" />
    					<h3>Barang Lelang Mobil Pejabat Korupsi</h3>
    					<span>Kue baulu yang lezat</span> Membuat Anda ketagihan...
    			</div>
    		</li>
    		<li>
    			<div>
    				<img src="<?php echo $bimages ?>news/thumbs/5.png" />
    					<h3>Barang Lelang Mobil Pejabat Korupsi</h3>
    					<span>Kue baulu yang lezat</span> Membuat Anda ketagihan...
    			</div>
    		</li>
    	</ul>
    </div>
 </div>
</div>