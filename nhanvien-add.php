<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Quản trị nhân viên</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" href="./css/trangcanhan.css">
</head>
<body>
	<?php require 'ketnoi.php'; ?>
    <div class="container-fluid">
        <div class="container mainContainer">
            <div class="row">
                <?php require 'menu-canhan.php'; ?>
                <div class="col-md-10">
                    <div class="main-content">
                        <div class="row">
                            <div class="col-12">
                                <div class="title-content">
                                    Thêm tài khoản mới cho nhân viên
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <form action="xuly-nhanvien-add.php" method="post" accept-charset="utf-8">
                                	<div class="row">
                                		<div class="col">
                                			<div class="form-group">
                                				<label for="TenDN">Tên đăng nhập</label>
                                				<input type="text" name="TenDN" placeholder="Tên đăng nhập..." required="" class="form-control">
                                			</div>
                                		</div>
                                	</div>
                                	<div class="row">
                                		<div class="col">
                                			<div class="form-group">
                                				<label for="MatKhau">Mật khẩu</label>
                                				<input type="password" name="MatKhau" placeholder="Mật khẩu..." required="" class="form-control">
                                			</div>
                                		</div>
                                	</div>
                                	<div class="row">
                                		<div class="col">
                                			<button type="submit" class="btn btn-success">Thêm tài khoản</button>
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

<?php require 'footer.php'; ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>