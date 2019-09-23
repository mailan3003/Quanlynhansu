<!DOCTYPE html>
<html lang="en"><head>
	<title> Giao dien hien thi danh sach nhan su </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<script type="text/javascript" src="<?php echo base_url() ?>vendor/bootstrap.js"></script>
 	<script type="text/javascript" src=" <?php echo base_url() ?>1.js"></script>
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
 						<p class="card-text"><small class="text-muted">last</small></p>
 					</div>
 				</div><!-- end card -->
 					<?php endforeach ?>


 				</div><!-- end card-columns -->
 			</div>

 			<div class="container">
 		<div class="text-xs-center">
 			<h3 class="display-3">Them moi nhan su</h3>
 			<hr>
 		</div>
 	</div>
 			<!--<div class="row">-->
 				<form action="<?php echo base_url() ?>index.php/nhansu/nhansu_add" method="post" accept-charset="utf-8" enctype="multipart/form-data">
 					<div class="form-group row">
 						<label for="anh" class="col-sm-4 form-control-label text-xs-right" >
 							Avatar
 						</label>
 						<div class="col-sm-8">
 							<input name="avatar" class="form-control" type="file" id="avatar" placeholder="upload">
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

 					</div>

 					<div class="form-group row text-xs-center">
 						<div class="col-sm-offset-2 col-sm-10">
 							<button type="submit" class="btn btn-outline-success"> Them moi</button>
 							<button type="reset" class="btn btn-outline-primary"> Nhap lai</button>
 						</div>
 					</div>
 				</form>
 			<!--</div> end row-->
 		</div>
</body>
</html>