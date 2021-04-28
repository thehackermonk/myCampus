<?php

	class my404 extends CI_Controller
	{

		public function index()
		{
			$this->output->set_status_header('404');
			$this->load->helper('url');
			$this->load->view('my404');
		}

	}

?>