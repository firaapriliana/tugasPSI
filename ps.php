<html lang="en">
<div class="box-header">
<h3 class="box-title">Progres </h3>
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
			<th>Durasi</th>
		</tr>
</thead>
<tbody>
<?php 
		include 'conn.php';
		$no=1;
		$data = mysqli_query($koneksi,"SELECT * ,datediff(current_time(),tanggal) as Durasi from tbl_gangguan where tiket='open ticket'ORDER BY tanggal,jam ASC");
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
				<th><?php echo $d['Durasi']; ?></th>
				<th><?php echo ("<a href='edit.php?NoInet=$d[NoInet]'>Edit</a>"); ?></th>
			</tr>
			<?php 
		}
		?>
	<br><a href="index.php" >Kembali</a></br>

	
</td>
</tr>
</tbody>
</table>
</div>