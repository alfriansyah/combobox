<?php

	Class ModelCountry extends CI_Model{

		public function FetchCountry($value='')
		{
			$this->db->order_by('name','asc');
			return $this->db->get('provinsi')->result();
		}

		public function kabupaten($val='')
		{
			$this->db->where('province_id',$val);
			$this->db->order_by('name','asc');
			$query	= $this->db->get('kabupaten');
			foreach ($query->result() as $row) {
				echo '<option value="'. $row->id.'">'.$row->name.'</option>';
			}
		
		}

		public function kecamatan($val='')
		{
			// pilih kecamatan yg id kabupatennay nya $val
			$this->db->where('regency_id',$val);
			// urutkan secara ASC
			$this->db->order_by('name',"ASC");
			$query	= $this->db->get('kecamatan')->result();
			// loop sebelum di tampilka 
			$hasil	= '<option value=""></option>'; 
			foreach ($query as $row) {
				$hasil .= '<option placeholder="kecamatan" value="'.$row->id.'">'.$row->name.'</option>'; // kenapa harus concatenation assigment??
			}
			return $hasil;
		}

		public function desa($val='')
		{
			// pilih desa yg id kecamatannya $val
			$this->db->where('district_id',$val);
			// urutkan berdasarkan ASC
			$this->db->order_by('name','asc');
			$query	 = $this->db->get('desa')->result();
			foreach ($query as $key ) {
				echo '<option value="'.$key->id.'">'.$key->name.'</option>';
			}
		}
	}


?>