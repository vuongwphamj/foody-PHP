<div class="container text-center">
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
        <div class="panel panel-primary">
          <div class="panel-heading"><?php echo $nhahang['tennhahang'] ?></div>
          <div class="panel-body"><img src="image/nha_hang/<?php echo $nhahang['hinh'] ?>" style="width:315px; height:240px" class="img_mon_an" alt="Image" ></div>
          <div class="panel-footer"><?php echo $nhahang['vitri'] ?></div>
        </div>
      </div>
      <?php
	  }
	  ?>
    </div>
  </div>
<div><br />