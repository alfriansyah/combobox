<?php

	Class Model_select extends 	CI_Model{

		public function provinsi($value='')
		{
			$this->db->order_by('name',"asc");
			return $this->db->get('provinsi')->result_array();
		}

		function kabupaten($provId){
			$kabupaten 	= "<option value='0' > Pilih </option>";

			$this->db->order_by('name','asc');
			$kab = $this->db->get_where('kabupaten',array('province_id'=>$provId));

			foreach ($kab->result_array() as $data) {
				$kabupaten .= "<option value='$data[id]'>$data[name]</option>";
			}
			return $kabupaten;
		}


		function kecamatan($kabId){

		}

		function kelurahan($kecId){

		}
	}

?>