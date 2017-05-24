
<?php
	if(isset($_GET['mamon']))
	{
		//Get duoc ma mon
		$mamon_chitietmonan=$_GET['mamon'];
		/*$sql_monan_load_tk="select distinct danhsachmonan.manhahang, monan.hinhanh, monan.danhgia, giatien, monan.tenmon, nhahang.hinh, tennhahang, vitri from nhahang,danhsachmonan,danhsachmonan_support,monan 
		where nhahang.manhahang=danhsachmonan.manhahang 
		and danhsachmonan.madanhsach=danhsachmonan_support.madanhsach 
		and danhsachmonan_support.mamon=monan.mamon 
		and monan.tenmon like '%$mamon_chitietmonan%' 
		and nhahang.vitri like '%$vitri_load_tk%' order by monan.danhgia desc";*/
		$sql_mamon_chitietmonan="select distinct danhsachmonan.manhahang, monan.hinhanh, monan.danhgia,nhahang.danhgia dgnhahang, giatien, monan.tenmon, nhahang.hinh, tennhahang, vitri from nhahang,danhsachmonan,danhsachmonan_support,monan where nhahang.manhahang=danhsachmonan.manhahang and danhsachmonan.madanhsach=danhsachmonan_support.madanhsach and danhsachmonan_support.mamon=monan.mamon and monan.mamon=$mamon_chitietmonan";
		$query_mamon_chitietmonan=mysql_query($sql_mamon_chitietmonan);
		include('modules/chitietmonan.php');
	}
	else{
		$maloai_danhsachmonan=$_GET['maloai'];
		if($maloai_danhsachmonan==0)
		{
			$maloai_danhsachmonan="";
		}
		else{
			$maloai_danhsachmonan="where maloai=$maloai_danhsachmonan";
		}
		$sql_monan="select * from monan ".$maloai_danhsachmonan;
		$query=mysql_query($sql_monan);
	
		include("modules/danhsachmonan.php");
	}
?>
