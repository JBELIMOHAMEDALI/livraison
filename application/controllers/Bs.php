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
		$date=date('Y-m-d');
		$this->data['data_user'] = $this->Model_bs->get_livreure($date);
		$this->data['data_bs'] = $this->Model_bs->get_bs();
		$this->data['page_title'] = 'BS';
		$this->render_template('bs',$this->data);//index_us
	}
	public function getDetaileBs()
	{
		$id=$this->input->post('id');
		$data=$this->Model_bs->getDetaileBs($id) ;
		echo json_encode ($data) ;
	}
	public function getInfoBs()
	{
		$id=$this->input->post('id');
		$data=$this->Model_bs->getInfoBS($id) ;
		echo json_encode ($data) ;
	}
	public function index_affecteBs()
	{

		$this->data['page_title'] = 'Affecter Commande ';
		$this->render_template('bs_affecte',$this->data);//index_us
	}

	public function add_bs()
	{
		$this->form_validation->set_rules('id_livreure', 'Livreure', 'trim|required');
		$this->form_validation->set_rules('date', 'Date', 'trim|required');
		if (!$this->form_validation->run()) {
			return $this->index();
		}
		else{
			$id_liv=$this->input->post('id_livreure');
			$dtete=$this->input->post('date');
		$data = array(
			'id_livreure' => $id_liv,
			'date' => $dtete
		);

		$create2 = $this->Model_bs->insert_bs($data);
		$last_id = $this->db->insert_id();
		if( $create2) {
			$this->session->set_flashdata('success', 'Successfully Affection');
			$_SESSION["id_bs"] = $last_id;
			$_SESSION["date_affectation"] = $dtete;
			$_SESSION["livreure_affectation_id"] = $id_liv;
			$this->render_template('bs_affecte');//index_us
		}
		else {
			$this->session->set_flashdata('errors', 'Error occurred!!');
			$this->render_template('bs_affecte');//index_us
		}
		}
	}
	function validate_nbr($str)
	{
		$field_value = $str;
		var_dump($field_value);
		if(!empty($field_value))
		{
			if($this->Model_bs->getIdcommande_yes($field_value))
			{
				return true;
			}
			else{
				$this->form_validation->set_message('validate_nbr', 'The %s does not exist ');
				return false;

			}

		}
		else
		{
			$this->form_validation->set_message('validate_nbr', 'The %s Requred ');

			return false;
		}

	}
	public function add_affectation()
	{

		$this->form_validation->set_rules('code_bar', 'Bar code ', 'trim|required|callback_validate_nbr');

		if (!$this->form_validation->run() ) {
			return $this->render_template('bs_affecte');//index_us;
		}
		else {
		$dt=$this->Model_bs->getIdcommande($this->input->post('code_bar')) ;

		if($dt){
		$id_commande=$dt["0"]->id_commande;
		$date=$_SESSION["date_affectation"];
		$data2 = array(
			'id_livreure' =>$_SESSION["livreure_affectation_id"],
			'id_commande ' => $id_commande,
			'date' =>$date,
			'id_bs ' =>$_SESSION["id_bs"]
		);
		$create2=$this->Model_bs->insert_affectation($data2) ;
		if( $create2) {
			$this->session->set_flashdata('success', 'Successfully Affection');
			$this->render_template('bs_affecte');//index_us
		}
		else {
			$this->session->set_flashdata('errors', 'Error occurred!!');
			$this->render_template('bs_affecte');//index_us
		}
		}
		else
		{
			$this->session->set_flashdata('errors', 'Error occurred!!');
			$this->render_template('bs_affecte');//index_us

		}
	}}
//

}
