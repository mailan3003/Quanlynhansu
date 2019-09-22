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

}

/* End of file Nhansu.php */
/* Location: ./application/controllers/Nhansu.php */