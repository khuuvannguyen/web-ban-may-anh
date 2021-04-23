<?php
	session_start();
	require 'ketnoi.php';
	$MaGH=$_REQUEST['p'];
	$soluong_giohang=$_REQUEST['n'];

	$sql="select * from giohang where MaGH='".$MaGH."' and ID='".$_SESSION['id']."'";
	$result=mysqli_query($ketnoi,$sql);
	$giohang=mysqli_fetch_array($result);

	$sql="select * from sanpham where MaSP='".$giohang['MaSP']."'";
	$result=mysqli_query($ketnoi,$sql);
	$sanpham=mysqli_fetch_array($result);
	$soluong_sanpham=$sanpham['SoLuong'];

	if($soluong_sanpham<$soluong_giohang){
		echo '<script>
		alert("Số lượng sản phẩm còn lại ít hơn số lượng trong giỏ hàng. Vui lòng kiểm tra lại !")
		window.location="'.$_SERVER['HTTP_REFERER'].'"</script>';
	}else{
		$MaSP=$giohang['MaSP'];
		$DonGia=$giohang['DonGia'];
		$SoLuong=$giohang['SoLuong'];
		$ThanhTien=$giohang['ThanhTien'];

		date_default_timezone_set('Asia/Ho_Chi_Minh');
		$NGAYMUA=date('Y-m-d H:i:s');

		//Create DONHANG
		$sql="insert into donhang values('','".$NGAYMUA."','".$ThanhTien."','0','".$_SESSION['id']."')";
		mysqli_query($ketnoi,$sql);

		//GET MADH
		$sql="select * from donhang where NgayMua='".$NGAYMUA."'";
		$result=mysqli_query($ketnoi,$sql);
		$donhang=mysqli_fetch_array($result);

		$sql="delete from giohang where MaGH='".$MaGH."'";
		mysqli_query($ketnoi,$sql);

		$MaGH.=$donhang['MaDH'];

		$sql="insert into giohang values('".$MaGH."','".$_SESSION['id']."','".$donhang['MaDH']."','".$sanpham['MaSP']."','".$sanpham['GiaTien']."','".$SoLuong."','".$ThanhTien."')" or die(mysqli_error($ketnoi));
		mysqli_query($ketnoi,$sql) or die(mysqli_error($ketnoi));

		$sql="select * from khachhang where ID='".$_SESSION['id']."'";
		$result=mysqli_query($ketnoi,$sql);
		$khachhang=mysqli_fetch_array($result);

		$sql="insert into deta values('".$donhang['MaDH']."','".$_SESSION['id']."','".$khachhang['HovaTen']."','".$khachhang['GioiTinh']."','".$khachhang['SDT']."','".$khachhang['DiaChi']."','".$khachhang['NamSinh']."')";
		mysqli_query($ketnoi,$sql);

		echo '<script>
			alert("Đặt hàng thành công! Vui lòng chờ nhân viên liên hệ")
			window.location="'.$_SERVER['HTTP_REFERER'].'";
		</script>';
	}
?>