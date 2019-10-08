<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


include 'UploadHandler.php';
class Nhansu extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('Nhansu_model');
		$ketqua = $this->Nhansu_model->getAllData();
		$ketqua  = array("mangketqua" => $ketqua );

		//truyen du lieu sang cho view
		$this->load->view('Nhansu_view', $ketqua);

	}

	public function nhansu_add(){
		

		//xu ly anh avatar

		$target_dir = "FileUpload/";
		$target_file = $target_dir . basename($_FILES["avatar"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
    		$check = getimagesize($_FILES["avatar"]["tmp_name"]);
    		if($check !== false) {
     		   echo "File is an image - " . $check["mime"] . ".";
     		   $uploadOk = 1;
    		} else {
     		   echo "File is not an image.";
     		   $uploadOk = 0;
 		   }
		}
		// Check if file already exists
		// if (file_exists($target_file)) {
 	// 	   echo "Da co 1 file trung ten.";
 	// 	   $uploadOk = 0;
		// }
		// Check file size
		if ($_FILES["avatar"]["size"] > 50000000) {
  			echo "Sorry, your file is too large.";
		    $uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		    echo "chi chap nhan JPG, JPEG, PNG & GIF file anh.";
		    $uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		    echo "Loi! File chua duoc upload.";
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
		        //echo "The file ". basename( $_FILES["avatar"]["name"]). " has been uploaded.";
		    } else {
		        echo "Sorry, there was an error uploading your file.";
		    }
		}


		//lay du lieu tu view
		$ten = $this->input->post('ten');
		$diachi = $this->input->post('diachi');
		$tuoi = $this->input->post('tuoi');
		$sodonhang = $this->input->post('sodonhang');
		$linkfb = $this->input->post('linkfb');
		$sdt = $this->input->post('sdt');
		$avatar =  base_url()."FileUpload/".basename($_FILES["avatar"]["name"]);


		//goi model
		$this->load->model('Nhansu_model');
		$trangthai = $this->Nhansu_model->insertDataToMySQL($ten, $tuoi, $diachi, $avatar, $sdt, $sodonhang, $linkfb);
		if($trangthai){
			//echo "insert thanh cong" ;
			$this->load->view('insertThanhcong_view');
		}else{
			echo "insert that bai";
		}

	}

	public function nhansu_edit($idnhanve){
		$this->load->model('Nhansu_model');
		$ketqua = $this->Nhansu_model->getDataByID($idnhanve);//dua vao id lay ra du lieu
		//dua du lieu $ketqua sang view sua du lieu
		$ketqua  = array('dulieukq' => $ketqua );
		$this->load->view('editNhansu_view', $ketqua, FALSE);
	}

	

	public function nhansu_update(){
		//lay du lieu tu cai view
		$id = $this->input->post('id');
		$ten = $this->input->post('ten');
		$diachi = $this->input->post('diachi');
		$tuoi = $this->input->post('tuoi');
		$sodonhang = $this->input->post('sodonhang');
		$linkfb = $this->input->post('linkfb');
		$sdt = $this->input->post('sdt');

		//xu ly phan upload anh
		//xu ly anh avatar
		$target_dir = "FileUpload/";
		$target_file = $target_dir . basename($_FILES["avatar"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
    		$check = getimagesize($_FILES["avatar"]["tmp_name"]);
    		if($check !== false) {
     		   echo "File is an image - " . $check["mime"] . ".";
     		   $uploadOk = 1;
    		} else {
     		   echo "File is not an image.";
     		   $uploadOk = 0;
 		   }
		}
		// Check if file already exists
		// if (file_exists($target_file)) {
 	// 	   echo "Da co 1 file trung ten.";
 	// 	   $uploadOk = 0;
		// }
		// Check file size
		if ($_FILES["avatar"]["size"] > 50000000) {
  			//echo "Sorry, your file is too large.";
		    $uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		   // echo "chi chap nhan JPG, JPEG, PNG & GIF file anh.";
		    $uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		   // echo "Loi! File chua duoc upload.";
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
		        //echo "The file ". basename( $_FILES["avatar"]["name"]). " has been uploaded.";
		    } else {
		        //echo "Sorry, there was an error uploading your file.";
		    }
		}

		$avatar =  basename($_FILES["avatar"]["name"]);
		//kiem tra dieu kien, neu co upload anh thi lay anh do

		if($avatar){//neu co upload
			// in ra anh avatar
			$avatar =  base_url()."FileUpload/".basename($_FILES["avatar"]["name"]);

		}else{//neu khong co upload anh thi lay avatar2
			
			$avatar = $this->input->post('avatar2');
			
		}

		//het cau lenh, anh da xu ly xong

		//goi luon model va trong view de xu ly luon du lieu nhan duoc

		$this->load->model('Nhansu_model');
		if ( $this->Nhansu_model->updateByID($id, $ten, $tuoi, $diachi, $avatar, $sdt, $sodonhang, $linkfb ) ){
			$this->load->view('insertThanhcong_view');
		}else{
			echo "Khong thanh cong!";
		}
		
	}


	public function nhansu_delete($id){
		$this->load->model('Nhansu_model');
		if($this->Nhansu_model->deleteDataByID($id)){
			$this->load->view('deleteThanhcong_view');
		}else{
			echo "Delete khong thanh con";
		}
	}

	public function ajax_add(){
		$ten = $this->input->post('ten');
		$diachi = $this->input->post('diachi');
		$tuoi = $this->input->post('tuoi');
		$sodonhang = $this->input->post('sodonhang');
		$linkfb = $this->input->post('linkfb');
		$sdt = $this->input->post('sdt');
		//$avatar =  base_url()."FileUpload/".basename($_FILES["avatar"]["name"]);
		$avatar =  $this->input->post('avatar');


		//goi model
		$this->load->model('Nhansu_model');
		$trangthai = $this->Nhansu_model->insertDataToMySQL($ten, $tuoi, $diachi, $avatar, $sdt, $sodonhang, $linkfb);
		if($trangthai){
			echo "insert thanh cong" ;
			//$this->load->view('insertThanhcong_view');
		}else{
			echo "insert that bai";
		}
	}

	public function uploadfile(){
		$uploadfile = new UploadHandler;

	}

}

/* End of file Nhansu.php */
/* Location: ./application/controllers/Nhansu.php */