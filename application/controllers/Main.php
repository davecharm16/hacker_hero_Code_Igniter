<?php 

	class Main extends CI_Controller{

		public function index(){
			echo "I am Main Class!";
		}

		public function world(){
			$data = array(
				'image_count' => 3,
			);
			$this->load->view('world',$data);
		}

		public function ninjas($any){
			$data = array(
				'value' => $any,
			);
			$this->load->view('ninjas', $data);
		}


	}

?>
