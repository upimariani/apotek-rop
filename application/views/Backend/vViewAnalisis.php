<!-- [ Main Content ] start -->
<div class="pc-container">
	<div class="pc-content">
		<!-- [ breadcrumb ] start -->
		<div class="page-header">
			<div class="page-block">
				<div class="row align-items-center">
					<div class="col-md-12">
						<div class="page-header-title">
							<h5 class="m-b-10">Informasi Analisis Obat</h5>
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
							<table id="myTable" class="table table-hover table-borderless mb-0">
								<thead>
									<tr>
										<th>No.</th>
										<th>Nama Obat</th>
										<th>Total Pemakaian per Bulan</th>
										<th>Total Pemakaian per Hari</th>
										<th>Safety Stok</th>
										<th>Lead Time</th>
										<th>Hasil ROP</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($analisis as $key => $value) {
									?>
										<tr>
											<td><a href="#" class="text-muted"><?= $no++ ?>. </a></td>
											<td><?= $value->nama_obat ?></td>
											<td><?= $value->total_pemakaian ?> /<?= $value->keterangan ?></td>
											<td><?= $value->jml_perhari ?> <?= $value->keterangan ?></td>
											<td><?= $value->safety_stok ?> <?= $value->keterangan ?></td>
											<td><?= $value->lead_time ?> hari</td>
											<td><?= $value->hasil_rop ?></td>
										</tr>
									<?php
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
