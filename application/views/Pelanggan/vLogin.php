<!-- ================ contact section start ================= -->
<section class="contact-section mt-5">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="contact-title">Login</h2>
				<?php
				if ($this->session->userdata('success')) {
				?>
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<strong>Sukses!</strong> <?= $this->session->userdata('success') ?>
					</div>
				<?php
				}
				?>
				<?php
				if ($this->session->userdata('error')) {
				?>
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<strong>Gagal!</strong> <?= $this->session->userdata('error') ?>
					</div>
				<?php
				}
				?>
			</div>
			<div class="col-lg-12">
				<form class="form-contact contact_form" action="<?= base_url('Pelanggan/cLogin') ?>" method="post">
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<input class="form-control" name="username" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukkan Username Anda'" placeholder='Masukkan Username Anda'>
								<?= form_error('username', '<span class="text-sm text-danger">', '</span>') ?>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<input class="form-control" name="password" id="email" type="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukkan Password Anda'" placeholder='Masukkan Password Anda'>
								<?= form_error('password', '<span class="text-sm text-danger">', '</span>') ?>
							</div>
						</div>

					</div>
					<div class="form-group mt-2">
						<p class="text-muted">Anda belum memiliki akun? <a class="text-danger" href="<?= base_url('Pelanggan/cLogin/registrasi') ?>">Silahkan registrasi terlebih dahulu!</a></p>
						<button type="submit" class="btn_3 button-contactForm">Login</button>
					</div>
				</form>
			</div>

		</div>
	</div>
</section>
