<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Livreur extends Admin_Controller
{
	public function index()
	{
		$this->data['page_title'] = 'livreur';
		$this->render_template('livreur');
	}
	public function index_home()
	{
		$this->data['page_title'] = 'livreur_index';
		$this->render_template('livreur_index');

	}
}
