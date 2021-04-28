<?php

	class delAcnt extends CI_Controller
	{

		public function index()
		{

			$this->load->helper('url');
			$this->load->library('session');
			include_once('connect.php');

			$id=$this->session->userdata('userid');
			$role=$this->session->userdata('role');

			if($id==NULL)
				redirect('login');
			if($role=='std')
	 			$rs=mysqli_query($con,"select name,dp from student where logid='$id'");
	 		else
	 			$rs=mysqli_query($con,"select name,dp from teacher where logid='$id'");
	 		$res=mysqli_fetch_array($rs);
	 		$data=array();
	 		$data['name']=$res[0];
	 		$data['dp']=$res[1];

			$this->load->view('delAcnt',$data);

		}

		public function delAccount()
		{

			$this->load->library('session');
			$id=$this->session->userdata('userid');
			$role=$this->session->userdata('role');
			echo $id."<br>".$role;

		}

	}

?>