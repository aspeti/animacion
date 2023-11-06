<?php


require('fpdf.php');

class PDF extends FPDF
{
      


   // Cabecera de página
   function Header()
   {
      $this->Image('application/views/reportes/fpdf/logo.png', 20, 10, 20);

      $this->Cell(50);  // mover a la derecha
      $this->SetFont('Arial', 'B', 15);
      $this->Cell(75, 15, utf8_decode("ZEIDA ENTRETENIMIENTOS"), 1, 0, '', 0);


      $this->Cell(1);
      $this->SetFont('Arial', 'B', 10);
      $this->Cell(40, 50, utf8_decode("Cochabamba/Bolivia"), 0, 0, '', 0); 
      $this->Ln(20);

      $this->Cell(10);
      $this->Cell(40, 50, utf8_decode("Reporte Productos: Mas Vendidos"), 0, 0, '', 0); 
      $this->Ln(30);


      $this->SetFillColor(253, 126, 20); //colorFondo
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
      $this->Cell(70, 10, utf8_decode('Paquete'), 1, 0, 'C', 1);
      $this->Cell(45, 10, utf8_decode('Cantidad'), 1, 0, 'C', 1);
      $this->Cell(40, 10, utf8_decode('Sub Total'), 1, 0, 'C', 1);
      
   }

   // Pie de página
   function Footer()
   {
     
   }
   
}
$pdf = new PDF();
$pdf->AddPage();

$pdf->SetY(20);

    /*  $pdf->Cell(35);  // mover a la derecha
      $pdf->SetFont('Arial', 'B', 10);
      $pdf->Cell(15, 10, utf8_decode("No.: "), 0, 0, '', 0);
      $pdf->Ln(10);*/
/*
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
      $pdf->Ln(10);*/
/*
      $pdf->Cell(10);  // mover a la derecha
      $pdf->SetFont('Arial', 'B', 10);
      $pdf->Cell(85, 10, utf8_decode("Sr.(a): "), 0, 0, '', 0);*/
      $hoy = date('d/m/Y');
      $pdf->setY(30);
      $pdf->Cell(10);
      $pdf->Cell(50, 10, utf8_decode("Direccion : Av. Petrolera Km 7"), 0, 0, '', 0);
      $pdf->Ln(5);
      $pdf->Cell(10);
      $pdf->Cell(35, 10, utf8_decode("Fecha: ".$hoy), 0, 0, '', 0);
      

      /*
      $pdf->Cell(10);  // mover a la derecha
      $pdf->SetFont('Arial', 'B', 10);
      $pdf->Cell(15, 10, utf8_decode("NIT, CI.: "), 0, 0, '', 0);*/
      $pdf->Ln(35);
      
      
      $i = 0;
      $pdf->SetFont('Arial', '', 12);
      $pdf->SetDrawColor(163, 163, 163);



      $total = 0;
      $cont = 1;
      foreach($reservas as $reserva):
         $pdf->Cell(10);
         $pdf->Cell(10, 10, utf8_decode($cont), 1, 0, 'C', 0);
         $pdf->Cell(70, 10, utf8_decode($reserva->paquete), 1, 0, 'C', 0);
         $pdf->Cell(45, 10, utf8_decode($reserva->cantidad), 1, 0, 'C', 0);      
         $pdf->Cell(40, 10, utf8_decode($reserva->total), 1, 0, 'C', 0);
         
       
         $pdf->Ln();    
         $cont++;               
      $total = $total +  $reserva->total;
      endforeach;

      $pdf->Cell(10);
      $pdf->Cell(10, 10, utf8_decode(""), 0, 0, 'C', 0);
      $pdf->Cell(70, 10, utf8_decode(""), 0, 0, 'C', 0);
      $pdf->Cell(45, 10, utf8_decode("Total Bs: "), 1, 0, 'C', 0);
      $pdf->Cell(40, 10, utf8_decode($reserva->total), 1, 1, 'C', 0); 
      $pdf->Ln(5);  

      $pdf->Cell(100);  // mover a la derecha
      $pdf->SetFont('Arial', 'B', 10);
      $pdf->Cell(15, 10, utf8_decode("Reporte Original: ZEIDA ENTRETENIMIENTOS" ), 0, 0, '', 0);
      $pdf->Ln(5);
      $pdf->Cell(100);  // mover a la derecha
      $pdf->SetFont('Arial', 'B', 10);
      $pdf->Cell(15, 10, utf8_decode("NIT: 5431880023 / No. Autorizacion 3423" ), 0, 0, '', 0);
      $pdf->Ln(20);

$pdf->Output('Estadistica.pdf', 'I');//nombreDescarga, Visor(I->visualizar - D->descargar)
?>