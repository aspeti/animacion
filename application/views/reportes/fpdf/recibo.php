<?php


require('fpdf.php');

class PDF extends FPDF
{
      


   // Cabecera de página
   function Header()
   {
      $this->Image('application/views/reportes/fpdf/logo.png', 20, 10, 20);

      $this->Cell(40);  // mover a la derecha
      $this->SetFont('Arial', 'B', 14);
      $this->Cell(85, 20, utf8_decode("ZEIDA ENTRETENIMIENTOS"), 0, 0, '', 0);


      $this->Cell(10);
      $this->SetFont('Arial', 'B', 10);
      $this->Cell(85, 10, utf8_decode("NIT: 5431880023"), 0, 0, '', 0); 
      $this->Ln(5);

      $this->Cell(40);  // mover a la derecha
      $this->SetFont('Arial', 'B', 10);
      $this->Cell(85, 10, utf8_decode(" "), 0, 0, '', 0);
      $this->Cell(10); 
      $this->Cell(85, 10, utf8_decode("NOTA DE RESERVA"), 0, 0, '', 0);
      $this->Ln(45);

      $this->SetFillColor(53, 96, 69); //colorFondo
      $this->SetTextColor(255, 255, 255); //colorTexto
      $this->SetDrawColor(163, 163, 163); //colorBorde
      $this->SetFont('Arial', 'B', 11);
      /*
      $this->Cell(18, 10, utf8_decode('N°'), 1, 0, 'C', 1);
      $this->Cell(20, 10, utf8_decode('NÚMERO'), 1, 0, 'C', 1);
      $this->Cell(30, 10, utf8_decode('TIPO'), 1, 0, 'C', 1);
      $this->Cell(25, 10, utf8_decode('PRECIO'), 1, 0, 'C', 1);
      $this->Cell(70, 10, utf8_decode('CARACTERÍSTICAS'), 1, 0, 'C', 1);
      $this->Cell(25, 10, utf8_decode('ESTADO'), 1, 1, 'C', 1);*/

      $this->Cell(10);
      $this->Cell(10, 10, utf8_decode('N°'), 1, 0, 'C', 1);
      $this->Cell(30, 10, utf8_decode('Paquete'), 1, 0, 'C', 1);
      $this->Cell(60, 10, utf8_decode('Direccion'), 1, 0, 'C', 1);
      $this->Cell(50, 10, utf8_decode('Fecha Evento'), 1, 0, 'C', 1);
      $this->Cell(25, 10, utf8_decode('Precio'), 1, 0, 'C', 1);
      
   }

   // Pie de página
   function Footer()
   {
     
   }
   
}
$pdf = new PDF();
$pdf->AddPage();

$pdf->SetY(20);

      $pdf->Cell(135);  // mover a la derecha
      $pdf->SetFont('Arial', 'B', 10);
      $pdf->Cell(8, 10, utf8_decode("No.: ".$reserva->num_documento), 0, 0, '', 0);
      $pdf->Ln(10);

      $pdf->Cell(10);  // mover a la derecha
      $pdf->SetFont('Arial', 'B', 10);
      $pdf->Cell(85, 10, utf8_decode("Direccion: Calle 25 de mayo Nro 456"), 0, 0, '', 0);
      $pdf->Ln(5);

      $pdf->Cell(10);  // mover a la derecha
      $pdf->SetFont('Arial', 'B', 10);
      $pdf->Cell(85, 10, utf8_decode("Sucursal:  Cochabamba"), 0, 0, '', 0);
      $pdf->Ln(5);

      $pdf->Cell(10);  // mover a la derecha
      $pdf->SetFont('Arial', 'B', 10);
      $pdf->Cell(85, 10, utf8_decode("Cel:  75926339"), 0, 0, '', 0);
      $pdf->Ln(10);

      $pdf->Cell(10);  // mover a la derecha
      $pdf->SetFont('Arial', 'B', 10);
      $pdf->Cell(85, 10, utf8_decode("Sr.(a): ".$reserva->cliente), 0, 0, '', 0);
      $hoy = date('d/m/Y');
      $pdf->Cell(15, 10, utf8_decode("Fecha: ".$hoy), 0, 0, '', 0);
      $pdf->Ln(5);

      /*
      $pdf->Cell(10);  // mover a la derecha
      $pdf->SetFont('Arial', 'B', 10);
      $pdf->Cell(15, 10, utf8_decode("NIT, CI.: "), 0, 0, '', 0);*/
      $pdf->Ln(15);
      
      
      $i = 0;
      $pdf->SetFont('Arial', '', 12);
      $pdf->SetDrawColor(163, 163, 163);



      $total = 0;
      $cont = 1;
      //foreach($ventas as $venta):
         $pdf->Cell(10);
         $pdf->Cell(10, 10, utf8_decode($cont), 1, 0, 'C', 0);
         $pdf->Cell(30, 10, utf8_decode($reserva->paquete), 1, 0, 'C', 0);
         $pdf->Cell(60, 10, utf8_decode($reserva->direccion_evento), 1, 0, 'C', 0);
         $pdf->Cell(50, 10, utf8_decode($reserva->fecha_evento), 1, 0, 'C', 0);
         $pdf->Cell(25, 10, utf8_decode($reserva->total), 1, 0, 'C', 0);
         
         
         $pdf->Ln();    
         $cont++;               
    //  $total = $total +1;//+ ($venta->precio * $venta->cantidad);
    //  endforeach;

      $pdf->Cell(10);
      $pdf->Cell(10, 10, utf8_decode(""), 0, 0, 'C', 0);
      $pdf->Cell(30, 10, utf8_decode(""), 0, 0, 'C', 0);
      $pdf->Cell(60, 10, utf8_decode(""), 0, 0, 'C', 0);
      $pdf->Cell(50, 10, utf8_decode("Total Bs: "), 1, 0, 'C', 0);
      $pdf->Cell(25, 10, utf8_decode($reserva->total), 1, 1, 'C', 0); 
      $pdf->Ln(5);  

      $pdf->Cell(10);  // mover a la derecha
      $pdf->SetFont('Arial', 'B', 10);
      $pdf->Cell(15, 10, utf8_decode("Recibo Original: ZEIDA ENTRETENIMIENTOS" ), 0, 0, '', 0);
      $pdf->Ln(5);
      $pdf->Cell(10);  // mover a la derecha
      $pdf->SetFont('Arial', 'B', 10);
      $pdf->Cell(15, 10, utf8_decode("NIT: 5431880023 / No. Autorizacion 3423" ), 0, 0, '', 0);
      $pdf->Ln(20);



//include '../../recursos/Recurso_conexion_bd.php';
//require '../../funciones/CortarCadena.php';
/* CONSULTA INFORMACION DEL HOSPEDAJE */
//$consulta_info = $conexion->query(" select *from hotel ");
//$dato_info = $consulta_info->fetch_object();
 /* aqui entran dos para parametros (horientazion,tamaño)V->portrait H->landscape tamaño (A3.A4.A5.letter.legal) */




/*$consulta_reporte_alquiler = $conexion->query("  ");*/

/*while ($datos_reporte = $consulta_reporte_alquiler->fetch_object()) {      
   }*/

$pdf->Output('Prueba.pdf', 'I');//nombreDescarga, Visor(I->visualizar - D->descargar)
?>
