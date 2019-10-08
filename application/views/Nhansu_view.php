<!DOCTYPE html>
<html lang="en"><head>
	<title> Giao dien hien thi danh sach nhan su </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<script type="text/javascript" src="<?php echo base_url() ?>vendor/bootstrap.js"></script>
 	<script type="text/javascript" src=" <?php echo base_url() ?>1.js"></script>
 	<script type="text/javascript" src=" <?php echo base_url() ?>jQuery-File-Upload-10.2.0/js/vendor/jquery.ui.widget.js"></script>
 	<script type="text/javascript" src=" <?php echo base_url() ?>jQuery-File-Upload-10.2.0/js/jquery.fileupload.js"></script>
	<link rel="stylesheet" href="<?php echo base_url() ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?php echo base_url() ?>1.css">
</head>
<body >

 	<div class="container">
 		<div class="text-xs-center">
 			<h3 class="display-3">Danh sach nhan  su</h3>
 			<hr>
 		</div>
 	</div>
 	<div class="container">
 		<div class="row">

 			<div class="card-columns">
				
					<div class="card-deck-wrapper">
					<div class="card-block">

				<?php foreach ($mangketqua as $key => $value): ?> 
 				<div class="card">
 					<img class="card-img-top img-fluid" src="<?= $value['avatar']  ?>" alt="Card image cap ">
 					<div class="card-block">
 						<h4 class="card-title ten">Ho va ten: <?= $value['ten']  ?></h4>
 						<p class="card-text tuoi">Tuoi: <?= $value['tuoi']  ?></p>
 						<p class="card-text sdt">So dien thoai: <?= $value['sdt']  ?> </p>
 						<p class="card-text diachi">Dia chi: <?= $value['diachi']  ?> </p>
 						<p class="card-text sodonhang">So don da hoan thanh: <?= $value['sodonhang']  ?> </p>
 						<p class="card-text fb"><a href="<?= $value['linkfb']  ?>" title="" class="btn btn-info">Facebook <i class="fa fa-chevron-right"></i></a></p>
 						
 						<p class="card-text edit"><a href="<?php echo base_url() ?>index.php/nhansu/nhansu_edit/<?= $value['id']  ?>" title="" class="btn btn-warning">Edit Infomation <i class="fa fa-pencil"></i></a></p>

						<p class="card-text delete"><a href="<?php echo base_url() ?>index.php/nhansu/nhansu_delete/<?= $value['id']  ?>" title="" class="btn btn-danger">Delete Infomation <i class="fa fa-times"></i></a></p>
 					</div>



 				</div><!-- end card -->
 			
 					<?php endforeach ?>

			</div>
 			</div>
 				</div><!-- end card-columns -->
 			

 			</div>
</div>



 			<div class="container">
 		<div class="text-xs-center">
 			<h3 class="display-3">Them moi nhan su</h3>
 			<hr>
 		</div>
 	</div>
 			<!--<div class="row">-->
 				<!-- <form action="<?php// echo base_url() ?>index.php/nhansu/nhansu_add" method="post" accept-charset="utf-8" enctype="multipart/form-data"> -->
 					<div class="form-group row">
 						<label for="anh" class="col-sm-4 form-control-label text-xs-right" >
 							Avatar
 						</label>
 						<div class="col-sm-8">
 							<input name="files[]" class="form-control" type="file" id="avatar" placeholder="upload">
 						</div>
 					</div>

 					<div class="form-group row">
 						<label for="ten" class="col-sm-4 form-control-label text-xs-right" >
 							Name
 						</label>
 						<div class="col-sm-8">
 							<input name="ten" class="form-control" type="text" id="ten" placeholder="Your Name">
 						</div>
 					</div>


					<div class="form-group row">
 						<label for="diachi" class="col-sm-4 form-control-label text-xs-right" >
 							Address
 						</label>
 						<div class="col-sm-8">
 							<input name="diachi" class="form-control" type="text" id="diachi" placeholder="Your Addres">
 						</div>
 					</div>


 					
					<div class="form-group row">
						
								<label for="tuoi" class="col-sm-4 form-control-label text-xs-right" >	
 									Age
 								</label>
 								<div class="col-sm-4">
 									<input name="tuoi" class="form-control" type="number" id="tuoi" placeholder="Your Age">
								</div>
							</div>

					<div class="form-group row">
							<label for="sdt" class="col-sm-4 form-control-label text-xs-right" >	
									Phone Number
								</label>
								<div class="col-sm-4">
									<input name="sdt" class="form-control" type="text" id="sdt" placeholder="Your Phonenumber">
							</div>
						</div>

					<div class="form-group row">
							<label for="sodonhang" class="col-sm-4 form-control-label text-xs-right" >	
									So don da hoan thanh
								</label>
								<div class="col-sm-4">
									<input name="sodonhang" class="form-control" type="number" id="sodonhang" placeholder="Your Number of Order">
							</div>
						</div>

						<div class="form-group row">
 						<label for="linkfb" class="col-sm-4 form-control-label text-xs-right" >
 							Link FB
 						</label>
 						<div class="col-sm-8">
 							<input name="linkfb" class="form-control" type="text" id="linkfb" placeholder="Your Link FB">
 						</div>
 					</div>

 		

 					<div class="form-group row text-xs-center">
 						<div class="col-sm-offset-2 col-sm-10">
 							<button type="button" class="btn btn-outline-success nutxulyajax"> Them moi</button>
 							<button type="reset" class="btn btn-outline-primary"> Nhap lai</button>
 						</div>
 					</div>


 				<!-- </form> -->
 			<!--</div> end row-->
 		</div>
 		<script >
 			$('.nutxulyajax').click(function(event){

 				$.ajax({
 				url: 'ajax_add',
 				type: 'POST',
 				dataType: 'json',
 				data: {
 					ten: $('#ten').val(),
 					tuoi: $('#tuoi').val(),
 					diachi: $('#diachi').val(),
 					//avatar: $('#avatar').val(),
 					sdt: $('#sdt').val(),
 					sodonhang: $('#sodonhang').val(),
 					linkfb: $('#linkfb').val()
 				},
 			})
 			.done(function() {
 				console.log("success");
 				;
 				//them noi dung bang ham append
 			})
 			.fail(function() {
 				console.log("error");
 			})
 			.always(function() {
 				console.log("complete");
 				noidung = '<div class="card">';
 				noidung += '<img class="card-img-top img-fluid" src="http://kenh14cdn.com/2019/10/3/anh-chup-man-hinh-2019-10-03-luc-101059-157007241872916488296.png" alt="Card image cap ">';
 				noidung += '<div class="card-block">';	
 				noidung += '<h4 class="card-title ten">Ho va ten:' + $('#ten').val() + '</h4>';	
 				noidung += '<p class="card-text tuoi">Tuoi:'+ $('#tuoi').val()+' </p>';		
 				noidung += '<p class="card-text sdt">So dien thoai: '+ $('#sdt').val()+' </p>';	
 				noidung +='<p class="card-text diachi">Dia chi: '+$('#diachi').val()+'</p>';	
 				noidung += '<p class="card-text sodonhang">So don da hoan thanh: '+ $('#sodonhang').val()+' </p>';	
 				noidung += '<p class="card-text fb"><a href="'+ $('#linkfb').val()+'" title="" class="btn btn-info">Facebook <i class="fa fa-chevron-right"></i></a></p>';	
 				noidung += '<p class="card-text edit"><a href="<?php echo base_url() ?>index.php/nhansu/nhansu_edit/<?= $value['id']  ?>" title="" class="btn btn-warning">Edit Infomation <i class="fa fa-pencil"></i></a></p>';	
 				noidung += '<p class="card-text delete"><a href="<?php echo base_url() ?>index.php/nhansu/nhansu_delete/<?= $value['id']  ?>" title="" class="btn btn-danger">Delete Infomation <i class="fa fa-times"></i></a></p>';			
 					
 				noidung += '</p>';
 				noidung += '</div>';
 				noidung += '</div>';	
 				noidung += '</div>';		
						
 				$('.card-deck-wrapper').append(noidung);
 				$('#ten').val('');
 				$('#tuoi').val('');
 				$('#diachi').val('');
 				$('#sdt').val('');
 				$('#sodonhang').val('');
 				$('#linkfb').val('');
 			});
 			

 			});
 			
 		</script>
</body>
</html>