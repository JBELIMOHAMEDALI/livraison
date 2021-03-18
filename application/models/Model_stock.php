<?php


class Model_stock extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function get_all_stock()
	{
		$sql="SELECT c.nom_rec,c.prenom_rec,c.telph_rec,c.adresse_rec,u.firstname,u.lastname,c.status,c.id_commande FROM commande c join users u on u.id_user=c.id_user Where status = 0";
		$query = $this->db->query($sql);
		return $query->result();
	}
	public function get_all2_stock()
	{
		$sql="SELECT c.nom_rec,c.prenom_rec,c.telph_rec,c.adresse_rec,u.firstname,u.lastname,c.status,c.id_commande FROM commande c join users u on u.id_user=c.id_user";
		$query = $this->db->query($sql);
		return $query->result();
	}
	public function getDataBayDate($date)
	{
		$sql="SELECT * FROM commande Where date like '%".$date."'";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function getDataBayRegion($region)
	{
		$sql="SELECT * FROM commande WHERE UPPER(Region_rec) LIKE UPPER('%".$region."%')ORDER BY `Region_rec` ASC";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function getDataBayDateRegion($date,$region)
	{
		$sql="SELECT * FROM commande WHERE UPPER(Region_rec) LIKE UPPER('%".$region."%') and date LIKE '%".$date."' ORDER BY `Region_rec` ASC";

		$query = $this->db->query($sql);
		return $query->result();
	}
	public function delte($id)
	{
		$this->db->where('id_commande', $id);
		$payment_name = $this->db->delete('commande');
		return $payment_name;
	}
	public function getComondeUserDatabayType($type)
	{
		$sql="select c.* from commande c where c.status ='".$type."'";
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function UpdateEtatCommande($id_commande,$statue)
	{
		$this->db->where('id_commande',$id_commande);
		$this->db->set('status',$statue,FALSE);
		$status = $this->db->update('commande');
		return $status ;
	}

	public function print_commande($id)
	{
		$sql="SELECT * from commande c join users u on c.id_user =u.id_user WHERE c.id_commande=".$id;
		$query = $this->db->query($sql);
		return $query->result();
	}
}
