<?php
	/**
	 * 
	 */
	class Rahul extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->library('zip');
			$this->load->model('Rahul_Model','Demo');
		}
		public function getInProgressProject(){
			die(json_encode($this->Demo->get_in_progress_project()));
		}
		public function getOverDueProject(){
			die(json_encode($this->Demo->get_over_due_project()));
		}
		public function getInProgressTask(){
			die(json_encode($this->Demo->get_in_progress_task()));
		}
		public function getOverDueTask(){
			die(json_encode($this->Demo->get_over_due_task()));
		}
		public function fetchOnlineUser(){
			die(json_encode($this->Demo->get_online_user()));
		}
		public function createBackUp(){
			$path = './application/';

			$this->zip->read_dir($path);
			$path = './assets/';

			$this->zip->read_dir($path);
			$path = './uploads/';

			$this->zip->read_dir($path);
			$path = './dB/';

			$this->zip->read_dir($path);


			// Download the file to your desktop. Name it "my_backup.zip"
			$this->zip->download('my_project_backup.zip');
			// $name = base_url();
			// $data = 'I was born in an elevator...';

			// $this->zip->add_data($name, $data);
			// $zip_file = $this->zip->get_zip();

			// $this->zip->clear_data();

			// $name = 'photo.jpg';
			// $this->zip->read_file("/path/to/photo.jpg"); // Read the file's contents

			// $this->zip->download('myphotos.zip');
		}
	}
?>