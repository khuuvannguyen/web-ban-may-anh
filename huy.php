<?php 
	session_start();
	require 'ketnoi.php';
	$MADH=$_REQUEST['d'];
	$sql="update donhang set XACNHAN='2' where MaDH='".$MADH."'";
	mysqli_query($ketnoi,$sql);
	echo '<script>window.location="'.$_SERVER['HTTP_REFERER'].'"</script>';
 ?>