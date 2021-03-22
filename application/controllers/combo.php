<?php

	Class combo extends CI_Controller{
		// $this->load->model('ModelAjax');
		public function index($value='')
		{
			$data['provinsi']	= $this->ModelAjax->GetProvinsi();
			$this->load->view('BljrAjax',$data);
		}

		public function AmbilData($value='')
		{
			return $this->db->get_where('kabupaten',array('province_id'=>$prov_id));
		}
	}




?>