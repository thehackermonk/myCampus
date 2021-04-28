<?php

	class logout extends CI_Controller
	{
		public function signout()
		{

			$this->load->library("session");
			$id=$this->session->userdata('userid');

			include_once("connect.php");
			mysqli_query($con,"update login set status=0 where logid='$id'");

			$this->session->sess_destroy();

			$this->load->helper('url');
			redirect('login');

		}
	}

?>