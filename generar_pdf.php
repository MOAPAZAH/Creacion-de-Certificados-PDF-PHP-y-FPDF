<?php
require('fpdf186/fpdf.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    // Crear una instancia de FPDF
    $pdf = new FPDF('L', 'mm', 'Letter');
    $pdf->AddPage();
    $ancho_mm = 260;  // 
    $alto_mm = 120;    // 
    $x = 10; // Posición en x Izquierda a derecha
    $y = 50; // Posición en y arriba a abajo
    $pdf->Image('img/11.png', $x, $y, $ancho_mm, $alto_mm);
    
    // Establecer el color del texto y la fuente
      // Añadir los datos al PDF
    $pdf->SetTextColor(0, 0, 0); // Negro
    $pdf->SetFont('Arial', 'B', 16); // Negrita, tamaño 16
    $pdf->SetXY(60,120);// X (izquierda a derecha) y Y (arriba a abjo) --> posicion
    $pdf->Cell(160, 5, $nombre, 0, 1,'C');

    $pdf->SetTextColor(0, 0, 255); // azul
    $pdf->SetFont('Arial', 'B', 12); // Negrita, tamaño 16
    $pdf->SetXY(60,105);// X (izquierda a derecha) y Y (arriba a abjo) --> posicion
    $pdf->Cell(160,5, $usuario, 0, 1,'C');

    $pdf->SetTextColor(255, 0, 0); // Rojo
    $pdf->SetFont('Arial', 'B', 16); // Negrita, tamaño 16
    $pdf->SetXY(150,60);// X (izquierda a derecha) y Y (arriba a abjo) --> posicion
    $pdf->Cell(160,5, $contrasena, 0, 1,'C');
    
    // Generar el PDF
    $pdf->Output();
} else {
    echo "Método no permitido.";
}
?>
