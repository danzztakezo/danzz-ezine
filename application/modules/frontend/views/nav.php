<?php
  $b = $this->config->item("base_url") . "/";
?>
<div class="menu">
    <ul>
			<li><a href="<?php echo $b . "frontend/home" ?>">Home</a></li>
			<li><a href="#">Profile</a>
				<ul>
					<li><a href="<?php echo $b . "pages/organization_profile" ?>">Profile Organisasi</a></li>
					<li><a href="<?php echo $b . "pages/vission_mission" ?>">Visi dan Misi</a></li>
					<li><a href="<?php echo $b . "pages/history" ?>">Sejarah</a></li>
					<li><a href="<?php echo $b . "authors/organization_chart" ?>">Struktur Organisasi</a></li>
					<li><a href="<?php echo $b . "pages/contact" ?>">Kontak</a></li>
				</ul>
			</li>
			<li><a href="<?php echo $b . "guestbooks/browse" ?>">Buku Tamu</a></li>
			<li><a href="<?php echo $b . "agendas/browse" ?>">Agenda</a></li>
			<li><a href="<?php echo $b . "rupbasan/berita" ?>">Berita</a></li>
			<li><a href="<?php echo $b . "rupbasan/gallery" ?>">Gallery</a></li>
			<li><a href="<?php echo $b . "rupbasan/artikel" ?>">Artikel</a></li>
			<li><a href="<?php echo $b . "rupbasan/baranglelang" ?>">Barang Basan</a></li>
		</ul>
</div>