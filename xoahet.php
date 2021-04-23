<?php
	session_start();
	require 'ketnoi.php';
	$MaGH=$_REQUEST['p'];
	$sql="select * from giohang where MaGH='".$MaGH."'";
	$result=mysqli_query($ketnoi,$sql);
	$giohang=mysqli_fetch_array($result);
	$sql="delete from giohang where MaGH='".$MaGH."'";
	mysqli_query($ketnoi,$sql);
	echo '<script>window.location="'.$_SERVER['HTTP_REFERER'].'"</script>';
?>