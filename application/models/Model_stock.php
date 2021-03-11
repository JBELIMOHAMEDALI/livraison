<?php


class Model_stock extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function get_all_stock()
	{
		$sql="SELECT * FROM commande Where status = 0";
		$query = $this->db->query($sql);
		return $query->result();
	}
	public function get_all2_stock()
	{
		$sql="SELECT * FROM commande";
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
}
