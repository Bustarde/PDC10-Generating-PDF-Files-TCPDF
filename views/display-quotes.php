<?php

require "../vendor/autoload.php";

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Audriel Bustarde');
$pdf->SetTitle('Display Quotes PDF');
$pdf->SetSubject('PDC10 TCPDF Activity');
$pdf->SetKeywords('TCPDF, PDF, activity');

$pdf->SetHeaderData("", "0", "For PDC10", "by Audriel Bustarde", array(203, 39, 4), array(203, 39, 4));
$pdf->setFooterData(array(0,64,0), array(0,64,128));

// set margins
$pdf->SetMargins(20, 20, 20, true);

$pdf->setPrintFooter(true);
$pdf->setPrintHeader(true);

$pdf->AddPage();

$pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

$pdf->SetFont('freeserif','',20);
$pdf->Write(10,'"If you want to live a happy life, tie it to a goal, not to people or things."','',false,'J');
$pdf->Ln(15);
$pdf->Write(10,'- Albert Einstein','',false,'R');
$pdf->Ln(30);

$pdf->SetFont('freemono','',20);
$pdf->Write(10,'"Not how long, but how well you have lived is the main thing.” ');
$pdf->Ln(15);
$pdf->Write(10,' - Seneca','',false,'R');
$pdf->Ln(30);

$pdf->SetFont('freeserifb','',20);
$pdf->Write(10,' “Curiosity about life in all of its aspects, I think, is still the secret of great creative people.”');
$pdf->Ln(15);
$pdf->Write(10,' - Leo Burnett','',false,'R');
$pdf->Ln(30);

$pdf->SetFont('helvetica','',20);
$pdf->Write(10,' “Life is not a problem to be solved, but a reality to be experienced.”');
$pdf->Ln(15);
$pdf->Write(10,' - Soren Kierkegaard','',false,'R');
$pdf->Ln(30);


$pdf->Output('display-info.pdf', 'I');
