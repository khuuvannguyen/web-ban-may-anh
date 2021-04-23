<?php 
	session_start();
	require 'ketnoi.php';
	$sql="select * from sanpham where MaSP='".$_SESSION['sanpham-mua']."'";
	$result=mysqli_query($ketnoi,$sql);
	$rest=mysqli_fetch_assoc($result);
	$hoten=$_POST['hoten'];
	$gioitinh=$_POST['gioitinh'];
	$namsinh=$_POST['namsinh'];
	$hientai=$rest['SoLuong'];
	$sdt=$_POST['sdt'];
	$diachi=$_POST['diachi'];
	if($hientai>0){
		date_default_timezone_set('Asia/Ho_Chi_Minh');
		$NGAYMUA=date('Y-m-d H:i:s');

		//Create DONHANG
		$sql="insert into donhang values('','".$NGAYMUA."',NULL,'0','".$_SESSION['id']."')";
		mysqli_query($ketnoi,$sql);

		//GET MADH
		$sql="select * from donhang where NgayMua='".$NGAYMUA."'";
		$result=mysqli_query($ketnoi,$sql);
		$donhang=mysqli_fetch_array($result);

		//CREATE GIOHANG
		$MASP=$_SESSION['sanpham-mua'];
		$ID=$_SESSION['id'];
		$MADH=$donhang['MaDH'];
		$MAGH=$ID.$MASP.$MADH;

		$sql="select * from sanpham where MaSP='".$MASP."'";
		$result=mysqli_query($ketnoi,$sql);
		$sanpham=mysqli_fetch_array($result);
		$DONGIA=$sanpham['GiaTien'];
		$THANHTIEN=$DONGIA;
		$sql="insert into giohang values('".$MAGH."','".$ID."','".$MADH."','".$MASP."','".$DONGIA."','1','".$THANHTIEN."')";
		mysqli_query($ketnoi,$sql);

		//Add data for DONHANG
		$sql="select * from giohang where MaDH='".$MADH."'";
		$result=mysqli_query($ketnoi,$sql);
		while($row=mysqli_fetch_array($result)){
			@$TONGTT=$TONGTT+$row['ThanhTien'];
		}

		$sql="update khachhang set HovaTen='".$hoten."', GioiTinh='".$gioitinh."', NamSinh='".$namsinh."', SDT='".$sdt."', DiaChi='".$diachi."'";
		mysqli_query($ketnoi,$sql);

		$sql="insert into deta values('".$MADH."','".$ID."','".$hoten."','".$gioitinh."','".$sdt."','".$diachi."','".$namsinh."')";
		mysqli_query($ketnoi,$sql);

		$sql="update donhang set TongTT='".$TONGTT."' where MaDH='".$MADH."'";
		mysqli_query($ketnoi,$sql);
		echo '<script>
			alert("Đặt hàng thành công! Vui lòng chờ nhân viên liên hệ")
			window.location="'.$_SERVER['HTTP_REFERER'].'";
		</script>';
	}else{
		echo '<script>
		window.location="'.$_SERVER['HTTP_REFERER'].'"
		alert("Sản phẩm đã hết hàng")</script>';
	}
	
 ?>