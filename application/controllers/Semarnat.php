<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Semarnat extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('nuevos_formularios/carta_descriptiva_proyecto');
        $this->load->view('layout/footer');
	}

}

/* End of file Semarnat.php */
/* Location: ./application/controllers/Semarnat.php */