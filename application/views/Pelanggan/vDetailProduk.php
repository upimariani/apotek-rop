<!-- breadcrumb part start-->
<section class="breadcrumb_part single_product_breadcrumb">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcrumb_iner">
				</div>
			</div>
		</div>
	</div>
</section>
<!-- breadcrumb part end-->
<div class="product_image_area">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-12">
				<div>
					<div class="product_img_slide owl-carousel">
						<div class="single_product_img">
							<img src="<?= base_url('asset/gambar/' . $obat->gambar) ?>" alt="#" class="img-fluid">
						</div>
						<div class="single_product_img">
							<img src="<?= base_url('asset/gambar/' . $obat->gambar) ?>" alt="#" class="img-fluid">
						</div>
						<div class="single_product_img">
							<img src="<?= base_url('asset/gambar/' . $obat->gambar) ?>" alt="#" class="img-fluid">
						</div>
					</div>

				</div>
			</div>
			<div class="col-lg-8">
				<div class="single_product_text text-center">
					<h3><?= $obat->nama_obat ?></h3>

					<div class="card_area">
						<form action="<?= base_url('Pelanggan/cCart/add_cart/' . $obat->id_obat) ?>" method="POST">
							<div class="product_count_area">
								<p>Quantity</p>
								<div class="product_count d-inline-block">
									<span class="product_count_item inumber-decrement"> <i class="ti-minus"></i></span>
									<input class="product_count_item input-number" type="text" name="qty" value="1" min="0" max="<?= $obat->stok ?>">
									<span class="product_count_item number-increment"> <i class="ti-plus"></i></span>
								</div>
								<p>Rp. <?= number_format($obat->harga) ?>/ <?= $obat->keterangan ?> <br> Stok Tersedia: <?= $obat->stok ?> <?= $obat->keterangan ?></p>
							</div>
							<p><?= $obat->deskripsi ?></p>
							<div class="add_to_cart">
								<button type="submit" class="btn_3">add to cart</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--================End Single Product Area =================-->
