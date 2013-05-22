<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Utils{

	function __construct() {
		$this->CI = &get_instance();
	}

	function msg($type, $msg){
		$data = array(
			'type' => $type,
			'msg' => $msg
		);
		$this->CI->session->set_flashdata('msg', serialize($data));
	}
}