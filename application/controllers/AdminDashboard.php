<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminDashboard extends CI_Controller {

	public function __construct() {
		parent:: __construct();

		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->helper('string');
		$this->load->library('image_lib');
		$this->load->model('Mdl_User');
		}

	public function index() {
		$u=$this->session->userdata('username');
		if(!$u) {
			redirect('Admin');
		} else {
		$this->load->view('admin/header');
		$this->load->view('admin/nav');
		$this->load->view('admin/dashboard');
		$this->load->view('admin/footer');
		}
	}

	public function addUser() {
		$u=$this->session->userdata('username');
		if(!$u) {
			redirect('Admin');
		} else {
		$this->load->view('admin/header');
		$this->load->view('admin/nav');
		$this->load->view('admin/user/addUser');
		$this->load->view('admin/footer');
		}
	}

	public function insertUser() {
		 $photo = $this->uploadfile($_FILES['photo']);
		$this->Mdl_User->addNewUser($photo);
		redirect('AdminDashboard/viewAllUsers');
	}


	public function viewAllUsers() {
		$u=$this->session->userdata('username');
		if(!$u) {
			redirect('Admin');
		} else {
		$userData['users'] = $this->Mdl_User->getAllUsers();
		$this->load->view('admin/header');
		$this->load->view('admin/nav');
		$this->load->view('admin/user/viewAllUsers', $userData);
		$this->load->view('admin/footer');
		}
	}

	// public function viewUser() {

	// }

		public function addPage() {
			$u=$this->session->userdata('username');
		if(!$u) {
			redirect('Admin');
		} else {
			$this->load->view('admin/header');
			$this->load->view('admin/nav');
			$this->load->view('admin/page/addPage');
			$this->load->view('admin/footer');
		}
	}



















	public function Logout()
	{

		$u=$this->session->userdata('username');
		if($u)
		{
			$this->session->unset_userdata('username');
			$this->session->sess_destroy();
			redirect('Admin');
		}
	}


	public function uploadfile($actual_filename)
	{
		if(!empty($actual_filename)) {
        $config = array(
			'upload_path' => "./application/assets/uploads/",
			'allowed_types' => "jpg|png|jpeg",
			'overwrite' => TRUE,
			// 'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
			// 'max_height' => "768",
			// 'max_width' => "1024"
			);
			
			$this->load->library('upload');
			$this->upload->initialize($config);

			if($this->upload->do_upload()) {
				$data = array('upload_data' => $this->upload->data());
				return "Success";
			} else {
				return $this->upload->display_errors();
			}
		} else {
			return "out";
		}
	}



}
