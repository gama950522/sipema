<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Porgrmas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('check_after') === FALSE) 
		{
			redirect(site_url('sipema'));
		}
	}

	public function index()
	{
		//$this->load->view('View File');
		echo "do babes";
	}

	

}

/* End of file Porgrmas.php */
/* Location: ./application/controllers/Porgrmas.php */