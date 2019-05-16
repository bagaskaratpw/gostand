<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model');
	}
	public function index(){
		$this->load->view('admin/dashboard');
	}
	public function userlist()
	{
		if($this->session->userdata('login')==TRUE && $this->session->userdata('status')=='ADMIN')
		{
			$dataquery = $this->Admin_model->account();
			$data = array(
				'data' => $dataquery,
			);
			$this->load->view('admin/index',$data);
		}
		else
		{
			redirect(base_url('Login'));
		}
	}
	public function testimoni()
	{
		$this->load->view('admin/testimoni');
	}
	public function prosesregister()
	{
		$data = array(
			'account_name' => $this->input->post('username'),
			'account_password' => md5($this->input->post('password')),
		);

		$data = $this->Admin_model->Insert('account',$data);
		redirect(base_url('admin/userlist'));
	}
	public function delete_user($account_id)
	{
	    $account_id = array('account_id' => $account_id);
	    
		$this->Admin_model->Delete('account', $account_id);
	    redirect('admin/userlist/');
	}

	
	
	
}
