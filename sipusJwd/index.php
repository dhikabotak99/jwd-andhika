<?php
include 'koneksi.php';
$tgl=date('Y-m-d');
?>
<!doctype html>
<html>
	<head>
		<title>Sistem Informasi Perpustakaan</title>
		<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	</head>
	<body>
		<header class="navbar navbar-dark bg-success flex-md-nowrap p-0">
			<a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 text-light" href="#">#</a>
			<div class="container">
				<header class="d-flex justify-content-center py-3">
					<div class="row">
						<div>
							<h1 class="text-center text-light"> PERPUSTAKAAN UMUM </h1>
						</div>
						<div>
							<h4 class="text-center text-light">Jl. Lembah Abang No 11, Telp: (021)55555555</h4>
						</div>
						
					</div>
				</header>
			</div>
		</header>
		<div class="row">
			<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-success sidebar collapse">
				<div>
					<div class="h5 p-1 mb-1 text-dark" style="background-color:orange;">Hai Admin !</div>
				</div>
				<div class="position-sticky">
					<a class="nav-link active text-light" aria-current="page" href="index.php?p=beranda">
						Beranda
					</a>
					<p class="h5 p-1 mb-1 text-white" style="background-color:orange;">Entry Data Dan Transaksi</p>
					<ul style="list-style-type:none; class="list-group">
						<li class="nav-item">
							<a class="nav-link active text-light" aria-current="page" href="index.php?p=anggota">
								Data Anggota
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active text-light" aria-current="page" href="index.php?p=buku">
								Data Buku
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active text-light" aria-current="page" href="index.php?p=transaksi-peminjaman">
								Transaksi Peminjaman
							</a>
						</li>
					</ul>
				</div>
			</nav>
			<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
				<?php
					$pages_dir='pages';
					if(!empty($_GET['p'])){
						$pages=scandir($pages_dir,0);
						unset($pages[0],$pages[1]);
						$p=$_GET['p'];
						if(in_array($p.'.php',$pages)){
							include($pages_dir.'/'.$p.'.php');
						}else{
							echo'Halaman Tidak Ditemukan';
						}
					}else{
						include($pages_dir.'/beranda.php');
					}
				?>
				<canvas class="w-100" id="myChart" width="1076" height="454" style="display: block; width: 1076px; height: 454px;"></canvas>
			</main>
			<footer class="footer">
				<div class="text-center" style="background-color:orange;"><h3>Sistem Informasi Perpustakaan (sipus) | Praktikum </h3></div>
			</footer>
			
		</div>
	</body>
</html>