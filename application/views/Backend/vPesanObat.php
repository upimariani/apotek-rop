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
				<a href="<?= base_url('Backend/cPemesananObat/pesan') ?>" class="btn btn-primary mb-3">Pesan Obat</a>
				<?php
				if ($this->session->userdata('success')) {
				?>
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<strong>Sukses!</strong> <?= $this->session->userdata('success') ?>
					</div>
				<?php
				}
				?>
				<div class="row">
					<div class="col-lg-5">
						<div class="card tbl-card">
							<div class="card-body">
								<form action="<?= base_url('Backend/cPemesananObat/addtocart') ?>" method="POST">
									<div class="mb-3">
										<label for="exampleInputEmail1" class="form-label">Nama Obat</label>
										<select class="form-control" name="obat">
											<option value="">---Pilih Obat---</option>
											<?php
											foreach ($obat as $key => $value) {
											?>
												<option value="<?= $value->id_obat ?>"><?= $value->nama_obat ?></option>
											<?php
											}
											?>

										</select>
										<div id="emailHelp" class="form-text">Pilih Nama Obat (ex: Paracetamol)</div>
									</div>
									<div class="mb-3">
										<label for="exampleInputPassword1" class="form-label">Quantity</label>
										<input type="number" name="qty" class="form-control" id="exampleInputPassword1">
										<div id="emailHelp" class="form-text">Masukkan Jumlah Pesan Obat (ex: 100)</div>
									</div>
									<div class="mb-3">
										<button class="btn btn-success" type="submit">Simpan</button>
									</div>
								</form>
							</div>

						</div>
					</div>
					<div class="col-lg-7">
						<div class="card tbl-card">
							<div class="card-body">
								<table class="table" id="myTable">
									<thead>
										<tr>
											<th>No</th>
											<th>Produk</th>
											<th>Harga</th>
											<th>Quantity</th>
											<th>Subtotal</th>
										</tr>

									</thead>
									<tbody>
										<?php
										$no = 1;
										foreach ($this->cart->contents() as $key => $value) {
										?>
											<tr>
												<td><?= $no++ ?>.</td>
												<td><?= $value['name'] ?></td>
												<td>Rp. <?= number_format($value['price']) ?></td>
												<td><?= $value['qty'] ?>x</td>
												<td>Rp. <?= number_format($value['qty'] * $value['price'])  ?></td>
											</tr>
										<?php
										}
										?>

									</tbody>
									<tfoot>
										<tr>
											<td coolspan='2'>Total:</td>
											<td class="fw-bold">Rp. <?= number_format($this->cart->total()) ?></td>
										</tr>
										<tr>
											<td></td>
											<td><a href="<?= base_url('Backend/cPemesananObat/order') ?>" class="btn btn-success">Order Supplier</a></td>
										</tr>

									</tfoot>

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
