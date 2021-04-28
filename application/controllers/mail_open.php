<?php

	class mail_open extends CI_Controller
	{

		public function index()
		{

			$this->load->helper("url");
			$this->load->library("session");
			$id=$this->session->userdata('userid');
			$role=$this->session->userdata('role');
			$mailid=$this->session->userdata('mailid');
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

	 		$rs1=mysqli_query($con,"select fromid,toid,sub,content,attach,sdte,stime from mail where mailid=$mailid");
	 		$res1=mysqli_fetch_array($rs1);
	 		$fromid=$res1[0];
	 		$toid=$res1[1];
	 		$data['subject']=$res1[2];
	 		$data['msg']=$res1[3];
	 		$data['attach']=$res1[4];
	 		$data['sdte']=$res1[5];
	 		$data['stime']=$res1[6];

	 		$rs2=mysqli_query($con,"select role from login where logid='$fromid'");
	 		$res2=mysqli_fetch_array($rs2);
	 		if($res2[0]=='std')
	 		{
	 			$rs3=mysqli_query($con,"select name from student where logid='$fromid'");
	 			$res3=mysqli_fetch_array($rs3);
	 			$data["fname"]=$res3[0];
	 		}
	 		else
	 		{
	 			$rs3=mysqli_query($con,"select name from teacher where logid='$fromid'");
	 			$res3=mysqli_fetch_array($rs3);
	 			$data["fname"]=$res3[0];
	 		}

	 		$rs2=mysqli_query($con,"select role from login where logid='$toid'");
	 		$res2=mysqli_fetch_array($rs2);
	 		if($res2[0]=='std')
	 		{
	 			$rs3=mysqli_query($con,"select name from student where logid='$toid'");
	 			$res3=mysqli_fetch_array($rs3);
	 			$data["tname"]=$res3[0];
	 		}
	 		else
	 		{
	 			$rs3=mysqli_query($con,"select name from teacher where logid='$toid'");
	 			$res3=mysqli_fetch_array($rs3);
	 			$data["tname"]=$res3[0];
	 		}

	 		if($res1[4]==1)
	 		{
	 			$rs4=mysqli_query($con,"select attachment from attachment where mailid=$mailid");
	 			$res4=mysqli_fetch_array($rs4);
	 			$data["attachment"]=$res4[0];
	 		}

	 		$this->load->view("mail_open",$data);

		}

		public function mail_del()
		{

			$this->load->helper('url');
			$this->load->library('session');
			include_once("connect.php");

			$mailid=$this->session->userdata('mailid');
			$rs5=mysqli_query($con,"select attach from mail where mailid=$mailid");
			$res5=mysqli_fetch_array($rs5);
			$at=$res5[0];

			if($at==1)
			{
				$rs6=mysqli_query($con,"select attachment from attachment where mailid=$mailid");
				$res6=mysqli_fetch_array($rs6);
				unlink($res6[0]);
				mysqli_query($con,"delete from attachment where mailid=$mailid");
			}
			mysqli_query($con,"delete from mail where mailid=$mailid");
			redirect("mail_inbox");

		}

	}

?>