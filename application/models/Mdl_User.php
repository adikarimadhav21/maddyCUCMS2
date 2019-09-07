<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_user extends CI_Model {

	public function __construct() {
		parent::__construct();

		$this->load->library('encryption');

    }

    public function getCurrentUserInfo($username) {
		$this->db->select('*');
		$this->db->where('user_name', $username);
		$query = $this->db->get('tbl_user');
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
		else return null;
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
	public function getUserInfoById($id) {
		$this->db->where('id', $id);
		$query = $this->db->get('tbl_user');
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			return $data;
		}
		else return null;
	}
	public function deleteUserInfoById($id) {
		$this->db->where('id', $id);
		$query = $this->db->delete('tbl_user');

	}
	public function submitUpdatedUser($id) {
		$data = array(
			'full_name' => $this->input->post('name'),
			'address' => $this->input->post('address'),
			'phone' => $this->input->post('phone'),
			'email' => $this->input->post('email')
		);
		$this->db->where('id', $id);
		$this->db->update('tbl_user', $data);

//		if(!empty($photo)) {
//			$data1=array('Image' => $photo);
//			$this->db->where('id',$id);
//			$this->db->update('tbl_users',$data1);
//		}
	}

	public function submitUpdatedUserPassword($id) {
		$password = $this->input->post('password');
		$encryptedpassword = sha1($password);

		$data = array('Password' => $encryptedpassword);
		$this->db->where('id', $id);
		$this->db->update('tbl_user', $data);
	}
}

?>
