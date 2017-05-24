<div class="container text-center timkiem" style="padding-bottom: 0px;">
	<?php
	//var_dump($chitietmonan=mysql_fetch_array($query_mamon_chitietmonan));
	$chitietmonan=mysql_fetch_array($query_mamon_chitietmonan);
	
	//var_dump($chitietmonan);
	?>
    <div style="display:flex">
    	<div class="col-sm-5" style="height:350px; padding: 10px; border: 2px solid #ccc; border-right:0px;">
        	<img src="image/mon_an_tieu_bieu/<?php echo $chitietmonan['hinhanh'] ?>" style="width:400px; height:250px" />
            <h2 align="" style="margin:5px;"><?php echo $chitietmonan['tenmon'] ?></h2>
            <div style="display:flex">
            	<div class="col-sm-6" align="right">
            		<h4>Giá tiền: <?php echo $chitietmonan['giatien'] ?> VNĐ</h4>	
                </div>
                <div class="col-sm-6" align="right" style="padding-top: 5px;">
                	<span>
                    	Đánh giá:
                        <?php
						$k1=$chitietmonan['danhgia'];
						$k2=5-$k1;
						while($k1)
						{
						?>
                    	<a href="#"><img src="image/star_rate/star_rate_yellow.png" style="width: 20px; height:20px;" /></a>
                    	<?php
						$k1=$k1-1;
						}
						while($k2)
						{
						?>
                    	
                    	<a href="#"><img src="image/star_rate/star_rate_empty.png" style="width: 20px; height:20px;"/></a>
                    	<?php
						$k2=$k2-1;
						}
						?>
                    	
                    
            		</span>    
                </div>
                
            </div>
            
        </div>
        <div class="col-sm-7" style="padding: 10px; border: 2px solid #ccc;">
        	<div style="display:flex">
            	<div class="row">
                    <div class="col-sm-7" style="margin-top:40px;">
                        <h1><a href="index.php?trang=nhahang&manhahang=<?php echo $chitietmonan['manhahang'] ?>" style="text-decoration:none; "><?php echo $chitietmonan['tennhahang'] ?></a></h1>
                        <span>
                            Đánh giá: 
                            <!--<img src="image/star_rate/star_rate_yellow.png" style="width: 20px; height:20px;" />
                        
                            <img src="image/star_rate/star_rate_yellow.png" style="width: 20px; height:20px;" />
                        
                            <img src="image/star_rate/star_rate_yellow.png" style="width: 20px; height:20px;" />
                        
                            <img src="image/star_rate/star_rate_empty.png" style="width: 20px; height:20px;"/>
                        
                            <img src="image/star_rate/star_rate_empty.png" style="width: 20px; height:20px;"/>-->
                            <?php
							$k1_nhahang=$chitietmonan['dgnhahang'];
							$k2_nhahang=5-$k1_nhahang;
							while($k1_nhahang)
							{
							?>
							<img src="image/star_rate/star_rate_yellow.png" style="width: 20px; height:20px;" />
							<?php
							$k1_nhahang=$k1_nhahang-1;
							}
							while($k2_nhahang)
							{
							?>
							<img src="image/star_rate/star_rate_empty.png" style="width: 20px; height:20px;"/>
							<?php
							$k2_nhahang=$k2_nhahang-1;
							}
							?>
                        
                        </span>
                        <h4><?php echo $chitietmonan['vitri'] ?></h4>
                        <div style="padding:10px; margin-left:20px;" align="left">
                        	<h6>Món ăn tiêu biểu:</h6>
                			<h6>Sườn non nướng, bò né, dú heo nướng,...</h6>
                		</div>
                    </div>
                    <div class="col-sm-5">
                        <a href="index.php?trang=nhahang&manhahang=<?php echo $chitietmonan['manhahang'] ?>"><img src="image/nha_hang/boomdak.jpg" style="width: 250px; height:250px; float:right;"/></a>
                    </div>
                    
                </div>	
            </div>
        </div>
    </div>
    <?php
	$kt_nhahangtt=0;
	while($chitietmonan=mysql_fetch_array($query_mamon_chitietmonan))
	{
		if($kt_nhahangtt==0)
		{
	?>
    <div align="center">
    	<h1>Nhà hàng có món tương tự</h1>
    </div>
    <div style="display:flex; border: 2px solid rgb(82,82,82); padding-top: 10px;">
    <?php
		}
		$kt_nhahangtt=1;
	?>
    	<div class="col-sm-4" style=""  align="center">
        	<a href="index.php?trang=nhahang&manhahang=<?php echo $chitietmonan['manhahang'] ?>">
            	<img src="image/nha_hang/<?php echo $chitietmonan['hinh'] ?>" style="width: 280px;height: 180px;"/>
                <h5><?php echo $chitietmonan['tennhahang'] ?></h5>
            </a>
        </div>
        <!--<div class="col-sm-4" style=""  align="center">
        	<a href="#">
            	<img src="image/nha_hang/boomdak.jpg" style="width: 280px;height: 180px;"/>
                <h5>Tên nhà hàng</h5>
            </a>
            
        </div>
        <div class="col-sm-4" style=""  align="center">
        	<a href="#">
            	<img src="image/nha_hang/hallyu.jpg" style="width: 280px;height: 180px;"/>
                <h5>Tên nhà hàng</h5>
            </a>
            
        </div>-->
    <?php
	}
	?>
    </div>
</div><br />