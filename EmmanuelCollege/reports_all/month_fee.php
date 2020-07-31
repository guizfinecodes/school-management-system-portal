<?php
error_reporting(0);
include_once('connect.php');
//this variable are specified by the user
$date1=$_GET['date1'];
$date2=$_GET['date2'];
$currentuser=$_GET['currentuser'];
//Get the firtsname and lastname of the students who have paid school fee. The fee table contains adm no's only
$sql = "SELECT firstname AS firstname, lastname AS lastname, reciept AS Reciept_No, refno AS Ref_No, tdate AS Tdate, amount AS Amount
    FROM fee as t, studentstable as r
            WHERE
            r.admission_number = t.admission_number
            AND tdate BETWEEN '$date1' AND '$date2' ";

$resultset = mysqli_query($db, $sql) or die("database error:". mysqli_error($db));
//get the students details


//calculating the fee paid and the fee balance
$sql="SELECT SUM(amount) AS value_sum FROM fee WHERE  tdate BETWEEN '$date1' AND '$date2' ";
$user_query=mysqli_query($db,$sql) or die("error getting data");
while($row = mysqli_fetch_array($user_query, MYSQLI_ASSOC)){
                                    
$totalpaid= $row['value_sum'];
}


//calculating the fee paid and the fee balance
$sql="SELECT SUM(expence_amount) AS value_sum FROM expence WHERE  expence_date BETWEEN '$date1' AND '$date2' ";
$user_query=mysqli_query($db,$sql) or die("error getting data");
while($row = mysqli_fetch_array($user_query, MYSQLI_ASSOC)){
                                    
$totalexpence= $row['value_sum'];
}

//SELECT `expence_id`, `expence_date`, `description`, `expence_amount`, `captured_by` FROM `expence` WHERE 1
$netprofit=$totalpaid-$totalexpence;


//get the company information. i.e logo , company name, and other details

$sql5 = "SELECT * FROM companyinfo ";
$resultset5 = mysqli_query($db, $sql5) or die("database error:". mysqli_error($db));
while($users5=mysqli_fetch_array($resultset5,MYSQLI_ASSOC))
        {
        $clogo='<image style="height:82px; width:82px;" src="data:image;base64,'. $users5['clogo'].' "> ';
        $cname=$users5['cname'];
        $cemail=$users5['cemail'];
        $ccontact=$users5['ccontact'];
        $clogo=$users5['clogo'];
        $cbox=$users5['cbox'];
        $clocation=$users5['clocation'];
        }
     

require('fpdf/fpdf.php');
class PDF extends FPDF
{

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-10);
    // Arial italic 8
    $this->SetFont('Times','I',8);
    // Page number
    $this->Line(0, 600, 210,600);
    $this->Cell(0,5,'Page '.$this->PageNo().'/{nb}',0,0,'L');
    // $tDate=date('l \t\h\e jS');
    //$this->Cell(0, 10, 'Date : '.$tDate, 0, false, 'C', 0, '', 0, false, 'T', 'M');
}
}


$pdf = new PDF();
$pdf->SetAuthor('brian guiz');
$pdf->AliasNbPages();
//set font for the entire document
$pdf->SetFont('Times','B',20);
$pdf->SetTextColor(0,0,0);
//set up a page
$pdf->AddPage('P');
//$pdf->SetDisplayMode(real,'default');
//insert an image and make it a link
//Insert a logo in the top-left corner at 300 dpi
$pdf->Image('C:\wamp\www\EmmanuelCollege\assets\img\logo2.png',10,5, -82);
//display the title with a border around it
$pdf->SetXY (10,5);
$pdf->SetFontSize(15);
$pdf->Cell(0,10, $cname,0,0,'C',0);
$pdf->Ln(6); //break
$pdf->Cell(0,10,'Money Recieved',0,0,'C',0);
$pdf->Ln(6); //break
$pdf->Cell(0,10,'Period Between '. $date1.' and '.$date2,0,0,'C',0);
//C MEANS CENTERED
//Set x and y position for the main text, reduce font size and write content
//for($i=1;$i<=40;$i++)
//    $pdf->Cell(0,10,'Printing line number '.$i,0,1);
//$pdf->Cell(0,10,'Student Name :'.$name ,0,1);
//$pdf->Cell(0,10,'Admission Number :'.$adm ,0,1);
//$pdf->Cell(0,10,'Class :'.$coursename ,0,1);

//This is teh date included in the submited form i.e printinvloice.php
$pdf->SetFont('Times','I');
$pdf->SetXY(10, 5);
$pdf->SetFontSize(10); 
$pdf->Cell(0,10, date('d-m-Y'),0,0,'R',0);
$pdf->SetXY(10, 9);
$pdf->SetFontSize(10); 
$pdf->Cell(0,10,'By :'.$currentuser ,0,0,'R',0);

$pdf->SetFont('Times',''); 
$pdf->Ln(4); //break 
$pdf->Ln(4); //break  
$pdf->Ln(4); //break 
$pdf->Ln(4); //break 
$pdf->Ln(4); //break 
$pdf->Ln(4); //break    
$pdf->Line(0, 32, 210, 32);  //Set the line
$pdf->Ln(4); //line Break
$pdf->Ln(4); //break 

//populate the table with data fetched using the resultset
while ($field_info = mysqli_fetch_field($resultset)) {
$pdf->Cell(32,8,$field_info->name,1,'C');//change 1 to 0 to remove borders
}
//$pdf->Line(0, 40, 210, 40);  //Set the line
while($rows = mysqli_fetch_assoc($resultset)){
$pdf->SetFont('Arial','',8);
$pdf->Ln();

foreach($rows as $column) {
$pdf->Cell(32,8,$column,1,'C');//change 1 to 0 to remove borders
}
}

//additional notes. How to break after 100 charaters in fpdf
$pdf->Ln();
$pdf->Ln();
$pdf->Cell(0,10,'Money Recieved : '.$totalpaid);
//$pdf->Ln(6); //break
//$pdf->Cell(0,10,'Total Expences : '.$totalexpence);
//$pdf->Ln(6); //break
//$pdf->Cell(0,10,'Net Profit : '.$netprofit);
//$pdf->SetFont('','');
//$pdf->Ln();
//$pdf->Cell(200,15,$add,1,0,'L',0);//this type of cell designs a rectangle

//this ln things are ment to put line breaks great!!!!


$pdf->Output();
?>