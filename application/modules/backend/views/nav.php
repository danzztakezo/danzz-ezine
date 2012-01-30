<?php
  $b = $this->config->item("base_url") . "/";
?>
<div class="menu">
    <ul>
			<li><a href="<?php echo $b . "rupbasan/home" ?>">Home</a></li>
			<li><a href="#">Profile</a>
				<ul>
					<li><a href="<?php echo $b . "rupbasan/tentangkami" ?>">Tentang Kami</a></li>
					<li><a href="<?php echo $b . "rupbasan/sejarah" ?>">Sejarah</a></li>
					<li><a href="<?php echo $b . "rupbasan/strukturorganisasi" ?>">Struktur Organisasi</a></li>
					<li><a href="<?php echo $b . "rupbasan/kontak" ?>">Kontak</a></li>
				</ul>
			</li>
			<li><a href="<?php echo $b . "rupbasan/bukutamu" ?>">Buku Tamu</a></li>
			<li><a href="<?php echo $b . "rupbasan/agenda" ?>">Agenda</a></li>
			<li><a href="<?php echo $b . "rupbasan/berita" ?>">Berita</a></li>
			<li><a href="<?php echo $b . "rupbasan/gallery" ?>">Gallery</a></li>
			<li><a href="<?php echo $b . "rupbasan/artikel" ?>">Artikel</a></li>
			<li><a href="<?php echo $b . "rupbasan/baranglelang" ?>">Barang Lelang</a></li>
		</ul>
</div>