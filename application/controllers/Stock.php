<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Stock extends Admin_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_stock');
	}

	public function index_homme()
	{

		$this->data['page_title'] = 'Stock';
		$this->data['data_user'] = $this->Model_stock->get_all_stock();
		$this->render_template('stock_index',$this->data);
	}
	public function getDataByDate()
	{
		$date_val=$this->input->post('date_val');
		$data=$this->Model_stock->getDataBayDate($date_val) ;
		echo json_encode ($data) ;
	}
	public function getDataByRegion()
	{
		$Region=$this->input->post('re_val');
		$data=$this->Model_stock->getDataBayRegion($Region) ;
		echo json_encode ($data) ;
	}
	public function getDataByDateRegion()
	{
		$date_val=$this->input->post('date_val');
		$Region=$this->input->post('re_val');
		$data=$this->Model_stock->getDataBayDateRegion($date_val,$Region) ;
		echo json_encode ($data) ;
	}
	public function delete_commande()
	{$id=$this->input->post('id_commandeh1');
		$ok=$this->Model_stock->delte($id);
		if($ok){
			//$this->render_template('index_us');
			return true;
		}
		else
		{
			$this->session->set_flashdata('errors', 'Error occurred supprition !!');
			//$this->render_template('index_us');
			return false;
		}
	}
}
