<?php

	class approve_login extends CI_Controller
	{

		public function index()
		{

			include_once('connect.php');
			$this->load->helper('url');
			$this->load->library('session');

			$id=$this->session->userdata('userid');
			$rs=mysqli_query($con,"select name,dp from teacher where logid='$id'");
			$res=mysqli_fetch_array($rs);
			$data['name']=$res[0];
			$data['dp']=$res[1];

			$rs1=mysqli_query($con,"select facid,name,dp,designation from teacher where status=0");
			$data['totTchr']=mysqli_num_rows($rs1);
			$i=0;
			while($res1=mysqli_fetch_array($rs1))
			{
				$data['faculty'][$i]['facid']=$res1[0];
				$data['faculty'][$i]['facname']=$res1[1];
				$data['faculty'][$i]['facdp']=$res1[2];
				$data['faculty'][$i]['facdesig']=$res1[3];
				$i++;
			}

			$rs2=mysqli_query($con,"select stdno,yos,name,dp from student where status=0");
			$data['totStd']=mysqli_num_rows($rs2);
			$i=0;
			while($res2=mysqli_fetch_array($rs2))
			{
				$stdno=$res2[0];
				$data['std'][$i]['stdno']=$res2[0];
				$yos=$res2[1];
				$data['std'][$i]['yos']=$res2[1];
				$data['std'][$i]['name']=$res2[2];
				$data['std'][$i]['dp']=$res2[3];
				$rs3=mysqli_query($con,"select courseid from stdcrsalt where stdno=$stdno && yos=$yos");
				if($res3=mysqli_fetch_array($rs3))
				{
					$crsid=$res3[0];
					$rs4=mysqli_query($con,"select name from course where courseid=$crsid");
					if($res4=mysqli_fetch_array($rs4))
					{
						$data['std'][$i]['course']=$res4[0];
					}
				}
				$i++;
			}

			$this->load->view('approve_login',$data);

		}

		public function approveFaculty()
		{

			include_once('connect.php');
			$facid=$this->input->post('facid');
			mysqli_query($con,"update teacher set status=1 where facid=$facid");
			$this->load->helper('url');
			redirect('approve_login');

		}

		public function approveStudent()
		{

			include_once('connect.php');
			$stdno=$this->input->post('stdno');
			$yos=$this->input->post('yos');
			mysqli_query($con,"update student set status=1 where stdno=$stdno && yos=$yos");
			$this->load->helper('url');
			redirect('approve_login');

		}

	}

?>