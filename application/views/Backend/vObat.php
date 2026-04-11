<!-- [ Main Content ] start -->
<div class="pc-container">
	<div class="pc-content">
		<!-- [ breadcrumb ] start -->
		<div class="page-header">
			<div class="page-block">
				<div class="row align-items-center">
					<div class="col-md-12">
						<div class="page-header-title">
							<h5 class="m-b-10">Home</h5>
						</div>
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="../dashboard/index.html">Home</a></li>
							<li class="breadcrumb-item"><a href="javascript: void(0)">Dashboard</a></li>
							<li class="breadcrumb-item" aria-current="page">Home</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- [ breadcrumb ] end -->
		<!-- [ Main Content ] start -->
		<div class="row">
			<!-- [ sample-page ] start -->

			<div class="col-md-12 col-xl-12">
				<h5 class="mb-3">Recent Orders</h5>
				<!-- Button trigger modal -->
				<button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
					Tambah Data Obat
				</button>
				<?php
				if ($this->session->userdata('success')) {
				?>
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<strong>Sukses!</strong> <?= $this->session->userdata('success') ?>
					</div>
				<?php
				}
				?>
				<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Masukkan Data Obat</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<?= form_open_multipart('Backend/cObat/add') ?>
							<div class="modal-body">

								<div class="mb-3">
									<label for="exampleInputEmail1" class="form-label">Nama Obat</label>
									<input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
									<div id="emailHelp" class="form-text">Masukkan Nama Obat (ex: Paracetamol)</div>
								</div>
								<div class="mb-3">
									<label for="exampleInputPassword1" class="form-label">Keterangan</label>
									<input type="text" name="keterangan" class="form-control" id="exampleInputPassword1">
									<div id="emailHelp" class="form-text">Masukkan Keterangan Obat (ex: pcs, botol, strip)</div>
								</div>
								<div class="mb-3">
									<label for="exampleInputPassword1" class="form-label">Harga</label>
									<input type="nnumber" name="harga" class="form-control" id="exampleInputPassword1">
									<div id="emailHelp" class="form-text">Masukkan Harga Obat (ex: 10000)</div>
								</div>
								<div class="mb-3">
									<label for="exampleInputPassword1" class="form-label">Stok</label>
									<input type="number" name="stok" class="form-control" id="exampleInputPassword1">
									<div id="emailHelp" class="form-text">Masukkan Stok Awal Obat (ex: 1)</div>
								</div>
								<div class="mb-3">
									<label for="exampleInputPassword1" class="form-label">Lead Time <span class="text-sm text-danger">(Waktu Lama Pengiriman /hari)</span></label>
									<input type="number" name="lead_time" class="form-control" id="exampleInputPassword1">
									<div id="emailHelp" class="form-text">Masukkan Lead Time (ex: 2)</div>
								</div>
								<div class="mb-3">
									<label for="exampleInputPassword1" class="form-label">Gambar<span class="text-sm text-danger">(Format: jpg, jpeg, png)</span></label>
									<input type="file" name="gambar" class="form-control" id="exampleInputPassword1">

								</div>

							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-primary">Save changes</button>
							</div>
							</form>
						</div>
					</div>
				</div>
				<div class="card tbl-card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="myTable" class="table table-hover table-borderless mb-0">
								<thead>
									<tr>
										<th>No.</th>
										<th>Produk</th>
										<th>Harga</th>
										<th>Stok</th>
										<th>Lead Time</th>
										<th class="text-end">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($obat as $key => $value) {
									?>
										<tr>
											<td><a href="#" class="text-muted"><?= $no++ ?></a></td>
											<td><img style="width: 50px;" src="<?= base_url('asset/gambar/' . $value->gambar) ?>" class="rounded-circle" alt="...">
												<p><?= $value->nama_obat ?></p>
											</td>
											<td>Rp. <?= number_format($value->harga) ?></td>
											<td><span class="d-flex align-items-center gap-2"><i class="fas fa-circle text-success f-10 m-r-5"></i><?= number_format($value->stok) ?> /<?= $value->keterangan ?></span>
											</td>
											<td class="text-end"><?= $value->lead_time ?> /hari</td>
											<td class="text-end">
												<div class="btn-group" role="group" aria-label="Basic mixed styles example">
													<button type="button" class="btn btn-danger data-bs-toggle=" data-bs-toggle="modal" data-bs-target="#edit<?= $value->id_obat ?>">Edit</button>
													<a href="<?= base_url('Backend/cObat/delete/' . $value->id_obat) ?>" class="btn btn-warning">Hapus</a>
												</div>
											</td>
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
<?php
foreach ($obat as $key => $value) {
?>
	<!-- Modal -->
	<div class="modal fade" id="edit<?= $value->id_obat ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Masukkan Data Obat</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<?= form_open_multipart('Backend/cObat/update/' . $value->id_obat) ?>
				<div class="modal-body">

					<div class="mb-3">
						<label for="exampleInputEmail1" class="form-label">Nama Obat</label>
						<input type="text" value="<?= $value->nama_obat ?>" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
						<div id="emailHelp" class="form-text">Masukkan Nama Obat (ex: Paracetamol)</div>
					</div>
					<div class="mb-3">
						<label for="exampleInputPassword1" class="form-label">Keterangan</label>
						<input type="text" name="keterangan" value="<?= $value->keterangan ?>" class="form-control" id="exampleInputPassword1">
						<div id="emailHelp" class="form-text">Masukkan Keterangan Obat (ex: pcs, botol, strip)</div>
					</div>
					<div class="mb-3">
						<label for="exampleInputPassword1" class="form-label">Harga</label>
						<input type="nnumber" name="harga" value="<?= $value->harga ?>" class="form-control" id="exampleInputPassword1">
						<div id="emailHelp" class="form-text">Masukkan Harga Obat (ex: 10000)</div>
					</div>
					<div class="mb-3">
						<label for="exampleInputPassword1" class="form-label">Stok</label>
						<input type="number" name="stok" value="<?= $value->stok ?>" class="form-control" id="exampleInputPassword1">
						<div id="emailHelp" class="form-text">Masukkan Stok Awal Obat (ex: 1)</div>
					</div>
					<div class="mb-3">
						<label for="exampleInputPassword1" class="form-label">Lead Time <span class="text-sm text-danger">(Waktu Lama Pengiriman /hari)</span></label>
						<input type="number" value="<?= $value->lead_time ?>" name="lead_time" class="form-control" id="exampleInputPassword1">
						<div id="emailHelp" class="form-text">Masukkan Lead Time (ex: 2)</div>
					</div>
					<div class="mb-3">
						<label for="exampleInputPassword1" class="form-label">Gambar<span class="text-sm text-danger">(Format: jpg, jpeg, png)</span></label>
						<input type="file" name="gambar" class="form-control" id="exampleInputPassword1">

					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save changes</button>
				</div>
				</form>
			</div>
		</div>
	</div>
<?php
}
?>
