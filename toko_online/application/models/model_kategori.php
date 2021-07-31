<?php 

class Model_kategori extends CI_Model{

	public function data_betta_plakat(){
		return $this->db->get_where('tb_ikan',array('kategori' => 'Betta Plakat'));
	}

	public function data_betta_halfmoon(){
		return $this->db->get_where('tb_ikan',array('kategori' => 'Betta Halfmoon'));
	}

	public function data_betta_crown_tail(){
		return $this->db->get_where('tb_ikan',array('kategori' => 'Betta Crown tail'));
	}

	public function data_betta_big_ear(){
		return $this->db->get_where('tb_ikan',array('kategori' => 'Betta Big Ear'));
	}

	public function data_betta_double_tail(){
		return $this->db->get_where('tb_ikan',array('kategori' => 'Betta Double Tail'));
	}

	public function data_betta_paradise(){
		return $this->db->get_where('tb_ikan',array('kategori' => 'Betta Paradise'));
	}
}