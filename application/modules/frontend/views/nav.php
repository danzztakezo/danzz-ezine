<?php
  $b = $this->config->item("base_url") . "/";
?>
<div class="menu">
    <ul>
			<li><a href="<?php echo $b . "frontend/home" ?>">Home</a></li>
			<li><a href="#">Profile</a>
				<ul>
					<li><a href="<?php echo $b . "pages/profile_organisasi" ?>">Profile Organisasi</a></li>
					<li><a href="<?php echo $b . "pages/visi_misi" ?>">Visi dan Misi</a></li>
					<li><a href="<?php echo $b . "pages/sejarah" ?>">Sejarah</a></li>
					<li><a href="<?php echo $b . "pages/struktur_organisasi" ?>">Struktur Organisasi</a></li>
					<li><a href="<?php echo $b . "pages/kontak" ?>">Kontak</a></li>
				</ul>
			</li>
			<li><a href="<?php echo $b . "rupbasan/bukutamu" ?>">Buku Tamu</a></li>
			<li><a href="<?php echo $b . "rupbasan/agenda" ?>">Agenda</a></li>
			<li><a href="<?php echo $b . "rupbasan/berita" ?>">Berita</a></li>
			<li><a href="<?php echo $b . "rupbasan/gallery" ?>">Gallery</a></li>
			<li><a href="<?php echo $b . "rupbasan/artikel" ?>">Artikel</a></li>
			<li><a href="<?php echo $b . "rupbasan/baranglelang" ?>">Barang Basan</a></li>
		</ul>
</div>