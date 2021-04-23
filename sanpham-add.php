<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Quản trị sản phẩm</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" href="./css/trangcanhan.css">
</head>
<body>
	<?php
		require 'ketnoi.php';
		require 'mainMenu.php';
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
                                    Thêm sản phẩm mới
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <form action="xuly-sanpham-add.php" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                                	<div class="row">
                                		<div class="col">
                                			<div class="form-group">
                                				<label for="tensp">Tên sản phẩm</label>
                                				<input type="text" name="tensp" placeholder="Nhập tên sản phẩm..." class="form-control" required="">
                                			</div>
                                		</div>
                                	</div>
                                	<div class="row">
                                		<div class="col">
                                			<div class="form-group">
                                				<label for="soluong">Số lượng</label>
                                				<input type="number" name="soluong" min="1" required="" class="form-control">
                                			</div>
                                		</div>
                                	</div>
                                	<div class="row">
                                		<div class="col">
                                			<div class="form-group">
                                				<label for="giatien">Giá tiền</label>
                                				<input type="text" name="giatien" placeholder="Nhập giá tiền cho sản phẩm..." class="form-control" required="" id="giatienID">
                                				<div class="invalid-feedback" id="giatien-feedback">✖&nbsp; Giá tiền không hợp lệ.</div>
                                			</div>
                                		</div>
                                	</div>
                                	<div class="row">
                                		<div class="col">
                                			<div class="form-group">
                                				<label for="hinhanh">Hình ảnh</label>
                                				<input type="hidden" name="MAX_FILE_SIZE" value="1000000">
                                				<input type="file" name="hinhanh" id="hinhanhID">
                                				<div class="invalid-feedback" id="hinhanh-feedback">✖&nbsp; Vui lòng chọn ảnh đại diện cho sản phẩm.</div><br>
                                				<i style="color: red;">Lưu ý: ảnh minh họa cho sản phẩm sẽ không thể thay đổi được.</i>
                                			</div>
                                		</div>
                                	</div>
                                	<div class="row">
                                		<div class="col">
                                			<div class="form-group">
                                				<label for="nsx">Nhà sản xuất</label>
                                				<select name="nsx" class="form-control" id="nsxID">
                                					<option disabled="" selected="" value="">Chọn nhà sản xuất</option>
                                					<option value="Sony">Sony</option>
                                					<option value="Nikon">Nikon</option>
                                					<option value="Canon">Canon</option>
                                				</select>
                                				<div class="invalid-feedback" id="nsx-feedback">✖&nbsp; Vui lòng chọn nhà sản xuất.</div><br>
                                				<i style="color: red;">Lưu ý: nhà sản xuất sẽ không thể thay đổi được.</i>
                                			</div>
                                		</div>
                                	</div>
                                	<div class="row">
                                		<div class="col">
                                			<div class="form-group">
                                				<label for="mota-tomtat">Mô tả tóm tắt</label>
                                				<textarea name="mota-tomtat" class="form-control" required="" rows="5" contenteditable="true"></textarea>
                                			</div>
                                		</div>
                                	</div>
                                	<div class="row">
                                		<div class="col">
                                			<div class="form-group">
                                				<label for="mota-chitiet">Mô tả chi tiết</label>
                                				<textarea name="mota-chitiet" class="form-control" required="" rows="20" contenteditable="true"></textarea>
                                			</div>
                                		</div>
                                	</div>
                                	<div class="row">
                                		<div class="col">
                                			<button type="submit" class="btn btn-primary" onclick="return checkData()">Thêm mới</button>
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
    <script>
    	function checkData() {
    		$("#giatien-feedback").hide();
    		var giatien=document.getElementById('giatienID');
			if(isNaN(giatien.value)){
				$("#giatien-feedback").show();
				alert("Dữ liệu không hợp lệ hoặc có thiếu sót");
				return false;
			}
			$("#hinhanh-feedback").hide();
			var hinhanh=document.getElementById('hinhanhID');
			if(hinhanh.value==""){
				$("#hinhanh-feedback").show();
				alert("Dữ liệu không hợp lệ hoặc có thiếu sót");
				return false;
			}
			$("#nsx-feedback").hide();
			var nsx=document.getElementById('nsxID');
			if(nsx.value==""){
				$("#nsx-feedback").show();
				alert("Dữ liệu không hợp lệ hoặc có thiếu sót");
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