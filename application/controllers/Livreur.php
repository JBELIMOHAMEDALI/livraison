<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Livreur extends Admin_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_livreur');
	}
	public function index()
	{
		$this->data['page_title'] = 'livreur';
		$this->render_template('livreur');
	}
	public function index_home()
	{
		$this->data['page_title'] = 'Livreur';
		$this->data['data_user'] = $this->Model_livreur->getAllLivreure();
		$this->render_template('livreur_index',$this->data);

	}
	public function indexaddLivreur()
	{
		$this->data['page_title'] = 'Livreur';
		$this->render_template('addLivreure',$this->data);
	}
	public function redirectTo()
	{
		$this->render_template('indexaddLivreur');
	}
	public function add_Livreur()
	{
		$this->form_validation->set_rules('nom', 'Nom Livreure ', 'trim|required');
		$this->form_validation->set_rules('prenom', 'Prenom  Livreure', 'trim|required');
		$this->form_validation->set_rules('tel', 'Telephone Livreure', 'trim|required');
		$this->form_validation->set_rules('info', 'Info Livreure', 'trim|required');

		if (!$this->form_validation->run()) {
			return $this->indexaddLivreur();
		}

		else {
			$data2 = array(
				'nom' =>$this->input->post('nom'),
				'prenom' =>$this->input->post('prenom'),
				'tel' => $this->input->post('tel'),
				'info' =>$this->input->post('info')
			);
			//var_dump($data2);
			$create2 = $this->Model_livreur->addlivreur($data2);
			if($create2) {
				$this->session->set_flashdata('success', 'Successfully created');
				$this->indexaddLivreur();
			}
			else {
				$this->session->set_flashdata('errors', 'Error occurred!!');
				$this->indexaddLivreur();
			}

		}



	}
	public function delete_Livreur()
	{$id=$this->input->post('id');
		$ok=$this->Model_livreur->delte($id);
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
	public function index_update_Livreur()
	{
		$this->data['data_commande'] = $this->Model_livreur->get_Livreure_by_id($_SESSION["Update_livreur_id"]);
		$this->render_template('update_livreur',$this->data);
	}
	public function getSestionLivreure()
	{
		$_SESSION["Update_livreur_id"] = $_POST["id"];
		//var_dump($_SESSION);
	}
	public function update_Livreur()
	{
		$this->form_validation->set_rules('nom', 'Nom Livreure ', 'trim|required');
		$this->form_validation->set_rules('prenom', 'Prenom  Livreure', 'trim|required');
		$this->form_validation->set_rules('tel', 'Telephone Livreure', 'trim|required');
		$this->form_validation->set_rules('info', 'Info Livreure', 'trim|required');

		if (!$this->form_validation->run()) {
			return $this->index_update_Livreur();
		}

		else {
			$data2 = array(
				'nom' =>$this->input->post('nom'),
				'prenom' =>$this->input->post('prenom'),
				'tel' => $this->input->post('tel'),
				'info' =>$this->input->post('info')
			);
			//var_dump($data2);
			$id=$_SESSION["Update_livreur_id"];
			$update = $this->Model_livreur->upadt_Livreure($data2,$id);
			if($update) {
				$this->session->set_flashdata('success', 'Successfully Update');
				$this->index_home();
			}
			else {
				$this->session->set_flashdata('errors', 'Error occurred!!');
				$this->index_home();
			}

		}



	}
}
