<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Programas extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // if ($this->session->userdata('check_after') === FALSE)
        // {
        //     redirect(site_url('sipema'));
        // }
        // $this->session->set_userdata('check_after', TRUE);
    }

    public function index()
    {
        //$this->load->helper('smiley');
        $this->load->library('table');

        $image_array = get_clickable_smileys('http://emojione.com/wp-content/uploads/assets/emojis/', 'comment_textarea_alias');
        //$col_array = $this->table->make_columns($image_array, 8);

        $data['smiley_table'] = $image_array;//$this->table->generate($col_array);
        $data['texto'] = 'xxx :yum: xxx :persevere: xxx :confused: xxx :stuck_out_tongue_closed_eyes: xxx';
        $this->load->view('layout/header', $data);
        $this->load->view('smiley/table_smiley');
    }

    public function pdf()
    {
        $this->load->library('pdf');
             $this->pdf = new Pdf();
        // Agregamos una página
        $this->pdf->AddPage();
        // Define el alias para el número de página que se imprimirá en el pie
        $this->pdf->AliasNbPages();

        /* Se define el titulo, márgenes izquierdo, derecho y
         * el color de relleno predeterminado
         */
        $this->pdf->SetTitle("Lista de alumnos");
        $this->pdf->SetLeftMargin(15);
        $this->pdf->SetRightMargin(15);
        $this->pdf->SetFillColor(200,200,200);

        // Se define    el formato de fuente: Arial, negritas, tamaño 9
        $this->pdf->SetFont('Arial', 'B', 9);
        /*
         * TITULOS DE COLUMNAS
         *
         * $this->pdf->Cell(Ancho, Alto,texto,borde,posición,alineación,relleno);
         */

        $this->pdf->Cell(15,7,'NUM','TBL',0,'C','1');
        $this->pdf->Cell(25,7,'PATERNO','TB',0,'L','1');
        $this->pdf->Cell(25,7,'MATERNO','TB',0,'L','1');
        $this->pdf->Cell(25,7,'NOMBRE','TB',0,'L','1');
        $this->pdf->Cell(40,7,'FECHA DE NACIMIENTO','TB',0,'C','1');
        $this->pdf->Cell(25,7,'GRADO','TB',0,'L','1');
        $this->pdf->Cell(25,7,'GRUPO','TBR',0,'C','1');
        $this->pdf->Ln(7);

        $this->pdf->Output("Lista de alumnos.pdf", 'I');
    }





    // public function programa($cat = '')
    // {
    //     if (!($cat === ''))
    //     {
    //         $view = '';
    //         switch ($cat)
    //         {
    //             case '5':
    //                 $view = 'sipema/division_programas';
    //                 break;
    //             default:
    //                 # code...
    //                 break;
    //         }
    //         $this->load->view('layout/header');
    //         $this->load->view($view);
    //         $this->load->view('layout/footer');
    //     }
    //     else
    //     {
    //         redirect(site_url('sipema/'));
    //     }
    // }

    // public function subprograma($num = '')
    // {
    //     if ($num === '')
    //     {
    //         redirect(site_url());
    //     }
    //     else
    //     {
    //         $view = '';
    //         switch ($num)
    //         {
    //             case '3':
    //                 $view = 'sipema/steps';
    //                 break;
    //             default:
    //                 redirect(site_url());
    //                 break;
    //         }
    //         //$this->load->view('layout/header');
    //         $this->load->view($view);
    //         $this->load->view('layout/footer');
    //     }
    // }

    // public function guardar_reg()
    // {
    //     if ($this->validacion_campos())
    //     {
    //         $data['success'] = ($this->registros_model->guardar_poas($this->get_data()) === NULL ? TRUE : FALSE);
    //     }
    //     else
    //     {
    //         $data['success'] = FALSE;
    //     }
    //     echo json_encode($data);
    //     // echo $this->algo();
    // }

}

/* End of file Porgrmas.php */
/* Location: ./application/controllers/Porgrmas.php */