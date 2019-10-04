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
		$this->db->order_by('id', 'asc');
		$dulieu = $this->db->get('nhan_vien');
		$dulieu = $dulieu ->result_array();
		return $dulieu;
	}

	public function getDataByID($idnhanve){
		//lay id tu csdl ve de sua
		$this->db->select('*');
		$this->db->where('id', $idnhanve);
		$dulieu = $this->db->get('nhan_vien');
		$dulieu = $dulieu ->result_array();//lay ve du lieu dang mang
		return $dulieu;
	}

	public function updateByID($id, $ten, $tuoi, $diachi, $avatar, $sdt, $sodonhang, $linkfb ){
		//dong goi toan bo du lieu thanh mot mang
		$data  = array(
			'id' => $id ,
			'ten' => $ten,
			'tuoi' => $tuoi,
			'diachi' => $diachi ,
			'avatar' => $avatar,
			'sdt' => $sdt,
			'sodonhang' => $sodonhang,
			'linkfb' => $linkfb
		);

		$this->db->where('id', $id);
		
		return $this->db->update('nhan_vien', $data);
	}

	public function deleteDataByID($id){
		$this->db->where('id', $id);
		return $this->db->delete('nhan_vien');

	}

}

/* End of file Nhansu_model.php */
/* Location: ./application/models/Nhansu_model.php */