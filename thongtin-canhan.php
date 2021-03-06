<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php echo '<title>Tường của '.$_SESSION['username'].'</title>'; ?>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">   
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" href="./css/trangcanhan.css">
</head>
<body>
	<?php 
		include 'mainMenu.php';
		include 'ketnoi.php';
	 ?>
	  <div class="container-fluid">
		 <div class="container mainContainer">
		 	<div class="row">
		 		<?php require 'menu-canhan.php'; ?>
		 		<div class="col-md-10">
		 			<div class="main-content">		 				
		 				
		 			
	<div class="row">
	 	<div class="col-12">
	 		<div class="title-content">
	 			Thông tin cá nhân
	 		</div>
	 	</div>
	 	<div class="col-12">
	 		<?php 
	 			$sql="select * from khachhang where ID='".$_SESSION['id']."'";
	 			$result=mysqli_query($ketnoi,$sql);
	 			$row=mysqli_fetch_array($result);
 				echo '<div class="col-12">
 					Mã khách hàng: '.$row['MaKH'].'
 				</div>';
 				echo '<div class="col-12 mt-3">
 					Họ và tên: '.@$row['HovaTen'].'
 				</div>';
 				echo '<div class="col-12 mt-3">
 					Giới Tính: '.@$row['GioiTinh'].'
 				</div>';
 				echo '<div class="col-12 mt-3">
 					Năm sinh: '.@$row['NamSinh'].'
 				</div>';
 				echo '<div class="col-12 mt-3">
 					Số điện thoại: '.@$row['SDT'].'
 				</div>';
 				echo '<div class="col-12 mt-3">
 					Địa chỉ: '.@$row['DiaChi'].'
 				</div>';
	 		 ?>
	 	</div>
	</div>

	 <div class="row mt-4">
	 	<div class="col-12">
	 		<div class="title-content">
	 			Đổi thông tin cá nhân
	 		</div>
	 	</div>
	 </div>
	 <div class="row">
	 	<div class="col-12">
	 		<div class="container card pb-2">
		 		<form action="xuly-canhan-sua.php" method="post" accept-charset="utf-8">
		 			<div class="row">
		 				<div class="col">
		 					<div class="form-group">
		 						<label for="hoTen">Họ và tên</label>
		 						<input type="text" name="hoTen" placeholder="Nhập họ và tên của bạn..." id="hoTenID" class="form-control" required="">
		 					</div>
		 				</div>
		 			</div>
		 			<div class="row">
		 				<div class="col">
		 					<div class="form-group">
		 						<label>Giới tính</label><br>
		 						<input type="radio" name="gioiTinh" value="Nam" id="namID" checked="">
		 						<label for="namID">Nam</label><br>
		 						<input type="radio" name="gioiTinh" value="Nữ" id="nuID">
		 						<label for="nuID">Nữ</label>
		 					</div>
		 				</div>
		 			</div>
		 			<div class="row">
		 				<div class="col">
		 					<div class="form-group">
		 						<label for="namSinh">Năm sinh</label>
		 						<input type="date" name="namSinh" placeholder="Nhập năm sinh..." class="form-control" required="">
		 					</div>
		 				</div>
		 			</div>
		 			<div class="row">
		 				<div class="col">
		 					<div class="form-group">
		 						<label for="sdt">Số điện thoại</label>
		 						<input type="text" name="sdt" placeholder="Nhập số điện thoại của bạn..." class="form-control" required="" id="sdtID">
		 						<div class="invalid-feedback" id="sdt-feedback">✖&nbsp; Số điện thoại không hợp lệ.</div>
		 					</div>
		 				</div>
		 			</div>
		 			<div class="row">
		 				<div class="col">
		 					<div class="form-group">
		 						<label for="diaChi">Địa chỉ</label>
		 						<textarea name="diaChi" class="form-control" id="diaChiID" placeholder="Nhập địa chỉ của bạn..." required=""></textarea>		
		 					</div>
		 				</div>
		 			</div>
		 			<div class="row">
		 				<div class="col">
		 					<button type="submit" class="btn btn-primary" onclick="return checkData();">Lưu</button>
		 				</div>
		 			</div>
		 		</form>
		 	</div>
	 	</div>
	 </div>
	 </div>
		 		</div>
		 	</div>
		 </div>
	</div>
<?php require 'footer.php'; ?>
	<script>
		function checkData() {
			$("#sdt-feedback").hide()
			var sdt=document.getElementById('sdtID');
			if(isNaN(sdt.value) || sdt.value.length!=10){
				$("#sdt-feedback").show();
				return false;
			}
		}
	</script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script>
    	var prevScrollpos = window.pageYOffset;
		window.onscroll = function() {
			var currentScrollPos = window.pageYOffset;
			if (prevScrollpos > currentScrollPos) {
				document.getElementById("navbar").style.top = "0";
			} else {
				document.getElementById("navbar").style.top = "-60px";
			}
			prevScrollpos = currentScrollPos;
		}
    </script>
</body>
</html>