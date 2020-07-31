<?php
error_reporting(0);
include_once('connect.php');
$payment=$_GET['payment'];
$sql = "SELECT `reciept`, `method`, `refno`, `admission_number`, `tdate`, `amount` FROM fee  WHERE admission_number='$admission_number'";
$resultset = mysqli_query($db, $sql) or die("database error:". mysqli_error($db));
//get the students details
$sql2 = "SELECT * FROM studentstable  WHERE student_id='$admission_number'";
$resultset2 = mysqli_query($db, $sql2) or die("database error:". mysqli_error($db));
while($users3=mysqli_fetch_array($resultset2,MYSQL_ASSOC))
        {
        $name=$users3['sirname']." ".$users3['firstname']." ".$users3['lastname'];
        $adm=$users3['admission_number'];
        $course_id=$users3['course_id'];
        $feepayable=$users3['feepayable'];
        }
$sql3 = "SELECT * FROM course  WHERE course_id='$course_id'";
$resultset3 = mysqli_query($db, $sql3) or die("database error:". mysqli_error($db));
while($users3=mysqli_fetch_array($resultset3,MYSQL_ASSOC))
        {
        $coursename=$users3['coursename'];
        }


require('fpdf/fpdf.php');
class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('logo.png',10,6,30);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(30,10,'Emmanuel College',0,0,'C'); 
    // Line break
    $this->Ln(20);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Line(0, 600, 210,600);
    $this->Cell(0,5,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}


$pdf = new PDF();
$pdf->SetAuthor('brian guiz');
$pdf->AliasNbPages();
//set font for the entire document
$pdf->SetFont('Helvetica','B',20);
$pdf->SetTextColor(50,60,100);
//set up a page
$pdf->AddPage('P');
//$pdf->SetDisplayMode(real,'default');
//insert an image and make it a link

//display the title with a border around it
$pdf->SetXY(50,20);
$pdf->SetDrawColor(50,60,100);
$pdf->Cell(100,10,'Invoice',1,0,'C',0);
//C MEANS CENTERED
//Set x and y position for the main text, reduce font size and write content
$pdf->SetXY (10,50);
$pdf->SetFontSize(10);

//for($i=1;$i<=40;$i++)
//    $pdf->Cell(0,10,'Printing line number '.$i,0,1);
$pdf->Cell(0,10,'Student Name :'.$name ,0,1);
$pdf->Cell(0,10,'Admission Number :'.$adm ,0,1);
$pdf->Cell(0,10,'Course ID :'.$coursename ,0,1);

//this are the contact details
$pdf->SetXY(150, 50); 
$pdf->Cell(0,10,'P.O Box 12,',0,1);
$pdf->SetXY(150, 60); 
$pdf->Cell(0,10,'makueni, Kenya :',0,1);
$pdf->SetXY(150, 70); 
$pdf->Cell(0,10,'Tel: 0745322226 :' ,0,1);

//Put a line here
$pdf->Ln(4);                    // line Break
$pdf->Line(0, 80, 210, 80);  //Set the line
$pdf->Ln(4); //line Break

while ($field_info = mysqli_fetch_field($resultset)) {
$pdf->Cell(32,12,$field_info->name,1);
}
while($rows = mysqli_fetch_assoc($resultset)){
$pdf->SetFont('Arial','',12);
$pdf->Ln();

foreach($rows as $column) {
$pdf->Cell(32,12,$column,1);
}
}


/// Begin with regular font
$pdf->SetFont('Arial','',14);
$pdf->Write(10,'Fee Payable ');
$pdf->Ln();
$pdf->Write(10,'Paid ');
$pdf->Ln();
$pdf->Write(10,'Balance ');
$pdf->Line(0, 80, 210, 80);  //Set the line

// Then put a blue underlined link
$pdf->SetTextColor(0,0,255);
$pdf->SetFont('','U');
$pdf->Write(10,'www.fpdf.org','http://www.fpdf.org');


// the position is aboslute
$pdf->SetXY(0, 50); // position of text1, numerical, of course, not x1 and y1
$pdf->Write(0, 'Text1');



$pdf->Output();
?>