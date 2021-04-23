<?php 
	session_start();
	require 'ketnoi.php';
	$TenDN=$_POST['TenDN'];
	$MatKhau=$_POST['MatKhau'];
	$sql="insert into nhanvien values('".$TenDN."','".$MatKhau."','1')";
	mysqli_query($ketnoi,$sql);
	echo '<script>
	alert("Thêm tài khoản thành công")
	window.location="nhanvien-add.php"</script>';
 ?>