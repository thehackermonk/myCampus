<?php

	class stdEditProfile extends CI_Controller
	{

		public function index()
		{
			$this->load->helper('url');
			$this->load->library('session');
			include_once("connect.php");

			$id=$this->session->userdata('userid');
			if($id==NULL)
	 			redirect('login');

	 		$rs=mysqli_query($con,"select stdno,yos,name,dp,guardian,gender,address,mail,contact from student where logid='$id'");
	 		$res=mysqli_fetch_array($rs);
	 		$stdno=$res[0];
	 		$yos=$res[1];
			$data['name']=$res[2];
			$data['dp']=$res[3];
			$data['guardian']=$res[4];
			$data['gender']=$res[5];
			$data['address']=$res[6];
			$data['mail']=$res[7];
			$data['contact']=$res[8];

			$rs1=mysqli_query($con,"select courseid from stdcrsalt where stdno=$stdno && yos=$yos");
			$res1=mysqli_fetch_array($rs1);
			$data['stdcrsid']=$res1[0];

			$rs2=mysqli_query($con,"select courseid,name from course");
			$i=0;
			$data['totCrs']=mysqli_num_rows($rs2);
			while($res2=mysqli_fetch_array($rs2))
			{
				$data['course'][$i]['id']=$res2[0];
				$data['course'][$i]['name']=$res2[1];
				$i++;
			}

			$this->load->view('stdEditProfile',$data);
		}

		public function editStdDet()
		{

			include_once('connect.php');
			$this->load->helper('url');

			$this->load->library('session');
			$id=$this->session->userdata('userid');

			$rs3=mysqli_query($con,"select stdno,yos from student where logid='$id'");
			$res3=mysqli_fetch_array($rs3);
			$stdno=$res3[0];
			$yos=$res3[1];

			$name=$this->input->post('stdname');
			$course=$this->input->post('stdcrs');
			$guardian=$this->input->post('stdgrd');
			$gender=$this->input->post('stdgen');
			$address=$this->input->post('stdadrs');
			$mail=$this->input->post('std_mail');
			$contact=$this->input->post('std_cont');

			mysqli_query($con,"update student set name='$name',guardian='$guardian',gender='$gender',address='$address',mail='$mail',contact='$contact' where logid='$id'");
			mysqli_query($con,"update stdcrsalt set courseid=$course where stdno=$stdno && yos=$yos");

			redirect('stdEditProfile');

		}

	}

?>