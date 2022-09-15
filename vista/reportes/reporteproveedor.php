<?php
	include '../componentes/fpdf/fpdf.php';
	require '../conexion.php';
	
class PDF extends FPDF
{
	// Cabecera de página
	function Header()
	{
		// Logo
		$this->Image('../imagenes/logoRep.png',10,8,45);
		// Arial bold 15
		$this->SetFont('Arial','',15);
		// Movernos a la derecha
		$this->Cell(70);
		// Título
		$this->Cell(50,45,'Reporte Proveedor',0,0,'C');
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

$pdf->SetLineWidth(0.7);
$pdf->SetFillColor(98,170,254);
$pdf->SetFont('Arial','B',12);
$pdf->SetDrawColor(255,255,255);
$pdf->SetTextColor(255,255,255);
$pdf->Cell(10);
$pdf->Cell(35,14,'Empresa',1,0,'C',1);
$pdf->Cell(40,14,'Correo',1,0,'C',1);
$pdf->Cell(35,14,'Telefono',1,0,'C',1);
$pdf->Cell(35,14,'Direccion',1,0,'C',1);
$pdf->Cell(30,14,'Logo',1,1,'C',1);


$query = "SELECT * 
        FROM proveedor
        WHERE estado = true";
$resultado = $conection->query($query);

$pdf->SetFillColor(241,244,244);
$pdf->SetFont('Arial','',12);
$pdf->SetTextColor(0,0,0);

while($row = $resultado->fetch_assoc())
{
	$pdf->Cell(10); 
	$pdf->Cell(35,20,utf8_decode($row['empresa']),1,0,'C',1);	
	$pdf->Cell(40,20,utf8_decode($row['mail']),1,0,'C',1);	
	$pdf->Cell(35,20,utf8_decode($row['telefono']),1,0,'C',1);	
	$pdf->Cell(35,20,utf8_decode($row['direccion']),1,0,'C',1);	
	$pdf->Cell(30,0, $pdf->Image($row['logo'],null, null,30, 20) ,1, 1,'C',5);	
}
$pdf->Output();


?>