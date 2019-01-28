<?php
class regitrationModel extends CI_Model{
	
	function saveRestration($data){
		$v= $this->db->insert("registration",$data);
		return $v;
	}
}