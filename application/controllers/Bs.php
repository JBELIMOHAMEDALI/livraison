<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Bs extends Admin_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_bs');
	}
	public function index()
	{
		$this->data['data_user'] = $this->Model_bs->get_livreure("12-03-2020");
		$this->data['data_bs'] = $this->Model_bs->get_bs();
		$this->data['page_title'] = 'BS';
		$this->render_template('bs',$this->data);//index_us
	}
}
