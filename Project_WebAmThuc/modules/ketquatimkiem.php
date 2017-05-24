
<?php
	include('../controlers/config.php');
	$monan_load_tk=$_POST['name'];
	$vitri_load_tk=$_POST['vitri'];
	if($vitri_load_tk=="Chọn vị trí của bạn")
	{
		$vitri_load_tk="";
	}	
	//$monan_load_tk="1234 Vương phạm";
	//echo"<hr/>";
	//var_dump($monan_load_tk);
	//var_dump($vitri_load_tk);
	//echo"<hr/>";
	//$vitri_tk="";
	//$sql_nhahang_tk="select distinct danhsachmonan.manhahang, monan.hinhanh, monan.tenmon, nhahang.hinh, tennhahang, vitri from nhahang,danhsachmonan,danhsachmonan_support,monan where nhahang.manhahang=danhsachmonan.manhahang and danhsachmonan.madanhsach=danhsachmonan_support.madanhsach and danhsachmonan_support.mamon=monan.mamon and monan.tenmon like '%$monan_tk%' and nhahang.vitri like '%$vitri_tk%'";
	$sql_monan_load_tk="select distinct danhsachmonan.manhahang, monan.mamon, monan.hinhanh, monan.danhgia, giatien, monan.tenmon, nhahang.hinh, tennhahang, vitri from nhahang,danhsachmonan,danhsachmonan_support,monan where nhahang.manhahang=danhsachmonan.manhahang and danhsachmonan.madanhsach=danhsachmonan_support.madanhsach and danhsachmonan_support.mamon=monan.mamon and monan.tenmon like '%$monan_load_tk%' and nhahang.vitri like '%$vitri_load_tk%' order by monan.danhgia desc";
	$query_monan_load_tk=mysql_query($sql_monan_load_tk);
	$kt=0;
	while($monan_load_tk=mysql_fetch_array($query_monan_load_tk))
	{
		$kt=1;
		//print_r($nhahang_tk);
?>
<a style="text-decoration:none;" href="index.php?trang=monan&mamon=<?php echo $monan_load_tk['mamon'] ?>">
<div class="row ketquachitiet">
 <div class="col-sm-4"> 
      
      	<img src="image/mon_an_tieu_bieu/<?php echo $monan_load_tk['hinhanh'] ?>" class="img-responsive" style="width:360px; height:192px; margin-top:30px" alt="Image">
      
      <div style="margin-top: 5px;">
            	<?php
					$k1=$monan_load_tk['danhgia'];
					$k2=5-$k1;
					while($k1)
					{
				?>
                	<img src="image/star_rate/star_rate_yellow.png" style="width:20px; height:20px;"/>
                <?php
						$k1=$k1-1;
					}
					while($k2)
					{
				?>
                <img src="image/star_rate/star_rate_empty.png" style="width:20px; height:20px;"/>
				<?php
						$k2=$k2-1;
					}
				?>
            </div>
      
 </div>
 <div class="col-sm-8" style="margin-top:30px;">
 	  <h1 class="name_of_food">Món ăn <?php echo $monan_load_tk['tenmon'] ?></h1>    
 	  <h4><?php echo $monan_load_tk['tennhahang'] ?></h4>
      <h6><?php echo $monan_load_tk['vitri'] ?></h6>
      <p class="name_of_food">Thông tin nhà hàng</p>    
 </div>
</div>
</a>
<?php
	}
	if(!$kt)
	{
		?>
        <h1>Không tìm thấy món ăn của bạn!!!</h1>
        <?php
	}
?>
