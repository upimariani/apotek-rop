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
			<?php
			$pelanggan = $this->db->query("SELECT COUNT(id_pelanggan) as jml FROM `pelanggan`")->row();
			$obat = $this->db->query("SELECT COUNT(id_obat) as jml FROM `obat`")->row();
			$pemesanan = $this->db->query("SELECT SUM(total_transaksi) as total FROM `obat_masuk`")->row();
			?>
			<!-- [ sample-page ] start -->
			<div class="col-md-6 col-xl-3">
				<div class="card">
					<div class="card-body">
						<h6 class="mb-2 f-w-400 text-muted">Pelanggan Regist</h6>
						<h4 class="mb-3"><?= number_format($pelanggan->jml) ?> <span class="badge bg-light-primary border border-primary"><i class="ti ti-trending-up"></i> Pelanggan</span></h4>

					</div>
				</div>
			</div>
			<div class="col-md-6 col-xl-3">
				<div class="card">
					<div class="card-body">
						<h6 class="mb-2 f-w-400 text-muted">Total Users</h6>
						<h4 class="mb-3">3 <span class="badge bg-light-success border border-success"><i class="ti ti-trending-up"></i> User</span></h4>

					</div>
				</div>
			</div>
			<div class="col-md-6 col-xl-3">
				<div class="card">
					<div class="card-body">
						<h6 class="mb-2 f-w-400 text-muted">Total Obat</h6>
						<h4 class="mb-3"><?= number_format($obat->jml) ?> <span class="badge bg-light-warning border border-warning"><i class="ti ti-trending-down"></i> jenis</span></h4>

					</div>
				</div>
			</div>
			<div class="col-md-6 col-xl-3">
				<div class="card">
					<div class="card-body">
						<h6 class="mb-2 f-w-400 text-muted">Total Pemesanan</h6>
						<h4 class="mb-3">Rp. <?= number_format($pemesanan->total) ?></h4>

					</div>
				</div>
			</div>
			<div class="col-md-12 col-xl-8">
				<h5 class="mb-3">Informasi Reorder Point</h5>
				<div class="card tbl-card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="myTable" class="table table-hover table-borderless mb-0">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama Produk</th>
										<th>Total Stok</th>
										<th>ROP</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><a href="#" class="text-muted">84564564</a></td>
										<td>Camera Lens</td>
										<td>40</td>
										<td><span class="d-flex align-items-center gap-2"><i class="fas fa-circle text-danger f-10 m-r-5"></i>Rejected</span>
										</td>
										<td class="text-end">$40,570</td>
									</tr>

								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
