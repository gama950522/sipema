<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Personal_model extends MY_Model {

	public function get_nombre_personal()
	{
		$this->db->where('id', $this->session->userdata('id'));
		return $this->db->get('personal')->row_array();
	}

}

/* End of file Personal_model.php */
/* Location: ./application/models/Personal_model.php */