<?php
	include('../controlers/config.php');
	//$sql = "select * from monan where tenmon like '%".$_POST['name']."%'";
	//$query=mysql_query($sql);
	$monan_tk=$_POST['name'];
	//var_dump($monan_tk);
	//$vitri_tk=$_POST['name'];
	$sql_monan_tk="select distinct danhsachmonan.manhahang, monan.mamon, monan.hinhanh, monan.danhgia, giatien, monan.tenmon, nhahang.hinh, tennhahang, vitri from nhahang,danhsachmonan,danhsachmonan_support,monan where nhahang.manhahang=danhsachmonan.manhahang and danhsachmonan.madanhsach=danhsachmonan_support.madanhsach and danhsachmonan_support.mamon=monan.mamon and monan.tenmon like '%$monan_tk%' ";
	//and nhahang.vitri like '%$vitri_tk%'
	$query_monan_tk=mysql_query($sql_monan_tk);
	while($monan_nhahang_tk=mysql_fetch_array($query_monan_tk))
	  {
	  ?>
        <div class="row monan_search" style="max-width:484px;">
          <div class="col-sm-4">
          <a style="text-decoration:none;" href="index.php?trang=monan&mamon=<?php echo $monan_nhahang_tk['mamon'] ?>">
          	<img src="image/mon_an_tieu_bieu/<?php echo $monan_nhahang_tk['hinhanh'] ?>" class="img-responsive" style=" padding-top:5px ;width:150px; height:95px;">
            
            <div style="margin-top: 5px;">
            	<?php
					$k1=$monan_nhahang_tk['danhgia'];
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
          <div class="col-sm-8" align="left">
          	<h4><?php echo $monan_nhahang_tk['tenmon'] ?></h4>
            <h5><?php echo $monan_nhahang_tk['giatien'] ?> VNĐ</h5>
            <div>
            	<h5><?php echo $monan_nhahang_tk['tennhahang'] ?></h5>
                <h6><?php echo $monan_nhahang_tk['vitri'] ?></h6>
            </div>
          	</div>
          </a>
          </div>
        </div>
        <hr />
      <?php
	  }
	  ?>