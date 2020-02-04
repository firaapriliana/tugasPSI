
<h1>Import Data</h1>
<ul class="nav nav-tabs">
  <?php
  if($_GET['k']=='import'){
	$act1='class="active"';
	$act2='';
	}
  //  }else if($_GET['k']=='tambah'){
	 // $act1='';
	 // $act2='class="active"';
  //  }else{
	 // $act1='';
	 // $act2='';
  // }
  ?>
  <li <?php echo $act1; ?> ><a href="index.php?a=import&k=import">Import</a></li>
<!--   <li <?php echo $act2; ?>><a href="index.php?a=alternatif&k=tambah">Tambah Alternatif</a></li> -->
 
  
</ul>

<?php

if(@$_GET['a']=='import' and @$_GET['k']=='import'){
	include ("datakalternatif.php");
	}
 // }else if(@$_GET['k']=='tambah'){
	// include ("tambahalternatif.php");
 // }else if(@$_GET['k']=='ubaha'){
	// include ("ubahalternatif.php");
 // }
 ?>
