<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_Model extends CI_Model {

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
}

/* End of file  */
/* Location: ./application/models/ */