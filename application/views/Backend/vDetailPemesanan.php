<!-- [ Main Content ] start -->
<div class="pc-container">
	<div class="pc-content">
		<!-- [ breadcrumb ] start -->
		<div class="page-header">
			<div class="page-block">
				<div class="row align-items-center">
					<div class="col-md-12">
						<div class="page-header-title">
							<h5 class="m-b-10">Detail Pemesanan Obat</h5>
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
				<?php
				if ($this->session->userdata('success')) {
				?>
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<strong>Sukses!</strong> <?= $this->session->userdata('success') ?>
					</div>
				<?php
				}
				?>
				<!-- Button trigger modal -->
				<form action="<?= base_url('Backend/cPemesananObat/kedaluarsa/' . $transaksi->id_obat_masuk) ?>" method="POST">
					<div class="card tbl-card">
						<div class="card-body">
							<div class="card">
								<div class="card-body mx-4">
									<div class="container">
										<p class="my-5 mx-5" style="font-size: 30px;">Invoice Pemesanan Obat Supplier</p>
										<div class="row">
											<ul class="list-unstyled">
												<li class="text-black">Supplier</li>
												<li class="text-muted mt-1"><span class="text-black">Invoice Tanggal </span><?= $transaksi->tgl_masuk ?> </li>

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
											$dt = 1;
											$id = 1;
											$total = count($obat);
											?>
											<input type="hidden" name="total" value="<?= $total ?>">
											<?php
											foreach ($obat as $key => $value) {
											?>
												<input type="hidden" name="id<?= $id++ ?>" value="<?= $value->id_detail_masuk ?>">
												<div class="col-xl-6">
													<p><?= $value->nama_obat ?>

														<?php
														if ($value->status_masuk == '0') {
														?><input type="date" name="dt<?= $dt++ ?>" class="form-control" required><span class="text-muted text-sm">Masukkan Tanggal Kedaluarsa Obat</span>
														<?php
														} else {
														?>
															<br>
															<span class="text-muted">Tanggal Kedaluarsa Obat: <?= $value->tgl_kedaluarsa ?> </span>
														<?php
														}
														?>

													</p>
												</div>
												<div class="col-xl-2">
													<p>Rp. <?= number_format($value->harga) ?></p>
												</div>
												<div class="col-xl-2">
													<p><?= $value->jumlah_masuk ?>x / <?= $value->keterangan ?></p>
												</div>
												<div class="col-xl-2">
													<p class="float-end">Rp. <?= number_format($value->harga * $value->jumlah_masuk) ?>
													</p>
												</div>
												<hr>
											<?php
											}
											?>
										</div>
										<div class="row text-black">
											<div class="col-xl-12">
												<p class="float-end fw-bold">Total Pembayaran: Rp. <?= number_format($value->total_transaksi) ?>
												</p>
											</div>
											<hr style="border: 2px solid black;">
										</div>
										<?php
										if ($value->status_masuk == '1') {
										?><a href="<?= base_url('Backend/cPemesananObat/konfirmasi/' . $value->id_obat_masuk) ?>" class="btn btn-warning">Konfirmasi Pemesanan</a>
										<?php
										}
										if ($transaksi->status_masuk == '0') {
										?>
											<button type="submit" class="btn btn-success">Simpan Kedaluarsa</button>
										<?php
										}
										?>

										<a href="<?= base_url('Backend/cPemesananObat') ?>" class="btn btn-danger">Kembali</a>

									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>

		</div>
	</div>
</div>