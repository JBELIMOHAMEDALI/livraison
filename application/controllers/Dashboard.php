<?php 

class Dashboard extends Admin_Controller 
{
	public function __construct()
	{
		parent::__construct();

		$this->not_logged_in();

		$this->data['page_title'] = 'Dashboard';
		
		$this->load->model('Model_users');
		//$this->load->model('model_orders');
		//$this->load->model('model_users');
		//$this->load->model('model_stores');
	}

	/* 
	* It only redirects to the manage category page
	* It passes the total product, total paid orders, total users, and total stores information
	into the frontend.
	*/
	public function index()
	{

		$user_type = $this->session->userdata('type');
		if($user_type=="1")
		{
			$this->data['type'] = "admin";
			$this->data['total_products'] = $this->Model_users->countTotalProducts();
			$this->render_template('dashboard', $this->data);
		}
		else
		{
			$this->data['type'] = "user";

			$this->render_template('dashboard', $this->data);
		}

	}
}
