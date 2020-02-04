<?php
// include database connection file
include"conn.php";
include './includes/header.php';
?>
	<h1>Edit Biodata Penduduk</h1>
<?php
// Display selected user data based on id
// Getting id from url

$nomor = $_GET['NoInet'];
	$query_mysql = mysqli_query($koneksi,"SELECT * FROM tbl_gangguan WHERE NoInet='$nomor'")or die(mysql_error());
	while($data = mysqli_fetch_array($query_mysql)){
	?>

<html>
<head>  
    <title>Edit User Data</title>
</head>
<body>
      
    <form from action="update.php?" method="post">
		<table class="table-bordered table-striped">
        	<tr> <!--baris, td : kolom-->
				<td>tanggal</td>
				<td><textarea input type="text" name="tanggal"readonly="readonly" rows="1" cols="21"><?php echo $data['tanggal'];?></textarea></td>
			</tr>
			<tr>
				<td>jam</td>
				<td><textarea input type="text" name="jam"readonly="readonly" rows="1" cols="21"><?php echo $data['jam'];?></textarea></td>
			</tr>
			<tr>
				<td>NoInet</td>
				<td><textarea input type="text" name="NoInet"readonly="readonly" rows="1" cols="21"><?php echo $data['NoInet'];?></textarea></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><textarea input type="text" name="nama"readonly="readonly" rows="1" cols="21"><?php echo $data['nama'];?></textarea></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><textarea input type="text" name="alamat"readonly="readonly" rows="1" cols="21"><?php echo $data['alamat'];?></textarea></td>
			</tr>
			<tr>
				<td>CP</td>
				<td><textarea input type="text" name="CP"readonly="readonly" rows="1" cols="21"><?php echo $data['CP'];?></textarea></td>
			</tr>
			<tr>
				<td>keluhan</td>
				<td><textarea input type="text" name="keluhan"readonly="readonly" rows="1" cols="21"><?php echo $data['keluhan'];?></textarea></td>
			</tr>
			<tr>
				<td>Jenis_Gangguan</td>
				<td><textarea input type="text" name="Jenis_Gangguan"readonly="readonly" rows="1" cols="21"><?php echo $data['Jenis_Gangguan'];?></textarea></td>
			</tr>
			<tr>
				<td>Sub_Gangguan</td>
				<td><textarea input type="text" name="Sub_Gangguan"readonly="readonly" rows="1" cols="21"><?php echo $data['Sub_Gangguan'];?></textarea></td>
			</tr>
			<tr>
				<td>status</td>
				<td><textarea input type="text" name="status" rows="1" cols="21"><?php echo $data['status'];?></textarea></td>
			</tr>
			<tr>
				<td>tiket</td>
				<td><textarea input type="text" name="tiket" rows="1" cols="21"><?php echo $data['tiket'];?></textarea></td>
			</tr>
			<tr>
				<td ><input type="submit" name="submit" value="Simpan" class="btn btn-danger"></td>
				<td ><input type="reset" name="reset" value="Reset" class="btn btn-primary"></td>
				<a href="index.php?a=ps&k=ps">Batal Mengubah Data</a>				
			</tr>
	
        </table>
    </form>
    <?php } ?>
</div>
</body>
</html>