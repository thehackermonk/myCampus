<?php

	class editdp extends CI_Controller
	{

		public function __construct()
		{
			parent::__construct();
			$this->load->helper(array('form','url'));
		}

		public function index()
		{
			$this->load->helper('url');
			$data=array();
			$this->load->library('session');
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
			$data['error']=array();
			$data['error']='';
			$this->load->view('editdp',$data);
		}

		public function do_upload()
		{
			$this->load->library('session');
			$userid=$this->session->userdata('userid');
			$role=$this->session->userdata('role');
			$config['upload_path']='./img/dp';
			$config['overwrite']=TRUE;
			$config['allowed_types']='jpg|png';
			$config['max_size']=5120000;
			$config['max_height']=3000;
			$config['max_height']=3000;
			$config['file_name']=$userid;

			$this->load->library('upload',$config);

			if(!$this->upload->do_upload('userdp'))
			{
				$data=array();
				$data['error']=array();
				$data['error']=$this->upload->display_errors();
				$this->load->view('editdp',$data);
			}
			else
			{
				include_once('connect.php');
				$this->load->helper('url');
				$upload_data=$this->upload->data();
				$file_name=$upload_data['file_name'];
				$path='img/dp/'.$file_name;
				if($role=='std')
					mysqli_query($con,"update student set dp='$path' where logid='$userid'");
				else
					mysqli_query($con,"update teacher set dp='$path' where logid='$userid'");
				redirect('editdp');
			}
		}

	}

?>