
<?php
	include('modules/slideshow.php');
	$sql_loaimon="select * from loaimon";
	$query_loaimon=mysql_query($sql_loaimon);
?>
<div class="container text-center">
<h3>Loại Món Tiêu Biểu</h3><br>
  <div class="row">
    <?php
	while($loaimon=mysql_fetch_array($query_loaimon))
	 {
	?>
    <div class="col-sm-4">
      <a href="index.php?trang=monan&maloai=<?php echo $loaimon['maloai'] ?>">
      <img src="image/mon_an_tieu_bieu/<?php echo $loaimon['hinhanh'] ?>" class="img-responsive" style="width:360px; height:192px;" alt="Image">
      <p class="name_of_food"><?php echo $loaimon['tenloai'] ?></p>
      </a>
    </div>
    <?php
	 }
	?>
    <!--<div class="col-sm-3"> 
      <img src="image/mon_an_tieu_bieu/nom_ga_rau_chuoi.jpg" class="img-responsive" style="width:360px; height:192px;" alt="Image">
      <p class="name_of_food">Món ăn 2</p>    
    </div>
    
    <div class="col-sm-3"> 
      <img src="image/mon_an_tieu_bieu/nom_ga_rau_chuoi.jpg" class="img-responsive" style="width:360px; height:192px;" alt="Image">
      <p class="name_of_food">Món ăn 3</p>    
    </div>-->
    
    
  </div>
</div>