<?php

	class login extends CI_Controller
	{

		public function index()
		{
			$data=array();
			$this->load->library('session');
			$data['error']=$this->session->flashdata('error');
			#$data['error']='';
			$this->load->helper('url');
			$this->load->view('login',$data);
		}

		public function logins()
		{
			include_once('connect.php');
			$this->load->library('session');
			$this->load->helper('url');
			$id=$this->input->post('loginForm-name');
			$pass=$this->input->post('loginForm-pass');
			$data=array();
			$rs=mysqli_query($con,"select * from login where logid='$id'");
			if(!mysqli_num_rows($rs))
			{
				$this->session->set_flashdata('error','User not found!');
				redirect('login');
			}
			else
			{
				$res=mysqli_fetch_array($rs);
				$spass=$res[1];
				$srole=$res[2];
				if(password_verify($pass,$spass))
				{
					if($srole=='std')
					{
						$rs1=mysqli_query($con,"select status from student where logid='$id'");
						$res1=mysqli_fetch_array($rs1);
						if($res1[0]==0)
							redirect('not_approved');
						else
						{
							$this->load->library('session');
							$this->session->set_userdata('userid',$id);
							$this->session->set_userdata('role',$srole);
							mysqli_query($con,"update login set status=1 where logid='$id'");
							redirect('stdhome');
						}
					}
					else
					{
						$rs1=mysqli_query($con,"select status from teacher where logid='$id'");
						$res1=mysqli_fetch_array($rs1);
						if($res1[0]==0)
							redirect('not_approved');
						else
						{
							$this->load->library('session');
							$this->session->set_userdata('userid',$id);
							$this->session->set_userdata('role',$srole);
							mysqli_query($con,"update login set status=1 where logid='$id'");
							redirect('tchrhome');
						}
					}
				}
				else
				{
					$this->session->set_flashdata('error','Incorrect password!');
					redirect('login');
				}
			}
		}
	}

?>