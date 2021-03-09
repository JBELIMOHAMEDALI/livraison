<?php


class Model_livreur extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function addlivreur($data)
	{
		if ($this->db->insert("livreur", $data)) {
			return true;
		}
		else { return false; }
	}
	public function getAllLivreure()
	{ $sql="SELECT * FROM livreur ORDER BY nom ASC";
		$query = $this->db->query($sql);
		return $query->result();
	}
	public function delte($id)
	{
		$this->db->where('id_livreur', $id);
		$payment_name = $this->db->delete('livreur');
		return $payment_name;
	}
	public function get_Livreure_by_id($id)
	{
		$sql="SELECT * FROM livreur WHERE id_livreur =".$id;
		$query = $this->db->query($sql);
		return $query->result();


	}
	public function upadt_Livreure($data,$idlivreur )
	{
		$this->db->where('id_livreur', $idlivreur);
		$query = $this->db->update('livreur', $data);
		return ($query === true ? true : false);
	}
}
