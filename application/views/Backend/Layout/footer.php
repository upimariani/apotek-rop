<footer class="pc-footer">
	<div class="footer-wrapper container-fluid">
		<div class="row">
			<div class="col-sm my-1">
				<p class="m-0">APOTEK ANUGRAH FARMA </p>
			</div>
			<div class="col-auto my-1">
				<ul class="list-inline footer-link mb-0">
					<li class="list-inline-item"><a href="../index.html">Analisis Stok Obat - Reorder Point</a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>

<!-- [Page Specific JS] start -->
<script src="<?= base_url('asset/jquery-3.7.1.min.js') ?>"></script>
<script src="<?= base_url('asset/Mantis-Bootstrap-1.0.0/dist/') ?>assets/js/plugins/apexcharts.min.js"></script>
<script src="<?= base_url('asset/Mantis-Bootstrap-1.0.0/dist/') ?>assets/js/pages/dashboard-default.js"></script>
<!-- [Page Specific JS] end -->
<!-- Required Js -->
<script src="<?= base_url('asset/Mantis-Bootstrap-1.0.0/dist/') ?>assets/js/plugins/popper.min.js"></script>
<script src="<?= base_url('asset/Mantis-Bootstrap-1.0.0/dist/') ?>assets/js/plugins/simplebar.min.js"></script>
<script src="<?= base_url('asset/Mantis-Bootstrap-1.0.0/dist/') ?>assets/js/plugins/bootstrap.min.js"></script>
<script src="<?= base_url('asset/Mantis-Bootstrap-1.0.0/dist/') ?>assets/js/fonts/custom-font.js"></script>
<script src="<?= base_url('asset/Mantis-Bootstrap-1.0.0/dist/') ?>assets/js/pcoded.js"></script>
<script src="<?= base_url('asset/Mantis-Bootstrap-1.0.0/dist/') ?>assets/js/plugins/feather.min.js"></script>

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
	layout_change('light');
</script>




<script>
	change_box_container('false');
</script>



<script>
	layout_rtl_change('false');
</script>


<script>
	preset_change("preset-1");
</script>


<script>
	font_change("Public-Sans");
</script>



</body>
<!-- [Body] end -->

</html>