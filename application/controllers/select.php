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
			
		}
	}

?>