<?php 
	session_start();
	require 'ketnoi.php';
	$MaSP=$_REQUEST['SP'];
	$ID=$_SESSION['id'];
	$MaGH=$ID.$MaSP;

	//Tìm xem giỏ hàng đã tồn tại chưa. Nếu chưa thì thêm mới, rồi thì cộng số lượng
	$sql="select * from giohang where MaGH='".$MaGH."'";
	$result=mysqli_query($ketnoi,$sql);

	//Giỏ hàng đã tồn tại và chưa được thanh toán.
	if(mysqli_num_rows($result)!=0){
		$giohang=mysqli_fetch_assoc($result);
		$SoLuong=$giohang['SoLuong'];
		$SoLuong=$SoLuong+1;

		$sql="select * from sanpham where MaSP='".$MaSP."'";
		$result=mysqli_query($ketnoi,$sql);
		$sanpham=mysqli_fetch_array($result);
		$GiaTien=$sanpham['GiaTien'];
		$ThanhTien=$SoLuong*$GiaTien;

		$sql="update giohang set SoLuong='".$SoLuong."', ThanhTien='".$ThanhTien."' where MaGH='".$MaGH."'";
		mysqli_query($ketnoi,$sql);

			echo '<script>
			alert("Thêm sản phẩm vào giỏ hàng thành công!")
			window.location="'.$_SERVER['HTTP_REFERER'].'";
		</script>';
	}else{
		//Giỏ hàng chưa tồn tại
		$sql="select * from sanpham where MaSP='".$MaSP."'";
		$result=mysqli_query($ketnoi,$sql);
		$sanpham=mysqli_fetch_array($result);
		$GiaTien=$sanpham['GiaTien'];
		$ThanhTien=$GiaTien;

		$sql="insert into giohang values('".$MaGH."','".$ID."',NULL,'".$MaSP."','".$sanpham['GiaTien']."','1','".$ThanhTien."')";
		mysqli_query($ketnoi,$sql);

			echo '<script>
			alert("Thêm sản phẩm vào giỏ hàng thành công!")
			window.location="'.$_SERVER['HTTP_REFERER'].'";
		</script>';
	}

 ?>