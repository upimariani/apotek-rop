<!--================ confirmation part start =================-->
<section class="confirmation_part mb-5">
	<div class="container">

		<div class="row">
			<div class="col-lg-12">
				<div class="order_details_iner">
					<h3>Pesanan Saya</h3>
					<table id="myTable" class="table table-borderless">
						<thead>
							<tr>
								<th scope="col">Tanggal Transaksi</th>
								<th scope="col">Total Pembayaran</th>
								<th scope="col">Status</th>
								<th class="text-center" scope="col">Detail</th>
							</tr>
						</thead>
						<tbody>
							<?php
							foreach ($pesanan_saya as $key => $value) {
							?>
								<tr>
									<td><?= $value->tgl_keluar ?></td>
									<td>Rp. <?= number_format($value->total_keluar) ?></td>
									<td><?php if ($value->status == '0') {
											echo '<span class="badge badge-danger text-light">Belum Bayar</span>';
										} else if ($value->status == '1') {
											echo '<span class="badge badge-success text-warning">Menunggu Konfirmasi</span>';
										} else if ($value->status == '2') {
											echo '<span class="badge badge-success text-light">Selesai</span>';
										} ?></td>
									<td class="text-center"><a href="<?= base_url('Pelanggan/cPesananSaya/detail/' . $value->id_obat_keluar) ?>" class="btn btn-warning">...</a></td>
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
</section>
<!--================ confirmation part end =================-->