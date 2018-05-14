<?php
require('fpdf/fpdf.php');
	require("class/cartctrl.php");
		require("address.php");
session_start();
 $usr = $_SESSION['C_ID'];
 $arrPro = CartCtrl::getCartProductfromUser($usr);
 $countArr = count($arrPro);
	 $transport = 500;
$totalPrice =0.0 ;
for($i=0 ;$i<$countArr ;$i++){
	if($i==4)
	{
		$transport = 0;
	}
  $totalPrice += $arrPro[$i][2];
}
 $aa=$_POST["cid3"];
if($aa!=null)
{
	address::addAdress($usr,$_POST['cid3']);

}

//db connection
//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm

$pdf = new FPDF('P','mm','A4');

$pdf->AddPage();

//set font to arial, bold, 14pt
$pdf->SetFont('Arial','B',14);

//Cell(width , height , text , border , end line , [align] )

$pdf->Cell(130	,5,'Thank you for your order',0,0);
$pdf->Cell(59	,5,'',0,1);//end of line

//set font to arial, regular, 12pt
$pdf->SetFont('Arial','',12);

$pdf->Cell(130	,5, 'Sender is name: '.$_POST["cid1"],0,0);
$pdf->Cell(59	,5,'',0,1);//end of line

$pdf->Cell(130	,5,'Addressee is name: '.$_POST["cid2"],0,0);
$pdf->Cell(25	,5,'Date',0,0);
$pdf->Cell(34	,5,date("Y-m-d"),0,1);//end of line
$pdf->Cell(130	,5,'Address is name: '.$_POST["cid3"],0,0);
//make a dummy empty cell as a vertical spacer
$pdf->Cell(189	,10,'',0,1);//end of line

//billing address
$pdf->Cell(100	,5,'Item List',0,1);//end of line

//add dummy cell at beginning of each line for indentation


//make a dummy empty cell as a vertical spacer
$pdf->Cell(36	,10,'',0,1);//end of line

//invoice contents
$pdf->SetFont('Arial','B',12);

$pdf->Cell(130	,5,'Product',1,0);
$pdf->Cell(25	,5,'Price',1,0);
$pdf->Cell(25	,5,'Vat 7%',1,1);//end of line

$pdf->SetFont('Arial','',12);
 for($i=0 ;$i<$countArr ;$i++) {

    $pdf->Cell(130	,5,$arrPro[$i][3],1,0);
    $pdf->Cell(25	,5, $arrPro[$i][2],1,0,'R');
    $pdf->Cell(25	,5, $arrPro[$i][2]*1.07,1,1,'R');
  }

//Numbers are right-aligned so we give 'R' after new line parameter

//items


$pdf->SetFont('Arial','B',10);

//Cell(width , height , text , border , end line , [align] )
$pdf->Cell(66	,10,'',0,1);
$pdf->Cell(140	,5,' ',0,0);
$pdf->Cell(25	,5,'Total Price',0,0);
$pdf->Cell(25	,5,$totalPrice,0,0);

$pdf->Cell(66	,10,'',0,1);
$pdf->Cell(130	,5,' ',0,0);
$pdf->Cell(35	,5,'Total Price + Vat',0,0);
$pdf->Cell(25	,5,$totalPrice*1.07,0,0);

$pdf->Cell(66	,10,'',0,1);
$pdf->Cell(130	,5,' ',0,0);
$pdf->Cell(35	,5,'Shipment',0,0);
$pdf->Cell(25	,5, $transport,0,0);

$pdf->Cell(66	,10,'',0,1);
$pdf->Cell(130	,5,' ',0,0);
$pdf->Cell(35	,5,'Total ',0,0);
$pdf->Cell(25	,5, $totalPrice*1.07+$transport,0,0);










$pdf->Output();
?>
