<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent:: __construct();

		$this->load->helper('url');
		$this->load->model('Mdl_Pages');
			}

	public function index() {
		$this->load->view('front/header');
		$ParentPageArray['ActiveParentPageInfo'] = $this->Mdl_Pages->getAllActiveParentPages();
		$getAboutPageContentForHome['getAboutConentForHome'] = $this->Mdl_Pages->getAboutConentForHome();
		$this->load->view('front/nav', $ParentPageArray);
		$HomePageData['homeData'] = $this->Mdl_Pages->getAboutConentForHome();
		$this->load->view('front/home', $getAboutPageContentForHome);
		$this->load->view('front/footer');
	}

}
