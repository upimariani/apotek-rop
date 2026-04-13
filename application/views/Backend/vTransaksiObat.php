<!-- [ Main Content ] start -->
<div class="pc-container">
	<div class="pc-content">
		<!-- [ breadcrumb ] start -->
		<div class="page-header">
			<div class="page-block">
				<div class="row align-items-center">
					<div class="col-md-12">
						<div class="page-header-title">
							<h5 class="m-b-10">Informasi Transaksi Obat</h5>
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
				<!-- Button trigger modal -->
				<?php
				if ($this->session->userdata('success')) {
				?>
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<strong>Sukses!</strong> <?= $this->session->userdata('success') ?>
					</div>
				<?php
				}
				?>
				<div class="card tbl-card">
					<div class="card-body">
						<div class="table-responsive">
							<div class="accordion" id="accordionExample">
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingOne">
										<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											Pesanan Diproses
										</button>
									</h2>
									<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<table class="tabel table table-hover table-borderless mb-0">
												<thead>
													<tr>
														<th>No</th>
														<th>Tanggal Transaksi</th>
														<th>Total Pembayaran</th>
														<th>Status</th>
														<th class="text-end">Detail</th>
													</tr>
												</thead>
												<tbody>
													<?php
													$no = 1;
													foreach ($transaksi as $key => $value) {
														if ($value->status != 2) {
													?>
															<tr>
																<td><a href="#" class="text-muted"><?= $no++ ?></a></td>
																<td><?= $value->tgl_keluar ?></td>
																<td>Rp. <?= number_format($value->total_keluar) ?></td>
																<td>
																	<?php if ($value->status == '0') {
																		echo '<span class="d-flex align-items-center gap-2"><i class="fas fa-circle text-danger f-10 m-r-5"></i>Belum Bayar</span>';
																	} else if ($value->status == '1') {
																		echo '<span class="d-flex align-items-center gap-2"><i class="fas fa-circle text-warning f-10 m-r-5"></i>Menunggu Konfirmasi</span>';
																	} else {
																		echo '<span class="d-flex align-items-center gap-2"><i class="fas fa-circle text-success f-10 m-r-5"></i>Selesai</span>';
																	} ?>

																</td>
																<td class="text-end"><a href="<?= base_url('Backend/cTransaksiObat/detail/' . $value->id_obat_keluar) ?>" class="btn btn-success">Lihat</a></td>
															</tr>
													<?php
														}
													}
													?>


												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingTwo">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
											Pesanan Selesai
										</button>
									</h2>
									<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<?php
											if ($this->session->userdata('id_user') == '3') {
											?>
												<a href="<?= base_url('Backend/cLaporan/transaksi') ?>" class="btn btn-success">Cetak Laporan</a>
											<?php
											}
											?>
											<table class="tabel table table-hover table-borderless mb-0">
												<thead>
													<tr>
														<th>No</th>
														<th>Tanggal Transaksi</th>
														<th>Total Pembayaran</th>
														<th>Status</th>
														<th class="text-end">Detail</th>
													</tr>
												</thead>
												<tbody>
													<?php
													$no = 1;
													foreach ($transaksi as $key => $value) {
														if ($value->status == 2) {
													?>
															<tr>
																<td><a href="#" class="text-muted"><?= $no++ ?></a></td>
																<td><?= $value->tgl_keluar ?></td>
																<td>Rp. <?= number_format($value->total_keluar) ?></td>
																<td>
																	<?php if ($value->status == '0') {
																		echo '<span class="d-flex align-items-center gap-2"><i class="fas fa-circle text-danger f-10 m-r-5"></i>Belum Bayar</span>';
																	} else if ($value->status == '1') {
																		echo '<span class="d-flex align-items-center gap-2"><i class="fas fa-circle text-warning f-10 m-r-5"></i>Menunggu Konfirmasi</span>';
																	} else {
																		echo '<span class="d-flex align-items-center gap-2"><i class="fas fa-circle text-success f-10 m-r-5"></i>Selesai</span>';
																	} ?>

																</td>
																<td class="text-end"><a href="<?= base_url('Backend/cTransaksiObat/detail/' . $value->id_obat_keluar) ?>" class="btn btn-success">Lihat</a></td>
															</tr>
													<?php
														}
													}
													?>


												</tbody>
											</table>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>