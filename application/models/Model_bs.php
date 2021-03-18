<?php


class Model_bs extends CI_Model
{

	public function get_bs()
	{
		$sql="SELECT l.nom,l.prenom,l.tel,b.date, b.id_bs as num_bs FROM bs b join livreur l on l.id_livreur = b.id_livreure ORDER by b.id_bs DESC";
		$query = $this->db->query($sql);
		return $query->result();
	}
	public function get_livreure($datae)
	{
		$sql="SELECT l.id_livreur,l.nom,l.prenom from livreur l where l.id_livreur not in (SELECT bd.id_livreure from bs_detaile bd where bd.date = '".$datae."' )";
		$query = $this->db->query($sql);
		return $query->result();
	}
	public function getDetaileBs($id)
	{
		$sql="select c.nom_article,c.id_commande ,c.imagbarcode,c.nom_rec,c.prenom_rec,c.telph_rec,c.adresse_rec from bs_detaile bd join bs b 
				join commande c on bd.id_bs = b.id_bs and c.id_commande=bd.id_commande WHERE bd.id_bs =".$id;
		$query = $this->db->query($sql);
		return $query->result();
	}
	public function getInfoBS($id)
	{
		$sql="select livreur.nom,livreur.prenom,bs.id_bs,bs.date from livreur join bs on bs.id_livreure=livreur.id_livreur where bs.id_bs=".$id;
		$query = $this->db->query($sql);
		return $query->result();
	}
	public function insert_bs($data)
	{
		if ($this->db->insert("bs", $data)) {
			return true;
		}
		else { return false; }
	}
	public function insert_affectation($data)
	{
		if ($this->db->insert("bs_detaile", $data)) {
			return true;
		}
		else { return false; }
	}
	public function getIdcommande($code)
	{
		$sql="SELECT id_commande FROM `commande` WHERE barcode =".$code;
		$query = $this->db->query($sql);
		return $query->result();
	}
	public function getIdcommande_yes($code)
	{
		$sql="SELECT id_commande FROM `commande` WHERE barcode =".$code;
		$query = $this->db->query($sql);
		if( $query->result())
		{
			return true;
		}
		else{ return false;}
	}
	public function update_etat($id)
	{
		$this->db->where('id_commande ',$id);
		$this->db->set('status','1',FALSE);
		return $this->db->update('commande');
	}

}
