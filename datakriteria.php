<div class="box-header">
    <h3 class="box-title">Data Laporan Gangguan</h3>
</div>
<div class="table-responsive">
<table class="table table-bordered table-striped">
<thead>
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
</thead>
<tbody>
<?php
include ("conn.php");

$s=mysqli_query($koneksi,"select * from tbl_gangguan");
while($d=mysqli_fetch_assoc($s)){

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


<!-- <td>
<a href="?a=kriteria&k=ubahk&id=<?php echo $d['id_kriteria']; ?>" class="btn btn-warning">Ubah</a>
<a href="hapus.php?id=<?php echo $d['id_kriteria']; ?>" class="btn btn-danger">Hapus</a>
</td> -->
</tr>
<?php
}
?>
</tbody>
</table>
</div>