<?php
	include 'fpdf/fpdf.php';
	require '../../modelo/conexion.php';
	
class PDF extends FPDF
{
	// Cabecera de página
	function Header()
	{
		// Logo
		$this->Image('../../images/logoRep.png',10,6,30);
		// Arial bold 15
		$this->SetFont('Arial','',15);
		// Movernos a la derecha
		$this->Cell(70);
		// Título
		$this->Cell(50,50,'Reporte Cargo',0,0,'C');
		//Colocando fecha al reporte
		$this->SetFont('Arial','I',15);
		$this->Cell(0,15,date('d/m/Y'),0,0,'R');

		// Salto de línea
		$this->Ln(35);
	}

	// Pie de página
	function Footer()
	{
		// Posición: a 1,5 cm del final
		$this->SetY(-18);
		// Arial italic 8
		$this->SetFont('Arial','I',10);
		// Número de página
		$this->Cell(0, 10, utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'R');
	}
}

// Creación del objeto de la clase heredada

$pdf = new PDF('P', 'mm','letter');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);

$pdf->SetLineWidth(1);
$pdf->SetFillColor(98,170,254);
$pdf->SetFont('Arial','B',12);
$pdf->SetDrawColor(255,255,255);
$pdf->SetTextColor(255,255,255);
$pdf->Cell(76);
$pdf->Cell(40,14,'Cargo',1,1,'C',1);

$db = new Conexion();
$resultado = $db->query("SELECT * FROM cargos");


$pdf->SetFillColor(241,244,244);
$pdf->SetFont('Arial','',12);
$pdf->SetTextColor(0,0,0);

while($row = mysqli_fetch_array($resultado))
{
	$pdf->Cell(76); 
	
	$pdf->Cell(40,10,utf8_decode($row['cargo']),1,1,'C',1);	
}
$pdf->Output();


?>