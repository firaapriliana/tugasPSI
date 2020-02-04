<!DOCTYPE html>
<html>
<head>
	<title>Menampilkan Data</title>
</head>
<body>

	<h1>DISPLAY DATA PENDUDUK</h1>

<?php
include "conn.php";

$display = "select*from tbl_gangguan order by NoInet ASC";
$q_buat = mysqli_query($koneksi,$display);

?>

<form action="search.php" method="get">
	<label>Cari :</label>
	<input type="text" name="cari">
	<input type="submit" value="Cari">
</form>

<br>

<table border = 11>
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
			<th>Durasi</th>
</tr>

<?php
	while ($row = mysqli_fetch_array($q_buat)){
		echo ("<tr align=center><td>$row[0]</td>");
		echo ("<td> $row[1]</td>");
		echo ("<td> $row[2]</td>");
		echo ("<td> $row[3]</td>");
		echo ("<td> $row[4]</td>");
		echo ("<td> $row[5]</td>");
		echo ("<td> $row[6]</td>");
		echo ("<td> $row[7]</td>");
		echo ("<td> $row[8]</td>");
		echo ("<td> $row[9]</td>");
		echo ("<td> $row[10]</td>");
		echo ("<td><a href='edit.php?nama=$row[NoInet]'>Edit</a> </td></tr>");
	}
?>

</table>
</body>
</html>