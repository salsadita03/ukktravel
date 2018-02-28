<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$this->cek_sessiontrue();
		$this->load->view('index');
	}
	public function cari(){
		{
			$rute_from = $this->input->get('rute_from');
			$rute_to = $this->input->get('rute_to');

			$data['rute'] = $this->model->cariPenerbangan($rute_from, $rute_to);
			$this->load->view('cari', $data);
		}
	}
	public function login(){
		$data = array(
			'username' => $this->input->post('username', TRUE),
			'password' => $this->input->post('password', TRUE),
			);

		$hasil = $this->model->GetData($data);
		if ($hasil->num_rows() == 1) {
			foreach ($hasil->result() as $sess) {
				$sess_data['username'] = $username;
				$sess_data['status'] = 'login';
			}
			$this->session->set_userdata($sess_data);
				redirect(base_url().'admin');
		}
		else {
			$info='<div style="color:red">PERIKSA KEMBALI NIK DAN PASSWORD ANDA!</div>';
			$this->session->set_userdata('info',$info);

			redirect(base_url());

		}
	}
	function add_user(){
		$this->cek_sessiontrue();
		$data = array(
			'username' => $this->input->post('username'),
			'password' =>$this->input->post('password'),
			'fullname' => $this->input->post('fullname'),
			'level' => $this->input->post('level'),
			);
		$result = $this->model->Simpan('user', $data);
		if($result == 1){
			$this->session->set_flashdata("sukses", "<div class='alert alert-success'><strong>Simpan data BERHASIL dilakukan</strong></div>");
			header('location:'.base_url());
		}else{
			$this->session->set_flashdata("alert", "<div class='alert alert-danger'><strong>Simpan data GAGAL di lakukan</strong></div>");
			header('location:'.base_url());
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
