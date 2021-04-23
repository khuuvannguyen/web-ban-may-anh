<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">   
	<link rel="stylesheet" href="./css/animate.css">
	<title>Thử nghiệm đủ thứ</title>
</head>
<body>
	<?php 

		//Kết nối db
		$ketnoi=mysqli_connect("localhost","root","");
		$db=mysqli_select_db($ketnoi,"shop");
		mysqli_query($ketnoi,"SET NAMES 'utf8'");
		$sql="select * from sanpham";
		$result=mysqli_query($ketnoi,$sql);
		$number_of_results=mysqli_num_rows($result);

		//Số sản phẩm trên một page
		$result_per_page=5;

		//Tổng số page
		$number_of_pages=ceil($number_of_results/$result_per_page);

		//Xác định page đang mở
		if(!isset($_GET['page'])){
			$page=1;
		}else{
			$page=$_GET['page'];
		}

		//In các nút chuyển page

		//Kiểm tra tín đúng đắng của page hiện hành
		if($page < 1 || $page > $number_of_pages || !is_numeric($page)){
			echo 'Somethings was wrong <br>';
			echo '<a href="index.php?page=1">Return first page</a>';
			echo '  or <a href="index.php?page='.$number_of_pages.'">goto last page.</a>';
		}else{

			//Định nghĩa cho hàm LIMIT của SQL
			$page_first_result=($page-1)*$result_per_page;
			$sql="select * from sanpham LIMIT ".$page_first_result.",".$result_per_page;
			$result=mysqli_query($ketnoi,$sql);

			echo '<table border="1">';
				echo '<tr>';
					echo '<th>MaSP</th>';
					echo '<th>TenSP</th>';
					echo '<th>SoLuong</th>';
					echo '<th>GiaTien</th>';
					echo '<th>DonViTinh</th>';
					echo '<th>MoTaTomTat</th>';
				echo '</tr>';
			//Hiển thị sản phẩm
			while($row=mysqli_fetch_array($result)){
				echo '<tr>';
					echo '<td>'.$row['MaSP'].'</td>';
					echo '<td>'.$row['TenSP'].'</td>';
					echo '<td>'.$row['SoLuong'].'</td>';
					echo '<td>'.$row['GiaTien'].'</td>';
					echo '<td>'.$row['DonViTinh'].'</td>';
					echo '<td>'.$row['MoTaTomTat'].'</td>';
				echo '</tr>';
			}
			echo '</table>';

			//Hiển thị các nút chuyển page trước nút hiện hành
			if($page>1){
				$previous=$page-1;

				//Hiển thị nút chuyển đến page đầu
				echo '<a href="'.$_SERVER['PHP_SELF'].'?page=1">First</a> &nbsp; ';

				//Hiển thị nút Previous
				echo '<a href="'.$_SERVER['PHP_SELF'].'?page='.$previous.'">Previous  </a>';

				//Hiển thị tối đa 4 nút trước nút hiện hành
				for($i=$page-4;$i<$page;$i++){
					if($i>0){
						echo '<a href="'.$_SERVER['PHP_SELF'].'?page='.$i.'">'.$i.'</a> &nbsp; ';
					}
				}
			}

			//Để cho đẹp
			echo ''.$page.' &nbsp; ';

			//Hiển thị các nút chuyển page
			for($i=$page+1;$i<=$number_of_pages;$i++){
				echo '<a href="'.$_SERVER['PHP_SELF'].'?page='.$i.'">'.$i.'</a> &nbsp; ';

				//Hiển thị tối đa 4 nút chuyển page tính từ nút hiện hành
				if($i>=$page+4){
					break;
				}
			}

			//Hiển thị nút Next
			if($page!=$number_of_pages){
				$next=$page+1;

				//Hiển thị nút Next
				echo '<a href="'.$_SERVER['PHP_SELF'].'?page='.$next.'">Next</a> ';

				//Hiển thị nút chuyển đến page cuối
				echo '<a href="'.$_SERVER['PHP_SELF'].'?page='.$number_of_pages.'">Last</a>';

			}
		}
	 ?>

	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="./js/wow.min.js"></script>
    <script>
    	new WOW().init();
    </script>
</body>
</html>