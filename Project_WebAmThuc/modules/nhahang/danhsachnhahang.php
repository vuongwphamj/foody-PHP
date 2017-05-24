<div class="container text-center timkiem" style="padding-bottom: 0px;">
<?php
	$sql_nhahang="select * from nhahang";
	$query=mysql_query($sql_nhahang);
?>
<h3>Danh Sách Nhà Hàng</h3><br>
    <div class="row">
      <?php
	  while($nhahang=mysql_fetch_array($query))
	  {
	  ?>
      <div class="col-sm-4">
      	<a href="index.php?trang=nhahang&manhahang=<?php echo $nhahang['manhahang'] ?>">
        <div class="panel panel-primary">
          <div class="panel-heading"><?php echo $nhahang['tennhahang'] ?></div>
          <div class="panel-body"><img src="image/nha_hang/<?php echo $nhahang['hinh'] ?>" style="width:315px; height:240px" class="img_mon_an" alt="Image" ></div>
          <div class="panel-footer"><?php echo $nhahang['vitri'] ?></div>
        </div>
        </a>
      </div>
      <?php
	  }
	  ?>
    </div>
 </div>