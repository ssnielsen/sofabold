<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('admin_model');
		global $data;
	}

	public function index(){
		$this->load->view('templates/header');
		$data['data'] = 0;
		$this->load->view('admin', $data);
		$this->load->view('templates/footer');
	}

	public function view($id){
		$this->load->view('templates/header');
		$this->load->view('admin', $data);
		$this->load->view('templates/footer');
	}

	public function createTeam() {
		$name = $this->input->post('name');
		$logo = $this->input->post('logo');


		// Create team in db.
		$dbData['name'] = $name;
		$query = $this->db->insert_string('team', $dbData);
		$this->db->query($query);

		if ($this->db->affected_rows() == 1) {
			// Get the team's id
			$this->db->select('id')->where('name', $name)->from('team');
			$result = $this->db->get();
			$id = $result->result()[0]['id'];			

			// Handle upload to static/img/clubs/[id].png
			$config['upload_path'] = './static/img/clubs';
			$config['allowed_types'] = 'png';
			$config['file_name'] = "$id.png";

			$this->load->library('upload', $config);
			echo "t";
			if ($this->upload->do_upload()) {
				echo "Success";
			} else {
				echo "Failure";
			}

			// Redirect to adminpanel
			//redirect('matches');
		} else {
			//redirect('admin');
		}

	}
}

/* End of file  */
/* Location: ./application/controllers/ */