<?php 

class kategori extends CI_Controller{
	public function dashboard()
	{
		$data['barang'] = $this->model_ikan->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('dashboard',$data);
		$this->load->view('templates/footer');
	}

	public function betta_plakat()
	{
		$data['betta_plakat'] = $this->model_kategori->data_betta_plakat()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('betta_plakat',$data);
		$this->load->view('templates/footer');
	}

	public function betta_halfmoon()
	{
		$data['betta_halfmoon'] = $this->model_kategori->data_betta_halfmoon()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('betta_halfmoon',$data);
		$this->load->view('templates/footer');
	}

	public function betta_crown_tail()
	{
		$data['betta_crown_tail'] = $this->model_kategori->data_betta_crown_tail()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('betta_crown_tail',$data);
		$this->load->view('templates/footer');
	}

	public function betta_big_ear()
	{
		$data['betta_big_ear'] = $this->model_kategori->data_betta_big_ear()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('betta_big_ear',$data);
		$this->load->view('templates/footer');
	}

	public function betta_double_tail()
	{
		$data['betta_double_tail'] = $this->model_kategori->data_betta_double_tail()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('betta_double_tail',$data);
		$this->load->view('templates/footer');
	}

	public function betta_paradise()
	{
		$data['betta_paradise'] = $this->model_kategori->data_betta_paradise()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('betta_paradise',$data);
		$this->load->view('templates/footer');
	}
}