<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('News_model');
        if($this->session->userdata('status') != "ADMIN")
		{
			redirect(base_url('login'));
		}
	}

    // List News
	public function index()
    {   
		$data = $this->News_model->listNews();
        $data = array(
                'news' => $data
                ); 
        $this->load->view('admin/list_news',$data);	
    }
    
    // Create News
    public function createNews()
    { 
        $this->load->view('admin/create_news');	
    } 
    
	public function creatingNews()
	{        
        // Set Rule
        $this->form_validation->set_rules('title', 'News Title', 'trim|required|xss_clean');
        $this->form_validation->set_rules('content', 'Content', 'trim|required');
        
		// Set Message
        $this->form_validation->set_message('required', 'Maaf! <b>%s</b> Tidak Boleh Kosong');

        if($this->form_validation->run() == FALSE)
        {
        	$this->load->view('admin/list_news');
        }
        else
        {
            $config['upload_path']   = "./asset/images/news";
            $config['allowed_types'] = "jpg|png|jpeg";
            $config['max_size']      = "10240";
            $config['remove_space']  = TRUE;
            $config['encrypt_name']  = TRUE;            
            $this->load->library('upload', $config);

			if ($this->upload->do_upload('thumbNews')) 
			{
                $this->load->library('image_lib');
                $upload = array(
                    'upload_data' => $this->upload->data()
                	);
                $resize=$this->upload->data();

                $configer =  array(
                    'image_library'   => 'gd2',
                    'source_image'    => $resize['full_path'],
                    'create_thumb' 	  => FALSE,
                    'maintain_ratio'  => FALSE,
                    'width'           => 1170,
                    'height'          => 570,
                  	);
                $this->image_lib->clear();
				$this->image_lib->initialize($configer);
				                  
				if($this->image_lib->resize())
				{                
                    if($this->News_model->creatingNews($upload))
                    {
                        $this->session->set_flashdata('success', 'News successfully created');
                        redirect(base_url('news'));
                    }
                    else 
                    {
                        $this->session->set_flashdata('error', 'Sorry, failed to create news');
                        redirect(base_url('news'));                    
                    }
                }
				else
				{
                    $this->session->set_flashdata('error', 'Sorry, failed to resize photo');
                    redirect(base_url('news'));
                }
            }
			else
			{
                $this->session->set_flashdata('error', 'Sorry, failed to upload photo');
                redirect(base_url('news'));
            }
        }
	}

    // Active and Non Active
	public function active($unique)
	{
		$data = array(
			'news_status'	=> 1			
            );
        $news = $this->News_model->detailNews($unique);
        if($this->News_model->statNews($data, $unique))
        {
            $this->session->set_flashdata('success', 'News '.$news['news_title'].' is Active');
            redirect(base_url('news'));
        }
        else 
        {
            $this->session->set_flashdata('error', 'Sorry, failed to change news status');
            redirect(base_url('news'));
        }
	}

	public function nonactive($unique)
	{
		$data = array(
			'news_status'	=> 2			
            );
        $news = $this->News_model->detailNews($unique);
        if($this->News_model->statNews($data, $unique))
        {
            $this->session->set_flashdata('success', 'News '.$news['news_title'].' is Non Active');
            redirect(base_url('news'));
        }
        else 
        {
            $this->session->set_flashdata('error', 'Sorry, failed to change news status');
            redirect(base_url('news'));
        }			
	}

	// Detail News
	public function detailNews($unique)
    {
		$data = $this->News_model->detailNews($unique);        
        $data = array(
				'news' => $data,				
                ); 
        $this->load->view('news/detail_news',$data);	
    } 

	// Edit News
	public function editNews($unique)
    {
		$data1 = $this->News_model->detailNews($unique);
        $data2 = array(
				'news' => $data1,
                ); 
        $this->load->view('admin/edit_news',$data2);	
	}

	public function editingNews()
    {
		$unique = $this->input->post('unique');
        date_default_timezone_set('Asia/Jakarta');

        $this->form_validation->set_rules('title', 'News Title', 'trim|required|xss_clean');
		$this->form_validation->set_rules('content', 'Content', 'trim|required');
		
        $this->form_validation->set_message('required', 'Maaf! <b>%s</b> Tidak Boleh Kosong');

        if($this->form_validation->run() == FALSE)
        {
            $data1 = $this->News_model->detailNews($unique);
            $data2 = array(
				'news' => $data1,
                ); 
            $this->load->view('news/edit_news',$data2);	
        }
        else
        {
            if($_FILES['thumbNews']['name']=="")
            {
                $this->News_model->editingNews($unique);
                $this->session->set_flashdata('success', 'Update News is Success.');
			    redirect(base_url('news'));
            }
            else 
            {
                $news       = $this->News_model->detailNews($unique);
                $thumbNews  = './asset/images/news/'.$news['news_thumb_name'];
                unlink($thumbNews);

                $config['upload_path']   = "./asset/images/news";
                $config['allowed_types'] = "jpg|png|jpeg";
                $config['max_size']      = "10240";
                $config['remove_space']  = TRUE;
                $config['encrypt_name']  = TRUE;            
                $this->load->library('upload', $config);

			    if ($this->upload->do_upload('thumbNews')) 
			    {
                    $this->load->library('image_lib');
                    $upload = array(
                        'upload_data' => $this->upload->data()
                	);
                    $resize=$this->upload->data();

                    $configer =  array(
                        'image_library'   => 'gd2',
                        'source_image'    => $resize['full_path'],
                        'create_thumb' 	  => FALSE,
                        'maintain_ratio'  => FALSE,
                        'width'           => 1170,
                        'height'          => 570,
                  	);
                    $this->image_lib->clear();
				    $this->image_lib->initialize($configer);
				                  
				    if($this->image_lib->resize())
				    {                
                        if($this->News_model->editingNewsThumb($unique,$upload))
                        {
                            $this->session->set_flashdata('success', 'Successfully updated news');
                            redirect(base_url('news'));
                        }
                        else 
                        {
                            $this->session->set_flashdata('error', 'Sorry, failed to update news');
                            redirect(base_url('news'));
                        }
                    }
				    else
				    {
                        $this->session->set_flashdata('error', 'Sorry, failed to resize thumbnail');
                        redirect(base_url('news'));
                    }
                }
			    else
			    {
                    $this->session->set_flashdata('error', 'Sorry, failed to upload thumbnail');
                    redirect(base_url('news'));
                }                
            }            
        }
    }

    // Delete News
    public function deletingNews($unique)
	{
        $news = $this->News_model->detailNews($unique);
        if($this->News_model->deletingNews($unique))
        {
            $this->session->set_flashdata('success', 'News '.$news['news_title'].' deleted successfully');
		    redirect(base_url('news'));
        }
        else 
        {
            $this->session->set_flashdata('error', 'Sorry, failed to delete news');
		    redirect(base_url('news'));
        }		
	}
}
