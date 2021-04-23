<?php 
	session_start();
	require 'ketnoi.php';
	$username=$_POST['username'];
	$password=$_POST['password'];
	$sql="select * from taikhoan where TenDN='".$username."'";
	$result=mysqli_query($ketnoi,$sql);
	if(mysqli_fetch_array($result)){
		echo '<script>
		alert("Tên đăng nhập đã tồn tại")
		window.location="'.$_SERVER['HTTP_REFERER'].'"</script>';
	}else{
		$sql="insert into taikhoan values('','".$username."','".$password."',NULL,'https://st.quantrimang.com/photos/image/2017/04/08/anh-dai-dien-FB-200.jpg','1')";
		mysqli_query($ketnoi,$sql);
		$sql="select ID from taikhoan where TenDN='".$username."'";

		$result=mysqli_query($ketnoi,$sql);
		$row=mysqli_fetch_assoc($result);
		$id=$row['ID'];

		$sql="insert into khachhang values('','".$id."',NULL,NULL,NULL,NULL,NULL)";
		mysqli_query($ketnoi,$sql);
		
		$_SESSION['username']=$username;
		$_SESSION['role']="user";
		$_SESSION['id']=$id;
		echo '<script>
		alert("Đăng ký thành công")
		window.location="thongtin-canhan.php"</script>';
	}
 ?>