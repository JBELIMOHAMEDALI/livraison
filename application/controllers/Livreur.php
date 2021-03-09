<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Livreur extends Admin_Controller
{
	public function __construct()
	{
		parent::__construct();

		//$this->not_logged_in();

		//$this->data['page_title'] = 'User';

		$this->load->model('model_users');



	}
	public function index()
	{
		$this->data['page_title'] = 'livreur';
		$this->render_template('livreur');
	}
	public function index_home()
	{
		$this->data['page_title'] = 'Livreur';
		$this->render_template('livreur_index',$this->data);

	}
	public function indexaddLivreur()
	{
		$this->data['page_title'] = 'Livreur';
		$this->render_template('addLivreure',$this->data);
	}
}
