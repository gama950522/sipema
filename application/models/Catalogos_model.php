<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catalogos_model extends CI_Model {

	public function get_sipema()
	{
            
		//$this->db->select('id, nombre');
		$this->db->escape('d,snfjdsn\n');
		$result = $this->db->get('cat_sipema');
		return $result->result_array();
	}

	public function get_idcatalogo($catalogo)
	{

		$this->db->select('id');
		$this->db->from($catalogo);
		$ids = $this->db->get();
		return $ids->result_array();
	}

	public function get_programas($idsipema = '')
	{
		$this->db->where('id_cat_sipema', $idsipema);
		$result = $this->db->get('cat_programas');

		return $result->result_array();
	}

	public function get_nombre_categoria($id='')
	{
		$this->db->select('nombre');
		//$this->db->from('cat_sipema');
		$this->db->where('id', $id);
		$ids = $this->db->get('cat_sipema', 1);
		return $ids->row();
	}

	public function get_subprogramas($id='')
	{
		$this->db->where('id_cat_programas', $id);
		$result = $this->db->get('cat_sub_programas');

		return $result->result_array();
	}

}

/* End of file modelName.php */
/* Location: ./application/models/modelName.php */