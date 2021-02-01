<?php
//include library
include('library/tcpdf.php');

//make TCPDF object
$pdf = new TCPDF('P', 'mm', 'A4');

//remove default header and footer
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

//add page
$pdf->AddPage();

//add content
//using cell
$pdf->Cell(190,10,"this is a cell",1,1'C');

//using html cell


$pdf->Output();

?>