<div class="box-header">
    <h3 class="box-title">Import Data</h3>
</div>
<div class="table-responsive">
<table class="table table-bordered table-striped">
<!-- <thead>
<tr>
<th>Id Alternatif</th>
<th>Nama Alternatif</th>
<th>Pilihan</th>
</tr>
</thead> -->
<tbody>
<?php
include ("conn.php");

?>

<form method="post" enctype="multipart/form-data" action="upload_aksi.php">
	Pilih File: 
	<input name="tbl_sales" type="file" required="required" > 
	<br>
	<input name="upload" type="submit" value="Import" class="btn btn-warning">
</form>
<!-- <tr>
<td><?php echo $d['id_alternatif']; ?></td>
<td><?php echo $d['nm_alternatif']; ?></td>
<td>
<a href="?a=alternatif&k=ubaha&id=<?php echo $d['id_alternatif']; ?>" class="btn btn-warning">Ubah</a>
<a href="hapusalternatif.php?id=<?php echo $d['id_alternatif']; ?>" class="btn btn-danger">Hapus</a>
</td>
</tr> -->
<?php
//}
?> 
</tbody>
</table>
</div>