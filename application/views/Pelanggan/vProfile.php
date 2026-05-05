<!-- ================ contact section start ================= -->
<hr>
<section class="contact-section">
	<div class="container">



		<div class="row">
			<div class="col-12">
				<h2 class="contact-title">Profile Saya</h2>
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
				<form class="form-contact contact_form" action="<?= base_url('Pelanggan/cProfile/update/' . $profile->id_pelanggan) ?>" method="post">
					<div class="row">

						<div class="col-sm-6">
							<div class="form-group">
								<label class="text-muted">Nama</label>
								<input class="form-control" name="nama" id="name" value="<?= $profile->fullname ?>" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label class="text-muted">Nomor Telepon</label>
								<input class="form-control" name="no_hp" id="email" value="<?= $profile->no_hp ?>" type="number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">
							</div>
						</div>
						<div class="col-12">
							<div class="form-group">
								<label class="text-muted">Alamat Detail</label>
								<textarea class="form-control w-100" name="alamat" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder='Enter Message'><?= $profile->alamat_detail ?></textarea>
							</div>
						</div>
						<div class="col-12">
							<div class="form-group">
								<label class="text-muted">Jenis Kelamin</label>
								<select class="form-control" name="jk">
									<option value="">--Pilih Jenis Kelamin--</option>
									<option value="Perempuan" <?php if ($profile->jk == 'Perempuan') {
																	echo 'selected';
																} ?>>Perempuan</option>
									<option value="Laki-Laki" <?php if ($profile->jk == 'Laki-Laki') {
																	echo 'selected';
																} ?>>Laki-Laki</option>
								</select>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label class="text-muted">Username</label>
								<input class="form-control" name="username" id="name" value="<?= $profile->username ?>" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label class="text-muted">Password</label>
								<input class="form-control" name="password" id="email" value="<?= $profile->password ?>" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">
							</div>
						</div>
					</div>
					<div class="form-group mt-3">
						<button type="submit" class="btn_3 button-contactForm">Update Profile</button>
					</div>
				</form>
			</div>
			<div class="col-lg-4 form-contact contact_form">
				<div class="media contact-info">
					<span class="contact-info__icon"><i class="ti-home"></i></span>
					<div class="media-body">
						<?php
						if ($profile->alamat_pengiriman == '') {
						?><div class="form-group">
								<a href="<?= base_url('Pelanggan/cProfile/alamat_pengiriman/' . $profile->id_pelanggan) ?>" class="btn_3 button-contactForm">Tambah Alamat Pengiriman</a>
							</div>
						<?php
						} else {
						?>
							<h3>Alamat Pengiriman</h3>
							<p><?= $profile->alamat_detail ?> <?= $profile->alamat_pengiriman ?></p>
							<div class="form-group">
								<a href="<?= base_url('Pelanggan/cProfile/alamat_pengiriman/' . $profile->id_pelanggan) ?>" class="btn_3 button-contactForm">Update Alamat Pengiriman</a>
							</div>

						<?php
						}
						?>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- ================ contact section end ================= -->