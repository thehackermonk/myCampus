<?php

	class add_course extends CI_Controller
	{

		public function index()
		{

			include_once('connect.php');
			$this->load->library('session');
			$id=$this->session->userdata('userid');
			if($id==NULL)
				redirect('login');
			$rs=mysqli_query($con,"select name,dp from teacher where logid='$id'");
			if($res=mysqli_fetch_array($rs))
			{
				$data['name']=$res[0];
				$data['dp']=$res[1];
			}
			$this->load->helper('url');
			$this->load->view('add_course',$data);

		}

		public function addCourse()
		{

			include_once('connect.php');
			$crsname=$this->input->post('crsname');
			$crsdesc=$this->input->post('crsdesc');
			mysqli_query($con,"insert into course(name,description) values('$crsname','$crsdesc')");
			$this->load->helper('url');
			redirect('add_course');

		}

	}

?>