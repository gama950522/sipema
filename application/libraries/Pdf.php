<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH."/third_party/fpdf/fpdf.php";

class Pdf extends FPDF {

	private $title = 'Secretaría del Medio Ambiente y Recursos Naturales';

	public function __construct()
	{
		parent::__construct('P', 'mm', 'A4');
		
	}
	


	public function Header()
	{

		//global $title;

    // Arial bold 15
	$this->Image(site_url('public/images/reportes/hidalgo_logo.png'),10,10,20,20);
	$this->Image(site_url('public/images/reportes/footer_logo.png'),180,10,20,20);
    $this->SetFont('Arial','B',15);
    // Calculamos ancho y posición del título.
    $w = $this->GetStringWidth($this->title)+6;
    $this->SetX((210-$w)/2);
    // Título
    $this->Cell($w,9,utf8_decode($this->title),0,1,'C');
    // Salto de línea
    $this->Ln(1);
	$this->SetFont('Arial','B',8);
    $this->Cell($w,9,'INFORMACION DE CONTACTO',0,1,'C');
 
	}
	

	public function Footer()
	{
      // Posición a 1,5 cm del final
    $this->SetY(-15);
    // Arial itálica 8
    $this->SetFont('Arial','I',8);
    // Color del texto en gris
    $this->SetTextColor(128);
    // Número de página
    $this->Cell(0,10,'Página '.$this->PageNo(),0,0,'C');
      }

}

/* End of file Pdf.php */
/* Location: ./application/libraries/Pdf.php */