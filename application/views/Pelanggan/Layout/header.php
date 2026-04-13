<!doctype html>
<html lang="zxx">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Apotek Anugrah Farma</title>
	<link rel="icon" href="img/favicon.png">
	<!-- Bootstrap CSS -->
	<script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-aA8f0UCipTotLFTy"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>


	<link rel="stylesheet" href="<?= base_url('asset/pillowmart-master/') ?>css/bootstrap.min.css">
	<!-- animate CSS -->
	<link rel="stylesheet" href="<?= base_url('asset/pillowmart-master/') ?>css/animate.css">
	<!-- owl carousel CSS -->
	<link rel="stylesheet" href="<?= base_url('asset/pillowmart-master/') ?>css/owl.carousel.min.css">
	<!-- font awesome CSS -->
	<link rel="stylesheet" href="<?= base_url('asset/pillowmart-master/') ?>css/all.css">
	<!-- flaticon CSS -->
	<link rel="stylesheet" href="<?= base_url('asset/pillowmart-master/') ?>css/flaticon.css">
	<link rel="stylesheet" href="<?= base_url('asset/pillowmart-master/') ?>css/themify-icons.css">
	<!-- font awesome CSS -->
	<link rel="stylesheet" href="<?= base_url('asset/pillowmart-master/') ?>css/magnific-popup.css">
	<!-- swiper CSS -->
	<link rel="stylesheet" href="<?= base_url('asset/pillowmart-master/') ?>css/slick.css">
	<!-- style CSS -->
	<link rel="stylesheet" href="<?= base_url('asset/pillowmart-master/') ?>css/style.css">
</head>

<body>
	<!--::header part start::-->
	<header class="main_menu home_menu">
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-lg-12">
					<nav class="navbar navbar-expand-lg navbar-light">
						<!-- <a class="navbar-brand" href="index.html"> <img src="<?= base_url('asset/pillowmart-master/') ?>img/logo.png" alt="logo"> </a> -->
						<a class="navbar-brand">Anugrah Farma</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="menu_icon"><i class="fas fa-bars"></i></span>
						</button>

						<div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
							<ul class="navbar-nav">
								<li class="nav-item active">
									<a class="nav-link" href="<?= base_url('Pelanggan/cHome') ?>">Home</a>
								</li>
								<?php
								if ($this->session->userdata('id_pelanggan')) {
								?>
									<li class="nav-item">
										<a class="nav-link" href="<?= base_url('Pelanggan/cProduk') ?>">Produk</a>
									</li>

									<li class="nav-item">
										<a class="nav-link" href="<?= base_url('Pelanggan/cPesananSaya') ?>">Pesanan Saya</a>
									</li>
								<?php
								}
								?>

								<li class="nav-item">
									<?php
									if (!$this->session->userdata('id_pelanggan')) {
									?>
										<a class="nav-link" href="<?= base_url('Pelanggan/cLogin') ?>">Login</a>
									<?php
									} else {
									?>
										<a class="nav-link" href="<?= base_url('Pelanggan/cLogin/logout') ?>">Logout</a>
									<?php
									}
									?>

								</li>
							</ul>
						</div>
						<?php
						if ($this->session->userdata('id_pelanggan')) {
						?>
							<div class="hearer_icon d-flex align-items-center">
								<?php
								$qty = 0;
								foreach ($this->cart->contents() as $key => $value) {
									$qty += $value['qty'];
								}
								if ($qty != '0') {
								?>
									<a href="<?= base_url('Pelanggan/cCart') ?>">
										<span class="text-muted">Rp. <?= number_format($this->cart->total()) ?></span><i class="flaticon-shopping-cart-black-shape"></i><span class="badge badge-success"><?= $qty ?></span>
									</a>
								<?php
								}
								?>

							</div>
						<?php
						}
						?>

					</nav>
				</div>
			</div>
		</div>

	</header>
	<!-- Header part end-->