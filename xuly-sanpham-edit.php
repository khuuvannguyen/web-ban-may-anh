<?php 
	session_start();
	include 'ketnoi.php';
	$soluong=$_POST['soluong'];
	$gia=$_POST['gia'];
	$tomtat=trim($_POST['mota-tomtat']);
	$chitiet=trim($_POST['mota-chitiet']);
	$sql="update sanpham set SoLuong='".$soluong."', GiaTien='".$gia."', MoTaTomTat='".$tomtat."', MoTaChiTiet='".$chitiet."' where MaSP='".$_SESSION['maSP']."'";
	mysqli_query($ketnoi,$sql);
	echo '<script>alert("Thay đổi thành công")
	window.location="sanpham-edit.php?SP='.$_SESSION['maSP'].'"</script>';
 ?>