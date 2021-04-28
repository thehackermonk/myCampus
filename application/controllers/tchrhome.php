<?php

	class tchrhome extends CI_Controller
	{

		public function index()
		{
			include_once('connect.php');
			$this->load->library('session');
			$this->session->unset_userdata('postid');
			$id=$this->session->userdata('userid');
			$data['role']=$this->session->userdata('role');

			if($id==NULL)
				redirect('login');

			$rs=mysqli_query($con,"select name,dp from teacher where logid='$id'");
			$res=mysqli_fetch_array($rs);
			$data['name']=$res[0];
			$data['dp']=$res[1];

			$data['blogpost']=mysqli_query($con,"select t.name,t.dp,b.blogid,b.title,b.updte,b.uptime from teacher t,blog b where t.logid=b.fromid order by b.blogid desc");

			$this->load->helper('url');
			$this->load->view('tchrhome',$data);
		}

		public function sendPost()
		{
			include_once('connect.php');
			$this->load->library('session');
			$id=$this->session->userdata('userid');
			$title=$this->input->post('postTitle');
			$content=$this->input->post('postBox');
			mysqli_query($con,"insert into blog(fromid,title,content,updte,uptime) values('$id','$title','$content',date(now()),time(now()))");
			$this->load->helper('url');
			redirect('tchrhome');
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