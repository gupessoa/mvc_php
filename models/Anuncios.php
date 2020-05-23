<?php
class Anuncios extends model{
	public function getQuantidade(){
		$query = $this->db->query("SELECT COUNT(*) as c FROM anuncios");
		if($query->rowCount() > 0){
			$query = $query->fetch();
			return $query['c'];
		}else{
			return 0;
		}
		
	}
}