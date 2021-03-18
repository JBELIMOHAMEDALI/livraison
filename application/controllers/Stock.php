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
	public function index_hommeAll()
	{
		$this->data['page_title'] = 'Stock';
		$this->data['data_userALL'] = $this->Model_stock->get_all2_stock();
		$this->render_template('historique_stock',$this->data);
	}
	public function getAllData()
	{$type=$this->input->post('type');
		$data=$this->Model_stock->getComondeUserDatabayType($type) ;
		echo json_encode ($data) ;
	}
	public function updateUser()
	{
		$id_commande=$this->input->post('id');
		$statue=$this->input->post('etat');
		return $this->Model_stock->UpdateEtatCommande($id_commande,$statue);
	}
	public function add_print_id()
	{
		$_SESSION["print01_commande_id"] = $_POST["id"];
	}
	public function index_Print_commande()
	{
		// Home
		$this->data['page_title'] = 'Impression Commande';
		$this->data['data_commande'] = $this->Model_stock->print_commande($_SESSION["print01_commande_id"]) ;
		$this->render_template('print_commande',$this->data);
	}

}
