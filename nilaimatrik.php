<h1>Menghapus Data</h1>
<ul class="nav nav-tabs">
  <?php
  if($_GET['k']=='hapus'){
	$act1='class="active"';
	$act2='';
  }else if($_GET['k']=='hapussto'){
	$act1='';
	$act2='class="active"';
  }else{
	$act1='';
	$act2='';
  }
  ?>
  <li <?php echo $act1; ?> ><a href="index.php?a=hapus&k=hapus">Hapus Data Berdasarkan Bulan</a></li>
  <li <?php echo $act2; ?>><a href="index.php?a=hapus&k=hapussto">Hapus Data Berdasarkan Status Tiket</a></li>
  
  
</ul>

<?php

if(@$_GET['a']=='hapus' and @$_GET['k']=='hapus'){
	include ("hapus.php");
 }else if(@$_GET['k']=='hapussto'){
	include ("hapus1.php");
 }
 ?>
























<!--<thead>
<tr>
<th>tanggal</th>
<th>idsales</th>
<th>nama</th>
<th>jum_ps</th>
</tr>
</thead>
<tbody>

<//?php
include ("conn.php");

if (isset($_POST['submit'])) {
	$bulan1 = $_POST['bulan'];
		$data = mysqli_query($koneksi,"select * FROM tbl_sales WHERE MONTHNAME(tanggal)= '$bulan1'");				
	}else{
		$data = mysqli_query($koneksi,"select * FROM tbl_sales");		
	}

while($d=mysqli_fetch_assoc($data)){
?>
<tr>
<th><?//php echo $d['tanggal']; ?></th>
<th><?//php echo $d['idsales']; ?></th>
<th><?//php echo $d['nama']; ?></th>
<th><?//php echo $d['jum_ps']; ?></th>
</tr>

<?//php
//}
?>

</tbody>
</table>
</div>
</div>

<br>

<br>

<br>

<br>

<div class="table-responsive">




</*?php
require './includes/config.php';

if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit;
}
?>

<!--<html lang="en">
<div class="box-header">
<h3 class="box-title">Mencari Data </h3>
</div>
<div class="table-responsive">


<form action="delete.php" method="get">
	<label>Cari :</label>
	<input type="text" name="cari">
	<input type="submit" value="Cari">
</form>

<form action="delete1.php" method="get">
	<label>Cari Berdasarkan Lokasi :</label>
	<input type="text" name="cari">
	<input type="submit" value="Cari">
</form>

<a href='index.php'>Kembali</a>