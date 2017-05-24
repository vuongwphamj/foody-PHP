
<div class="container text-center timkiem">
	<div class="row" style="z-index:1; position:relative;">
    
    	<form action="#" method="post" enctype="form-data/multipart">
        <div class="row" style="background-color:white;"  >
            <div style="float:left; padding-right: 15px;">
            	
                <input class="form-control input_search" name="txt_search" id="input_search" type="text" placeholder="Bạn muốn ăn gì?"/>
                <div id="back_result" >
                </div>
               	
            </div>
            
            <div class="form-group input_search" style="width:auto; float:left; margin-right: 10px;">
                <select class="form-control input_search" id="sel1" style="width:170px;" name="select_vt">
                  <option><h6 style="color:rgb(204,204,204);">Chọn vị trí của bạn</h6></option>
                  <option>Quận 1</option>
                  <option>Quận 2</option>
                  <option>Quận 3</option>
                  <option>Quận 4</option>
                  <option>Quận 5</option>
                  <option>Quận 6</option>
                  <option>Quận 7</option>
                  <option>Quận 8</option>
                  <option>Quận 9</option>
                  <option>Quận 10</option>
                  <option>Quận 11</option>
                  <option>Quận 12</option>
                  <option>Quận Tân Bình</option>
                  <option>Quận Phú Nhuận</option>
                  <option>Quận Bình Thạnh</option>
                  <option>Quận Gò Vấp</option>
                  <option>Quận Tân Phú</option>
                  <option>Quận Bình Tân</option>
                  <option>Quận Thủ Đức</option>
                </select>
                <br>
            </div>           
            <button name="btn_search" id="btn_search" style="float:left;" type="button" class="btn btn-default">Tìm kiếm</button>
        </div>
        </form>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
        <script>
		/*$(document).ready(function(e) {
            $('div#back_result').html("qweqweqweqweqwe");
        });*/
	
	$(document).ready(function() {
		$('#input_search').keyup(function(){
			$('div#back_result').css({'display':'block'});
			
			var name = $(this).val();
			$.post('modules/txt_timkiem.php',{name:name}, function(data){
			$('div#back_result').css({'display':'block'});
			$('div#back_result').html(data);
			//$('div#ketquatimkiem').html(data);
			//$('div#ketquatimkiem').css({'display':'none'});
			});
			//$.post('modules/Timkiem/ketquatimkiem.php',{name:name}, function(data){
			//$('div#ketquatimkiem').html(data);
			//$('div#ketquatimkiem').css({'display':'none'});
			//});
		});
		$('#input_search').click(function(){
			$('div#back_result').css({'display':'block'});
			
			var name = $(this).val();
			$.post('modules/txt_timkiem.php',{name:name}, function(data){
			$('div#back_result').css({'display':'block'});
			$('div#back_result').html(data);
			//$('div#ketquatimkiem').html(data);
			//$('div#ketquatimkiem').css({'display':'none'});
			});
			//$.post('modules/Timkiem/ketquatimkiem.php',{name:name}, function(data){
			//$('div#ketquatimkiem').html(data);
			//$('div#ketquatimkiem').css({'display':'none'});
			//});
		});
		$('#btn_search').click(function(){
			//$('div#back_result').css({'display':'block'});
			//alert("Tim kiem button!!!!!");
			var txt_search = $('.input_search').val();
			var txt_vitri = $('#sel1').val();
			$.post('modules/ketquatimkiem.php',{name:txt_search, vitri:txt_vitri}, function(data){
			//$('div#ketquatiemkiem').css({'display':'block'});
		//	$('#ketquatimkiem').html(data);
			$('div#ketquatimkiem').html(data);
			//$('div#ketquatimkiem').css({'display':'none'});
			});
			//$.post('modules/Timkiem/ketquatimkiem.php',{name:name}, function(data){
			//$('div#ketquatimkiem').html(data);
			//$('div#ketquatimkiem').css({'display':'none'});
			//});
		});
/*		$('div#back_result').keyup(function(){
			$('#input_search').css({'width':'500'});
		});*/
		$('#sel1').click(function(){
			$('#input_search').css({'width':'500'});
		});
		$("body").click
		(
		  function(e)
		  {
			if(e.target.id !== "back_result")
			{
			  $("#back_result").hide();
			}
		  }
		);
		/*$(document).keypress(function(e) {
			if(e.which == 13) {
				var name = $(this).val();
				$.post('Timkiem/ketquatimkiem.php',{name:name}, function(data){
				//$('div#back_result').css({'display':'block'});
				$('div#ketquatimkiem').html(data);
				});
				
			}
		});*/
    });
	</script>
    </div>
    <div id="ketquatimkiem" class="row" style="margin-top:10px;z-index:10">
	</div>
</div>
