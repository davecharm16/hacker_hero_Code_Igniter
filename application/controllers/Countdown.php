<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Countdown extends CI_Controller {
		public function main()
		{
			date_default_timezone_set('Asia/Manila');
			$hour_now = date('H');
			$hour_to_sec = (int)$hour_now*60*60;
			$minute_now = date('m');
			$minute_to_sec = (int)$minute_now*60;
			$sec_now = date('s');

			$sec_remaining = 86400 - ((int)$sec_now + $minute_to_sec + $hour_to_sec);
			$data = array(
				'date' => date('F d Y'),
				'seconds' => $sec_remaining,
			);
			$this->load->view('countdown', $data);
		}


	}

?>
