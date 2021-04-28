<?php

	class not_approved extends CI_Controller
	{

		public function index()
		{
			$this->load->helper('url');
			$this->load->view('not_approved');
		}

	}

?>