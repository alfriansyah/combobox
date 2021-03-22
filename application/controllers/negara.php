<?php

	Class negara extends CI_Controller{

		public function index($value='')
		{
			$data['provinsi']	= $this->ModelCountry->FetchCountry();
			$this->load->view('pilihan',$data);
		}

		public function kabupaten()
		{
			if($this->input->post('provinsi')){
				echo $this->ModelCountry->kabupaten($this->input->post('provinsi'));
			}
		}

		public function kecamatan()
		{
			// kirim name='kabupaten' (dari view/ajax) ke model untuk dijalankan query
			$Getkabupaten_id	= $this->input->post('kabupaten');
			echo $this->ModelCountry->kecamatan($Getkabupaten_id);
		}

		public function desa($value='')
		{
			$GetKecamatan	= $this->input->post('kecamatan');
			echo $this->ModelCountry->desa($GetKecamatan);
		}
	}


?>