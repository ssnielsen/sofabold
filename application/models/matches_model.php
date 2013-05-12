<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Matches_Model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	public function get_matches(){
		$matches = array(
			array('home'=>'FCK', 'away'=>'BIF', 'time'=>'17:00'),
			array('home'=>'FCK', 'away'=>'BIF', 'time'=>'19:00'),
			array('home'=>'FCK', 'away'=>'BIF', 'time'=>'14:00')
		);
		
		return $matches;
	}
}

/* End of file  */
/* Location: ./application/models/ */