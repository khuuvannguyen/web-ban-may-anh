<?php 
	$ketnoi=mysqli_connect("localhost","root","");
	$db=mysqli_select_db($ketnoi,"shop");
	mysqli_query($ketnoi,"SET NAMES 'utf8'");
 ?>