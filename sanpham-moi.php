<hr>
<!-- <link rel="stylesheet" href="./css/laptop-1440.css" media="screen and (min-device-width: 1024px) and (max-device-width: 1440px)"> -->
<div class="container mt-4 mb-2">
	<div class="row">
		<div class="col-12 text-center">
			<h1 class="gold-man display-4 wow animate__bounceInUp" style="text-transform: uppercase;font-size: 250%; text-shadow: 1px 1px 20px;">Sản phẩm mới</h1>
		</div>
	</div>
	<hr style="width: 10%">
	<!-- <div class="row mt-4 text-justify" style="background-color: yellow"> -->
		<div class="container p-4" style="background-color: white; position: relative;">
			<!-- <div class="row float-right" style="background-color: red; position: absolute; right: 0;">
			 	<a href="sanpham-moi-all.php">Xem thêm</a>
			</div> -->
			<a href="sanpham-moi-all.php" style="position: absolute; right: 0; top: 0; margin-top: 10px; margin-left: 10px; margin-right: 10px;">Xem thêm</a>
			<div class="container">
			<div class="row justify-content-center">
				<?php 
					require 'ketnoi.php';
					$sql="select * from sanpham order by MaSP DESC limit 4";
					$result=mysqli_query($ketnoi,$sql);
					$count=0;
					while($row=mysqli_fetch_array($result)){
						echo '<div class="card block wow animate__fadeIn">';
							echo '<a href="thongtin-sanpham.php?sp='.$row['MaSP'].'">';
								echo '<div class="imgg">';
									echo '<img src="'.$row['HinhAnh'].'" alt="" class="imggs">';
								echo '</div>';
								echo '<div class="namee">';
									echo $row['TenSP'];
								echo '</div>';
								echo '<div class="price">';
									echo number_format($row['GiaTien'],'0',',','.');
								echo '</div>';
							echo '</a>';
						echo '</div>';
					}
				 ?>
				</div>
			 </div>

			<!-- <div class="row justify-content-center">
				<div class="card block">
					<a href="#">
						<div class="imgg">
							
						</div>
						<div class="namee">
							
						</div>
						<div class="price">
							
						</div>
					</a>
				</div>
			</div> -->
		</div>
	<!-- </div> -->
</div>


<style>
	@media only screen and (min-width: 1440px){
		.block{
			display: block;
			width: 15%;
			height: auto;
			margin-top: .7rem;
			margin-bottom: .7rem;
			margin-right: 2rem;
			margin-left: 2rem;
			padding: .5rem;
			background-color: transparent;
			vertical-align: middle;
			overflow: visible;
			border-radius: 1rem;
			transition: scale(1);
			text-decoration: none;
			position: relative;
		}
		a,a:hover{
			text-decoration: none;
			color: inherit;
		}
		.block:hover{
			transform: scale(1.1);
		}
		.imgg{
			width: 100%;
			height: 150px;
			top: 0;
			left: 0;
			/*bottom: 0;*/
			vertical-align: middle;
		}
		.imggs{
			width: 100%;
			height: 100%;
			border-radius: 1rem;
			vertical-align: middle;
			position: relative;
		}
		.namee{
			background-color: transparent;
			vertical-align: middle;
			position: relative;
			overflow: hidden;
			display: inline-block;
			display: -webkit-box;
			text-overflow: ellipsis;
			-webkit-box-orient: vertical;
			-webkit-line-clamp: 2;
			font-size: 18px;
			margin-bottom: 15%;
		}
		.price{
			display: block;
			position: absolute;
			bottom: 0;
			right: 0;
			margin-right: .5rem;
			overflow: hidden;
			color: red;
			font-weight: bold;
			text-align: right;
			font-size: 20px;
		}
	}
</style>


<style>
	@media only screen and (min-width: 1024px) and (max-width: 1440px){
		.block{
			display: block;
			width: 15%;
			height: auto;
			margin-top: .7rem;
			margin-bottom: .7rem;
			margin-right: 2rem;
			margin-left: 2rem;
			padding: .5rem;
			background-color: transparent;
			vertical-align: middle;
			overflow: visible;
			border-radius: 1rem;
			transition: scale(1);
			text-decoration: none;
			position: relative;
		}
		a,a:hover{
			text-decoration: none;
			color: inherit;
		}
		.block:hover{
			transform: scale(1.1);
		}
		.imgg{
			width: 100%;
			height: 150px;
			top: 0;
			left: 0;
			/*bottom: 0;*/
			vertical-align: middle;
		}
		.imggs{
			width: 100%;
			height: 100%;
			border-radius: 1rem;
			vertical-align: middle;
			position: relative;
		}
		.namee{
			background-color: transparent;
			vertical-align: middle;
			position: relative;
			overflow: hidden;
			display: inline-block;
			display: -webkit-box;
			text-overflow: ellipsis;
			-webkit-box-orient: vertical;
			-webkit-line-clamp: 2;
			font-size: 18px;
			margin-bottom: 15%;
		}
		.price{
			display: block;
			position: absolute;
			bottom: 0;
			right: 0;
			margin-right: .5rem;
			overflow: hidden;
			color: red;
			font-weight: bold;
			text-align: right;
			font-size: 20px;
		}
	}
</style>

<style>
	@media only screen and (min-width: 260px) and (max-width: 320px){
		.block{
			display: block;
			width: 40.5%;
			height: auto;
			margin: .7rem;
			padding: .5rem;
			background-color: transparent;
			vertical-align: middle;
			overflow: visible;
			border-radius: 1rem;
			transition: scale(1);
			text-decoration: none;
			position: relative;
		}
		a,a:hover{
			text-decoration: none;
			color: inherit;
		}
		.block:hover{
			transform: scale(1.1);
		}
		.imgg{
			width: 100%;
			height: 120px;
			top: 0;
			left: 0;
			/*bottom: 0;*/
			vertical-align: middle;
		}
		.imggs{
			width: 100%;
			height: 100%;
			border-radius: 1rem;
			vertical-align: middle;
			position: relative;
		}
		.namee{
			background-color: transparent;
			vertical-align: middle;
			position: relative;
			overflow: hidden;
			display: inline-block;
			display: -webkit-box;
			text-overflow: ellipsis;
			-webkit-box-orient: vertical;
			-webkit-line-clamp: 2;
			font-size: 15px;
			margin-bottom: 15%;
		}
		.price{
			display: block;
			position: absolute;
			bottom: 0;
			right: 0;
			margin-right: .5rem;
			overflow: hidden;
			color: red;
			font-weight: bold;
			text-align: right;
			font-size: 15px;
		}
	}
</style>

<style>
	@media only screen and (min-width: 320px) and (max-width: 375px){
		.block{
			display: block;
			width: 40.5%;
			height: auto;
			margin: .7rem;
			padding: .5rem;
			background-color: transparent;
			vertical-align: middle;
			overflow: visible;
			border-radius: 1rem;
			transition: scale(1);
			text-decoration: none;
			position: relative;
		}
		a,a:hover{
			text-decoration: none;
			color: inherit;
		}
		.block:hover{
			transform: scale(1.1);
		}
		.imgg{
			width: 100%;
			height: 120px;
			top: 0;
			left: 0;
			/*bottom: 0;*/
			vertical-align: middle;
		}
		.imggs{
			width: 100%;
			height: 100%;
			border-radius: 1rem;
			vertical-align: middle;
			position: relative;
		}
		.namee{
			background-color: transparent;
			vertical-align: middle;
			position: relative;
			overflow: hidden;
			display: inline-block;
			display: -webkit-box;
			text-overflow: ellipsis;
			-webkit-box-orient: vertical;
			-webkit-line-clamp: 2;
			font-size: 15px;
			margin-bottom: 15%;
		}
		.price{
			display: block;
			position: absolute;
			bottom: 0;
			right: 0;
			margin-right: .5rem;
			overflow: hidden;
			color: red;
			font-weight: bold;
			text-align: right;
			font-size: 15px;
		}
	}
</style>

<style>
	@media only screen and (min-width: 375px) and (max-width: 425px){
		.block{
			display: block;
			width: 40.5%;
			height: auto;
			margin: .7rem;
			padding: .5rem;
			background-color: transparent;
			vertical-align: middle;
			overflow: visible;
			border-radius: 1rem;
			transition: scale(1);
			text-decoration: none;
			position: relative;
		}
		a,a:hover{
			text-decoration: none;
			color: inherit;
		}
		.block:hover{
			transform: scale(1.1);
		}
		.imgg{
			width: 100%;
			height: 120px;
			top: 0;
			left: 0;
			/*bottom: 0;*/
			vertical-align: middle;
		}
		.imggs{
			width: 100%;
			height: 100%;
			border-radius: 1rem;
			vertical-align: middle;
			position: relative;
		}
		.namee{
			background-color: transparent;
			vertical-align: middle;
			position: relative;
			overflow: hidden;
			display: inline-block;
			display: -webkit-box;
			text-overflow: ellipsis;
			-webkit-box-orient: vertical;
			-webkit-line-clamp: 2;
			font-size: 16px;
			margin-bottom: 15%;
		}
		.price{
			display: block;
			position: absolute;
			bottom: 0;
			right: 0;
			margin-right: .5rem;
			overflow: hidden;
			color: red;
			font-weight: bold;
			text-align: right;
			font-size: 18px;
		}
	}
</style>

<style>
	@media only screen and (min-width: 425px) and (max-width: 768px){
		.block{
			display: block;
			width: 42.5%;
			height: auto;
			margin: .7rem;
			padding: .5rem;
			background-color: transparent;
			vertical-align: middle;
			overflow: visible;
			border-radius: 1rem;
			transition: scale(1);
			text-decoration: none;
			position: relative;
		}
		a,a:hover{
			text-decoration: none;
			color: inherit;
		}
		.block:hover{
			transform: scale(1.1);
		}
		.imgg{
			width: 100%;
			height: 200px;
			top: 0;
			left: 0;
			/*bottom: 0;*/
			vertical-align: middle;
		}
		.imggs{
			width: 100%;
			height: 100%;
			border-radius: 1rem;
			vertical-align: middle;
			position: relative;
		}
		.namee{
			background-color: transparent;
			vertical-align: middle;
			position: relative;
			overflow: hidden;
			display: inline-block;
			display: -webkit-box;
			text-overflow: ellipsis;
			-webkit-box-orient: vertical;
			-webkit-line-clamp: 2;
			font-size: 24px;
			margin-bottom: 15%;
		}
		.price{
			display: block;
			position: absolute;
			bottom: 0;
			right: 0;
			margin-right: .5rem;
			overflow: hidden;
			color: red;
			font-weight: bold;
			text-align: right;
			font-size: 26px;
		}
	}
</style>

<style>
	@media only screen and (min-width: 768px) and (max-width: 1024px){
		.block{
			display: block;
			width: 20.8%;
			height: auto;
			margin: .7rem;
			padding: .5rem;
			background-color: transparent;
			vertical-align: middle;
			overflow: visible;
			border-radius: 1rem;
			transition: scale(1);
			text-decoration: none;
			position: relative;
		}
		a,a:hover{
			text-decoration: none;
			color: inherit;
		}
		.block:hover{
			transform: scale(1.1);
		}
		.imgg{
			width: 100%;
			height: 200px;
			top: 0;
			left: 0;
			/*bottom: 0;*/
			vertical-align: middle;
		}
		.imggs{
			width: 100%;
			height: 100%;
			border-radius: 1rem;
			vertical-align: middle;
			position: relative;
		}
		.namee{
			background-color: transparent;
			vertical-align: middle;
			position: relative;
			overflow: hidden;
			display: inline-block;
			display: -webkit-box;
			text-overflow: ellipsis;
			-webkit-box-orient: vertical;
			-webkit-line-clamp: 2;
			font-size: 24px;
			margin-bottom: 15%;
		}
		.price{
			display: block;
			position: absolute;
			bottom: 0;
			right: 0;
			margin-right: .5rem;
			overflow: hidden;
			color: red;
			font-weight: bold;
			text-align: right;
			font-size: 26px;
		}
	}
</style>