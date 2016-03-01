<?php 
include_once 'config/db.php';
include_once 'class/mahasiswa.php';

$database = new Database();
$db = $database->konek();

$mhs = new Mahasiswa($db);


$stmt = $mhs->lihatSemua();
$num = $stmt->rowCount();


if ($num > 0) {
	while ($row = $stmt->fetchObject()) {
		echo "<tr class='table-row'>
			<!--<td class='table-img'>
				<img src='assets/images/in.jpg' alt=''>
			</td> -->
			<td class='table-text'>
				<h6>$row->npm</h6>
			</td>
			<td class=''>
				$row->nama
			</td>
			<td>
				$row->tgllahir
			</td>
			<td>
				$row->jenis_kel
			</td>
			<td>
				$row->alamat
			</td>
			<td>
				<div class='btn-group'>
					<a class='btn btn-danger' href='update.php?id=$row->id'><i class='fa fa-trash'></i></a>
					<a class='btn btn-info update-btn' href='update-form.php?id=$row->id' data-toggle='modal' data-target='#update'><i class='fa fa-pencil'></i></a>
				</div>
			</td>
		</tr>";
		
	} // end while 
	
	
	// skrip js utk update 
	echo "<script>
$('.update-btn').click(function (event) {
	event.preventDefault();
	
	//alert($(this).attr('href'));
	
$('#update-form').load($(this).attr('href'));
	
});

$(document).on('submit', '#update', function () {
		
		$.post('update.php', $(this).serialize())
			.done(function(response) {
				$('#info p').addClass('alert alert-info').html(response).fadeOut('slow').fadeIn('slow');
				lihatMahasiswa();
				chart();
			});
		
		return false;
	});
	</script>";
} // end if
?>

