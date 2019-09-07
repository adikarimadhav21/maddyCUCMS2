<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacts extends CI_Controller {

	public function __construct() {
		parent:: __construct();

		$this->load->helper('url');
		$this->load->model('Mdl_Pages');
	}

	public function index() {
		$this->load->view('front/header');
		$ParentPageArray['ActiveParentPageInfo'] = $this->Mdl_Pages->getAllActiveParentPages();
		$this->load->view('front/nav', $ParentPageArray);
		$this->load->view('front/contacts');
		$this->load->view('front/footer');
	}

	public function sendMail() {

		$name = $this->input->post('FullName');
		$address = $this->input->post('address');
		$email = $this->input->post('email');
		$message = $this->input->post('message');

		// Load the email library
		$this->load->library('email');

		// Mail config
		$to = "adhikarimadhav21@gmail.com";
		$from = 'info@madhavadhikari.com.np';
		$fromName = 'Madhav Adhikari';
		$mailSubject = 'Contact Request Submitted by '.$name;

		// Mail content
		$mailContent = '
            <h2>Contact Request Submitted</h2>
            <p><b>Name: </b>'.$name.'</p>
            <p><b>Address: </b>'.$address.'</p>
            <p><b>Email: </b>'.$email.'</p>
            <p><b>Message: </b>'.$message.'</p>
        ';

		$config['mailtype'] = 'html';
		$this->email->initialize($config);
		$this->email->to($to);
		$this->email->from($from, $fromName);
		$this->email->subject($mailSubject);
		$this->email->message($mailContent);

			$this->email->send();



	}

}
