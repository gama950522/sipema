<?php 

/**
* 
*/
class Authentication
{
	protected $CI;

	function __construct()
	{
		$this->CI =& get_instance();
		!$this->ci->load->library('session') ? $this->ci->load->library('session') : FALSE;
		!$this->ci->load->helper('url') ? $this->ci->load->helper('url') : FALSE;
	}

	public function check_login()
	{
		if ($this->session->userdata('logged_in') === TRUE) 
		{
			
		}
	}
}