<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News_model extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();
    }

    // List News
    public function listNews()
    {
        $this->db->select('*');
        $this->db->from('news');       
        $this->db->order_by('news_id', 'DESC');        
        return $res = $this->db->get()->result_array();
    }

    // Creating News
    public function creatingNews($upload)
    {
        date_default_timezone_set("Asia/Jakarta");		
		$str    = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $unique = md5(str_shuffle($str).$this->input->post('title'));	
        $slug   = url_title($this->input->post('title'), 'dash', TRUE);
        $data = array(
            'news_unique'  	    => $unique,
            'news_thumb_name'   => $upload['upload_data']['file_name'],
            'news_thumb_size'   => $upload['upload_data']['file_size'],
            'news_thumb_type'   => $upload['upload_data']['file_type'],                        
            'news_title' 	    => $this->input->post('title'),
            'news_slug'         => $slug,
            'news_content'      => $this->input->post('content'),
			'news_date' 	    => date('Y-m-d'),
            'news_time'         => date('H:i:s'),            
            'news_status' 	    => 1                        
            );
        return $this->db->insert('news', $data);
    }

    // Status News
    public function statNews($data,$unique)
    {
		$this->db->select('*');
		$this->db->from('news');
		$this->db->where('news_unique', $unique);
		return $this->db->update('news', $data);		
    }

    // Detail News
    public function detailNews($unique)
	{
		$this->db->select('*');
		$this->db->from('news');
		$this->db->where('news_unique', $unique);
		return $this->db->get()->row_array();		
    }
    
    // Editing News
    public function editingNews($unique)
    {        			        
        $slug   = url_title($this->input->post('title'), 'dash', TRUE);
        $data = array(            
            'news_title' 	    => $this->input->post('title'),
            'news_slug'         => $slug,
            'news_content'      => $this->input->post('content'),            
            'news_category'     => $this->input->post('category'),			
            );        
        
		$this->db->where('news_unique', $unique);
		return $this->db->update('news', $data);
    }

    // Editing News with thumb
    public function editingNewsThumb($unique, $upload)
    {        			        
        $slug   = url_title($this->input->post('title'), 'dash', TRUE);
        $data = array(
            'news_thumb_name'   => $upload['upload_data']['file_name'],
            'news_thumb_size'   => $upload['upload_data']['file_size'],
            'news_thumb_type'   => $upload['upload_data']['file_type'],          
            'news_title' 	    => $this->input->post('title'),
            'news_slug'         => $slug,
            'news_content'      => $this->input->post('content'),            
            'news_category'     => $this->input->post('category'),			
            );        
        
		$this->db->where('news_unique', $unique);
		return $this->db->update('news', $data);
    }

    // Delete News
    public function deletingNews($unique)
    {
        $news = $this->News_model->detailNews($unique);
        $thumbNews ='./asset/images/news/'.$news['news_thumb_name'];
        unlink($thumbNews);
        $this->db->where('news_unique', $unique);
		return $this->db->delete('news');		
    }
}