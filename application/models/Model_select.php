<?php

	Class Model_select extends 	CI_Model{

		public function provinsi($value='')
		{
			$this->db->order_by('name',"asc");
			return $this->db->get('provinsi')->result_array();
		}

		function kabupaten($provId){

		}


		function kecamatan($kabId){

		}

		function kelurahan($kecId){

		}
	}

?>