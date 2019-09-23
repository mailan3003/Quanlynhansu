<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Nhansu_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function insertDataToMySQL($ten, $tuoi, $diachi, $avatar, $sdt, $sodonhang, $linkfb){
		//xu ly cac thong tin nhan ve va upload vao mysql
		$dulieu = array('ten' => $ten, 'tuoi' => $tuoi, 'diachi' => $diachi,'avatar' => $avatar, 'sdt' => $sdt,  'sodonhang' => $sodonhang, 'linkfb' => $linkfb );
		$this->db->insert('nhan_vien', $dulieu);
		return $this->db->insert_id();
	}

	//lay du lieu tu sql ve
	public function getAllData(){
		$this->db->select('*');
		$dulieu = $this->db->get('nhan_vien');
		$dulieu = $dulieu ->result_array();
		return $dulieu;
	}

}

/* End of file Nhansu_model.php */
/* Location: ./application/models/Nhansu_model.php */