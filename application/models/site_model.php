<?php

class Site_model extends CI_model {

	function getAll(){
		$q = $this->db->get('members');

		if($q->num_rows() > 0) {
			foreach ($q->result() as $row) 
			{
				$data[] = $row;
			}	
		
		return $data;
		}
		
	}
}