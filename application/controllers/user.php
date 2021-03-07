<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();

		//$this->not_logged_in();
		
		//$this->data['page_title'] = 'User';

		$this->load->model('model_users');
		

	}

	
	public function index()
	{
		//$result = array();	
		//$this->data['user_data'] = $result;
		$this->load->view('register');
		$this->load->helper('email');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

	}

	public function index_us()
	{
		$this->data['data_user'] = $this->model_users->getComondeUserData();
		$this->render_template('index_user',$this->data);
	}
	public function generete_barCode()
	{
		$str= md5(uniqid(rand(), true));
		$id=substr ( $str , 0 , 24 );
		$type="Code128";
		$height="100";
		$this->load->library('Zend');
		$this->zend->load('Zend/Barcode');
		$imageBarcode= Zend_Barcode::factory($type,'image',array(
			'text'=>$id,
			'barHeight'=>$height
		),array())->draw();
		$barcode_image = 'barcode-'.date('m_d_H_i_s').'.png';
		imagepng ( $imageBarcode , './assets/barcode/'.$barcode_image,   -1 , -1 );
		$data['barcode_image']=$barcode_image;
		$data=array(
			"imageID" =>$id,
			"imagName"=>$barcode_image
		);
		//  echo $data['imageID'];
		return $data ;
	}
	public function create()  
	{

		$this->form_validation->set_rules('fname', 'First Name', 'trim|required');
		$this->form_validation->set_rules('lname', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('adresse', 'Address', 'trim|required');
		$this->form_validation->set_rules('phone', 'Phone ', 'trim|required|numeric');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|min_length[4]|required|alpha_numeric');
		$this->form_validation->set_rules('confirmpassword', 'Confirm password', 'trim|matches[password]|required');

		$this->form_validation->set_rules('nom_rec', 'First Name Receiver ', 'trim|required|alpha');
		$this->form_validation->set_rules('prenom_rec', 'Last Name Receiver', 'trim|required|alpha');
		$this->form_validation->set_rules('Region_rec', 'Region Receiver', 'trim|required|alpha');
		$this->form_validation->set_rules('adresse_rec', 'Address Receiver', 'trim|required');
		$this->form_validation->set_rules('telph_rec', 'Phone Receiver', 'trim|required|numeric');
		$this->form_validation->set_rules('qte', 'Amount', 'trim|required|numeric');
		$this->form_validation->set_rules('nom_art', 'Item', 'trim|required');
		if (!$this->form_validation->run()) {
			return $this->load->view('register');
		}
		else {
				$password = $this->password_hash($this->input->post('password'));
				$data = array(
					'password' => $password,
					'email' => $this->input->post('email'),
					'firstname' => $this->input->post('fname'),
					'lastname' =>$this->input->post('lname'),
					'phone' => $this->input->post('phone'),
					'adresse' =>  $this->input->post('adresse'),
					'type'=>"0",
				);
				$data_barcode=$this->generete_barCode();


				$create = $this->model_users->create_user($data);
				$last_id = $this->db->insert_id();
				//var_dump($last_id);
				$data2 = array(
				'nom_rec' =>$this->input->post('nom_rec'),
				'prenom_rec' =>$this->input->post('prenom_rec'),
				'Region_rec' => $this->input->post('Region_rec'),
				'adresse_rec' =>$this->input->post('adresse_rec'),
				'telph_rec' =>$this->input->post('telph_rec'),
				'id_user' =>$last_id,
				'nom_article' =>$this->input->post('nom_art'),
				'barcode'=>$data_barcode['imageID'],
				'imagbarcode'=>$data_barcode['imagName'],
				'qte' =>$this->input->post('qte')
			);
				$create2 = $this->model_users->addCommende($data2);
				if($create && $create2) {
					$this->session->set_flashdata('success', 'Successfully created');
					$this->load->view('vide');
				}
				else {
					$this->session->set_flashdata('errors', 'Error occurred!!');
					return $this->load->view('register');
				}
		}
	}
public  function add_commande()
{
	$validate_data = array(
		array(
			'field' => 'nom_rec',
			'label' => 'Sélectionner type de seance  :',
			'rules' => 'required'
		),
		array(
			'field' => 'prenom_rec',
			'label' => 'Sab',
			'rules' => 'required'
		),
		array(
			'field' => 'Region_rec',
			'label' => 'Enseignant',
			'rules' => 'required'
		),
		array(
			'field' => 'adresse_rec',
			'label' => 'Salle',
			'rules' => 'required'
		),
		array(
			'field' => 'telph_rec',
			'label' => 'Section',
			'rules' => 'required'
		),
		array(
			'field' => 'qte',
			'label' => 'Matiére',
			'rules' => 'required'
		),
		array(
			'field' => 'nom_art',
			'label' => 'Classe',
			'rules' => 'required'
		),

	);

	$this->form_validation->set_rules($validate_data);
	$this->form_validation->set_error_delimiters('<p class="text-danger">','</p>');
	$this->form_validation->set_message('required', 'Saisissez %s');
	/*$this->form_validation->set_rules('nom_rec', 'First Name Receiver ', 'trim|required|alpha');
	$this->form_validation->set_rules('prenom_rec', 'Last Name Receiver', 'trim|required|alpha');
	$this->form_validation->set_rules('Region_rec', 'Region Receiver', 'trim|required|alpha');
	$this->form_validation->set_rules('adresse_rec', 'Address Receiver', 'trim|required');
	$this->form_validation->set_rules('telph_rec', 'Phone Receiver', 'trim|required|numeric');
	$this->form_validation->set_rules('qte', 'Amount', 'trim|required|numeric');
	$this->form_validation->set_rules('nom_art', 'Item', 'trim|required');*/

		$data_barcode=$this->generete_barCode();
		$data2 = array(
			'nom_rec' =>$this->input->post('nom_rec'),
			'prenom_rec' =>$this->input->post('prenom_rec'),
			'Region_rec' => $this->input->post('Region_rec'),
			'adresse_rec' =>$this->input->post('adresse_rec'),
			'telph_rec' =>$this->input->post('telph_rec'),
			'id_user' =>$_SESSION["id"],
			'nom_article' =>$this->input->post('nom_art'),
			'barcode'=>$data_barcode['imageID'],
			'imagbarcode'=>$data_barcode['imagName'],
			'qte' =>$this->input->post('qte')
		);
		$create2 = $this->model_users->addCommende($data2);
		 if ($create2 == true) {
			//   $this->session->set_flashdata('msg', '<div class="alert alert-success text-center"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Ajouté avec succès</div>');
			$validator['success'] = true;
			$validator['messages'] = "Ajouté avec succès";
		}  else {
			$validator['success'] = false;
			$validator['messages'] = "Erreur lors de l\'insertion de l\'information dans la base de données";
			// $this->session->set_flashdata('msg', '<div class="alert alert-success text-center"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Erreur lors de l\'insertion de l\'information dans la base de données</div>');
		}
		// redirect(base_url('emplois'));
		echo json_encode($validator);
	}




	public function password_hash($pass = '')
	{
		if($pass) {
			$password = password_hash($pass, PASSWORD_DEFAULT);
			return $password;
		}
	}


}
