<?php 

 class Mahasiswa {
	 
	 private $db; 
	 private $table = 'mahasiswa';
	 
	 public $id;
	 public $npm;
	 public $nama;
	 public $tgllahir;
	 public $jk;
	 public $alamat;
	 public $itemperpage = 10;
	 public $pagepos;
	 
	 public function __construct($db) {
		 $this->db = $db;
	 }
	 
	 public function lihatSemua() {
		 
		 $query = "SELECT * FROM mahasiswa ORDER BY npm ASC";
		 
		 $stmt = $this->db->query($query);
		 
		 return $stmt;
	 }
	 
	 public function lihatSebagian($page_position, $item_per_page) {
		 $query = "SELECT * FROM mahasiswa ORDER BY npm ASC LIMIT $page_position, $item_per_page";
		 
		 $stmt = $this->db->prepare($query);
		 $stmt->execute(array($page_position, $item_per_page));
		 
		 return $stmt;
	 }
	 
	 public function lihat($id) {
		 $query = "SELECT * FROM ".$this->table." WHERE id = $id";
		 
		 $stmt = $this->db->prepare($query);
		 $stmt->execute(array($id));
		 
		 return $stmt;
	 }
	 
	 public function jenis_kel($jk) {
		 $query = "SELECT * FROM mahasiswa  WHERE jenis_kel LIKE '%$jk%'";
		 
		 $r = $this->db->query($query);
		 
		 return $r;
	 }
	 
	 // Buat record baru ke database
	 public function buat() {
		 
		 $query = "INSERT INTO ".$this->table."(npm, nama, tgllahir, jenis_kel, alamat) VALUES(?,?,?,?,?)";
		 
		 if ($this->cekNpm()){
			$stmt = $this->db->prepare($query);
			$stmt->execute(array("$this->npm", "$this->nama", $this->tgllahir, "$this->jk", "$this->alamat"));
			 
			 if($stmt) {
				 return true;
			 } else {
				 return false;
			 }
			 
		 } else {
			 echo "npm tidak boleh sama";
		 }
		 
		 
	 }
	 
	 public function update() {
		 $query = "UPDATE mahasiswa SET npm=?, nama=?, tgllahir=?, jenis_kel=?, alamat=? WHERE id = ?";
		 
		 $stmt = $this->db->prepare($query);
		 $stmt->execute(
			 array(
				"$this->npm", 
				"$this->nama", 
				$this->tgllahir, 
				"$this->jk",
				"$this->alamat", 
				$this->id)
		 );
		 
		 return $stmt;
	 }
	 
	 // validasi npm
	 public function cekNpm() {
		 
		 $query = "SELECT npm FROM mahasiswa WHERE npm=?";
		 $ceknpm = $this->db->prepare($query);
		 $ceknpm->execute(array($this->npm));
		 
		 if ($ceknpm->rowCount() == 0) { return true; } else { return false; }
	 }
	 
	 
		public function paginate_function($item_per_page, $current_page, $total_records, $total_pages)
		{
				$pagination = "";
				if($total_pages > 0 && $total_pages != 1 && $current_page <= $total_pages){ //verify total pages and current page number
						$pagination .= "<ul class='pagination'>";

						$right_links    = $current_page + 3; 
						$previous       = $current_page - 3; //previous link 
						$next           = $current_page + 1; //next link
						$first_link     = true; //boolean var to decide our first link

						if($current_page > 1){
								$previous_link = ($previous==0)?1:$previous;
								$pagination .= "<li class='first'><a href='#' data-page='1' title='First'>&laquo;</a></li>"; //first link
//								$pagination .= "<li><a href='#' data-page='".$previous_link."' title='Previous'>&lt;</a></li>"; //previous link
										for($i = ($current_page-2); $i < $current_page; $i++){ //Create left-hand side links
												if($i > 0){
														$pagination .= "<li><a href='#' data-page='".$i."' title='Page".$i."'>".$i."</a></li>";
												}
										}   
								$first_link = false; //set first link to false
						}

						if($first_link){ //if current active page is first link
								$pagination .= "<li class='first active'><a href='#'>".$current_page."</a></li>";
						}elseif($current_page == $total_pages){ //if it"s the last active link
								$pagination .= "<li class='last active'><a href='#'>".$current_page."</a></li>";
						}else{ //regular current link
								$pagination .= "<li class='active'><a href='#'>".$current_page."</a></li>";
						}

						for($i = $current_page+1; $i < $right_links ; $i++){ //create right-hand side links
								if($i<=$total_pages){
										$pagination .= "<li><a href='#' data-page='".$i."' title='Page ".$i."'>".$i."</a></li>";
								}
						}
						if($current_page < $total_pages){ 
										$next_link = ($i > $total_pages) ? $total_pages : $i;
//										$pagination .= "<li><a href='#' data-page='".$next_link."' title='Next'>&gt;</a></li>"; //next link
										$pagination .= "<li class='last'><a href='#' data-page='".$total_pages."' title='Last'>&raquo;</a></li>"; //last link
						}

						$pagination .= "</ul>"; 
				}
				return $pagination; //return pagination links
		}
	 
 }