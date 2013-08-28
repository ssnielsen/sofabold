<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('admin_model');
	}

	public function index() {
		$this->load->view('templates/header');
		$this->load->view('admin');
		$this->load->view('templates/footer');
	}

	private function uploadLogo($name, $type, $file) {
		$config['upload_path'] = "./static/img/$type";
		$config['allowed_types'] = 'png';
		$config['file_name'] = "$name.png";

		$this->load->library('upload', $config);

		return $this->upload->do_upload($file);
	}

	public function createTeam() {
		$name = $this->input->post('name_team');

		// Create team in db.
		$dbData['name'] = $name;
		$query = $this->db->insert_string('team', $dbData);
		$this->db->query($query);

		if ($this->db->affected_rows() == 1) {
		 	// Get the team's id
		 	$this->db->select('id')->where('name', $name)->from('team');
		 	$result = $this->db->get()->result();
		 	$id = $result[0]->id;

			// Handle upload to static/img/clubs/[id].png
			$type = 'clubs';
			$file = 'userfile_team';
			if ($this->uploadLogo($id, $type, $file)) {
				$this->utils->msg('success', "Hold oprettet.");
			} else {
				$error = array('error' => $this->upload->display_errors());
				$this->utils->msg('error', "Hold blev ikke oprettet. Upload fejl: $error[error]");
				$this->db->where('id', $id)->delete('team');
			}
		} else {
			$this->utils->msg('error', "Hold blev ikke oprettet.");
		}
		redirect('admin');
	}

	public function createTournament() {
		$name = $this->input->post('name_tournament');

		// Create team in db.
		$dbData['name'] = $name;
		$query = $this->db->insert_string('tournament', $dbData);
		$this->db->query($query);

		if ($this->db->affected_rows() == 1) {
		 	// Get the team's id
		 	$this->db->select('id')->where('name', $name)->from('tournament');
		 	$result = $this->db->get()->result();
		 	$id = $result[0]->id;	

			// Handle upload to static/img/tournaments/[id].png
			$type = 'tournaments';
			$file = 'userfile_tournament';
			if ($this->uploadLogo($id, $type, $file)) {
				$this->utils->msg('success', "Turnering oprettet.");
			} else {
				$this->utils->msg('error', "Turnering blev ikke oprettet. Upload fejl: " . $error['error']);
				$this->db->where('id', $id)->delete('tournament');
			}
		} else {
				$this->utils->msg('error', "Turnering blev ikke oprettet.");
		}
		redirect('admin');
	}
}

/* End of file  */
/* Location: ./application/controllers/ */