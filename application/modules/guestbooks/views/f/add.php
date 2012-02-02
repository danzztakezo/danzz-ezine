<?php
$b = $this->config->base_url();
$bjs = $b . "js/";
?>

<script type="text/javascript">
$(document).ready(function(){
	$("#form").validate({
		messages: {
			tnama: "Nama tidak boleh dikosongkan!",
			temail: "Harap diisi email dengan format yang benar!"
		}
	});
});
</script>

<!-- Form Validate --> 
<script type="text/javascript" src="<?php echo $bjs ?>jqueryvalidate/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo $bjs ?>jqueryvalidate/jquery.metadata.js"></script>

	<form action="<?php echo $b . "guestbooks/save"?>" method="post" class="yform full" id="form">
	<h2>Isi Buku Tamu</h2><br/>
		<fieldset>
			<div class="subcl type-text">
				<label for="tnama">* Nama</label>
				<input type="text" name="tnama" name="tnama" class="required"/>
				<label class="error" style="color: red" for="tnama" generated="true"></label>
			</div>
			
			<div class="subcl type-text">
				<label for="temail">* Email</label>
				<input type="email" name="temail" id="temail" class="required"/>
				<label class="error" style="color: red" for="temail" generated="true"></label>
			</div>
			
			<div class="subcl type-text">
				<label for="turl">URL/Blog</label>
				<input type="text" name="turl" id="turl"/>
			</div>
			
			<div class="subcl type-text">
				<label for="tphone">Telepon/Mobile</label>
				<input type="text" name="tphone" id="tphone"/>
			</div>
			
			<div class="subcl type-text">
				<label for="tpesan">Pesan</label>
				<textarea name="tpesan" id="tpesan" cols="50" rows="4"></textarea>
			</div>
			
		</fieldset>
      	<div class="type-button">
    				<input type="submit" value=" Kirim " class="submit" name="add" /> atau <a href="<?php echo $b . "guestbooks/browse" ?>">Batalkan</a>
  			</div>
	</form>
