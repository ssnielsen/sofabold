<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Matches_Model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	public function getMatchesForDate($date) {
		$channels = array(
			array('id' => '0', 'name' => '6eren'),
			array('id' => '1', 'name' => '3+')
		);


		$matches = array(
			array('tournamentId'=>'0', 'tournamentName'=>'Superliga', 'homeId'=>'0', 'homeName'=>'FC København', 'awayId'=>'1', 'awayName'=>'Brøndby IF', 'time'=>'14:30', 'channels'=>$channels),
			array('tournamentId'=>'0', 'tournamentName'=>'Superliga', 'homeId'=>'2', 'homeName'=>'FC Nordsjælland', 'awayId'=>'3', 'awayName'=>'Randers FC', 'time'=>'17:00', 'channels'=>$channels),
			array('tournamentId'=>'0', 'tournamentName'=>'Superliga', 'homeId'=>'4', 'homeName'=>'Esbjerg', 'awayId'=>'5', 'awayName'=>'Odense Boldklub', 'time'=>'19:00', 'channels'=>$channels)
		);

		$matchday = array(
			'date' => date("l, F j Y"),
			'matches' => $matches
		);

		$matchdays = array(
			$matchday, $matchday, $matchday 
		);

		foreach ($matches as $match) {
		}

		return $matchdays;
	}

	public function getMatchesForDates($from, $to) {
		return $this->getMatchesForDate(1);
	}
}

/* End of file  */
/* Location: ./application/models/ */