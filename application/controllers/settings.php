<?php

	class settings extends CI_Controller
	{

		public function index()
		{

			$this->load->helper('url');
			$this->load->library('session');

			$id=$this->session->userdata('userid');
			$role=$this->session->userdata('role');
	 		if($id==NULL)
	 			redirect('login');

	 		include_once('connect.php');
	 		if($role=='std')
	 			$rs=mysqli_query($con,"select name,dp from student where logid='$id'");
	 		else
	 			$rs=mysqli_query($con,"select name,dp from teacher where logid='$id'");
	 		$res=mysqli_fetch_array($rs);
	 		$data=array();
	 		$data['name']=$res[0];
	 		$data['dp']=$res[1];

			$this->load->view('settings',$data);

		}

		public function changePass()
		{
			
			$this->load->library('session');
			$id=$this->session->userdata('userid');
			$opass=$this->input->post('chng-oldPass');
			$npass=$this->input->post('chng-newPass');

			include_once("connect.php");
			$rs1=mysqli_query($con,"select password from login where logid='$id'");
			$res1=mysqli_fetch_array($rs1);
			$pwd=$res1[0];

			$this->load->helper('url');

			if(password_verify($opass,$pwd))
			{
				$npwd=password_hash($npass,PASSWORD_DEFAULT);
				mysqli_query($con,"update login set password='$npwd' where logid='$id'");
			}
			else
				echo "<script>alert('Incorrect password');</script>";
			
			redirect("settings");

		}

	}

?>