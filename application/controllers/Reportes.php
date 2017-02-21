<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reportes extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->library('pdf');
	}

	public function index()
	{
		//$this->load->view('reportes/lista_reportes');
		//echo APPPATH;
		$this->pdf->Output('I', 'reporte-'.'121', TRUE);
	}

	public function fecha($fecha='')
	{
		if ($fecha === '') 
		{
			redirect(site_url('reportes'));
		}
		else
		{

		}
	}

}

/* End of file Reportes.php */
/* Location: ./application/controllers/Reportes.php */