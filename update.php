<?php 
 
include 'conn.php';

	$tanggal = $_POST['tanggal'];
    $jam = $_POST["jam"];
	$NoInet = $_POST["NoInet"];
	$nama = $_POST["nama"];
	$alamat = $_POST["alamat"];
	$CP = $_POST["CP"];
	$keluhan = $_POST["keluhan"];
	$Jenis_Gangguan = $_POST["Jenis_Gangguan"];
	$Sub_gangguan = $_POST["Sub_gangguan"];
	$status = $_POST["status"];
	$tiket = $_POST["tiket"];

/*function cek_tanggal(){
	if(empty($_POST["tanggal"])){
		echo ("tanggal belum diisi");
		echo ("<br>");
	}
}
function cek_jam(){
	if(empty($_POST["jam"])){
		echo ("jam belum diisi");
		echo ("<br>");
	}
}
function cek_NoInet(){
	if(empty($_POST["NoInet"])){
		echo ("Nomor Internet belum diisi");
		echo ("<br>");
	}
}
function cek_nama(){
	if(empty($_POST["nama"])){
		echo ("nama belum diisi ");
		echo ("<br>");
	}
}
function cek_alamat(){
	if(empty($_POST["alamat"])){
		echo ("alamat belum diisi");
		echo ("<br>");
	}
}
function cek_CP(){
	if(empty($_POST["CP"])){
		echo ("RT/RW belum diisi");
		echo ("<br>");
	}
}
function cek_keluhan(){
	if(empty($_POST["keluhan"])){
		echo ("keluhan belum diisi");
		echo ("<br>");
	}
}
function cek_Jenis_Gangguan(){
	if(empty($_POST["Jenis_Gangguan"])){
		echo ("jenis_gangguan belum diisi");
		echo ("<br>");
	}
}
function cek_Sub_gangguan(){
	if(empty($_POST["Sub_gangguan"])){
		echo ("sub_gangguan belum diisi");
		echo ("<br>");
	}
}
function cek_status(){
	if(empty($_POST["status"])){
		echo ("status belum diisi");
		echo ("<br>");
	}
}
function cek_tiket(){
	if(empty($_POST["tiket"])){
		echo ("tiket belum diisi");
		echo ("<br>");
	}
}
if(empty($_POST["tanggal"])||empty($_POST["jam "])||empty($_POST["NoInet"])||empty($_POST["nama"])||empty($_POST["alamat"])||empty($_POST["CP"])||empty($_POST["keluhan"])||empty($_POST["Jenis_Gangguan"])||empty($_POST["Sub_gangguan"])||empty($_POST["status"])||empty($_POST["tiket"])){
			cek_tanggal();
			cek_jam();
			cek_NoInet();
			cek_nama();
			cek_alamat();
			cek_CP();
			cek_keluhan();
			cek_Jenis_Gangguan();
			cek_Sub_gangguan();
			cek_status();
			cek_tiket();
			echo ("<td><a href='Display.php'>Kembali ke Display</a></td></tr>");
}*/


	$hasil = mysqli_query($koneksi,"UPDATE tbl_gangguan SET status='$status',tiket='$tiket' WHERE NoInet='$NoInet'");

	header("location:index.php?pesan=update");

 
//}
 


?>