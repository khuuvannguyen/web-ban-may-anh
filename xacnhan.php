<?php 
	session_start();
	require 'ketnoi.php';
	$MaDH=$_REQUEST['d'];

	$sql="select * from giohang where MaDH='".$MaDH."'";
	$result=mysqli_query($ketnoi,$sql);
	$giohang=mysqli_fetch_array($result);

	$sql="select * from sanpham where MaSP='".$giohang['MaSP']."'";
	$result=mysqli_query($ketnoi,$sql);
	$sanpham=mysqli_fetch_assoc($result);
	$SoLuong=$sanpham['SoLuong'];

	if($SoLuong>0){
		$sql="update donhang set XACNHAN='1' where MaDH='".$MaDH."'";
		mysqli_query($ketnoi,$sql);

		$SoLuong=$SoLuong-1;

		$sql="update sanpham set SoLuong='".$SoLuong."' where MaSP='".$giohang['MaSP']."'";
		mysqli_query($ketnoi,$sql);

		echo '<script>window.location="'.$_SERVER['HTTP_REFERER'].'"</script>';
	}else{
		echo '<script>
		Alert("Sản phẩm đã hết hàng!")
		window.location="'.$_SERVER['HTTP_REFERER'].'"</script>';
	}

	
 ?>