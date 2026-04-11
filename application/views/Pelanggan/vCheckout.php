<!--================Checkout Area =================-->
<section class="checkout_area">
	<div class="container">

		<div class="billing_details mt-5">
			<div class="row">
				<div class="col-lg-8">
					<h3>Alamat Pengiriman</h3>
					<form action="<?= base_url('Pelanggan/cCheckout/order') ?>" method="POST">
						<div class="col-md-12 form-group p_star">
							<label class="form-label">Provinsi<sup class="text-danger">*</sup></label>
							<select name="provinsi" class="form-control" required>

							</select>
						</div>
						<div class="col-md-12 form-group p_star">
							<label class="form-label">Kota/Kabupaten<sup class="text-danger">*</sup></label>
							<select name="kota" class="form-control" required>

							</select>
						</div>
						<div class="col-md-12 form-group p_star">
							<label class="form-label">Kecamatan<sup class="text-danger">*</sup></label>
							<select name="kecamatan" class="form-control" required>

							</select>
						</div>
						<div class="col-md-12 form-group p_star">
							<label class="form-label">Expedisi<sup class="text-danger">*</sup></label>
							<select name="expedisi" class="form-control" required>

							</select>
						</div>
						<div class="col-md-12 form-group p_star">
							<label class="form-label">Paket<sup class="text-danger">*</sup></label>
							<select name="paket" class="form-control" required>

							</select>
						</div>


						<div class="col-md-12 form-group">
							<div class="creat_account">
								<h3>Alamat Lengkap</h3>
							</div>
							<textarea class="form-control" name="alamat" id="message" rows="1" placeholder="Masukkan Alamat Lengkap"></textarea>
						</div>
				</div>
				<div class="col-lg-4">
					<div class="order_box">
						<h2>Your Order</h2>
						<ul class="list">
							<li>
								<a href="#">Product
									<span>Total</span>
								</a>
							</li>
							<?php
							foreach ($this->cart->contents() as $key => $value) {
							?>
								<li>
									<a href="#"><?= $value['name'] ?>
										<span class="middle">x <?= $value['qty'] ?></span>
										<span class="last">Rp. <?= number_format($value['qty'] * $value['price']) ?></span>
									</a>
								</li>
							<?php
							}
							?>


						</ul>
						<ul class="list list_2">
							<li>
								<a href="#">Subtotal
									<span>Rp. <?= number_format($this->cart->total()) ?></span>
								</a>
							</li>
							<li>
								<a href="#">Ongkos Kirim
									<span id="ongkir"></span>
								</a>
							</li>
							<li>
								<a href="#">Total
									<span class="ttl_bayar"></span>
								</a>
							</li>
						</ul>


						<input type="text" name="ongkir" hidden>
						<input type="text" name="total_pembayaran" hidden>
						<button class="btn_3" type="submit">Order</button>
						</form>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--================End Checkout Area =================-->
