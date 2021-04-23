<div class="col-md-2">
	<div class="panel panel-success">
		<div class="panel-heading">
			<div class="panel-title">
				Tài Khoản
			</div>
		</div>
		<ul class="list-group">
			<?php 
				if($_SESSION['role']=="user"){
					echo '<li class="list-group-item">
 						<a href="trangcanhan.php">Thông tin tài khoản</a>
 					</li>
 					<li class="list-group-item">
 						<a href="thongtin-canhan.php">Thông tin cá nhân</a>
 					</li>';
				}
			 ?>
			<li class="list-group-item">
				<a href="matkhau.php">Mật khẩu</a>
			</li>
		</ul>
	</div>
	<?php 
		if($_SESSION['role']=="user"){
			echo '<div class="panel panel-success">
				<div class="panel-heading">
					<div class="panel-title">
						Giỏ hàng
					</div>
				</div>
				<ul class="list-group">
					<li class="list-group-item">
						<a href="show-giohang.php">Giỏ hàng của bạn</a>
					</li>
				</ul>
			</div>';
		}
	 ?>
		<div class="panel panel-success">
			<div class="panel-heading">
				<div class="panel-title">
					Đơn hàng
				</div>
			</div>
			<ul class="list-group">
				<?php if($_SESSION['role']!="user"){ ?>
					<li class="list-group-item">
						<a href="hoadon-nhanvien-all.php">Duyệt đơn hàng</a>
					</li>
				<?php }else{ ?>
					<li class="list-group-item">
						<a href="hoadon-all.php">Đơn hàng của bạn</a>
					</li>
				<?php } ?>
			</ul>
		</div>
	<?php 
		if($_SESSION['role']!="user"){
			echo '<div class="panel panel-success">
 				<div class="panel-heading">
 					<div class="panel-title">
 						Quản trị sản phẩm
 					</div>
 				</div>
 				<ul class="list-group">
 					<li class="list-group-item">
 						<a href="sanpham-all.php">Toàn bộ sản phẩm</a>
 					</li>
 					<li class="list-group-item">
 						<a href="sanpham-add.php">Thêm mới</a>
 					</li>
 					<li class="list-group-item">
 						<a href="sanpham-edit.php">Sửa thông tin</a>
 					</li>
 				</ul>
 			</div>';
		}
		if($_SESSION['role']=="admin"){
			echo '<div class="panel panel-success">
 				<div class="panel-heading">
 					<div class="panel-title">
 						Tài khoản nhân viên
 					</div>
 				</div>
 				<ul class="list-group">
 					<li class="list-group-item">
 						<a href="nhanvien-all.php">Toàn bộ tài khoản</a>
 					</li>
 					<li class="list-group-item">
 						<a href="nhanvien-add.php">Thêm mới</a>
 					</li>
 				</ul>
 			</div>
 			<div class="panel panel-success">
 				<div class="panel-heading">
 					<div class="panel-title">
 						Tài khoản khách
 					</div>
 				</div>
 				<ul class="list-group">
 					<li class="list-group-item">
 						<a href="khach-all.php">Toàn bộ tài khoản</a>
 					</li>
 				</ul>
 			</div>';
		}
	 ?>		 			
</div>