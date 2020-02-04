<?php
require './includes/config.php';

if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit;
}

include './includes/header.php';?>

<html lang="en">
<div class="box-header">
<h3 class="box-title">Mencari Data </h3>
</div>
<div class="table-responsive">

<?php
include "conn.php"; 
if(isset($_GET['pilih'])){
	$cari = $_GET['pilih'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
}

?>
 
<table class="table table-bordered table-striped">
		<tr>
			<th>tanggal</th>
			<th>jam</th>
			<th>NoInet</th>
			<th>nama</th>
			<th>alamat</th>
			<th>CP</th>
			<th>keluhan</th>
			<th>Jenis_Gangguan</th>
			<th>Sub_Gangguan</th>
			<th>status</th>
			<th>tiket</th>
		</tr>


	<?php 
	if(isset($_POST['pilih'])){
		$cari = $_POST['bulan'];
		$data = mysqli_query($koneksi,"select * from tbl_gangguan where MONTHNAME(tanggal) like '%".$cari."%'");					
	}else{
		$data = mysqli_query($koneksi,"select * tbl_gangguan");		
	}
	while($d = mysqli_fetch_array($data)){
	?>
	<tr>
				<th><?php echo $d['tanggal']; ?></th>
				<th><?php echo $d['jam']; ?></th>
				<th><?php echo $d['NoInet']; ?></th>
				<th><?php echo $d['nama']; ?></th>
				<th><?php echo $d['alamat']; ?></th>
				<th><?php echo $d['CP']; ?></th>
				<th><?php echo $d['keluhan']; ?></th>
				<th><?php echo $d['Jenis_Gangguan']; ?></th>
				<th><?php echo $d['Sub_Gangguan']; ?></th>
				<th><?php echo $d['status']; ?></th>
				<th><?php echo $d['tiket']; ?></th>
	</tr>
	<?php } ?>
</table>

	<a href='index.php'>Kembali</a>
</body>
</html>