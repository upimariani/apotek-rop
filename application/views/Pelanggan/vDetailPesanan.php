<!--================ confirmation part start =================-->
<section class="confirmation_part ">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="confirmation_tittle">
					<span>Thank you. Your order has been received.</span>
				</div>
			</div>
			<div class="col-lg-6 col-lx-4">
				<div class="single_confirmation_details">
					<h4>order info</h4>
					<ul>
						<li>
							<p>Atas Nama</p><span>: <?= $pesanan_saya->fullname ?></span>
						</li>
						<li>
							<p>Nomor Telepon</p><span>: <?= $pesanan_saya->no_hp ?></span>
						</li>
						<li>
							<p>Alamat Pengiriman</p><span>: <?= $pesanan_saya->pengiriman ?></span>
						</li>
						<li>
							<p>Status</p><span>: <?php if ($pesanan_saya->status == '0') {
														echo '<span class="badge badge-danger text-light">Belum Bayar</span>';
													} else if ($pesanan_saya->status == '1') {
														echo '<span class="badge badge-success text-warning">Menunggu Konfirmasi</span>';
													} else {
														echo '<span class="badge badge-success text-light">Selesai</span>';
													} ?></span>
						</li>
						<?php
						if ($pesanan_saya->status == '0') {
						?>
							<li>
								<form id="payment-form" method="post" action="<?= site_url() ?>/snap/finish">
									<input type="hidden" name="result_type" id="result-type" value="">
									<input type="hidden" name="result_data" id="result-data" value="">
								</form>
								<button class="btn_3" id="pay-button">Bayar</button>
							</li>
						<?php
						}
						?>

					</ul>
				</div>
			</div>

		</div>
		<div class="row mb-5">
			<div class="col-lg-12">
				<div class="order_details_iner">
					<h3>Order Details</h3>
					<table class="table table-borderless">
						<thead>
							<tr>
								<th scope="col" colspan="2">Product</th>
								<th scope="col">Harga</th>
								<th scope="col">Quantity</th>
								<th scope="col">Total</th>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach ($obat as $key => $value) {
							?>
								<tr>
									<th colspan="2"><span><?= $value->nama_obat ?></span></th>
									<th>Rp. <?= number_format($value->harga) ?></th>
									<th>x<?= $value->jumlah_keluar ?></th>
									<th> <span>Rp. <?= number_format($value->harga * $value->jumlah_keluar) ?></span></th>
								</tr>
							<?php
							}
							?>


						</tbody>
						<tfoot>
							<tr>
								<th scope="col" colspan="4">Quantity</th>
								<th scope="col">Total Rp. <?= number_format($pesanan_saya->total_keluar) ?></th>
							</tr>
						</tfoot>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>
<!--================ confirmation part end =================-->