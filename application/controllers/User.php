<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
		$this->load->view('user/contact');
	}
	public function daftar_blog()
	{
		$this->load->view('user/daftar_blog');
	}
	public function blog()
	{
		$this->load->view('user/blog');
	}
}
