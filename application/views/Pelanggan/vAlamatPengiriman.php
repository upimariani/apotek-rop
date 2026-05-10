<!-- ================ contact section start ================= -->
<hr>
<section class="contact-section">
	<div class="container">



		<div class="row">
			<div class="col-12">
				<h2 class="contact-title">Alamat Pengiriman</h2>
			</div>
			<?php
			if ($this->session->userdata('success')) {
			?>
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<strong>Sukses!</strong> <?= $this->session->userdata('success') ?>
				</div>
			<?php
			}
			?>
			<div class="col-lg-8">
				<form class="form-contact contact_form" action="<?= base_url('Pelanggan/cProfile/alamat_pengiriman/' . $id_pelanggan) ?>" method="post">
					<div class="col-md-12 form-group p_star">
						<label class="form-label">Provinsi<sup class="text-danger">*</sup></label>
						<select name="provinsi" class="form-control">

						</select>
					</div>
					<div class="col-md-12 form-group p_star">
						<label class="form-label">Kota/Kabupaten<sup class="text-danger">*</sup></label>
						<select name="kota" class="form-control">

						</select>
					</div>
					<div class="col-md-12 form-group p_star">
						<label class="form-label">Kecamatan<sup class="text-danger">*</sup></label>
						<select name="kecamatan" class="form-control">

						</select>
					</div>
					<input type="text" name="id_kec" hidden>
					<div class="col-md-12 form-group p_star">
						<button type="submit" class="btn_3 button-contactForm">Tambah Alamat Pengiriman</button>
					</div>
				</form>
			</div>

		</div>
	</div>
</section>
<!-- ================ contact section end ================= -->
