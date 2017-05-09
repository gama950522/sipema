<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('catalogos_model');
	}

	public function index()
	{
		$data['perfiles'] = $this->catalogos_model->get_perfiles();
		$this->load->view('layout/header');
		$this->load->view('usuarios/nuevo', $data);
		$this->load->view('layout/footer');
	}

	public function name()
	{
		$this->load->view('layout/header');
		foreach ($this->catalogos_model->name() as $row) 
		{
			echo mb_strtolower(substr($row['ap_paterno'], 0,2)) .'.';
			echo mb_strtolower(substr($row['ap_materno'], 0,2)) .'.';
			echo mb_strtolower(substr($row['nombre'], 0,2))  .'.';
			echo '<br>';
		}
		$this->load->view('layout/footer');
	}

	public function html($value='')
	{
		switch ($value) 
		{
			case '1':
				echo '';
				break;
			case '2':
				echo '<label for="ddl_programa">Selecciona el programa al cual se tendrá acceso</label>';
				echo '<select id="ddl_programa" name="ddl_programa" class="form-control">';
				foreach ($this->catalogos_model->get_programass() as $item) 
				{
					echo '<option value="'.$item['id'].'">'.$item['clave'] .') '.$item['nombre'].'</option>';
				}
				echo '</select>';
				break;
			case '3':
				echo '';
				
				break;
			case '4':
				echo '';
				
				break;
			
			default:
				echo '';
				
				break;
		}
	}

}

/* End of file Usuarios.php */
/* Location: ./application/controllers/Usuarios.php */