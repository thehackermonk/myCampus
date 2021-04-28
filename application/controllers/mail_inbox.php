<?php

	class mail_inbox extends CI_Controller
	{

		public function __construct()
		{
			parent::__construct();
			$this->load->helper(array('form','url'));
		}

		public function index()
	 	{

	 		$this->load->library('session');
	 		$this->load->helper('url');

	 		$this->session->unset_userdata('postid');
	 		$this->session->unset_userdata("mailid");
	 		$id=$this->session->userdata('userid');
	 		$role=$this->session->userdata('role');
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

	 		$rs1=mysqli_query($con,"select mailid,fromid,toid,sub from mail where fromid='$id' || toid='$id' order by mailid desc");
	 		$i=0;
	 		$data["mail"]["rows"]=mysqli_num_rows($rs1);
	 		while($res1=mysqli_fetch_array($rs1))
	 		{
	 			$data["mail"][$i]["mailid"]=$res1[0];
	 			$fid=$res1[1];
	 			$tid=$res1[2];
	 			$data["mail"][$i]["sub"]=$res1[3];
	 			$rs2=mysqli_query($con,"select role,status from login where logid='$fid'");
	 			$res2=mysqli_fetch_array($rs2);
	 			$role=$res2[0];
	 			$data["mail"][$i]["status"]=$res2[1];
	 			if($role=='std')
	 			{
	 				$rs3=mysqli_query($con,"select name from student where logid='$fid'");
	 				$res3=mysqli_fetch_array($rs3);
	 				$data["mail"][$i]["fname"]=$res3[0];
	 			}
	 			else
	 			{
	 				$rs3=mysqli_query($con,"select name from teacher where logid='$fid'");
	 				$res3=mysqli_fetch_array($rs3);
	 				$data["mail"][$i]["fname"]=$res3[0];
	 			}
	 			$rs2=mysqli_query($con,"select role,status from login where logid='$tid'");
	 			$res2=mysqli_fetch_array($rs2);
	 			$role=$res2[0];
	 			if($role=='std')
	 			{
	 				$rs3=mysqli_query($con,"select name from student where logid='$tid'");
	 				$res3=mysqli_fetch_array($rs3);
	 				$data["mail"][$i]["tname"]=$res3[0];
	 			}
	 			else
	 			{
	 				$rs3=mysqli_query($con,"select name from teacher where logid='$tid'");
	 				$res3=mysqli_fetch_array($rs3);
	 				$data["mail"][$i]["tname"]=$res3[0];
	 			}
	 			$i++;
	 		}

	 		$i=0;
	 		$rs4=mysqli_query($con,"select logid,role from login where logid!='$id'");
	 		$data["users"]["rows"]=mysqli_num_rows($rs4);
	 		while($res4=mysqli_fetch_array($rs4))
	 		{
	 			$data["users"][$i]["uid"]=$res4[0];
	 			if($res4[1]=='std')
	 			{
	 				$rs5=mysqli_query($con,"select name from student where logid='$res4[0]'");
	 				$res5=mysqli_fetch_array($rs5);
	 				$data["users"][$i]["uname"]=$res5[0];
	 			}
	 			else
	 			{
	 				$rs5=mysqli_query($con,"select name from teacher where logid='$res4[0]'");
	 				$res5=mysqli_fetch_array($rs5);
	 				$data["users"][$i]["uname"]=$res5[0];
	 			}
	 			$i++;
	 		}

	 		$this->load->view("mail_inbox",$data);

	 	}

	 	public function sentMail()
	 	{
	 		$this->load->library('session');
	 		$this->load->helper('url');
	 		include_once("connect.php");
	 		$fromid=$this->session->userdata('userid');
	 		$toid=$this->input->post("newMsgTo");
	 		$sub=$this->input->post("newMsgSub");
	 		$msg=$this->input->post("newMsgBody");
	 		if($this->input->post("mailAtch")=='yes')
	 		{
	 			mysqli_query($con,"insert into mail(fromid,toid,sub,content,attach,sdte,stime) values('$fromid','$toid','$sub','$msg',1,date(now()),time(now()))");
	 			$rs6=mysqli_query($con,"select mailid from mail order by mailid desc limit 1");
	 			$res6=mysqli_fetch_array($rs6);
	 			$mid=$res6[0];
	 			$config['upload_path']='./attach/';
	 			$config['allowed_types']='*';
	 			$config['max_size']=10240000; # 10MB
	 			$config['file_name']=$mid;

	 			$this->load->library('upload',$config);

	 			if(!$this->upload->do_upload('mailAttach'))
	 			{
	 				$error=$this->upload->display_errors();
	 				echo $error;
	 			}
	 			else
	 			{
	 				$upload_data=$this->upload->data();
	 				$filename=$upload_data['file_name'];
	 				$path='attach/'.$filename;
	 				mysqli_query($con,"insert into attachment(mailid,attachment) values($mid,'$path')");
	 				redirect("mail_inbox");
	 			}
	 		}
	 		else
	 		{
	 			mysqli_query($con,"insert into mail(fromid,toid,sub,content,attach,sdte,stime) values('$fromid','$toid','$sub','$msg',0,date(now()),time(now()))");
	 			redirect("mail_inbox");
	 		}
	 	}

	 	public function openMail()
	 	{
	 		$this->load->library("session");
	 		$mailid=$this->input->post("mailid");
	 		$this->session->set_userdata("mailid",$mailid);
	 		$this->load->helper('url');
	 		redirect('mail_open');
	 	}

	}

?>