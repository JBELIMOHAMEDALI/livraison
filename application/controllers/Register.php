<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Register extends Admin_Controller
{
	public function index()
	{
		$this->load->view('register');

	}
}
