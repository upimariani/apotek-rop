<!-- ================ contact section start ================= -->
<section class="contact-section mt-5">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="contact-title">Registrasi Pelanggan</h2>
			</div>
			<div class="col-lg-12">
				<form class="form-contact contact_form" action="<?= base_url('Pelanggan/cLogin/registrasi') ?>" method="post">
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label>Nama Lengkap <span class="text-danger">*</span></label>
								<input class="form-control" name="nama" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukkan Nama Lengkap Anda'" placeholder='Masukkan Nama Anda'>
								<?= form_error('nama', '<span class="text-sm text-danger">', '</span>') ?>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>Nomor Telepon <span class="text-danger">*</span></label>
								<input class="form-control" name="no_hp" id="email" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukkan Nomor Telepon Anda'" placeholder='Masukkan Nomor Telepon Anda'>
								<?= form_error('no_hp', '<span class="text-sm text-danger">', '</span>') ?>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>Username <span class="text-danger">*</span></label>
								<input class="form-control" name="username" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukkan Username Anda'" placeholder='Masukkan Username Anda'>
								<?= form_error('username', '<span class="text-sm text-danger">', '</span>') ?>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label>Password <span class="text-danger">*</span></label>
								<input class="form-control" name="password" id="email" type="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukkan Password Anda'" placeholder='Masukkan Password Anda'>
								<?= form_error('password', '<span class="text-sm text-danger">', '</span>') ?>
							</div>
						</div>
					</div>
					<div class="form-group mt-2">
						<p class="text-muted">Anda sudah memiliki akun? <a class="text-danger" href="<?= base_url('Pelanggan/cLogin') ?>">Silahkan Login!</a></p>
						<button type="submit" class="btn_3 button-contactForm">Regist</button>
					</div>
				</form>
			</div>

		</div>
	</div>
</section>
