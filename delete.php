
<?php
require './includes/config.php';

if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit;
}

include './includes/header.php';?>

<html lang="en">
<div class="box-header">
<h3 class="box-title">Data Terhapus </h3>
</div>
<div class="table-responsive">

<?php
include "conn.php"; 
if(isset($_GET['pilih'])){
	$cari = $_GET['pilih'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
}

?>
 
	<?php 
	if(isset($_POST['pilih'])){
		$cari = $_POST['bulan'];
		$data = mysqli_query($koneksi,"delete from tbl_gangguan where MONTHNAME(tanggal) like '%".$cari."%'");						
	}
	
	?>

	<a href='index.php'>Kembali</a>
</body>
</html>