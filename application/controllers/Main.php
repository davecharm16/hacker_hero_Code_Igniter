<?php 

	class Main extends CI_Controller{

		public function index(){
			echo "I am Main Class!";
		}

		public function hello($any){
			echo "Hello World";
		}

		public function say($any){
			echo "HI";
		}

		public function say_anything($any){
			echo strtoupper($any);
		}

		public function danger(){
			redirect('/main');
		}
	}

?>
