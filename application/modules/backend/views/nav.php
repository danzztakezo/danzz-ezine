<?php
  $b = $this->config->item("base_url") . "/";
?>
<div class="menu">
    <ul>
      <li><a href="<?php echo $b ."backend/dashboard" ?>">Home</a></li>
      <li><a href="<?php echo $b."pages_backend";?>">Profile</a>
        <!-- <ul>
          <li><a href="<?php echo $b . "rupbasan/tentangkami" ?>">Tentang Kami</a></li>
          <li><a href="<?php echo $b . "rupbasan/sejarah" ?>">Sejarah</a></li>
          <li><a href="<?php echo $b . "rupbasan/strukturorganisasi" ?>">Struktur Organisasi</a></li>
          <li><a href="<?php echo $b . "rupbasan/kontak" ?>">Kontak</a></li>
        </ul> -->
      </li>
      <li><a href="<?php echo $b . "rupbasan/bukutamu"; ?>">Buku Tamu</a></li>
      <li><a href="<?php echo $b . "rupbasan/agenda"; ?>">Agenda</a></li>
      <li><a href="<?php echo $b . "news_backend"; ?>">Berita</a></li>
      <li><a href="<?php echo $b . "gallery_backend"; ?>">Gallery</a></li>
      <li><a href="<?php echo $b . "articles_backend" ?>">Artikel</a></li>
      <li><a href="<?php echo $b . "auction_items_backend"; ?>">Barang Lelang</a></li>
      <li><a href="backend/logout">Logout</a></li>
    </ul>
</div>