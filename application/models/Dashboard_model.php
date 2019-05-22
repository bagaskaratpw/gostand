<?php
defined('BASEPATH') OR exit('No Direct Script Access Allowed');

class Dashboard_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function totalUser()
    {
        $this->db->select('*');
        $this->db->from('account');
        return $this->db->get();
    }
    public function totalPost()
    {
        $this->db->select('*');
        $this->db->from('news');
        return $this->db->get();
    }
    public function totalFaq()
    {
        $this->db->select('*');
        $this->db->from('faq');
        return $this->db->get();
    }
}