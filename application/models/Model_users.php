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
	public function getComondeUserData($id=1,$type="0")
	{
		$sql="select c.* from users u join commande c on u.id_user=c.id_user where u.id_user= ".$id." and c.status ='".$type."'";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function get_commande_by_id($id)
	{
		$sql="SELECT * FROM commande WHERE id_commande =".$id;
		$query = $this->db->query($sql);
		return $query->result();
	}
}
