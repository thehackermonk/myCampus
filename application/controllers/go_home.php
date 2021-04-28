<?php

	class go_home extends CI_Controller
	{

		public function goToHome()
		{

			$this->load->helper('url');
			$this->load->library('session');
			include_once("connect.php");
			$id=$this->session->userdata('userid');
			if($id==NULL)
	 			redirect('login');
			$rs=mysqli_query($con,"select role from login where logid='$id'");
			$res=mysqli_fetch_array($rs);
			if($res[0]=='std')
				redirect("stdhome");
			else
				redirect("tchrhome");

		}

	}

?>