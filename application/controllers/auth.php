<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');
	}

	public function index()
	{

		$this->load->view('admin/login');
		
	}


	public function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
		);
		$cek = $this->m_login->cek_login('user',$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'nama' => $username,
				'status' => "login"
			);

			$this->session->set_userdata($data_session);

			redirect(base_url('index.php/Home/admin'));

		}else{
			echo "<script>
			alert('username dan Password Salah!');
			window.location='" . site_url('index.php/auth') . "'
			</script>";
		}
	}


	public function logout() {

		redirect(base_url('index.php/auth'));

	}

}

