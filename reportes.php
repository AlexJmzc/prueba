<?php
    
    require 'fpdf/fpdf.php';

    class PDF extends FPDF
    {
    // Cabecera de página
    function Header()
    {
    // Logo
    //$this->Image('logo.png',10,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(60,10,'LISTADO GENERAL',1,0,'C');
    // Salto de línea
    $this->Ln(20);

    $this->Cell(30,10,'CEDULA', 1,0,'C',0);
    $this->Cell(30,10,'NOMBRE', 1,0,'C',0);
    $this->Cell(30,10,'APELLIDO', 1,0,'C',0);
    $this->Cell(40,10,'DIRECCION', 1,0,'C',0);
    $this->Cell(45,10,'ESTADO CIVIL', 1,1,'C',0);

    }

// Pie de página
    function Footer()
    {
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
    }
    }

    require 'models/conexion.php';
    $consulta="SELECT * FROM estudiantes WHERE ID_CURSO_PER = 1";
    $resultado= $mysqli->query($consulta);

    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Arial','I',14);
    while($row=$resultado->fetch_assoc()){
        $pdf->Cell(30,10,$row['CED_EST'], 1,0,'C',0);
        $pdf->Cell(30,10,utf8_decode($row['NOM_EST']), 1,0,'C',0);
        $pdf->Cell(30,10,utf8_decode($row['APE_EST']), 1,0,'C',0);
        $pdf->Cell(40,10,utf8_decode($row['DIR_EST']), 1,0,'C',0);        
        $pdf->Cell(45,10,utf8_decode($row['ECIVIL_EST']), 1,1,'C',0);
        
    }
    $pdf->Output();
?>