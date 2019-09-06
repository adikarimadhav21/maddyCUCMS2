<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() {
		parent:: __construct();
		
		$this->load->model('Mdl_Login');
		$this->load->helper('url');

			}

	public function index() {
		$this->load->view('admin/login');
	}

	public function loginCheck() {
		$result = $this->Mdl_Login->checkValidUser();
		if(!empty($result))
		{

			$username = $this->input->post('username', TRUE);
			
			$this->session->set_userdata('username', $username);

			redirect('AdminDashboard');
		}
		else
		{
			$data['message']="Wrong Username or Password";
			$this->load->view('admin/login',$data);
		}
	}

}
