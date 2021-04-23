<?php
	session_start();
	require 'ketnoi.php';
	$tensp=$_POST['tensp'];
	$soluong=$_POST['soluong'];
	$giatien=$_POST['giatien'];
	$nsx=$_POST['nsx'];
	$tomtat=$_POST['mota-tomtat'];
	$chitiet=$_POST['mota-chitiet'];
	$url="sanpham/";
	$url=$url.basename($_FILES['hinhanh']['name']);
	$file=$_FILES['hinhanh']['tmp_name'];
	move_uploaded_file($file, $url);

	$sql="insert into sanpham values ('','".$tensp."','".$soluong."','".$giatien."','Cái','".$tomtat."','".$chitiet."','".$url."','".$nsx."')";
	mysqli_query($ketnoi,$sql);

	$sql="select * from sanpham where TenSP='".$tensp."'";
	$result=mysqli_query($ketnoi,$sql);
	$row=mysqli_fetch_array($result);
	echo '<script>window.location="sanpham-edit.php?SP='.$row['MaSP'].'"</script>';
?>