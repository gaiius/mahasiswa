</div>
 
 	<!-- Modal Create -->
	<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="padding-left: 17px;">
		<div class="modal-dialog">
			<form action="" id="buat" method="post">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						<h2 class="modal-title">Tambah Mahasiswa Baru</h2>
					</div>
					<div class="modal-body">
						<div id="info">
							<p class=""></p>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<div class="input-group">
									<input name="npm" type="text" class="form-control1" placeholder="Npm">
									<span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
								</div>
								<div class="input-group date">
									<input name="tanggal" type="date" class="form-control1 ">
									<!--										<span class="input-group-addon"><i class="fa fa-calendar"></i></span>-->
								</div>

							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<div class="input-group">
									<input name="nama" type="text" class="form-control1" placeholder="Nama">
									<span class="input-group-addon"><i class="fa fa-user"></i></span>
								</div>
								<div class="input-group">
									<select name="jk" id="" class="form-control1">
										<option value="">--</option>
										<option value="laki-laki">Laki - laki</option>
										<option value="perempuan">Perempuan</option>
									</select>
								</div>
							</div>
						</div>
						<div class="col-md-12">
							<textarea name="alamat" id="" cols="30" rows="10" class="form-control"></textarea>
						</div>
						<div class="clearfix"> </div>
					</div>

					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<input id="simpan" type="submit" value="Simpan" class="btn btn-primary">
					</div>
				</div>
			</form>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	
	<!-- Modal Update -->
	<div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="padding-left: 17px;">
		<div class="modal-dialog" id="update-form">
			
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>

	<!--scrolling js-->
	<script src="assets/js/jquery.nicescroll.js"></script>
	<script src="assets/js/bootstrap.min.js">
	</script>
	<script src="assets/js/scripts.js"></script>
	<!--		<script src="assets/js/bootstrap-datepicker.js"></script>-->
	<script src="assets/js/widi.js"></script>
	<!--//scrolling js-->


	</div>

</body>

</html>