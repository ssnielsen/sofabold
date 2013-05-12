<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Matches extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('matches_model');
		global $data;
		
	}

	public function index(){
		$this->load->view('templates/header');
		$data['matches'] = $this->matches_model->get_matches();
		$this->load->view('matches_view', $data);
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