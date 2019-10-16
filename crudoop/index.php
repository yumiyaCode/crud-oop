<?php
//koneksi
require 'function.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Game Warrior Template">
	<meta name="keywords" content="warrior, game, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="utama/img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<!-- <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i" rel="stylesheet"> -->

	<!-- Stylesheets -->
	<link rel="stylesheet" href="utama/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="utama/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="utama/css/owl.carousel.css"/>
	<link rel="stylesheet" href="utama/css/style.css"/>
	<link rel="stylesheet" href="utama/css/animate.css"/>
	<title>laman utama</title>
</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="container">
			<!-- logo -->
			<a class="site-logo" href="index.php">
				<img src="utama/img/logo.png" alt="">
			</a>
			<div class="user-panel">
				<a href="daftar.php">+Tambah data</a>
			</div>
			<!-- responsive -->
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<!-- site menu -->
			<nav class="main-menu">
				<ul>
					<li><a href="menu.php">Beranda</a></li>
					<li><a href="daftar.php">Daftar</a></li>
					<li><a href="index.php">Hero list</a></li>
				

				</ul>
			</nav>
		</div>
	</header>
	<!-- Header section end -->

	
	<!-- Recent game section  -->
	<section class="recent-game-section spad set-bg" data-setbg="assets/img/bg/698788.png">
		<div class="container">
			

	<h2 style="color: white">Daftar Hero</h2>
	<table border="1" cellpadding="10" cellspacing="0" width="100%">
		
		<tr bgcolor="yellow">
			<th>No.</th>
			<th>Aksi.</th>
			<th>Gambar.</th>
			<th>Umur.</th>
			<th>Nama</th>
			<th>Email.</th>
			<th>Jurusan.</th>
		</tr>
<?php $i=1; ?>	
<?php foreach($mahasiswa as $row) : ?>
		<tr bgcolor="white">
			<td><?= $i; ?></td>
			<td>
				<a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a>
				<a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin ingin hapus data?')">hapus</a>
			</td>
			<td><img src="img/<?= $row["gambar"]; ?>" width="100" height="100"></td>
			<td><?= $row ["umur"]; ?></td>
			<td><?= $row ["nama"]; ?></td>
			<td><?= $row ["email"]; ?></td>
			<td><?= $row ["jurusan"]; ?></td>
		</tr>
		<?php $i++; ?>
	<?php endforeach; ?>
	</table>

	</div>
		</div>
	      </section>

<!--====== Javascripts & Jquery ======-->
	<script src="utama/js/jquery-3.2.1.min.js"></script>
	<script src="utama/js/bootstrap.min.js"></script>
	<script src="utama/js/owl.carousel.min.js"></script>
	<script src="utama/js/jquery.marquee.min.js"></script>
	<script src="utama/js/main.js"></script>
</body>
</html>