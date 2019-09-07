<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function __construct() {
		parent:: __construct();

		$this->load->helper('url');
		$this->load->model('Mdl_Pages');
	}

	function _remap($url) {
		$this->index($url);
	}

	public function index($url) {
		$this->load->view('front/header');
		$ParentPageArray['ActiveParentPageInfo'] = $this->Mdl_Pages->getAllActiveParentPages();
		$pageData['getPageInfoById'] = $this->Mdl_Pages->getPageInfoById($url);
		$this->load->view('front/nav', $ParentPageArray);
		$this->load->view('front/page', $pageData);
		$this->load->view('front/footer');
	}

}
