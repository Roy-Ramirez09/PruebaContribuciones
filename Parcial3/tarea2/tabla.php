<?php
require('fpdf186\fpdf.php');  // Incluye la clase FPDF

// Crear instancia de FPDF
$pdf = new FPDF();
$pdf->AddPage();

// Establecer fuente
$pdf->SetFont('Arial', 'B', 12);

// Título de la tabla
$pdf->Cell(60, 10, 'Numero de Producto', 1, 0, 'C');
$pdf->Cell(60, 10, 'Nombre', 1, 0, 'C');
$pdf->Cell(40, 10, 'Precio', 1, 1, 'C');  // El '1' en el último parámetro indica salto de línea

// Establecer fuente para los datos
$pdf->SetFont('Arial', '', 12);

// Datos de ejemplo
$productos = [
    [1, 'Pegamento', '10.00'],
    [2, 'Regla', '15.50'],
    [3, 'Saca puntas', '8.75'],
    [4, 'Abaco', '20.00'],
];

// Imprimir los datos
foreach ($productos as $producto) {
    $pdf->Cell(60, 10, $producto[0], 1, 0, 'C');  // Número de producto
    $pdf->Cell(60, 10, $producto[1], 1, 0, 'C');  // Nombre del producto
    $pdf->Cell(40, 10, '$' . number_format($producto[2], 2), 1, 1, 'C');  // Precio, con formato monetario
}

// Salida del PDF
$pdf->Output();
?>