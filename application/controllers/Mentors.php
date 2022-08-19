<?php 
	class Mentors extends CI_Controller {
		public function hello($name, $num)
		{
			echo "Hello mentee! Keep up the good work! If you'll finish by $num months, you'll be more hirable! - $name ";
			$this->load->view('hello');
		}
	}
?>
