<?php 

class Data_barang extends CI_Controller{

		public function __construct(){
		parent::__construct();

		if($this->session->userdata('role_id') !='1'){
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  Anda Belum Login !
			  </button>
			</div>');
			redirect('auth/login');
		}
	}
	public function index()
	{
		$data['barang'] = $this->model_ikan->tampil_data()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar', $data);
		$this->load->view('admin/Data_barang');
		$this->load->view('templates_admin/footer');
	}

	public function tambah_aksi()
	{
		$nama_ikan		= $this->input->post('nama_ikan');
		$keterangan		= $this->input->post('keterangan');
		$kategori		= $this->input->post('kategori');
		$harga			= $this->input->post('harga');
		$stock			= $this->input->post('stock');
		$gambar			= $_FILES['gambar']['name'];
		if ($gambar = ''){}else{
			$config ['upload_path'] = './uploads';
			$config ['allowed_type'] = 'jpg|jpeg|png|gif|bmp';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('gambar')){
				echo "Gambar GAGAL di Upload!";
			}else {
				$gambar=$this->upload->data('file_name');
			}
		}

		$data = array (
			'nama_ikan'		=> $nama_ikan,
			'keterangan'	=> $keterangan,
			'kategori'		=> $kategori,
			'harga'			=> $harga,
			'stock'			=> $stock,
			'gambar'		=> $gambar
		);

		$this->model_ikan->tambah_barang($data, 'tb_ikan');
		redirect('admin/data_barang/index');
	}

	public function edit($id)
	{
		$where = array ('id_ikan' =>$id);
		$data['barang'] = $this->model_ikan->edit_barang($where, 'tb_ikan')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar', $data);
		$this->load->view('admin/edit_barang');
		$this->load->view('templates_admin/footer');
	}

	public function update(){
		$id 			= $this->input->post('id_ikan');
		$nama_ikan 		= $this->input->post('nama_ikan');
		$keterangan 	= $this->input->post('keterangan');
		$kategori		= $this->input->post('kategori');
		$harga 			= $this->input->post('harga');
		$stock			= $this->input->post('stock');

		$data = array(

			'nama_ikan'		=> $nama_ikan,
			'keterangan'	=> $keterangan,
			'kategori'		=> $kategori,
			'harga'			=> $harga,
			'stock'			=> $stock
		);

		$where = array(
			'id_ikan' => $id
		);

		$this->model_ikan->update_data($where,$data,'tb_ikan');
		redirect('admin/data_barang/index');
	}

	public function hapus($id)
	{
		$where = array('id_ikan' =>$id);
		$this->model_ikan->hapus_data($where, 'tb_ikan');
		redirect('admin/data_barang/index');
	}
}