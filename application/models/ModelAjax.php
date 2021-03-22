<?php

/**
 * 
 */
class ModelAjax extends CI_Model
{
	
	public function GetProvinsi($value='')
	{
		return $this->db->get('provinsi')->result_array();
	}
}
	


?>