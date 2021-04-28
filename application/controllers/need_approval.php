<?php

	class need_approval extends CI_Controller
	{

		public function index()
		{
			$this->load->library('session');
			$data=array();
			$data['name']=$this->session->userdata('name');
			$this->load->helper('url');
			$this->load->view('need_approval',$data);
		}

		function logout()
		{
			$this->load->library('session');
			$this->session->sess_destroy();
			$this->load->helper('url');
			redirect('welcome');
		}

	}

?>