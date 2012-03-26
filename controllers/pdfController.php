<?php 
class pdfController extends Controller
{
	private $_pdf;
	public function __construct() {
		parent::__construct();
		$this->getLibreary('fpdf');
		$this->_pdf = new FPDF;

	}

	public function index() {}

	public function pdf1($nombre, $apellido)
	{
			$this->_pdf->AddPage();
			$this->_pdf->SetFont('Arial','B',16);
			$this->_pdf->Cell(40,10, $nombre . "-" . $apellido);
			$this->_pdf->Output();
	}
}
?>