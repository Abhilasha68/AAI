<?php
$con=mysql_connect("localhost","root","");
/*$db=mysql_select_db("aai",$con);*/
if(isset($_POST['submit']))
{
$s_name=$_POST['supp_name'];
$s_id=$_POST['supp_id'];
$h_type=$_POST['hw_type'];
$h_model=$_POST['hw_model'];
$qtty=$_POST['qty'];
$date=$_POST['date'];
$poid=$_POST['poi'];
require("fpdf/fpdf.php");
$pdf=new fpdf();
$pdf->AddPage();
$pdf->SetFont("Arial","B",16);
$pdf->Cell(0,10,"Purchase Order Receipt",1,1);
$pdf->Cell(60,10,"Supplier Name:",1,0);
$pdf->Cell(60,10,$s_name,1,1);
$pdf->Cell(60,10,"Supplier ID:",1,0);
$pdf->Cell(60,10,$s_id,1,1);
$pdf->Cell(60,10,"Hardware Type:",1,0);
$pdf->Cell(60,10,$h_type,1,1);
$pdf->Cell(60,10,"Hardware Model:",1,0);
$pdf->Cell(60,10,$h_model,1,1);
$pdf->Cell(60,10,"Quantity:",1,0);
$pdf->Cell(60,10,$qtty,1,1);
$pdf->Cell(60,10,"Date:",1,0);
$pdf->Cell(60,10,$date,1,1);
$pdf->Cell(60,10,"Purchase Order ID:",1,0);
$pdf->Cell(60,10,$poid,1,1);
//ob_end_clean();
$pdf->output();
}
?>