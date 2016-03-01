<?php 
include_once 'config/db.php';
include_once 'class/mahasiswa.php';

$database = new Database();
$db = $database->konek();

$mhs = new Mahasiswa($db);


	$mhs->id = $_POST['id'];
	$mhs->npm = $_POST['npm'];
	$mhs->nama = $_POST['nama'];
	$mhs->jk = $_POST['jk'];
	$mhs->alamat = $_POST['alamat'];
	$mhs->tgllahir = $_POST['tanggal'];


if($mhs->update()) {
	echo "Data telah diubah..";
}
