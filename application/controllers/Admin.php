<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model');

		if($this->session->userdata('status') != "ADMIN")
		{
			redirect(base_url('login'));
		}
	}
	public function index(){
		$this->load->view('admin/dashboard');
	}
	public function faq()
	{
		$dataquery = $this->Admin_model->get('faq');
		$data = array(
			'data' => $dataquery,
		);
		$this->load->view('admin/list_faq',$data);
	}
	public function add_faq()
	{
		$this->load->view('admin/add_faq');
	}
	public function userlist()
	{
			$dataquery = $this->Admin_model->account();
			$data = array(
				'data' => $dataquery,
			);
			$this->load->view('admin/index',$data);
		
	}
	public function prosesregister()
	{
		$data = array(
			'account_name' => $this->input->post('username'),
			'account_password' => md5($this->input->post('password')),
		);

		$data = $this->Admin_model->Insert('account',$data);
		redirect(base_url('admin/index'));
	}
	public function prosesfaq()
	{
		$data = array (
			'quetion' => $this->input->post('tanya'),
			'answer' => $this->input->post('jawab'),
		);

		$data = $this->Admin_model->Insert('faq',$data);
		redirect(base_url('admin/faq'));
	}
	public function delete_user($account_id)
	{
	    $account_id = array('account_id' => $account_id);
	    
		$this->Admin_model->Delete('account', $account_id);
	    redirect('admin/userlist/');
	}
	public function delete_faq($id)
	{
		$id = array('id' => $id);

		$this->Admin_model->Delete('faq',$id);
		redirect('admin/faq');
	}
	
	
	
}