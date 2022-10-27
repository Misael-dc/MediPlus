
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
$pdf->AddPage('LANDSCAPE','letter');
$pdf->SetFont('Times','',12);

$pdf->SetLineWidth(1);
$pdf->SetFillColor(98,170,254);
$pdf->SetFont('Arial','B',12);
$pdf->SetDrawColor(255,255,255);
$pdf->SetTextColor(255,255,255);
$pdf->Cell(1);
$pdf->Cell(30,14,'Cedula',1,0,'C',1);
$pdf->Cell(60,14,'Nombre',1,0,'C',1);
$pdf->Cell(45,14,'Cargo',1,0,'C',1);
$pdf->Cell(20,14,'Direccion',1,0,'C',1);
$pdf->Cell(25,14,'Telefono',1,0,'C',1);
$pdf->Cell(30,14,'Fecha Nac.',1,0,'C',1);
$pdf->MultiCell(50,14,'Aficiones',1,1,'C',1);
$db = new Conexion();
$resultado = $db->query(" SELECT e.ci,e.nombre,e.paterno,e.materno, c.cargo, e.direccion, e.telefono, e.fechanacimiento, e.aficiones FROM farmacias.empleados e inner join farmacias.cargos c on c.id_cargo=e.id_cargo ");


$pdf->SetFillColor(241,244,244);
$pdf->SetFont('Arial','',12);
$pdf->SetTextColor(0,0,0);

while($row = mysqli_fetch_array($resultado))
{		
	$pdf->Cell(1);
	$pdf->Cell(30,14,utf8_decode($row['ci']),1,0,'C',1);
	$pdf->Cell(60,14,utf8_decode($row['nombre']." ".$row['paterno']." ".$row['materno']),1,0,'C',1);
	$pdf->Cell(45,14,utf8_decode($row['cargo']),1,0,'C',1);
	$pdf->Cell(20,14,utf8_decode($row['direccion']),1,0,'C',1);
	$pdf->Cell(25,14,utf8_decode($row['telefono']),1,0,'C',1);
	$pdf->Cell(30,14,utf8_decode($row['fechanacimiento']),1,0,'C',1);
	$pdf->MultiCell(50,14,utf8_decode($row['aficiones']),1,1,'C',1);
}
$pdf->Output();

?>



