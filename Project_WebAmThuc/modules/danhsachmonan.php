<div class="container text-center">
<?php
	$sql_monan="select * from monan";
	$query=mysql_query($sql_monan);
?>
<h3>Danh Sách Món Ăn</h3><br>
    <div class="row">
      <?php
	  while($monan=mysql_fetch_array($query))
	  {
	  ?>
      <div class="col-sm-4">
        <div class="panel panel-primary">
          <div class="panel-heading"><?php echo $monan['tenmon'] ?></div>
          <div class="panel-body"><img src="image/mon_an_tieu_bieu/<?php echo $monan['hinhanh'] ?>" style="width:315px; height:240px" class="img-responsive" alt="Image"></div>
          <div class="panel-footer">Giá: <?php echo $monan['giatien'] ?> VNĐ</div>
        </div>
      </div>
      <?php
	  }
	  ?>
    </div>
  </div>
<div><br />