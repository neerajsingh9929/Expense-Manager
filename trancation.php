
<html>
<body>


<?php

$servername = 'localhost:3306';
$username = 'root';
$password = "";
$dbname = "expensemanagerproject";
$con = mysqli_connect($servername, $username, $password, $dbname);
if(!$con)
{
 echo "Server is not connected";
}else
{
  echo "Server is connected";
}

if(!mysqli_select_db($con, $dbname))
{
	echo "DB is not connected";
}
else
{
	
   

//SQL to get 10 records
$sql="select * from addexpense LIMIT 0,10";
require('fpdf.php');
$pdf = new FPDF(); 
$pdf->AddPage();

$width_cell=array(20,50,40,40,40);
$pdf->SetFont('Arial','B',16);

//Background color of header//
$pdf->SetFillColor(193,229,252);

// Header starts /// 
//First header column //
$pdf->Cell($width_cell[0],10,'rupees',1,0,'C',true);
//Second header column//
$pdf->Cell($width_cell[1],10,'about',1,0,'C',true);
//Third header column//
$pdf->Cell($width_cell[2],10,'month',1,0,'C',true); 
//Fourth header column//
$pdf->Cell($width_cell[3],10,'categery',1,0,'C',true);
//Third header column//
$pdf->Cell($width_cell[4],10,'selector',1,1,'C',true); 
//// header ends ///////

$pdf->SetFont('Arial','',14);
//Background color of header//
$pdf->SetFillColor(235,236,236); 
//to give alternate background fill color to rows// 
$fill=false;

/// each record is one row  ///
foreach ($dbo->query($sql) as $row) {
$pdf->Cell($width_cell[0],10,$row['rupees'],1,0,'C',$fill);
$pdf->Cell($width_cell[1],10,$row['about'],1,0,'L',$fill);
$pdf->Cell($width_cell[2],10,$row['month'],1,0,'C',$fill);
$pdf->Cell($width_cell[3],10,$row['categery'],1,0,'C',$fill);
$pdf->Cell($width_cell[4],10,$row['selector'],1,1,'C',$fill);
//to give alternate background fill  color to rows//
$fill = !$fill;
}
/// end of records /// 

$pdf->Output();

	
}
?>

</body>
</html>