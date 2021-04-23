<?php 
	session_start();
	include 'ketnoi.php';
	$hoten=$_POST['hoTen'];
	$gioitinh=$_POST['gioiTinh'];
	$namsinh=$_POST['namSinh'];
	$sdt=$_POST['sdt'];
	$diachi=$_POST['diaChi'];
	$sql="update khachhang set HovaTen='".$hoten."', GioiTinh='".$gioitinh."', NamSinh='".$namsinh."', SDT='".$sdt."', DiaChi='".$diachi."' where ID='".$_SESSION['id']."'";
	mysqli_query($ketnoi,$sql);
	echo '<script>
	window.location="thongtin-canhan.php"</script>';
 ?>