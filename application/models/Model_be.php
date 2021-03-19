<?php


class Model_be extends CI_Model
{


	public function update_bs($id_bs,$id_commande)
	{
		$sql="update commande c
		inner join bs_detaile bd on c.id_commande=bd.id_commande INNER JOIN bs b on b.id_bs=bd.id_bs
		set c.status=2 where c.id_commande= ".$id_commande." and b.id_bs= ".$id_bs;
		$query = $this->db->query($sql);
		$afftectedRows = $this->db->affected_rows();
		if ($afftectedRows != 0) {
			return TRUE;
		}else{
			return FALSE;
		}
	}
	public function upate_bs_retour($id)
	{
		$sql="update commande c inner join bs_detaile bd on c.id_commande=bd.id_commande INNER JOIN bs b on b.id_bs=bd.id_bs set c.status=3 where b.id_bs= ".$id." and c.status <> 2";
		 $this->db->query($sql);
	}

}
