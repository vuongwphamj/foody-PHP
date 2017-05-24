<div class="container text-center timkiem">
<h3>Danh Sách Món Ăn</h3><br>
    <div class="row">
      <?php
	  
	  while($monan_maloai=mysql_fetch_array($query))
	  {
	  ?>
      <div class="col-sm-4">
        <div class="panel panel-primary">
          <div class="panel-heading"><?php echo $monan_maloai['tenmon'] ?></div>
          <div class="panel-body">
          	<a href="index.php?trang=monan&amp;mamon=<?php echo $monan_maloai['mamon'] ?>">	
                <img src="image/mon_an_tieu_bieu/<?php echo $monan_maloai['hinhanh'] ?>" style="width:315px; height:240px" class="img-responsive" alt="Image">
            </a>    
          </div>
          <div class="panel-footer">Giá: <?php echo $monan_maloai['giatien'] ?> VNĐ</div>
        </div>
      </div>
      <?php
	  }
	  ?>
    </div>
</div>