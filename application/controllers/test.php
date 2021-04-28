<?php

	class test extends CI_Controller
	{
		public function index()
		{
			$plainTextPassword='principal';
			$hash=password_hash($plainTextPassword,PASSWORD_DEFAULT);
			echo $plainTextPassword."<br>";
			echo $hash."<br>";
			echo strlen($hash);
		}
	}

?>