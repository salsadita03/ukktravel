<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->model('mlogin');
	}
	public function index()
	{
		$this->load->view('vlogin');
	}
	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $usename,
			'password' => $password
			);
		$cek = $this->mlogin->cek_login("tiketpesawat",$where)->num_rows();
		if($cek > 0){
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
			$this->session->set_userdata($data_session);
			redirect(base_url("admin"));
		}else{
			echo "Username dan Password salah !";
		}
	}
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}