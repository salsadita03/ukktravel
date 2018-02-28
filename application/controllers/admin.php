<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct() {
		parent::__construct();
		$this->load->model('model');
		$this->load->helper('url');
	}
	public function index()
	{
		$this->cek_sessionfalse();
		$data = array(
			'data_rute' => $this->model->getrute("order by ruteid asc")->result_array()
		);
		$this->load->view('admin/dashboard', $data);
	}
	public function tambahrute(){
		$this->cek_sessionfalse();
		$this->load->view('tambahrute');
	}
	function saverute(){
		$data = array(
			'depart_at' => $this->input->post('depart_at'),
			'rute_from' =>($this->input->post('rute_from')),
			'rute_to' => $this->input->post('rute_to'),
			'price' => $this->input->post('price'),
			'transportationid' => $this->input->post('transportationid'),
			);
		$result = $this->model->Simpan('rute', $data);
		if($result == 1){
			$this->session->set_flashdata("sukses", "<div class='alert alert-success'><strong>Simpan data BERHASIL dilakukan</strong></div>");
			header('location:'.base_url().'admin');
		}else{
			$this->session->set_flashdata("alert", "<div class='alert alert-danger'><strong>Simpan data GAGAL di lakukan</strong></div>");
			header('location:'.base_url().'admin/tambahrute');
		}
	}
	public function editrute($kode = 0){
		$data_rute = $this->model->getrute("where ruteid ='$kode'")->result_array();

		$data = array(
			'ruteid' => $data_rute[0]['ruteid'],
			'depart_at' => $data_rute[0]['depart_at'],
			'rute_from' => $data_rute[0]['rute_from'],
			'rute_to' => $data_rute[0]['rute_to'],
			'price' => $data_rute[0]['price'],
			'transportationid' => $data_rute[0]['transportationid'],
			);
		$this->load->view('editrute', $data);
	}
	public function saveEdit()
	{
		$this->cek_sessionfalse();
		$depart_at = $this->input->post('depart_at');
		$rute_from = $this->input->post('rute_from');
		$rute_to = $this->input->post('rute_to');
		$price = $this->input->post('price');
		$transportationid = $this->input->post('transportationid');
		$ruteid = $this->input->post('ruteid');
		
		$data = array(
			'depart_at' => $depart_at,
			'rute_from' => $rute_from,
			'rute_to' => $rute_to,
			'price' => $price,
			'transportationid' => $transportationid,
		);
		$where = array(
			'ruteid' => $ruteid
		);
		$simpan = $this->model->update_data($where,$data,'rute');
		if ($simpan==1){
			$this->session->set_flashdata('messages', '<div class="alert alert-success">Data Telah Ter<strong>EDIT</strong></div>');
		}else{
			$this->session->set_flashdata('messages', '<div class="alert alert-danger">Maaf Anda <strong>GAGAL</strong> Mengedit</div>');
		}
		redirect(base_url().'admin');
	}
	public function hapusrute($kode = 1){
		$result = $this->model->Hapus('rute', array('ruteid' => $kode));
		header('location:'.base_url().'admin');
	}
	public function cari(){
		{
			$rute_from = $this->input->get('rute_from');
			$rute_to = $this->input->get('rute_to');
			$date = $this->input->get('date');

			$data['rute'] = $this->user_m->cariPenerbangan($rute_from, $rute_to, $date);
			$this->load->view('cari', $data);
		}
	}
		public function cek_sessiontrue(){
    	$sesion = $this->session->status;
    	if(!empty($sesion)){ 
    	  	redirect(base_url().'admin');
    	}
    }
    public function cek_sessionfalse(){
    	$sesion = $this->session->status;
    	if(empty($sesion)){ 
      		redirect(base_url().'welcome');
         }
     }
    public function logout(){
    	$this->session->sess_destroy();
    	redirect(base_url());
     }
}
