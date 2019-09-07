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
		$this->load->model('Mdl_Pages');

	}

	public function index() {
		$u=$this->session->userdata('username');
		if(!$u) {
			redirect('Admin');
		} else {
		$this->load->view('admin/header');
			$CurrentUser['CurrentUserInfo'] = $this->Mdl_User->getCurrentUserInfo($u);
			$this->load->view('admin/nav', $CurrentUser);
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
			$CurrentUser['CurrentUserInfo'] = $this->Mdl_User->getCurrentUserInfo($u);
			$this->load->view('admin/nav', $CurrentUser);
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
			$CurrentUser['CurrentUserInfo'] = $this->Mdl_User->getCurrentUserInfo($u);
			$this->load->view('admin/nav', $CurrentUser);
		$this->load->view('admin/user/viewAllUsers', $userData);
		$this->load->view('admin/footer');
		}
	}

	public function viewUser($id) {
		$u=$this->session->userdata('username');
		if(!$u)
		{
			redirect('Admin');
		}
		else
		{
			$userdata['users'] = $this->Mdl_User->getUserInfoById($id);
			$this->load->view('admin/header');
			$CurrentUser['CurrentUserInfo'] = $this->Mdl_User->getCurrentUserInfo($u);
			$this->load->view('admin/nav', $CurrentUser);
			$this->load->view('admin/user/viewUser.php', $userdata);
			$this->load->view('admin/footer');
		}
	}
	public function updateUser($id) {
	$u=$this->session->userdata('username');
	if(!$u)
	{
		redirect('Admin');
	}
	else
	{
		$postData['userArray'] = $this->Mdl_User->getUserInfoById($id);
		$this->load->view('admin/header');
		$CurrentUser['CurrentUserInfo'] = $this->Mdl_User->getCurrentUserInfo($u);
		$this->load->view('admin/nav', $CurrentUser);
		$this->load->view('admin/user/updateUser', $postData);
		$this->load->view('admin/footer');
	}
}

	public function deleteUser($id) {
		$u=$this->session->userdata('username');
		if(!$u)
		{
			redirect('Admin');
		}
		else
		{
	        $this->Mdl_User->deleteUserInfoById($id);
			redirect('AdminDashboard/viewAllUsers');

		}
	}
	public function submitUpdatedUser($id) {
		//$photo = $this->uploadfile($_FILES['photo']['name'],"photo");
		$this->Mdl_User->submitUpdatedUser($id);
		redirect('AdminDashboard/viewAllUsers');
	}


	public function updatePassword($id) {
		$u=$this->session->userdata('username');
		if(!$u)
		{
			redirect('Admin');
		}
		else
		{
			$postData['userArray'] = $this->Mdl_User->getUserInfoById($id);
			$this->load->view('admin/header');
			$CurrentUser['CurrentUserInfo'] = $this->Mdl_User->getCurrentUserInfo($u);
			$this->load->view('admin/nav', $CurrentUser);
			$this->load->view('admin/user/updatePassword', $postData);
			$this->load->view('admin/footer');
		}
	}

	public function submitUpdatedPassword($id) {
		$this->Mdl_User->submitUpdatedUserPassword($id);
		redirect('AdminDashboard/viewAllUsers');
	}




	public function addPage()
	{
		$u = $this->session->userdata('username');
		if (!$u) {
			redirect('Admin');
		} else {
			$this->load->view('admin/header');
			$CurrentUser['CurrentUserInfo'] = $this->Mdl_User->getCurrentUserInfo($u);
			$this->load->view('admin/nav', $CurrentUser);
			$this->load->view('admin/page/addPage');
			$this->load->view('admin/footer');
		}
	}
	public function submitPage() {
			$this->Mdl_Pages->submitPage();
			redirect('AdminDashboard/viewAllPages');
		}


	public function viewAllPages() {
		$u=$this->session->userdata('username');
		if(!$u) {
			redirect('Admin');
		} else {
			$this->load->view('admin/header');
			$CurrentUser['CurrentUserInfo'] = $this->Mdl_User->getCurrentUserInfo($u);
			$this->load->view('admin/nav', $CurrentUser);
			$productData['listAllPages'] = $this->Mdl_Pages->getAllPages();
			$this->load->view('admin/page/viewAllPages', $productData);
			$this->load->view('admin/footer');
		}
	}

	public function updatePage($id) {
		$u=$this->session->userdata('username');
		if(!$u)
		{
			redirect('Admin');
		}
		else
		{
			$this->load->view('admin/header');
			$CurrentUser['CurrentUserInfo'] = $this->Mdl_User->getCurrentUserInfo($u);
			$this->load->view('admin/nav', $CurrentUser);
			$pageData['PageInfoById'] = $this->Mdl_Pages->getPageInfoById($id);
			$this->load->view('admin/page/updatePage', $pageData);
			$this->load->view('admin/footer');
		}
	}

	public function submitUpdatedPage($id) {
		$this->Mdl_Pages->submitUpdatedPage($id);
		redirect('AdminDashboard/viewAllPages');
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
