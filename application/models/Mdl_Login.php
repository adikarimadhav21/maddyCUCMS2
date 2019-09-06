<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_Login extends CI_Model {

	public function __construct() {
		parent::__construct();

		$this->load->library('encryption');

    }

    public function checkValidUser()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$encryptedPwd = sha1($password);
		
		$this->db->select("*");
		$this->db->from('tbl_user');
		$this->db->where('user_name', $username);
		$this->db->where('password', $encryptedPwd);
		$result = $this->db->get();

		return $result->row_array();
	}
    
}

?>