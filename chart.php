<?php 
include_once 'config/db.php';
include_once 'class/mahasiswa.php';

$database = new Database();
$db = $database->konek();

$mhs = new Mahasiswa($db);

$laki = $mhs->jenis_kel('la')->rowCount();
$puan = $mhs->jenis_kel('p')->rowCount();
$total = $laki + $puan;

$lakipersen = ($laki / $total) * 100;
$puanpersen = ($puan / $total) * 100;
echo "
<div class='content-top-1  col-md-4 text-center'>
	<div class='col-md-6 top-content'>
		<h5>Laki -laki</h5>
		<label>$laki</label>
	</div>
	<div class='col-md-6 top-content1'>	   
		<div id='demo-pie-1' class='pie-title-center' data-percent='$lakipersen'> <span class='pie-value'></span> </div>
	</div>
	<div class='clearfix'> </div>
</div>
<div class='col-md-4 text-center'>
	<div class='col-md-12 top-content'>
		<h5>Total</h5>
		<label>$total</label>
	</div>
	<!--
	<div class='col-md-6 top-content1'>	   
		<div id='demo-pie-2' class='pie-title-center' data-percent='100'> <span class='pie-value'></span> </div>
	</div>
	-->
	<div class='clearfix'> </div>
</div>
<div class='content-top-1 col-md-4 text-center'>
	<div class='col-md-6 top-content'>
		<h5>Perempuan</h5>
		<label>$puan</label>
	</div>
	<div class='col-md-6 top-content1'>	   
		<div id='demo-pie-3' class='pie-title-center' data-percent='$puanpersen'> <span class='pie-value'></span> </div>
	</div>
	<div class='clearfix'> </div>
</div>
<!--pie-chart--->
		<div id='pie-chart'>
			<script src='assets/js/pie-chart.js' type='text/javascript'></script>
<script type='text/javascript'>
		$(document).ready(function () {
			$('#demo-pie-1').pieChart({
				barColor: '#3bb2d0',
				trackColor: '#eee',
				lineCap: 'round',
				lineWidth: 8,
				onStep: function (from, to, percent) {
					$(this.element).find('.pie-value').text(Math.round(percent) + '%');
				}
			});

			$('#demo-pie-2').pieChart({
				barColor: '#fbb03b',
				trackColor: '#eee',
				lineCap: 'butt',
				lineWidth: 8,
				onStep: function (from, to, percent) {
					$(this.element).find('.pie-value').text(Math.round(percent) + '%');
				}
			});

			$('#demo-pie-3').pieChart({
				barColor: '#ed6498',
				trackColor: '#eee',
				lineCap: 'square',
				lineWidth: 8,
				onStep: function (from, to, percent) {
					$(this.element).find('.pie-value').text(Math.round(percent) + '%');
				}
			});


		});
	</script>";