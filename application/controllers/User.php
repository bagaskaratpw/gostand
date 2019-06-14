<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model');
	}
	public function index()
	{
		$this->load->view('user/depan');
	}
	public function about()
	{
		$this->load->view('user/about');
	}
	public function contact ()
	{
		$dataquery = $this->Admin_model->get('faq');
		$data = array(
			'data' => $dataquery,
		);
		$this->load->view('user/contact',$data);
	}

	public function daftar_blog()
	{
		$news=$this->Admin_model->get('news');
		$faq=$this->Admin_model->get('faq');

		$data=array(
			'news'=>$news
		);

		$this->load->view('user/daftar_blog',$data);
	}
	
	public function blog($unique)
	{
		$data = $this->Admin_model->detailNews($unique);        
        $data = array(
				'news' => $data,				
				);
		$this->load->view('user/blog',$data);
	}
}
