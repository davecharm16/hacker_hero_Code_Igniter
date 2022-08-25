<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Feedback extends CI_Controller {
		function index(){
			$this->load->view('feedbackform');
		}

		function process(){
			$this->load->view('process');
		}
	}
?>
