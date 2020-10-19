<?php 
require('pdf/fpdf.php'); 

// Establish Connection with Database
include "connection.php";
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

// selecting particular user using id 
$id= ($_GET["Id"]);

// fetching from userinfo table
$sql="SELECT * from userinfo where user_id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	$fname = $row['first_name'];
	$MName = $row['middle_name'];
	$LName=$row['last_name'];
	$gender=$row['gender_id'];
	$DOB=$row['dob'];
	$DOBaptism=$row['bapt_date'];
	$Padd=$row['permanent_address'];
	$Cadd=$row['current_address'];
	$Fathername=$row['father_name'];
	$Fathersname=$row['father_surname'];
	$Foccupation=$row['father_occupation'];
	$Mothername=$row['mother_name'];
	$Mothersname=$row['mother_surname'];
	$Moccupation=$row['mother_occupation'];
	$Mobile=$row['mobile'];
	$Email=$row['email'];
	
	
	
	

// fetching from eventbaptism table
$sql_eventbaptism = "select * from eventbaptism where user_id = $id";
$result1 = mysqli_query($con, $sql_eventbaptism);
$row = mysqli_fetch_array($result1, MYSQLI_ASSOC);
	$Country=$row['country'];
	$State=$row['states'];
	$District=$row['district'];
	$Diocese=$row['diocese'];
	$Church=$row['church'];
	$Minister=$row['clergyman'];
	$GFname=$row['godfather_name'];
	$GFdom=$row['godfather_domicile'];
	$GMname=$row['godmother_name'];
	$GMdom=$row['godmother_domicile'];
	$DOBaptism=$row['bapt_date'];
	


$pdf = new FPDF('P', 'pt', 'A4');
// sizes are defines in millimetres

$pdf->AddPage(); 

//$pdf->SetXY(Left Margin,Top Margin);
//$pdf->Cell(Cell Width,Cell Height,'TEXT TO BE DISPLAYED');
//$pdf->Line(30,100,0,100);

// Diocese header column 
//$pdf->SetFont('Arial','',16);
$pdf->SetFont('Arial','',16);
$pdf->SetXY(170,50);
$pdf->Cell(80,10,'RANCHI CATHOLIC ARCHDIOCESE');

// Certificate header column
$pdf->SetXY(210,80);
$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(80,10,'CERTIFICATE OF BAPTISM');

// Parish Line
$pdf->SetXY(30,110);
$pdf->SetFont('Arial','',10);
$pdf->Cell(10,10,'Parish Address :............................................................................................................................................',0,0,L,false);
//$pdf->SetFont('Arial','',14);
//$pdf->Cell(40,10,$row->name,0,0,L,false); 

// Full Address from DB
$pdf->SetXY(30,135);
$pdf->Cell(30,10,'P.O.:...................................................',0,0,L,false);  
//$pdf->SetFont('Arial','',14);
//$pdf->Cell(40,10,$row->name,0,0,L,false); 

$pdf->SetXY(210,135);
$pdf->SetFont('Arial','',10);
$pdf->Cell(30,10,'Dist.:...................................................',0,0,L,false); 
//$pdf->SetFont('Arial','',14);
//$pdf->Cell(40,10,$row->class,0,0,L,false);

$pdf->SetXY(400,135);
$pdf->SetFont('Arial','',10);
$pdf->Cell(30,10,'PIN.:............................',0,0,L,false); 
//$pdf->SetFont('Arial','',14);
//$pdf->Cell(40,10,$row->class,0,0,L,false);

$pdf->SetXY(510,135);
$pdf->SetFont('Arial','',10);
$pdf->Cell(30,10,'Jharkhand',0,0,L,false); 
//$pdf->SetFont('Arial','',14);
//$pdf->Cell(40,10,$row->class,0,0,L,false);

//$pdf->Line(Left Margin,Left Top Margin,LINE LENGTH,Right Top Margin );



// Line 
$pdf->SetXY(30,150);
$pdf->Line(33,150,570,150);

// Registration no.
$pdf->SetXY(30,160);
$pdf->SetFont('Arial','',10);
$pdf->Cell(30,10,'REGISTRATION NO.',0,0,L,false); 
$pdf->SetXY(190,160);
$pdf->SetFont('Arial','',10);
//$pdf->Cell(40,10,$id,0,0,L,false);
$pdf->Cell(40,10,'B' . htmlspecialchars($id) . '',0,0,L,false);


// Line 
$pdf->SetXY(30,190);
$pdf->Line(33,180,570,180);

// Date of Baptism
$pdf->SetXY(30,190);
$pdf->SetFont('Arial','',10);
$pdf->Cell(30,10,'DATE OF BAPTISM',0,0,L,false); 
$pdf->SetXY(190,160);
$pdf->SetFont('Arial','',10);
//$pdf->Cell(40,10,$id,0,0,L,false);
$pdf->Cell(60,70,htmlspecialchars($DOBaptism) . '',0,0,L,false);

// Line 
$pdf->SetXY(30,230);
$pdf->Line(33,210,570,210);

// Date of Birth
$pdf->SetXY(30,220);
$pdf->SetFont('Arial','',10);
$pdf->Cell(30,10,'DATE OF BIRTH',0,0,L,false); 
$pdf->SetXY(190,160);
$pdf->SetFont('Arial','',10);
//$pdf->Cell(40,10,$id,0,0,L,false);
$pdf->Cell(60,130, htmlspecialchars($DOB) . '',0,0,L,false);

// Line 
$pdf->SetXY(30,270);
$pdf->Line(33,240,570,240);

// Child' Name
$pdf->SetXY(30,250);
$pdf->SetFont('Arial','',10);
$pdf->Cell(30,10,"CHILD'S NAME",0,0,L,false); 
$pdf->SetXY(190,160);
$pdf->SetFont('Arial','',10);
//$pdf->Cell(40,10,$id,0,0,L,false);
$pdf->Cell(60,200, htmlspecialchars($fname) .' '. htmlspecialchars($MName).' '. htmlspecialchars($LName).'',0,0,L,false);

// Line 
$pdf->SetXY(30,300);
$pdf->Line(33,270,570,270);

// Sex
$pdf->SetXY(30,280);
$pdf->SetFont('Arial','',10);
$pdf->Cell(30,10,'SEX',0,0,L,false); 
$pdf->SetXY(190,160);
$pdf->SetFont('Arial','',10);
//$pdf->Cell(40,10,$id,0,0,L,false);
$pdf->Cell(40,250, htmlspecialchars($gender) . '',0,0,L,false);

// Line 
$pdf->SetXY(30,340);
$pdf->Line(33,300,570,300);

// Parents name
$pdf->SetXY(30,310);
$pdf->SetFont('Arial','',10);
$pdf->Cell(30,10,"PARENTS' NAME",0,0,L,false); 
$pdf->SetXY(190,160);
$pdf->SetFont('Arial','',10);
//$pdf->Cell(40,10,$id,0,0,L,false);
$pdf->Cell(60,310, htmlspecialchars($Fathername)  .'',0,0,L,false);

// Line 
$pdf->SetXY(30,380);
$pdf->Line(33,300,570,300);

// Parents surname
$pdf->SetXY(30,340);
$pdf->SetFont('Arial','',10);
$pdf->Cell(30,10,"PARENTS' SURNAME",0,0,L,false); 
$pdf->SetXY(190,160);
$pdf->SetFont('Arial','',10);
//$pdf->Cell(40,10,$id,0,0,L,false);
$pdf->Cell(60,370, htmlspecialchars($Fathersname) . '',0,0,L,false);


// Line 
$pdf->SetXY(30,420);
$pdf->Line(33,330,570,330);

// Domicile
$pdf->SetXY(30,370);
$pdf->SetFont('Arial','',10);
$pdf->Cell(30,10,'DOMICILE',0,0,L,false); 
$pdf->SetXY(190,160);
$pdf->SetFont('Arial','',10);
//$pdf->Cell(40,10,$id,0,0,L,false);
$pdf->Cell(60,430, htmlspecialchars($GFdom) . '',0,0,L,false);


// Line 
$pdf->SetXY(30,460);
$pdf->Line(33,360,570,360);

// Occupation
$pdf->SetXY(30,400);
$pdf->SetFont('Arial','',10);
$pdf->Cell(30,10,'OCCUPATION',0,0,L,false); 
$pdf->SetXY(190,160);
$pdf->SetFont('Arial','',10);
//$pdf->Cell(40,10,$id,0,0,L,false);
$pdf->Cell(60,490, htmlspecialchars($Foccupation) . '',0,0,L,false);


// Line 
$pdf->SetXY(30,500);
$pdf->Line(33,390,570,390);

// Minister
$pdf->SetXY(30,430);
$pdf->SetFont('Arial','',10);
$pdf->Cell(30,10,'MINISTER',0,0,L,false); 
$pdf->SetXY(190,160);
$pdf->SetFont('Arial','',10);
//$pdf->Cell(40,10,$id,0,0,L,false);
$pdf->Cell(60,550, htmlspecialchars($Minister) . '',0,0,L,false);


// Line 
$pdf->SetXY(30,540);
$pdf->Line(33,420,570,420);


// Line 
$pdf->SetXY(30,50);
$pdf->Line(40,510,570,510);



// Verticle Line 
//$pdf->Line(Left Margin,Left Top Margin,LINE LENGTH,Right Top Margin );
//$pdf->SetXY(30,150);
$pdf->Line(180,510,180,150);


//$pdf->SetXY(430,220);
$pdf->SetXY(430,700);
$pdf->Cell(50,10,'Signature & Seal',0,1,L,false);

	

$pdf->Output();

?>