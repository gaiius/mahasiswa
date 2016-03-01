<?php 
include_once 'config/db.php';
include_once 'class/mahasiswa.php';

$database = new Database();
$db = $database->konek();

$mhs = new Mahasiswa($db);

if(isset($_GET['id'])) {
	$id = $_GET['id'];
	
	$stmt = $mhs->lihat($id);
	
	$row = $stmt->fetchObject();

}

?>
<form action="update.php" id="update" method="post">
	<input type="hidden" name="id" value="<?php echo $row->id; ?>">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h2 class="modal-title">Ubah Data Mahasiswa</h2>
		</div>
		<div class="modal-body">
			<div id="info">
				<p class=""></p>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<div class="input-group">
						<input name="npm" type="text" class="form-control1" placeholder="Npm" value="<?php echo $row->npm; ?>">
						<span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
					</div>
					<div class="input-group date">
						<input name="tanggal" type="date" class="form-control1 " value="<?php echo $row->tgllahir; ?>">
						<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
					</div>

				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<div class="input-group">
						<input value="<?php echo $row->nama; ?>" name="nama" type="text" class="form-control1" placeholder="Nama">
						<span class="input-group-addon"><i class="fa fa-user"></i></span>
					</div>
<div class="input-group">
						<select name="jk" id="" class="form-control1">
							<option value="">--</option>
							<option value="laki-laki" <?php if($row->jenis_kel == 'laki-laki') echo 'selected'; ?>>Laki - laki</option>
							<option value="perempuan" <?php if($row->jenis_kel == 'perempuan') echo 'selected'; ?>>Perempuan</option>
						</select>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<textarea name="alamat" id="" cols="30" rows="10" class="form-control"><?php echo $row->alamat; ?></textarea>
			</div>
			<div class="clearfix"> </div>
		</div>

		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			<input id="simpan" type="submit" value="Simpan" class="btn btn-primary">
		</div>
	</div>
</form>