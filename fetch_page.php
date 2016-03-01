<?php 
include_once 'config/db.php';
include_once 'class/mahasiswa.php';

$database = new Database();
$db = $database->konek();

$mhs = new Mahasiswa($db);

$item_per_page = 10;

// ambil nomor hal dari ajax 
if ( isset($_POST['page'])) {
	$page_num = filter_var($_POST['page'], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH);
	if (!is_numeric($page_num)) {die('Invalid page number');}
} else {
	$page_num = 1;
}


$results = $mhs->lihatSemua();
$get_total_rows = $results->rowCount();
//echo $get_total_rows . "<br>";

$total_pages = ceil($get_total_rows / $item_per_page);
//echo $total_pages . "<br>";

$page_position = (($page_num -1 ) * $item_per_page);
//echo $page_position . "<br>";

$r = $mhs->lihatSebagian($page_position, $item_per_page);
//echo "<div>";
echo $mhs->paginate_function($item_per_page, $page_num, $get_total_rows, $total_pages);
//echo "</div>";

echo "<table class='table'><tbody>";
while ($row = $r->fetchObject()) {
		echo "<tr class='table-row'>
			
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
					<a class='btn btn-danger' href='delete.php?id=$row->id'><i class='fa fa-trash'></i></a>
					<a class='btn btn-info update-btn' href='update-form.php?id=$row->id' data-toggle='modal' data-target='#update'><i class='fa fa-pencil'></i></a>
				</div>
			</td>
		</tr>";
		
	} // end while 
echo "</tbody></table>";



	// skrip js utk update 
echo "
<script>
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