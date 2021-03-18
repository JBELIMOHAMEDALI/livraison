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
	public function getComondeUserData($id,$type="0")
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
	public function delte($id)
	{
		$this->db->where('id_commande', $id);
		$payment_name = $this->db->delete('commande');
		return $payment_name;
	}
	public function delte2($id)
	{//
		$this->db->where('id_user', $id);
		$payment_name = $this->db->delete('users');
		return $payment_name;
	}
	public function getAllDataCommande($id)
	{
		$sql="SELECT * FROM commande where id_user =".$id." ORDER BY status";
		$query = $this->db->query($sql);
		return $query->result();
	}
	public function getComondeUserDatabayType($id,$type)
	{
		$sql="select c.* from users u join commande c on u.id_user=c.id_user where u.id_user= ".$id." and c.status ='".$type."'";
		$query = $this->db->query($sql);
		return $query->result();
	}
	public function upadt_Commande($data,$idCommande )
	{
		$this->db->where('id_commande', $idCommande);
		$query = $this->db->update('commande', $data);
		return ($query === true ? true : false);
	}
	public function  getAllUser()
	{
		$sql="select * from users WHERE type = 0";
		$query = $this->db->query($sql);
		return $query->result();
	}
	public function  UpdatePrixUser($id,$prix)
	{
	$this->db->where('id_user ',$id);
	$this->db->set('prix',$prix,FALSE);
	$status = $this->db->update('users');
	return $status ;
	}

	public function get_Font()
	{
		$sql="select sum(c.qte*c.prix_article)as font,u.id_user from users u join commande c on c.id_user=u.id_user where c.status= 2 and u.type=0 GROUP by u.id_user";
		$query = $this->db->query($sql);
		return $query->result();
	}
	public function print_commande($id,$id2)
	{
		$sql="SELECT * from commande c join users u on c.id_user =u.id_user WHERE c.id_commande=".$id." and u.id_user =".$id2;
		$query = $this->db->query($sql);
		return $query->result();
	}
}
