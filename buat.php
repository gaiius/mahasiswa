<?php 

include 'config/db.php';
include 'class/mahasiswa.php';

$database = new Database();
$db = $database->konek();

$mhs = new Mahasiswa($db);

if($_SERVER['REQUEST_METHOD'] == 'POST') {
	$mhs->npm = $_POST['npm'];
	$mhs->nama = $_POST['nama'];
	$mhs->jk = $_POST['jk'];
	$mhs->alamat = $_POST['alamat'];
	$mhs->tgllahir = $_POST['tanggal'];
}
if ($mhs->buat()) {
	echo "Mahasiswa baru ditambahkan..";
}
