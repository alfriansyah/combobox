<?php

	/**
	 *  
	 */
	Class select extends CI_Controller
	{
		// $this->load->model('model_select');
		public function index()
		{
			$data['provinsi']	= $this->Model_select->provinsi();

			$this->load->view('ViewSelect',$data);
		}

		public function AmbilData()
		{
			$modul	=	$this->input->post('modul');
			$id 	=	$this->input->post('id');

			if($modul	== 'kabupaten'){
				echo $this->Model_select->kabupaten($id);
			}
			elseif ($modul	== 'kecamatan') {
				# code...
			}
			elseif ($modul 	== 'kelurahan') {
				# code...
			}
		}
	}

?>