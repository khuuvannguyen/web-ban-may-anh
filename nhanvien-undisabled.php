<?php 
	session_start();
	require 'ketnoi.php';
	$TenDN=$_REQUEST['TenDN'];
	$sql="update nhanvien set TinhTrang='1' where TenDN='".$TenDN."'";
	mysqli_query($ketnoi,$sql);
	echo '<script>window.location="nhanvien-all.php"</script>';
 ?>