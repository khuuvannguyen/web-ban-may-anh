<?php session_start();
	require 'ketnoi.php';
	$username=$_POST['username'];
	$password=$_POST['password'];
	$sql="select * from taikhoan where TenDN='".$username."' and MatKhau='".$password."'";
	$result=mysqli_query($ketnoi,$sql) or die(mysqli_error($ketnoi));
	if(mysqli_num_rows($result)){
		$row=mysqli_fetch_assoc($result) or die(mysqli_error($ketnoi));
		$stillAlive=$row['TinhTrang'];
		if($stillAlive==1){
			$_SESSION['username']=$username;
			$_SESSION['tenHienThi']=$row['TenHienThi'];
			$_SESSION['role']="user";
			$_SESSION['id']=$row['ID'];
			echo '<script>
			window.location="'.$_SERVER['HTTP_REFERER'].'";</script>';
		}else{
			echo '<script>
			alert("Tài khoản đã bị vô hiệu hóa.\nVui lòng liên hệ với Quản Trị viên.")
			window.location="'.$_SERVER['HTTP_REFERER'].'"</script>';
		}
	}else{
		$sql="select * from admin where useradmin='".$username."' and passadmin='".$password."'";
		$result=mysqli_query($ketnoi,$sql) or die(mysqli_error($ketnoi));
		if(mysqli_num_rows($result)==1){
			$_SESSION['username']=$username;
			$_SESSION['role']="admin";
			echo '<script>
			window.location="'.$_SERVER['HTTP_REFERER'].'"</script>';
		}else{
			$sql="select * from nhanvien where TenDN='".$username."' and MatKhau='".$password."'";
			$result=mysqli_query($ketnoi,$sql) or die(mysqli_error($ketnoi));
			if(mysqli_num_rows($result)==1){
				$row=mysqli_fetch_assoc($result) or die(mysqli_error($ketnoi));
				$stillAlive=$row['TinhTrang'];
				if($stillAlive==1){
					$_SESSION['username']=$username;
					$_SESSION['role']="nhanvien";
					echo '<script>
					window.location="'.$_SERVER['HTTP_REFERER'].'"</script>';
				}else{
					echo '<script>
					alert("Tài khoản đã bị vô hiệu quá.\nVui lòng liên hệ Quản Trị Viên.")
					window.location="'.$_SERVER['HTTP_REFERER'].'"</script>';
				}
			}else{
				echo '<script>
				window.location="'.$_SERVER['HTTP_REFERER'].'"
				alert("Tên đăng nhập không tồn tại hoặc mật khẩu không chính xác")</script>';
			}
		}
	}
 ?>
