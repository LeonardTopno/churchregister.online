<?php 
include('pdf/fpdf.php'); 
#include('connection.php');

#include('fetch_baptism_details.php');

include('../includes/dbConnect.php');

// selecting particular user using id 
$id=($_GET["Id"]);

// fetching from userinfo table
$sql="SELECT * FROM userinfo WHERE user_id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

	$fname = $row['first_name'];
	$MName = $row['middle_name'];
	$LName=$row['last_name'];
	$gender=$row['gender_id'];
	$DOB=$row['dob'];
	$Padd=$row['permanent_address'];
	$Cadd=$row['current_address'];
    $Fathername=$row['father_name'];
    $Domicile_id=$row['domicile_id'];
	$Fathersname=$row['father_surname'];
	$Foccupation=$row['father_occupation'];
	$Mothername=$row['mother_name'];
	$Mothersname=$row['mother_surname'];
	$Moccupation=$row['mother_occupation'];
	$Mobile=$row['mobile'];
    $Email=$row['email'];
    $HomeparishId = $row['home_parish_id'];
		

// fetching from eventbaptism table
$sql_eventbaptism = "SELECT * FROM eventbaptism WHERE user_id = $id";
$result1 = mysqli_query($conn, $sql_eventbaptism);
$row = mysqli_fetch_array($result1, MYSQLI_ASSOC);
    $Baptism_id = $row['baptism_id'];
	$DOBaptism=$row['bapt_date'];
	$Baptism_Parish_Id=$row['baptism_parish_id'];
	$GFname=$row['godfather_name'];
	$GFdom=$row['godfather_domicile_id'];
	$GMname=$row['godmother_name'];
	$GMdom=$row['godmother_domicile_id'];
	$Minister=$row['clergyman'];
    
// Fetching from states table [For Domcile State]
$Country_id = 101;  //Default is India 
$sql_countries = "SELECT * FROM states WHERE country_id = $Country_id";

$sql_domicile_state_user = "SELECT * FROM states WHERE country_id = $Country_id and id=$Domicile_id";
$sql_domicile_state_Gfather = "SELECT * FROM states WHERE country_id = $Country_id and id=$GMdom";
$sql_domicile_state_Gmother = "SELECT * FROM states WHERE country_id = $Country_id and id=$GFdom";

$result2 = mysqli_query($conn, $sql_domicile_state_user);
$row = mysqli_fetch_array($result2, MYSQLI_ASSOC);
    $domicile_state_user = $row['name'];

$result2 = mysqli_query($conn, $sql_domicile_state_Gfather);
$row = mysqli_fetch_array($result2, MYSQLI_ASSOC);
    $domicile_state_Gfather = $row['name'];

$result2 = mysqli_query($conn, $sql_domicile_state_Gmother);
$row = mysqli_fetch_array($result2, MYSQLI_ASSOC);
    $domicile_state_Gmother = $row['name'];


// Fetching from churches table [For Domcile State]
$sql_church = "select * from church where church_id = $HomeparishId";
$result3 = mysqli_query($conn, $sql_church);
$row = mysqli_fetch_array($result3, MYSQLI_ASSOC);
    $parish_name = $row['parish'];
	$church_name = $row['church_name'];
	$diocese_id = $row['diocese_id']; //will be used to get diocese_name
	

// Fetching from diocese table [For Diocese name]
$sql_diocese= "SELECT * FROM diocese WHERE diocese_id=$diocese_id";
$result = mysqli_query($conn, $sql_diocese);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	$diocese=$row['name'];







// Creates a new PDF
$pdf = new FPDF('P', 'pt', 'A4');
$pdf->AddPage(); 

// Horizontal Line
//$pdf->Line(Left Margin,Left Top Margin,LINE LENGTH,Right Top Margin );

$next_line=120; //Starts at left top margin and right top margin set to 120
for( $j=1;$j<=13;$j++){
    $next_line=$next_line+30;
    $pdf->Line(33,$next_line,570,$next_line);
}

// Vertical Line
//$pdf->Line(210,480,210,150);
$pdf->Line(210,150,210,510);
//Line(float x1, float y1, float x2, float y2)

// Certificate Header
$pdf->SetFont('Arial','B',16);
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

$pdf->SetXY(220,160);
$pdf->SetFont('Arial','',10);
$pdf->Cell(40,10,'B' . htmlspecialchars($id) . '',0,0,L,false);

// Date of Baptism
$pdf->SetXY(30,190);
$pdf->SetFont('Arial','',10);
$pdf->Cell(30,10,'DATE OF BAPTISM',0,0,L,false); 

$pdf->SetXY(220,160);
$pdf->SetFont('Arial','',10);
$pdf->Cell(60,70,($DOBaptism),0,0,L,false);

// Date of Birth
$pdf->SetXY(30,220);
$pdf->SetFont('Arial','',10);
$pdf->Cell(30,10,'DATE OF BIRTH',0,0,L,false); 

$pdf->SetXY(220,160);
$pdf->SetFont('Arial','',10);
$pdf->Cell(60,130, htmlspecialchars($DOB) . '',0,0,L,false);

// Child' Name
$pdf->SetXY(30,250);
$pdf->SetFont('Arial','',10);
$pdf->Cell(30,10,"CHILD'S NAME",0,0,L,false); 

$pdf->SetXY(220,160);
$pdf->SetFont('Arial','',10);
$pdf->Cell(60,190, htmlspecialchars($fname) .' '. htmlspecialchars($MName).' '. htmlspecialchars($LName).'',0,0,L,false);

// GENDER
$pdf->SetXY(30,280);
$pdf->SetFont('Arial','',10);
$pdf->Cell(30,10,'GENDER',0,0,L,false); 

$pdf->SetXY(220,160);
$pdf->SetFont('Arial','',10);
$pdf->Cell(40,250, htmlspecialchars($gender) . '',0,0,L,false);

// Father's name 
$pdf->SetXY(30,310);
$pdf->SetFont('Arial','',10);
$pdf->Cell(30,10,"FATHER'S NAME",0,0,L,false);

$pdf->SetXY(220,160);
$pdf->SetFont('Arial','',10);
$pdf->Cell(60,310, htmlspecialchars($Fathername)  .' '. htmlspecialchars($Fathersname).' ',0,0,L,false);

// Domicile's name 
$pdf->SetXY(30,340);
$pdf->SetFont('Arial','',10);
$pdf->Cell(30,10,"DOMICILE",0,0,L,false);

$pdf->SetXY(220,160);
$pdf->SetFont('Arial','',10);
$pdf->Cell(60,370, htmlspecialchars($domicile_state_user)  .' ',0,0,L,false);

// Father's Occupation
$pdf->SetXY(30,370);
$pdf->SetFont('Arial','',10);
$pdf->Cell(30,10,"FATHER'S OCCUPATION",0,0,L,false);

$pdf->SetXY(220,160);
$pdf->SetFont('Arial','',10);
$pdf->Cell(60,430, htmlspecialchars($Foccupation)  .'',0,0,L,false);


// Mother's name
$pdf->SetXY(30,400);
$pdf->SetFont('Arial','',10);
$pdf->Cell(30,10,"MOTHER'S NAME",0,0,L,false); 

$pdf->SetXY(220,160);
$pdf->SetFont('Arial','',10);
$pdf->Cell(60,490, htmlspecialchars($Mothername) . ' ' . htmlspecialchars($Mothersname),0,0,L,false);

// Male Sponsor and Domicile
$pdf->SetXY(30,430);
$pdf->SetFont('Arial','',10);
$pdf->Cell(30,10,"SPONSOR'S NAME(M) / DOMICILE",0,0,L,false); 

$pdf->SetXY(220,160);
$pdf->SetFont('Arial','',10);
$pdf->Cell(60,550, htmlspecialchars($GFname) . ' / '. htmlspecialchars($domicile_state_Gfather),0,0,L,false);

// Female Sponsor
$pdf->SetXY(30,460);
$pdf->SetFont('Arial','',10);
$pdf->Cell(30,10,"SPONSOR'S NAME(F) / DOMICILE",0,0,L,false); 

$pdf->SetXY(220,160);
$pdf->SetFont('Arial','',10);
$pdf->Cell(60,610, htmlspecialchars($GMname) . ' / '. htmlspecialchars($domicile_state_Gmother),0,0,L,false);


// Minister
$pdf->SetXY(30,490);
$pdf->SetFont('Arial','',10);
$pdf->Cell(30,10,'MINISTER',0,0,L,false); 

$pdf->SetXY(220,160);
$pdf->SetFont('Arial','',10);
$pdf->Cell(60,630, htmlspecialchars($Minister) . '',0,0,L,false);


//
$pdf->SetXY(30,500);
$pdf->SetFont('Arial','',10);
$pdf->Cell(30,10,'Certified that the above is a true extract from the Register of Baptism kept at ......................................................................',0,0,L,false);


//
$pdf->SetXY(430,700);
$pdf->Cell(50,10,'Signature & Seal',0,1,L,false);

$pdf->Output();

?>