<!DOCTYPE html>
<html lang="en"><head>
	<title> Sua thong tin nhan vien </title>
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
 			<h3 class="display-3">Sua thong tin nhan vien</h3>
 			<hr>
 		</div>
 	</div>
 			<!--<div class="row">-->
 				<form action="<?php echo base_url() ?>index.php/nhansu/nhansu_update" method="post" accept-charset="utf-8" enctype="multipart/form-data">

					<?php foreach ($dulieukq as $value) :?>

 					<div class="form-group row">
 						<label for="anh" class="col-sm-4 form-control-label text-xs-right" >
 							Avatar
 						</label>
 						<div class="col-sm-8">
 							<div class="row">
 								<div class="col-sm-6">
 									<img src="<?= $value['avatar'] ?>" alt="" class="img-fluid"/>
 								</div>
 							</div>
 							<input type="hidden" name="id" value="<?= $value['id'] ?>" >
 							<input type="hidden" name="avatar2" value="<?= $value['avatar'] ?>" >
 							<input name="avatar" class="form-control" type="file" id="avatar" placeholder="upload">
 						</div>
 					</div>

 					<div class="form-group row">
 						<label for="ten" class="col-sm-4 form-control-label text-xs-right" >
 							Name
 						</label>
 						<div class="col-sm-8">
 							<input name="ten" class="form-control" type="text" id="ten" placeholder="Your Name" value="<?= $value['ten'] ?>">
 						</div>
 					</div>


					<div class="form-group row">
 						<label for="diachi" class="col-sm-4 form-control-label text-xs-right" >
 							Address
 						</label>
 						<div class="col-sm-8">
 							<input name="diachi" class="form-control" type="text" id="diachi" placeholder="Your Addres" value="<?= $value['diachi'] ?>">
 						</div>
 					</div>


 					
					<div class="form-group row">
						
								<label for="tuoi" class="col-sm-4 form-control-label text-xs-right" >	
 									Age
 								</label>
 								<div class="col-sm-4">
 									<input name="tuoi" class="form-control" type="number" id="tuoi" placeholder="Your Age" value="<?= $value['tuoi'] ?>">
								</div>
							</div>

					<div class="form-group row">
							<label for="sdt" class="col-sm-4 form-control-label text-xs-right" >	
									Phone Number
								</label>
								<div class="col-sm-4">
									<input name="sdt" class="form-control" type="text" id="sdt" placeholder="Your Phonenumber" value="<?= $value['sdt'] ?>">
							</div>
						</div>

					<div class="form-group row">
							<label for="sodonhang" class="col-sm-4 form-control-label text-xs-right" >	
									So don da hoan thanh
								</label>
								<div class="col-sm-4">
									<input name="sodonhang" class="form-control" type="number" id="sodonhang" placeholder="Your Number of Order" value="<?= $value['sodonhang'] ?>">
							</div>
						</div>

						<div class="form-group row">
 						<label for="linkfb" class="col-sm-4 form-control-label text-xs-right" >
 							Link FB
 						</label>
 						<div class="col-sm-8">
 							<input name="linkfb" class="form-control" type="text" id="linkfb" placeholder="Your Link FB" value="<?= $value['linkfb'] ?>">
 						</div>
 					</div>

 					<?php endforeach ?>

 					<div class="form-group row text-xs-center">
 						<div class="col-sm-offset-2 col-sm-10">
 							<button type="submit" class="btn btn-outline-success "> Save <span class="glyphicon glyphicon-floppy-saved"></span> </button>
 							<a href="<?php echo base_url() ?>index.php/nhansu/" title="" class="btn btn-outline-info "> Back <span class="glyphicon glyphicon-arrow-left"></span> </a>
 						</div>
 					</div>

				
 				</form>
 			<!--</div> end row-->
 		</div>
</body>
</html>