<?php
// include database connection file
include"conn.php";
include './includes/header.php';
?>
	<h1>Edit Password</h1>
<?php
// Display selected user data based on id
// Getting id from url


	$query_mysql = mysqli_query($koneksi,"SELECT * FROM admin WHERE id='1'")or die(mysql_error());
	while($data = mysqli_fetch_array($query_mysql)){
	?>

<html>
<head>  
    <title>Edit User Data</title>

</head>
<body>      
    <form from action="updatepassword.php?" method="post">
		<table class="table-bordered table-striped">
        	<tr> <!--baris, td : kolom-->
				<td>username</td>
				<td><textarea input type="text" name="username" rows="1" cols="21"><?php echo $data['username'];?></textarea></td>
			</tr>
			<tr>
				<td>password</td>
				<td><textarea input type="text" name="password" rows="1" cols="21"><?php echo $data['password'];?></textarea></td>
			</tr>
			<tr>
				<td ><input type="submit" name="submit" value="Simpan" class="btn btn-danger"></td>
				<td ><input type="reset" name="reset" value="Reset" class="btn btn-primary"></td>	
				<a href="index.php?a=ps&k=ps">kembali</a>
			</tr>
        </table>
    </form>
    <?php } ?>
</div>
</body>
</html>