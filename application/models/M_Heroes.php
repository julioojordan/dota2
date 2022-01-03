<?php
class M_Heroes extends CI_Model
{
	function getHeroes($keyword)
	{
		return $this->db->query("SELECT * FROM heroes 
        WHERE name LIKE '%$keyword%' OR  code LIKE '%$keyword%' ")->result();
	}

	function getAllHeroes()
	{
		return $this->db->query("SELECT * FROM heroes")->result_array();
	}
}