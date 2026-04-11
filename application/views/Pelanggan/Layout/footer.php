<!--::footer_part start::-->
<footer class="footer_part">


	<div class="copyright_part">
		<div class="container">
			<div class="row ">
				<div class="col-lg-12">
					<div class="copyright_text">
						<P>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;<script>
								document.write(new Date().getFullYear());
							</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</P>
						<div class="copyright_link">
							<a href="#">Turms & Conditions</a>
							<a href="#">FAQ</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<!--::footer_part end::-->

<!-- jquery plugins here-->
<script src="<?= base_url('asset/pillowmart-master/') ?>js/jquery-1.12.1.min.js"></script>
<!-- popper js -->
<script src="<?= base_url('asset/pillowmart-master/') ?>js/popper.min.js"></script>
<!-- bootstrap js -->
<script src="<?= base_url('asset/pillowmart-master/') ?>js/bootstrap.min.js"></script>
<!-- magnific popup js -->
<script src="<?= base_url('asset/pillowmart-master/') ?>js/jquery.magnific-popup.js"></script>
<!-- carousel js -->
<script src="<?= base_url('asset/pillowmart-master/') ?>js/owl.carousel.min.js"></script>
<script src="<?= base_url('asset/pillowmart-master/') ?>js/jquery.nice-select.min.js"></script>
<!-- slick js -->
<script src="<?= base_url('asset/pillowmart-master/') ?>js/slick.min.js"></script>
<script src="<?= base_url('asset/pillowmart-master/') ?>js/jquery.counterup.min.js"></script>
<script src="<?= base_url('asset/pillowmart-master/') ?>js/waypoints.min.js"></script>
<script src="<?= base_url('asset/pillowmart-master/') ?>js/contact.js"></script>
<script src="<?= base_url('asset/pillowmart-master/') ?>js/jquery.ajaxchimp.min.js"></script>
<script src="<?= base_url('asset/pillowmart-master/') ?>js/jquery.form.js"></script>
<script src="<?= base_url('asset/pillowmart-master/') ?>js/jquery.validate.min.js"></script>
<script src="<?= base_url('asset/pillowmart-master/') ?>js/mail-script.js"></script>
<!-- custom js -->
<script src="<?= base_url('asset/pillowmart-master/') ?>js/custom.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

<link href="<?= base_url('asset/') ?>datatables/datatables.min.css" rel="stylesheet">

<script src="<?= base_url('asset/') ?>datatables/datatables.min.js"></script>

<script>
	$('#myTable').DataTable({
		select: true
	});
	$('.tabel').DataTable({
		select: true
	});
</script>
<script>
	$(document).ready(function() {
		$.ajax({
			type: "POST",
			url: "http://localhost/apotek-rop/Pelanggan/Ongkir/provinsi",
			success: function(hasil_provinsi) {
				// console.log(hasil_provinsi);
				$("select[name=provinsi]").html(hasil_provinsi);
			}
		});
		$("select[name=provinsi]").on("change", function() {
			var id_provinsi_terpilih = $("option:selected", this).attr("id_provinsi");
			$.ajax({
				type: "POST",
				url: "http://localhost/apotek-rop/Pelanggan/ongkir/kota",
				data: 'id_provinsi=' + id_provinsi_terpilih,
				success: function(hasil_kota) {
					$("select[name=kota]").html(hasil_kota);
				}
			});
		});
		$("select[name=kota]").on("change", function() {
			var id_kota_terpilih = $("option:selected", this).attr("id_kota");
			$.ajax({
				type: "POST",
				url: "http://localhost/apotek-rop/Pelanggan/ongkir/kecamatan",
				data: 'id_kota=' + id_kota_terpilih,
				success: function(hasil_kecamatan) {
					// console.log(hasil_kecamatan);
					$("select[name=kecamatan]").html(hasil_kecamatan);
				}
			});
		});

		$("select[name=kecamatan]").on("change", function() {
			$.ajax({
				type: "POST",
				url: "http://localhost/apotek-rop/Pelanggan/ongkir/expedisi",
				success: function(hasil_expedisi) {
					$("select[name=expedisi]").html(hasil_expedisi);
				}
			});
		});


		$("select[name=expedisi]").on("change", function() {
			//mendapatkan expedisi terpilih
			var expedisi_terpilih = $("select[name=expedisi]").val()

			//mendapatkan id kota tujuan terpilih
			var id_kecamatan_tujuan_terpilih = $("option:selected", "select[name=kecamatan]").attr('id_kecamatan');

			//alert(total_berat);
			$.ajax({
				type: "POST",
				url: "http://localhost/apotek-rop/Pelanggan/ongkir/paket",
				data: 'expedisi=' + expedisi_terpilih + '&id_kecamatan=' + id_kecamatan_tujuan_terpilih + '&berat=1',
				success: function(hasil_paket) {
					console.log(hasil_paket);
					$("select[name=paket]").html(hasil_paket);
				}
			});
		});


		$("select[name=paket]").on("change", function() {
			//menampilkan ongkir
			var dataongkir = $("option:selected", this).attr('ongkir');
			var reverse = dataongkir.toString().split('').reverse().join(''),
				ribuan_ongkir = reverse.match(/\d{1,3}/g);
			ribuan_ongkir = ribuan_ongkir.join(',').split('').reverse().join('');
			//alert(dataongkir);
			$("#ongkir").html("Rp. " + ribuan_ongkir)
			//menghitung total bayar
			var ongkir = $("option:selected", this).attr('ongkir');


			var total_bayar = parseInt(ongkir) + parseInt(<?= $this->cart->total() ?>);
			var reverse2 = total_bayar.toString().split('').reverse().join(''),
				ribuan_total = reverse2.match(/\d{1,3}/g);
			ribuan_total = ribuan_total.join(',').split('').reverse().join('');
			$(".ttl_bayar").html("Rp. " + ribuan_total);
			$(".bayar").html("Rp. " + ribuan_total);
			// console.log(ribuan_total);

			//estimasi dan ongkir
			var estimasi = $("option:selected", this).attr('estimasi');
			$("input[name=estimasi]").val(estimasi);
			$("input[name=ongkir]").val(dataongkir);
			$("input[name=total_pembayaran]").val(total_bayar);

		});

	});
</script>
<script>
	console.log = function() {}
	$("#paket").on('change', function() {

		$(".harga").html($(this).find(':selected').attr('data-harga'));
		$(".harga").val($(this).find(':selected').attr('data-harga'));

		$(".masa").html($(this).find(':selected').attr('data-masa'));
		$(".masa").val($(this).find(':selected').attr('data-masa'));

	});
</script>
<script type=" text/javascript">
	$('#pay-button').click(function(event) {
		event.preventDefault();
		$(this).attr("disabled", "disabled");

		$.ajax({
			url: '<?= site_url() ?>/snap/token/' + <?= $pesanan_saya->id_obat_keluar ?>,
			cache: false,

			success: function(data) {
				//location = data;

				console.log('token = ' + data);

				var resultType = document.getElementById('result-type');
				var resultData = document.getElementById('result-data');

				function changeResult(type, data) {
					$("#result-type").val(type);
					$("#result-data").val(JSON.stringify(data));
					//resultType.innerHTML = type;
					//resultData.innerHTML = JSON.stringify(data);
				}

				snap.pay(data, {

					onSuccess: function(result) {
						changeResult('success', result);
						console.log(result.status_message);
						console.log(result);
						$("#payment-form").submit();
					},
					onPending: function(result) {
						changeResult('pending', result);
						console.log(result.status_message);
						$("#payment-form").submit();
					},
					onError: function(result) {
						changeResult('error', result);
						console.log(result.status_message);
						$("#payment-form").submit();
					}
				});
			}
		});
	});
</script>

</body>

</html>
