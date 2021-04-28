<?php

	class tchrinfoadd extends CI_Controller
	{

		public function index()
		{
			$data['error']='';
			include_once('connect.php');
			$i=0;
			$rs1=mysqli_query($con,"select subid,name from subject");
			$data['totSub']=mysqli_num_rows($rs1);
			while($res1=mysqli_fetch_array($rs1))
			{
				$data["subject"][$i]["id"]=$res1[0];
				$data["subject"][$i]["name"]=$res1[1];
				$i++;
			}
			$this->load->helper('url');
			$this->load->view('tchrinfoadd',$data);
		}

		public function tchraddinfo()
		{

			include_once('connect.php');
			$this->load->helper('url');

			$this->load->library('session');
			$logid=$this->session->userdata('userid');
			$role=$this->session->userdata('role');
			if($role=='prnc')
				$desig='Principal';
			elseif($role=='hod')
				$desig='Head of Department';
			else
				$desig='Teacher';
			$facid=$this->input->post('facno');
			$facname=$this->input->post('facname');
			$facgen=$this->input->post('facgen');
			$facadrs=$this->input->post('facadrs');
			$facmail=$this->input->post('facmail');
			$faccont=$this->input->post('faccont');
			$facquali=$this->input->post('facquali');
			$tchrsub=$this->input->post('tchrSub');

			$rs=mysqli_query($con,"select * from teacher where logid=$logid");
			if(mysqli_num_rows($rs)>0)
			{
				$data['error']='Faculty ID already registered';
				$this->load->view('tchrinfoadd',$data);
			}
			else
			{
				mysqli_query($con,"insert into teacher(facid,logid,name,gender,address,mail,contact,qualification,designation,status) values ($facid,'$logid','$facname','$facgen','$facadrs','$facmail','$faccont','$facquali','$desig',0)");
				mysqli_query($con,"insert into tchrsubalt values($facid,$tchrsub)");

				$this->session->set_userdata('name',$facname);
				$this->session->set_userdata('gender',$facgen);
				$this->load->helper('url');
				redirect('adddp');
			}

		}

	}

?>