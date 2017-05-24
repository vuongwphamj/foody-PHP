<?php
	$chitietnhahang=mysql_fetch_array($query_manhahang_chitietmonan);
	//var_dump($chitietnhahang);
?>
<div class="container text-center timkiem" style="padding-bottom: 0px;">
	<div class="col-sm-1"></div>
	<div class="col-sm-10" style="height:auto; padding:10px; border: 2px solid #ccc;">
    	<div style="display: flex;">
            <div class="col-sm-6" style="display: flex;">
                <img src="image/nha_hang/<?php echo $chitietnhahang['hinh'] ?>" class="img-responsive" style="width:400px; height:250px" />
                
            </div>
            <div class="col-sm-6" align="center">
                <h1><?php echo $chitietnhahang['tennhahang'] ?></h1>
                <h4><?php echo $chitietnhahang['vitri'] ?></h4>
                <h3>Đánh giá: 
                    <?php
                    $k1=$chitietnhahang['dgnhahang'];
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
                </h3>
                
            </div>
        </div>
        <hr />
        <div>
        	<div>
        		<h1>Danh sách món ăn tiêu biểu</h1>
            </div>
            <hr/>
            <div style="display:flex; height:auto;padding:10px; border: 1px solid #eee;">
            	<div class="col-sm-2">
                	<ul class="nav">
                        <li><a data-toggle="tab" href="#menu0">Menu0</a></li>
                        <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
                        <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
                        <li><a data-toggle="tab" href="#menu3">Menu 3</a></li>
	                </ul>
                </div>
                <div style="border-right: 0.5px solid #ccc; margin-left: 10px;"></div>
                <div class="col-sm-10">
                	<div class="tab-content">
                    <!--Menu monan-->
                        <div id="menu0" class="tab-pane fade in active">
                          <div class="row">
                                <div style="display:flex; padding:5px;">
                                    <div class="col-sm-6">
                                      <img class="img_nhahang_monan img-responsive"" src="image/mon_an_tieu_bieu/ga.jpg"/>
                                    </div>
                                    <div class="col-sm-6">
                                    	<h2>Tên món ăn</h2>
                                        <h5>Giá tiền: </h5>
                                        <h4>Đánh giá: 
                                        	<?php
											$k1=4;
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
                                        </h4>
                                    </div>
                                </div>
                                <div style="display:flex; padding:5px;">
                                    <div class="col-sm-6">
                                    	<h2>Tên món ăn</h2>
                                        <h5>Giá tiền: </h5>
                                        <h4>Đánh giá: 
                                        	<?php
											$k1=4;
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
                                        </h4>
                                    </div>
                                    <div class="col-sm-6">
                                      <img class="img_nhahang_monan img-responsive" src="image/mon_an_tieu_bieu/ga.jpg"/>
                                    </div>
                                </div>
                                <div style="display:flex; padding:5px;">
                                    <div class="col-sm-6">
                                      <img class="img_nhahang_monan img-responsive" src="image/mon_an_tieu_bieu/ga.jpg"/>
                                    </div>
                                    <div class="col-sm-6">
                                    	<h2>Tên món ăn</h2>
                                        <h5>Giá tiền: </h5>
                                        <h4>Đánh giá: 
                                        	<?php
											$k1=4;
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
                                        </h4>
                                    </div>
                                </div>
                                
                          </div>
                        </div>
                        
                        <div id="menu1" class="tab-pane fade">
                          <div class="row">
                                <div style="display:flex; padding:5px;">
                                    <div class="col-sm-6">
                                      <img class="img_nhahang_monan" src="image/mon_an_tieu_bieu/ga.jpg"/>
                                    </div>
                                    <div class="col-sm-6">
                                    </div>
                                </div>
                                <div style="display:flex; padding:5px;">
                                    <div class="col-sm-6">
                                    </div>
                                    <div class="col-sm-6">
                                      <img class="img_nhahang_monan" src="image/mon_an_tieu_bieu/heo.jpg"/>
                                    </div>
                                </div>
                                <div style="display:flex; padding:5px;">
                                    <div class="col-sm-6">
                                      <img class="img_nhahang_monan" src="image/mon_an_tieu_bieu/bo.jpg"/>
                                    </div>
                                    <div class="col-sm-6">
                                    </div>
                                </div>    
                          </div>
                        </div>
                        <!--<div id="menu1" class="tab-pane fade">
                          <h3>Menu 1</h3>
                          <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        <div id="menu2" class="tab-pane fade">
                          <h3>Menu 2</h3>
                          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                        </div>
                        <div id="menu3" class="tab-pane fade">
                          <h3>Menu 3</h3>
                          <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        </div>-->
                   <!--Menu monan end-->     
                    </div>
                </div>
            </div>
        </div> 
    </div>
    <div class="col-sm-1"></div>
</div> <br/>