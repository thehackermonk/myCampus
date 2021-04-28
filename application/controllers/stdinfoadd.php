<?php

	class stdinfoadd extends CI_Controller
	{

		public function index()
		{

			include_once('connect.php');
			$data=array();
			$crs_rs=mysqli_query($con,"select name from course");
			$data["course"]=array();
			$i=0;
			while($datas=mysqli_fetch_array($crs_rs))
			{
				$data["course"][$i]=$datas[0];
				$i++;
			}
			$this->load->helper('url');
			$this->load->view('stdinfoadd.php',$data);

		}
		
		public function stdaddinfo()
		{
			$this->load->library('session');
			include_once('connect.php');
			$stdno=$this->input->post('stdno');
			$yos=$this->input->post('stdyos');
			$logid=$this->session->userdata('userid');
			$name=$this->input->post('stdname');
			$grd=$this->input->post('stdgrdn');
			$crs=$this->input->post('stdcrs');
			$gen=$this->input->post('stdgen');
			$adrs=$this->input->post('stdadrs');
			$mail=$this->input->post('std_mail');
			$cont=$this->input->post('std_cont');

			mysqli_query($con,"insert into student(stdno,yos,logid,name,guardian,gender,address,mail,contact,status) values($stdno,$yos,'$logid','$name','$grd','$gen','$adrs','$mail','$cont',0)");

			$crsid_rs=mysqli_query($con,"select courseid from course where name like '$crs'");
			$crsid=mysqli_fetch_array($crsid_rs);
			mysqli_query($con,"insert into stdcrsalt values($stdno,$yos,$crsid[0])");

			$this->session->set_userdata('name',$name);
			$this->session->set_userdata('gender',$gen);
			$this->load->helper('url');
			redirect('adddp');

		}

	}

?>