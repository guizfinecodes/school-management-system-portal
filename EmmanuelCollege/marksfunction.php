<?php
 include('connect.php');
 error_reporting(0);//turning off error reporting
 if(isset($_POST["Importstudent"])){
		
		$filename=$_FILES["file"]["tmp_name"];		
 
 
		 if($_FILES["file"]["size"] > 0)
		 {
		  	$file = fopen($filename, "r");
	        while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
	         {
 

	           $sql = "INSERT into marks(admission_number, course_id, term, year, exam_series, maths, english, kiswahili, social_studies, science, average)
                   values ('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."','".$getData[5]."','".$getData[6]."','".$getData[7]."','".$getData[8]."','".$getData[9]."','".$getData[10]."')";
                   $result = mysqli_query($db, $sql);
				if(!isset($result))
				{
					echo "<script type=\"text/javascript\">
							alert(\"Invalid File:Please Upload CSV File.\");
							window.location = \"markstep6.php\"
						  </script>";		
				}
				else {
					  echo "<script type=\"text/javascript\">
						alert(\"CSV File has been successfully Imported.\");
						window.location = \"markstep6.php\"
					</script>";
				}
	         }
			
	         fclose($file);	
		 }
	}
?>

<?php	 
 
 if(isset($_POST["Exportstudent"])){
		 
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=data.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('Student ID', 'Course ID', 'Term', 'Year', 'Exam_Series','Maths', 'English', 'Kiswahili', 'Chemistry', 'Physics/Biology','Average'));  
      $query = "SELECT * from marks ORDER BY average DESC";  
      $result = mysqli_query($db, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }  
 
?>

 