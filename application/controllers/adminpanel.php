<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class AdminPanel extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('adminpanel');
		global $data;
	}

	public function index(){
		$this->load->view('templates/header');
		$this->load->view('adminpanel', $data);
		$this->load->view('templates/footer');
	}

	public function view(){
		$this->load->view('templates/header');
		$this->load->view('adminpanel', $data);
		$this->load->view('templates/footer');
	}
}

/* End of file  */
/* Location: ./application/controllers/ */