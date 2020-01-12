<?php

require_once "bootstrap.php";

use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->set_option( 'dpi' , '100' );
$dompdf->loadHtml(file_get_contents('../generate-pdf.php'));

$dompdf->setBasePath('../');

// (Optional) Setup the paper size and orientation
//$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();
