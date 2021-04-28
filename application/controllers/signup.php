<?php

	class signup extends CI_Controller
	{

		public function index()
		{
			$this->load->helper('url');
			$this->load->view('signup.php');
		}

		public function signups()
		{
			include_once('connect.php');
			$id=$this->input->post('signupForm-name');
			$pass=$this->input->post('signupForm-pass');
			#$hpass=md5($pass);
			$hpass=password_hash($pass,PASSWORD_DEFAULT);
			$role=$this->input->post('usertype');
			$res=mysqli_query($con,"select * from login where logid like '%$id%'");
			if(mysqli_num_rows($res)!=0)
			{
				echo "<script>alert('User already exist');</script>";
			}
			else
			{
				mysqli_query($con,"insert into login values('$id','$hpass','$role',0)");
				$this->load->library('session');
				$this->session->set_userdata('userid',$id);
				$this->load->helper('url');
				if($role=='std')
				{
					$this->session->set_userdata('role',$role);
					redirect('stdinfoadd');
				}
                else
                {
                	$this->session->set_userdata('role',$role);
                	redirect('tchrinfoadd');
                }
			}
		}

	}

?>