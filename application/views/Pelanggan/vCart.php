<!-- breadcrumb part start-->

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
<!--================Cart Area =================-->
<section class="cart_area">
	<div class="container">
		<div class="cart_inner">
			<div class="table-responsive">
				<table class="table">
					<thead>
						<tr>
							<th scope="col">Name</th>
							<th scope="col">Price</th>
							<th scope="col">Quantity</th>
							<th scope="col">Total</th>
							<th scope="col">Handle</th>
						</tr>
					</thead>
					<tbody>
						<form action="<?= base_url('Pelanggan/cCart/update_cart') ?>" method="POST">
							<?php
							$i = 1;
							foreach ($this->cart->contents() as $key => $value) {
							?>
								<tr>
									<td>
										<?= $value['name'] ?> <small>Stok. <?= $value['stok'] ?></small>
									</td>
									<td>
										Rp. <?= number_format($value['price']) ?>
									</td>
									<td>
										<div class="input-group quantity py-4" style="width: 100px;">

											x <input type="number" name="qty<?= $i++ ?>" class="form-control form-control-sm text-center border-0" value="<?= $value['qty'] ?>">

										</div>
									</td>
									<td>
										Rp. <?= number_format($value['qty'] * $value['price']) ?>
									</td>
									<td class="py-4">
										<a href="<?= base_url('Pelanggan/cCart/cart_delete/' . $value['rowid']) ?>" class="btn btn-md rounded-circle bg-light border">
											<i class="fa fa-times text-danger"></i>
										</a>
									</td>
								</tr>
							<?php
							}
							?>
							<tr class="bottom_button">
								<td>
									<button type="submit" class="btn_1">Update Cart</button>
								</td>
								<td></td>
								<td></td>
								<td></td>
								<td>

								</td>
							</tr>
						</form>
						<tr>
							<td></td>
							<td></td>
							<td>
								<h5>Subtotal</h5>
							</td>
							<td>
								<h5>Rp. <?= number_format($this->cart->total()) ?></h5>
							</td>
						</tr>

					</tbody>
				</table>
				<div class="checkout_btn_inner float-right">
					<a class="btn_1" href="<?= base_url('Pelanggan/cProduk') ?>">Lanjut Belanja</a>
					<a class="btn_1 checkout_btn_1" href="<?= base_url('Pelanggan/cCheckout') ?>">Proceed to checkout</a>
				</div>
			</div>
		</div>
</section>