<?php

	 class stdhome extends CI_Controller
	 {

	 	public function index()
	 	{
	 		$this->load->library('session');
	 		$this->load->helper('url');

	 		$id=$this->session->userdata('userid');
	 		if($id==NULL)
	 			redirect('login');

	 		include_once('connect.php');
	 		$rs=mysqli_query($con,"select name,dp from student where logid='$id'");
	 		$res=mysqli_fetch_array($rs);
	 		$data=array();
	 		$data['name']=$res[0];
	 		$data['dp']=$res[1];
	 		
	 		$data['blogpost']=mysqli_query($con,"select t.name,t.dp,b.blogid,b.title,b.updte,b.uptime from teacher t,blog b where t.logid=b.fromid order by b.blogid desc");

	 		$this->load->view('stdhome',$data);
	 	}

	 	public function openPost()
	 	{
	 		$blogid=$this->input->post('blogid');
	 		$this->load->library('session');
	 		$this->session->set_userdata('postid',$blogid);
	 		$this->load->helper('url');
	 		redirect('openPost');
	 	}

	 }

?>