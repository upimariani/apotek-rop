<!-- banner part start-->
<section class="banner_part">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-12">
				<?php
				if ($this->session->userdata('success')) {
				?>
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<strong>Sukses!</strong> <?= $this->session->userdata('success') ?>
					</div>
				<?php
				}
				?>
			</div>
			<div class="col-md-5">
				<div class="banner_text">
					<div class="banner_text_iner">

						<h1>Apotek
							Anugrah Farma</h1>
						<p>Kuningan</p>
						<a href="<?= base_url('Pelanggan/cProduk') ?>" class="btn_1">shop now</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="banner_img">
		<img src="<?= base_url('asset/bg.jpg') ?>" alt="#" class="img-fluid">
		<!-- <img src="<?= base_url('asset/pillowmart-master/') ?>img/banner_pattern.png " alt="#" class="pattern_img img-fluid"> -->
	</div>
</section>
<!-- banner part start-->