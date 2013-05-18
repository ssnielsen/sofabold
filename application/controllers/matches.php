<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Matches extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('matches_model');
		global $data;
	}

	public function index(){
		$this->load->view('templates/header');
		$data['matchdays'] = $this->matches_model->getMatchesForDates(1,2);
		$this->load->view('matches', $data);
		$this->load->view('templates/footer');
	}

	public function view($id){
		$this->load->view('templates/header');
		$this->load->view('matches', $data);
		$this->load->view('templates/footer');
	}
}

/* End of file  */
/* Location: ./application/controllers/ */