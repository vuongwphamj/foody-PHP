
<?php 
	if(isset($_GET['manhahang']))
	{
		$manhahang_chitietmonan=$_GET['manhahang'];
		$sql_manhahang_chitietmonan="select distinct danhsachmonan.manhahang, monan.hinhanh, monan.danhgia,nhahang.danhgia dgnhahang, giatien, monan.tenmon, nhahang.hinh, tennhahang, vitri from nhahang,danhsachmonan,danhsachmonan_support,monan where nhahang.manhahang=danhsachmonan.manhahang and danhsachmonan.madanhsach=danhsachmonan_support.madanhsach and danhsachmonan_support.mamon=monan.mamon and nhahang.manhahang=$manhahang_chitietmonan";
		$query_manhahang_chitietmonan=mysql_query($sql_manhahang_chitietmonan);
		//var_dump(mysql_fetch_array($query_manhahang_chitietmonan));
		include("modules/nhahang/chitietnhahang.php");
	}else
	{
		include("modules/nhahang/danhsachnhahang.php");
	}
?>
