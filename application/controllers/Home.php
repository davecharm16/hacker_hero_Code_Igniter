<?php 
	class Home extends CI_Controller {
		public function index() {
			echo "I'm the default method, which can be accessible via '/'";
		}
		public function new($num1, $num2) {
			echo "I'm the new method, which can be accessible via 'home/new'";
			echo "Parameter is: $num1, $num2";
		}
	}
?>
