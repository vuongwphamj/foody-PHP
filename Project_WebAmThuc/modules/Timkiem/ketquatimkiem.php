
<?php
	$monan_tk="Bò";
	$vitri_tk="";
	$sql_nhahang_tk="select distinct danhsachmonan.manhahang, monan.hinhanh, monan.tenmon, nhahang.hinh, tennhahang, vitri from nhahang,danhsachmonan,danhsachmonan_support,monan where nhahang.manhahang=danhsachmonan.manhahang and danhsachmonan.madanhsach=danhsachmonan_support.madanhsach and danhsachmonan_support.mamon=monan.mamon and monan.tenmon like '%$monan_tk%' and nhahang.vitri like '%$vitri_tk%'";
	$query_nhahang_tk=mysql_query($sql_nhahang_tk);
	while($nhahang_tk=mysql_fetch_array($query_nhahang_tk))
	{
		//print_r($nhahang_tk);
?>
<div class="row">
 <div class="col-sm-4"> 
      <img src="image/mon_an_tieu_bieu/<?php echo $nhahang_tk['hinhanh'] ?>" class="img-responsive" style="width:360px; height:192px; margin-top:30px" alt="Image">
      <p class="name_of_food">Món ăn <?php echo $nhahang_tk['tenmon'] ?></p>    
 </div>
 <div class="col-sm-8" style="margin-top:30px; background-color: rgb(204,204,204);">
 	  <h4><?php echo $nhahang_tk['tennhahang'] ?></h4>
      <h6><?php echo $nhahang_tk['vitri'] ?></h6>
      <p class="name_of_food">Thông tin nhà hàng</p>    
 </div>
</div>
<?php
	}
?>