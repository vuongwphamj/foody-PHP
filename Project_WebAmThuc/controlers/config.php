<?php
	$hostname="localhost";
	$username="root";
	$password="";
	$database="foody";
	$conn=mysql_connect($hostname,$username,$password,$database) or die("Không kết nối được");
	mysql_select_db($database,$conn);
	//chuyển đổi mã cho phù hợp định dạng font chữ
	mysql_set_charset('utf8',$conn);
?>