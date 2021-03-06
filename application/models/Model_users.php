<?php

class Model_users extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}


	public function create_user($data)
	{
		//$retor = $this->db->insert("users", $data);
		if ($this->db->insert("users", $data)) {
			return true;
		}
		else { return false; }
	}
	public function addCommende($data)
	{
		if ($this->db->insert("commande", $data)) {
			return true;
		}
		else { return false; }
	}
	public function countTotalProducts()
	{
		$sql = "SELECT * FROM commande";
		$query = $this->db->query($sql);
		return $query->num_rows();
	}
}
