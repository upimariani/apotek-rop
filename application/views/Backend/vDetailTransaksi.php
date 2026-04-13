<!-- [ Main Content ] start -->
<div class="pc-container">
	<div class="pc-content">
		<!-- [ breadcrumb ] start -->
		<div class="page-header">
			<div class="page-block">
				<div class="row align-items-center">
					<div class="col-md-12">
						<div class="page-header-title">
							<h5 class="m-b-10">Detail Transaksi Pelanggan</h5>
						</div>

					</div>
				</div>
			</div>
		</div>
		<!-- [ breadcrumb ] end -->
		<!-- [ Main Content ] start -->
		<div class="row">
			<!-- [ sample-page ] start -->

			<div class="col-md-12 col-xl-12">
				<h5 class="mb-3">Informasi</h5>
				<!-- Button trigger modal -->

				<div class="card tbl-card">
					<div class="card-body">
						<div class="card">
							<div class="card-body mx-4">
								<div class="container">
									<p class="my-5 mx-5" style="font-size: 30px;">Invoice Transaksi Obat Pelanggan</p>
									<div class="row">
										<ul class="list-unstyled">
											<li class="text-black"><?= $transaksi->fullname ?> <span class="text-muted"><?= $transaksi->no_hp ?></span></li>
											<li class="text-muted mt-1"><span class="text-black">Invoice Tanggal </span><?= $transaksi->tgl_keluar ?> </li>
											<li class="text-black mt-1"><?= $transaksi->pengiriman ?></li>
										</ul>
										<hr>
										<div class="col-xl-6">
											<strong>Produk</strong>
										</div>
										<div class="col-xl-2">
											<strong>Harga</strong>
										</div>
										<div class="col-xl-2">
											<strong>Quantity</strong>
										</div>
										<div class="col-xl-2">
											<strong class="float-end">Subtotal
											</strong>
										</div>
										<hr>
										<?php
										foreach ($obat as $key => $value) {
										?>
											<div class="col-xl-6">
												<p><?= $value->nama_obat ?></p>
											</div>
											<div class="col-xl-2">
												<p>Rp. <?= number_format($value->harga) ?></p>
											</div>
											<div class="col-xl-2">
												<p><?= $value->jumlah_keluar ?>x / <?= $value->keterangan ?></p>
											</div>
											<div class="col-xl-2">
												<p class="float-end">Rp. <?= number_format($value->harga * $value->jumlah_keluar) ?>
												</p>
											</div>
											<hr>
										<?php
										}
										?>
									</div>

									<div class="row text-black">

										<div class="col-xl-12">
											<p class="float-end fw-bold">Total Pembayaran: Rp. <?= number_format($value->total_keluar) ?>
											</p>
										</div>
										<hr style="border: 2px solid black;">
									</div>
									<?php
									if ($value->status == '1') {
									?><a href="<?= base_url('Backend/cTransaksiObat/konfirmasi/' . $value->id_obat_keluar) ?>" class="btn btn-warning">Konfirmasi Pembayaran</a>
									<?php
									}
									?>

									<a href="<?= base_url('Backend/cTransaksiObat') ?>" class="btn btn-danger">Kembali</a>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>