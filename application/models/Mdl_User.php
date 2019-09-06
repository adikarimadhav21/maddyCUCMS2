<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_user extends CI_Model {

	public function __construct() {
		parent::__construct();

		$this->load->library('encryption');

    }

    public function addNewUser($photo)
	{

		$password = $this->input->post('password');
		$data = array(
			'full_name' => $this->input->post('full_name'),
			'address' => $this->input->post('address'),
			'phone' => $this->input->post('phone'),
			'email' => $this->input->post('email'),
			'user_name' => $this->input->post('username'),
			'password' => sha1($password),
			'photo' => $photo
			);

        $this->db->insert('tbl_user', $data); 
	}
	
	public function getAllUsers() {
		$this->db->select('*');
		$this->db->from('tbl_user' );

		return $this->db->get();
	}
    
}

?>