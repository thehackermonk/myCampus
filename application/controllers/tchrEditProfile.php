<?php

	class tchrEditProfile extends CI_Controller
	{

		public function index()
		{
			include_once("connect.php");
			$this->load->library('session');
			$this->load->helper('url');

			$id=$this->session->userdata('userid');
			if($id==NULL)
				redirect('login');

			$rs=mysqli_query($con,"select name,dp,gender,address,mail,contact,qualification,facid from teacher where logid='$id'");
			$res=mysqli_fetch_array($rs);
			$data["name"]=$res[0];
			$data["dp"]=$res[1];
			$data["gender"]=$res[2];
			$data["address"]=$res[3];
			$data["mail"]=$res[4];
			$data["contact"]=$res[5];
			$data["qualification"]=$res[6];
			$facid=$res[7];

			$rs1=mysqli_query($con,"select subid,name from subject");
			$data["totSub"]=mysqli_num_rows($rs1);
			$i=0;
			while($res1=mysqli_fetch_array($rs1))
			{
				$data["subject"][$i]["id"]=$res1[0];
				$data["subject"][$i]["name"]=$res1[1];
				$i++;
			}

			$rs2=mysqli_query($con,"select subid from tchrsubalt where facid=$facid");
			if($res2=mysqli_fetch_array($rs2))
				$data["tchrsubid"]=$res2[0];

			$this->load->view('tchrEditProfile',$data);
		}

		public function editProfile()
		{
			include_once('connect.php');
			$this->load->library('session');
			$this->load->helper('url');

			$id=$this->session->userdata('userid');
			$name=$this->input->post('facname');
			$gender=$this->input->post('facgen');
			$address=$this->input->post('facadrs');
			$mail=$this->input->post('fac_mail');
			$contact=$this->input->post('fac_cont');
			$qualification=$this->input->post('fac_quali');
			$tchrSub=$this->input->post('tchrSub');

			mysqli_query($con,"update teacher set name='$name',gender='$gender',address='$address',mail='$mail',contact='$contact',qualification='$qualification' where logid='$id'");
			$rs3=mysqli_query($con,"select facid from teacher where logid='$id'");
			$res3=mysqli_fetch_array($rs3);
			$facid=$res3[0];
			mysqli_query($con,"update tchrsubalt set subid=$tchrSub where facid=$facid");
			
			redirect('tchrEditProfile');
		}

	}

?>