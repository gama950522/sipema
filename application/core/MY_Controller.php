<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class MY_Controller extends CI_Controller {
 
 	public function __construct()
 	{
 		parent::__construct();
 	}


 	public function index()
 	{
 		
 	}

 	public function validacion_campos()
 	{
 		return TRUE;
 	}

 	public function algo()
 	{
 		echo "string";
 	}
 
 }
 
 /* End of file MY_Controller.php */
 /* Location: ./application/core/MY_Controller.php */ ?>