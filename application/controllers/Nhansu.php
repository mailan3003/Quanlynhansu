<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Nhansu extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('Nhansu_view');
	}

	public function nhansu_add(){
		//lay du lieu tu view
		$ten = $this->input->post('ten');
		$diachi = $this->input->post('diachi');
		$tuoi = $this->input->post('tuoi');
		$sodonhang = $this->input->post('sodonhang');
		$linkfb = $this->input->post('linkfb');
		$sdt = $this->input->post('sdt');

		echo $ten;
	}

}

/* End of file Nhansu.php */
/* Location: ./application/controllers/Nhansu.php */