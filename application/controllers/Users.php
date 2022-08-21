<?php 

	class Users extends CI_Controller{

		public function index(){
			$this->load->view('users/index');
		}

		public function new(){
			$this->load->view('users/new');
		}

		public function create(){
			if($this->input->post(NULL, TRUE)){
				echo 'This feature is coming soon';
			}
			else{
				redirect('users/new');
			}
		}

		public function count(){
			// $this->session->unset_userdata('counter');
			// $this->session->sess_destroy();
			$old_counter = $this->session->userdata('counter');
			$x = $old_counter;
			$x++;
			$this->session->set_userdata('counter', $x);
			echo "Visited " . $this->session->userdata('counter');
		}

		public function reset(){
			$this->session->set_userdata('counter', 0);
			$data = array(
				'count' => $this->session->userdata('counter')
			);
			$this->load->view('users/reset',$data);
		}

		public function say($any, $count){
			$data = array(
				'text' => $any,
				'count' => $count,
			);
			$this->load->view('users/say', $data);
		}

		public function mprep()
		{
			 $view_data = array(
				  'name' => "Michael Choi",
				  'age'  => 40,
				  'location' => "Seattle, WA",
				  'hobbies' => array( "Basketball", "Soccer", "Coding", "Teaching", "Kdramas")
			  );
			  $this->load->view('users/mprep', $view_data);
		}
	}

?>
