<?php
defined('BASEPATH') OR exit('No Direct Script Access Allowed');

class Admin_model extends CI_Model
{
  public function Insert($table,$data)
  {
    $res = $this->db->insert($table, $data);
    return $res; 
  }
  public function get($table)
  {
      return $this->db->get($table)->result_array();
  }
  public function faq()
  {
    return $this->db->get('faq')->result_array();
  }
  public function account()
  {
    return $this->db->get('account')->result_array();
  }
  public function GetWhere($table, $where)
  {
    $res = $this->db->get_where($table, $where);
    return $res->result_array();
  }
  public function Delete($table, $where){
    $data = $this->db->delete($table, $where); 
    return $data;
  }
  public function cek_login($table, $where){
    return $this->db->get_where($table,$where);
  }
  public function Update($table, $data, $where){
    $data = $this->db->update($table, $data, $where);
    return $data;
  }
}