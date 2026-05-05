<!-- [ Main Content ] start -->
<div class="pc-container">
	<div class="pc-content">
		<!-- [ breadcrumb ] start -->
		<div class="page-header">
			<div class="page-block">
				<div class="row align-items-center">
					<div class="col-md-12">
						<div class="page-header-title">
							<h5 class="m-b-10">Informasi Supplier</h5>
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
				<button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
					Tambah Data Supplier
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
								<h5 class="modal-title" id="exampleModalLabel">Masukkan Data Supplier</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<?= form_open_multipart('Backend/cSupplier/create') ?>
							<div class="modal-body">
								<div class="mb-3">
									<label for="exampleInputEmail1" class="form-label">Nama Supplier</label>
									<input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nama Supplier" aria-describedby="emailHelp" required>
								</div>
								<div class="mb-3">
									<label for="exampleInputPassword1" class="form-label">Alamat</label>
									<input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat" id="exampleInputPassword1" required>

								</div>
								<div class="mb-3">
									<label for="exampleInputPassword1" class="form-label">Nomor Telepon</label>
									<input type="number" name="no_hp" class="form-control" placeholder="Masukkan Nomor Telepon" id="exampleInputPassword1" required>
								</div>
								<div class="mb-3">
									<label for="exampleInputPassword1" class="form-label">Username</label>
									<input type="text" name="username" class="form-control" placeholder="Masukkan Username" id="exampleInputPassword1" required>
								</div>
								<div class="mb-3">
									<label for="exampleInputPassword1" class="form-label">Password</label>
									<input type="text" name="password" class="form-control" placeholder="Masukkan Password" id="exampleInputPassword1" required>
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
										<th>Nama</th>
										<th>Alamat</th>
										<th>Nomor Telepon</th>
										<th>Username</th>
										<th>Password</th>
										<th class="text-end">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($supplier as $key => $value) {
									?>
										<tr>
											<td><a href="#" class="text-muted"><?= $no++ ?>. </a></td>
											<td>
												<?= $value->nama_supplier ?>
											</td>
											<td><?= $value->alamat ?></td>
											<td><?= $value->no_hp ?></td>
											<td><?= $value->username ?></td>
											<td><?= $value->password ?></td>

											<td class="text-end">
												<div class="btn-group" role="group" aria-label="Basic mixed styles example">
													<button type="button" class="btn btn-danger data-bs-toggle=" data-bs-toggle="modal" data-bs-target="#edit<?= $value->id_supplier ?>">Edit</button>
													<a href="<?= base_url('Backend/cSupplier/delete/' . $value->id_supplier) ?>" class="btn btn-warning">Hapus</a>
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
foreach ($supplier as $key => $value) {
?>
	<!-- Modal -->
	<div class="modal fade" id="edit<?= $value->id_supplier ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Perbaharui Data Supplier</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<?= form_open_multipart('Backend/cSupplier/update/' . $value->id_supplier) ?>
				<div class="modal-body">
					<div class="mb-3">
						<label for="exampleInputEmail1" class="form-label">Nama Supplier</label>
						<input type="text" name="nama" value="<?= $value->nama_supplier ?>" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nama Supplier" aria-describedby="emailHelp" required>
					</div>
					<div class="mb-3">
						<label for="exampleInputPassword1" class="form-label">Alamat</label>
						<input type="text" name="alamat" class="form-control" value="<?= $value->alamat ?>" placeholder="Masukkan Alamat" id="exampleInputPassword1" required>

					</div>
					<div class="mb-3">
						<label for="exampleInputPassword1" class="form-label">Nomor Telepon</label>
						<input type="number" name="no_hp" class="form-control" value="<?= $value->no_hp ?>" placeholder="Masukkan Nomor Telepon" id="exampleInputPassword1" required>
					</div>
					<div class="mb-3">
						<label for="exampleInputPassword1" class="form-label">Username</label>
						<input type="text" name="username" class="form-control" value="<?= $value->username ?>" placeholder="Masukkan Username" id="exampleInputPassword1" required>
					</div>
					<div class="mb-3">
						<label for="exampleInputPassword1" class="form-label">Password</label>
						<input type="text" name="password" class="form-control" value="<?= $value->password ?>" placeholder="Masukkan Password" id="exampleInputPassword1" required>
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