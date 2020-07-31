<?php
 include('connect.php');
 
 if(isset($_POST["Importfee"])){
		
		$filename=$_FILES["file"]["tmp_name"];		
 

		 if($_FILES["file"]["size"] > 0)
		 {
		  	$file = fopen($filename, "r");
	        while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
	         {
 
 
	           $sql = "INSERT into fee (reciept,method,refno,student_id,tdate,amount) 
                   values ('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."','".$getData[5]."')";
                   $result = mysqli_query($db, $sql);
				if(!isset($result))
				{
					echo "<script type=\"text/javascript\">
							alert(\"Invalid File:Please Upload CSV File.\");
							window.location = \"csvfee.php\"
						  </script>";		
				}
				else {
					  echo "<script type=\"text/javascript\">
						alert(\"CSV File has been successfully Imported.\");
						window.location = \"csvfee.php\"
					</script>";
				}
	         }
			
	         fclose($file);	
		 }
	}
?>

<?php	 
 
 if(isset($_POST["Exportfee"])){
		 
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=data.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('Reciept #', 'Method','Ref #', 'Student ID', 'Date','Course ID','Term ID','Amount','Captured By'));  
      $query = "SELECT * from fee ORDER BY reciept ASC";  
      $result = mysqli_query($db, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }  
 
?>

