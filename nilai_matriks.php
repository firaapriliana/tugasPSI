<?php
include ("konfig/koneksi.php");
$s=mysqli_query($connect,"select * from kriteria");
$h=mysqli_num_rows($s);
?>

<div class="box-header">
    <h3 class="box-title " >Hapus</h3>
</div>
<div class="table table-bordered table-responsive">
<table class="table table-bordered table-responsive">
<thead>
<tr>
<th rowspan="2">No</th>
<th rowspan="2">Nama</th>
<th colspan="<?php echo $h; ?>">Kriteria</th>
</tr>
<tr>
<?php
for($n=1;$n<=$h;$n++){
	echo"<th>C{$n}</th>";
}
?>
</tr>
</thead>
<tbody>
<?php
include ("konfig/koneksi.php");
$s=mysqli_query($connect, "delete from kriteria where id_kriteria='$_GET[id]'");

if($s){
	echo "<script>window.open('index.php?a=kriteria&k=kriteria','_self');</script>";
}else{
 echo $a="delete from kriteria where id_kriteria='$_GET[id]'";
}
?>

</tbody>
</table>
</div>
