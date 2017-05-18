<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ẩm Thực</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!-- Boostrap Template -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<?php
include('controlers/config.php');
if(isset($_GET['trang']))
	{
		$trang=$_GET['trang'];
	}else
	{
		$trang="trangchu";
	}
	$link_trang="modules/" . $trang . ".php";
?>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">Vương Phạm Food</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="<?php if($trang=="trangchu") echo "active" ?>"><a href="index.php?trang=trangchu">Trang Chủ</a></li>
        <li class="<?php if($trang=="danhsachmonan") echo "active" ?>"><a href="index.php?trang=danhsachmonan">Món Ăn</a></li>
        <li class="<?php if($trang=="danhsachnhahang") echo "active" ?>"><a href="index.php?trang=danhsachnhahang">Nhà Hàng</a></li>
        <li class="<?php if($trang=="lienhe") echo "active" ?>"><a href="index.php?trang=lienhe">Liên Hệ</a></li>
        <li class="<?php if($trang=="timkiem") echo "active" ?>"><a href="index.php?trang=timkiem">Tìm Kiếm</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      	<li>
        	<form>
            	<input class="form-control" type="text" name="search" style="margin-top:8px;" placeholder="Bạn muốn ăn gì?">
            </form>
            
        </li>
        <li><a href="#"><i class="fa fa-search"></i> Search</a></li>
      </ul>
    </div>
  </div>
</nav>
  <?php
  	//include('modules/trangchu.php');
	//include('modules/danhsachloaimonan.php');
	//include('modules/danhsachnhahang.php');
	//include('modules/lienhe.php');
	//include('modules/timkiem.php');
	include($link_trang);
  ?>


<footer class="container-fluid text-center">
  <div class="col-lg-3 footer">
      <h5>Vương Phạm Food</h5>
  </div>
  <div class="col-lg-6 footer footercenter" align="center">
      <h5>www.vuongphamfood.com</h5>
  </div>
  <div class="col-lg-3 footer" align="right">
      <h5><marquee>Copyright &copy; 2017 by Vuong Pham Food</marquee></h5>
  </div>
</footer>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.js"></script>
<script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="bootstrap-3.3.7-dist/js/npm.js"></script>
<script type="text/javascript" src="js/javascript.js"></script>
</body>
</html>
