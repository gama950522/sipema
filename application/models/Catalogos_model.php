<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catalogos_model extends CI_Model {

	public function get_sipema()
	{
		//$this->db->select('id, nombre');
		//$this->db->from('cat_sipema');
		$result = $this->db->get('cat_sipema');
		return $result->result_array();
	}

}

/* End of file modelName.php */
/* Location: ./application/models/modelName.php */