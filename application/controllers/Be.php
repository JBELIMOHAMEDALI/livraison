<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Be extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_be');
		$this->load->model('Model_bs');
	}

	public function index()
	{
		$this->data['page_title'] = 'BE';
		$this->render_template('be',$this->data);//index_us
	}
	public function add_retoure()
	{$data=$this->input->post();
		$id_bs= $data["id_bs"];
		unset($data['id_bs']);
		$upd=array();
		foreach ($data as $k => $v) {
			$id_c=$this->Model_bs->getIdcommande($v);
			if($this->Model_be->update_bs($id_bs,$id_c[0]->id_commande))
			{
				array_push($upd, true);
			}
			else{				array_push($upd, false);
			}

	}
		$this->Model_be->upate_bs_retour($id_bs);
		if (in_array(false, $upd)) {
			$this->session->set_flashdata('errors', 'Error occurred!!');
			$this->index();
		}
		else
		{
			$this->session->set_flashdata('success', 'Update Etat des commande ');
			$this->index();
		}
	}

}
