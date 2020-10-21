<?php 
include('pdf/fpdf.php'); 
include('connection.php');
include('baptism_info.php');

// Creates a new PDF
$pdf = new FPDF('P', 'pt', 'A4');
$pdf->AddPage(); 

// Horizontal Line
//$pdf->Line(Left Margin,Left Top Margin,LINE LENGTH,Right Top Margin );

$next_line=120; //Starts at left top margin and right top margin set to 120
for( $j=0;$j<=40;$j++){
    $next_line=$next_line+30;
    $pdf->Line(33,$next_line,570,$next_line);
}

// Vertical Line
$pdf->Line(180,510,180,150);

// Certificate Header
$pdf->SetFont('Arial','',16);
$pdf->SetXY(170,50);
$pdf->Cell(80,10,'RANCHI CATHOLIC ARCHDIOCESE');

$pdf->SetXY(210,80);
$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(80,10,'CERTIFICATE OF BAPTISM');


$pdf->SetXY(30,110);
$pdf->SetFont('Arial','',10);
$pdf->Cell(10,10,'Parish Address :',0,0,L,false);

// Full Address from DB
$pdf->SetXY(30,135);
$pdf->Cell(30,10,'P.O.:',0,0,L,false);
//$pdf->SetFont('Arial','',14);
//$pdf->Cell(40,10,$row->name,0,0,L,false); 

$pdf->SetXY(210,135);
$pdf->SetFont('Arial','',10);
$pdf->Cell(30,10,'Dist.:',0,0,L,false); 
//$pdf->SetFont('Arial','',14);
//$pdf->Cell(40,10,$row->class,0,0,L,false);

$pdf->SetXY(400,135);
$pdf->SetFont('Arial','',10);
$pdf->Cell(30,10,'PIN.:',0,0,L,false); 
//$pdf->SetFont('Arial','',14);
//$pdf->Cell(40,10,$row->class,0,0,L,false);

$pdf->SetXY(510,135);
$pdf->SetFont('Arial','',10);
$pdf->Cell(30,10,'Jharkhand',0,0,L,false); 
//$pdf->SetFont('Arial','',14);
//$pdf->Cell(40,10,$row->class,0,0,L,false);



// Baptism info goes down:
// Registration no
$pdf->SetXY(30,160);
$pdf->SetFont('Arial','',10);
$pdf->Cell(30,10,'REGISTRATION NO.',0,0,L,false); 
$pdf->SetXY(190,160);
$pdf->SetFont('Arial','',10);
//$pdf->Cell(40,10,$id,0,0,L,false);
$pdf->Cell(40,10,'B' . htmlspecialchars($id) . '',0,0,L,false);

// Date of Baptism
$pdf->SetXY(30,190);
$pdf->SetFont('Arial','',10);
$pdf->Cell(30,10,'DATE OF BAPTISM',0,0,L,false); 
$pdf->SetXY(190,160);
$pdf->SetFont('Arial','',10);
//$pdf->Cell(40,10,$id,0,0,L,false);
$pdf->Cell(60,70,($DOBaptism),0,0,L,false);

// Date of Birth
$pdf->SetXY(30,220);
$pdf->SetFont('Arial','',10);
$pdf->Cell(30,10,'DATE OF BIRTH',0,0,L,false); 
$pdf->SetXY(190,160);
$pdf->SetFont('Arial','',10);
//$pdf->Cell(40,10,$id,0,0,L,false);
$pdf->Cell(60,130, htmlspecialchars($DOB) . '',0,0,L,false);

// Date of Birth
$pdf->SetXY(30,220);
//$pdf->SetXY(to_the_right_from_left,220, up_and_down);
$pdf->SetFont('Arial','',10);
$pdf->Cell(30,10,'DATE OF BIRTH',0,0,L,false); 
$pdf->SetXY(190,160);
$pdf->SetFont('Arial','',10);
//$pdf->Cell(40,10,$id,0,0,L,false);
$pdf->Cell(60,130, htmlspecialchars($DOB) . '',0,0,L,false);

// Child' Name
$pdf->SetXY(30,250);
$pdf->SetFont('Arial','',10);
$pdf->Cell(30,10,"CHILD'S NAME",0,0,L,false); 
$pdf->SetXY(190,160);
$pdf->SetFont('Arial','',10);
//$pdf->Cell(40,10,$id,0,0,L,false);
$pdf->Cell(60,190, htmlspecialchars($fname) .' '. htmlspecialchars($MName).' '. htmlspecialchars($LName).'',0,0,L,false);

// Sex
$pdf->SetXY(30,280);
$pdf->SetFont('Arial','',10);
$pdf->Cell(30,10,'SEX',0,0,L,false); 
$pdf->SetXY(190,160);
$pdf->SetFont('Arial','',10);
//$pdf->Cell(40,10,$id,0,0,L,false);
$pdf->Cell(40,250, htmlspecialchars($gender) . '',0,0,L,false);

// Parents name
$pdf->SetXY(30,310);
$pdf->SetFont('Arial','',10);
$pdf->Cell(30,10,"PARENTS' NAME",0,0,L,false); 
$pdf->SetXY(190,160);
$pdf->SetFont('Arial','',10);
//$pdf->Cell(40,10,$id,0,0,L,false);
$pdf->Cell(60,310, htmlspecialchars($Fathername)  .'',0,0,L,false);

// Parents surname
$pdf->SetXY(30,340);
$pdf->SetFont('Arial','',10);
$pdf->Cell(30,10,"PARENTS' SURNAME",0,0,L,false); 
$pdf->SetXY(190,160);
$pdf->SetFont('Arial','',10);
//$pdf->Cell(40,10,$id,0,0,L,false);
$pdf->Cell(60,370, htmlspecialchars($Fathersname) . '',0,0,L,false);

// Domicile
$pdf->SetXY(30,370);
$pdf->SetFont('Arial','',10);
$pdf->Cell(30,10,'DOMICILE',0,0,L,false); 
$pdf->SetXY(190,160);
$pdf->SetFont('Arial','',10);
//$pdf->Cell(40,10,$id,0,0,L,false);0l
$pdf->Cell(60,430, htmlspecialchars($GFdom) . '',0,0,L,false);

// Occupation
$pdf->SetXY(30,400);
$pdf->SetFont('Arial','',10);
$pdf->Cell(30,10,'OCCUPATION',0,0,L,false); 
$pdf->SetXY(190,160);
$pdf->SetFont('Arial','',10);
//$pdf->Cell(40,10,$id,0,0,L,false);
$pdf->Cell(60,490, htmlspecialchars($Foccupation) . '',0,0,L,false);

// Parents surname
$pdf->SetXY(30,340);
$pdf->SetFont('Arial','',10);
$pdf->Cell(30,10,"PARENTS' SURNAME",0,0,L,false); 
$pdf->SetXY(190,160);
$pdf->SetFont('Arial','',10);
//$pdf->Cell(40,10,$id,0,0,L,false);
$pdf->Cell(60,370, htmlspecialchars($Fathersname) . '',0,0,L,false);

// Domicile
$pdf->SetXY(30,370);
$pdf->SetFont('Arial','',10);
$pdf->Cell(30,10,'DOMICILE',0,0,L,false); 
$pdf->SetXY(190,160);
$pdf->SetFont('Arial','',10);
//$pdf->Cell(40,10,$id,0,0,L,false);0l
$pdf->Cell(60,430, htmlspecialchars($GFdom) . '',0,0,L,false);

// Occupation
$pdf->SetXY(30,400);
$pdf->SetFont('Arial','',10);
$pdf->Cell(30,10,'OCCUPATION',0,0,L,false); 
$pdf->SetXY(190,160);
$pdf->SetFont('Arial','',10);
//$pdf->Cell(40,10,$id,0,0,L,false);
$pdf->Cell(60,490, htmlspecialchars($Foccupation) . '',0,0,L,false);

// Minister
$pdf->SetXY(30,430);
$pdf->SetFont('Arial','',10);
$pdf->Cell(30,10,'MINISTER',0,0,L,false); 
$pdf->SetXY(190,160);
$pdf->SetFont('Arial','',10);
//$pdf->Cell(40,10,$id,0,0,L,false);
$pdf->Cell(60,550, htmlspecialchars($Minister) . '',0,0,L,false);

//$pdf->SetXY(430,220);
$pdf->SetXY(430,700);
$pdf->Cell(50,10,'Signature & Seal',0,1,L,false);

$pdf->Output();

?>