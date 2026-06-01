<!-- product list part start-->
<section class="product_list">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="product_sidebar">

					<div class="single_sedebar">
						<div class="select_option">
							<div class="select_option_list">Produk <i class="right fas fa-caret-down"></i> </div>
							<div class="select_option_dropdown">
								<?php
								foreach ($obat as $key => $value) {
								?>
									<p><a href="#"><?= $value->nama_obat ?></a></p>
								<?php
								}
								?>

							</div>
						</div>
					</div>

				</div>
			</div>
			<div class="col-md-8">
				<div class="product_list">
					<div class="row">
						<?php
						foreach ($obat as $key => $value) {
						?>
							<div class="col-lg-4 col-sm-4">
								<div class="single_product_item">
									<img src="<?= base_url('asset/gambar/' . $value->gambar) ?>" alt="#" class="img-fluid">
									<h3> <a href="single-product.html"><?= $value->nama_obat ?></a> </h3>
									<p>Rp. <?= number_format($value->harga) ?></p>
									<a href="<?= base_url('Pelanggan/cProduk/detail_produk/' . $value->id_obat) ?>" class="btn_3">Detail Produk</a>
								</div>
							</div>
						<?php
						}
						?>


					</div>

				</div>
			</div>
		</div>
	</div>
</section>
<!-- product list part end-->
