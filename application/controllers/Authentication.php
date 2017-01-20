<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends CI_Controller {

	public function index()
	{
		
	}

	public function inicio_sesion()
	{

		$data_user = $this->input->post();
		foreach ($data_user as $item => $value) 
		{
			$data_user[$item] = htmlentities($value);
		}
		$res['action'] = TRUE;
		$res['items'] = $data_user;
        echo json_encode($res);
	}

}

/* End of file Authentication.php */
/* Location: ./application/controllers/Authentication.php */