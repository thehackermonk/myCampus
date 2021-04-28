<?php

	class add_subject extends CI_Controller
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

			$rs1=mysqli_query($con,"select courseid,name from course");
			$i=0;
			$data['totCrs']=mysqli_num_rows($rs1);
			while($res1=mysqli_fetch_array($rs1))
			{
				$data['course'][$i]['id']=$res1[0];
				$data['course'][$i]['name']=$res1[1];
				$i++;
			}

			$this->load->view('add_subject',$data);

		}

		public function addSubject()
		{

			include_once('connect.php');
			$this->load->helper('url');

			$course=$this->input->post('course');
			$name=$this->input->post('subname');
			$sdesc=$this->input->post('subdesc');
			
			mysqli_query($con,"insert into subject(name,description) values('$name','$sdesc')");
			$rs2=mysqli_query($con,"select subid from subject order by subid desc limit 1");
			$res2=mysqli_fetch_array($rs2);
			$subid=$res2[0];
			mysqli_query($con,"insert into crssubalt values($subid,$course)");

			redirect('add_subject');

		}

	}

?>