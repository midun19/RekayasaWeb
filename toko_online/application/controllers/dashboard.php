<?php 

class Dashboard extends CI_Controller{

		public function __construct(){
		parent::__construct();

		if($this->session->userdata('role_id') !='2'){
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
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('dashboard',$data);
		$this->load->view('templates/footer');
	}

	public function tambah_ke_keranjang($id)
	{
		$barang = $this->model_ikan->find($id);
		
		$data = array(
	        'id'      => $barang->id_ikan,
	        'qty'     => 1,
	        'price'   => $barang->harga,
	        'name'    => $barang->nama_ikan,
	        
	);

	$this->cart->insert($data);	
	redirect('welcome');

	}

	public function detail_keranjang()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('keranjang');
		$this->load->view('templates/footer');
	}

	public function hapus_keranjang()
	{
		$this->cart->destroy();
		redirect('welcome/index');
	}

	public function pembayaran()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pembayaran');
		$this->load->view('templates/footer');
	}

	public function proses_pesanan()
	{
		$is_processed = $this->model_invoice->index();
		if($is_processed){
			$this->cart->destroy();
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('proses_pesanan');
			$this->load->view('templates/footer');
		} else {
			echo "Maaf, Pesanan anda Gagal Di Proses !";
		}
	}

	public function detail($id_ikan)
	{
		$data['barang'] = $this->model_ikan->detail_ikan($id_ikan);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detail_ikan',$data);
		$this->load->view('templates/footer');
	}
}