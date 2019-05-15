<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Admin_model');
	}
	
	public function index()
	{
		$this->load->view('admin/login');
	}

	public function login_adm()
	{
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$where=array(
			'account_name'=>$username,
			'account_password'=>md5($password)
		);
		$cek=$this->Admin_model->cek_login('account',$where);
		if( $cek->num_rows() > 0 )
		{
			$data = $cek->row_array();	
			$this->session->set_userdata('login', TRUE);
				$this->session->set_userdata('username', $data['account_name']);
				$this->session->set_userdata('status','ADMIN');
				redirect(base_url('Admin/userlist'));
			
		}
		else{
			$this->session->set_flashdata('gagal', 'Gagal');
			redirect(base_url('admin/login'));
		}
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url('Login'));
	}
}

