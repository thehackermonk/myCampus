<?php

	class openPost extends CI_Controller
	{

		public function index()
		{
			$this->load->library('session');
			$this->load->helper('url');

			$id=$this->session->userdata('userid');
			if($id==NULL)
				redirect('login');
			$blogid=$this->session->userdata('postid');
			$role=$this->session->userdata('role');

			include_once('connect.php');
			if($role=='std')
	 			$rs=mysqli_query($con,"select name,dp from student where logid='$id'");
	 		else
	 			$rs=mysqli_query($con,"select name,dp from teacher where logid='$id'");
	 		$res=mysqli_fetch_array($rs);
	 		$data=array();
	 		$data['uid']=$id;
	 		$data['name']=$res[0];
	 		$data['dp']=$res[1];

	 		$rs1=mysqli_query($con,"select t.name,t.dp,t.designation,b.title,b.content,b.updte,b.uptime,b.fromid from teacher t,blog b where t.logid=b.fromid and b.blogid=$blogid");
	 		$res1=mysqli_fetch_array($rs1);
	 		$data['tname']=$res1[0];
	 		$data['tdp']=$res1[1];
	 		$data['tdesig']=$res1[2];
	 		$data['title']=$res1[3];
	 		$data['content']=$res1[4];
	 		$data['updte']=$res1[5];
	 		$data['uptime']=$res1[6];
	 		$data['fromid']=$res1[7];

	 		$rs2=mysqli_query($con,"select l.logid,l.role,c.comment,c.cmntdte,c.cmnttime from login l,comment c where c.fromid=l.logid and c.blogid=$blogid order by c.cmntid desc");
	 		$i=0;
	 		$data["comment"][$i]=array();
	 		$data["comment"]["rows"]=mysqli_num_rows($rs2);
	 		while($res2=mysqli_fetch_array($rs2))
	 		{
	 			$uid=$res2[0];
	 			$urole=$res2[1];
	 			if($urole=='std')
	 			{
	 				$rs3=mysqli_query($con,"select name,dp from student where logid='$uid'");
	 				$res3=mysqli_fetch_array($rs3);
	 				$data["comment"][$i]["name"]=$res3[0];
	 				$data["comment"][$i]["dp"]=$res3[1];
	 			}
	 			$data["comment"][$i]["comment"]=$res2[2];
	 			$data["comment"][$i]["dte"]=$res2[3];
	 			$data["comment"][$i]["tym"]=$res2[4];
	 			$i++;
	 		}

	 		$this->load->view('openPost',$data);
		}

		public function comment()
		{
			$this->load->library('session');
			$this->load->helper('url');
			include_once("connect.php");

			$id=$this->session->userdata('userid');
			$blogid=$this->session->userdata('postid');
			$cmnt=$this->input->post("cmntBox");

			mysqli_query($con,"insert into comment(blogid,fromid,comment,cmntdte,cmnttime) values($blogid,'$id','$cmnt',date(now()),time(now()))");

			redirect("openPost");
		}

		public function post_del()
		{
			$this->load->library('session');
			$this->load->helper('url');
			include_once('connect.php');

			$blogid=$this->session->userdata('postid');
			$role=$this->session->userdata('role');

			mysqli_query($con,"delete from comment where blogid=$blogid");
			mysqli_query($con,"delete from blog where blogid=$blogid");

			$this->session->unset_userdata('postid');
			redirect(base_url().'index.php/go_home/goToHome');
		}

	}

?>