<?php
require './includes/config.php';

if (!isset($_SESSION['admin'])) {
    header('Location: login.php');
    exit;
}

include './includes/header.php';?>
<div class="box-header">
    <h3 class="box-title">IMPORT EXCEL KE MYSQL DENGAN PHP</h3>
</div>

<form method="post" enctype="multipart/form-data" action="upload_aksi.php">
	Pilih File: 
	<input name="tbl_sales" type="file" required="required"> 
	<input name="upload" type="submit" value="Import" class="btn btn-danger">
</form>
		
	<a href="index.php">Kembali</a>
</td>
</tr>
</tbody>
</table>
</div>
