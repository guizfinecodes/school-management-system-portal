
  <?php
  error_reporting(0);
  include('connect.php');
    if (isset($_POST['register'])){
        
                $course_id=$_POST['course_id'];
                $department_id = $_POST['department_id'];
                $coursename= $_POST['coursename'];
                $academic_year= $_POST['academic_year'];
                $fullname= $_POST['fullname'];
                $exambody = $_POST['exambody'];
                $duration = $_POST['duration'];
                $feepayable = $_POST['feepayable'];

                $sql3="UPDATE course SET  department_id ='$department_id', coursename ='$coursename', academic_year ='$academic_year', instructor ='$fullname',
               exambody ='$exambody',duration ='$duration', feepayable = '$feepayable' WHERE course_id = '$course_id'";

              
               mysqli_query($db,$sql3);

?>
<?php
       
                        $query="SELECT * FROM course WHERE course_id='$course_id'";
                        $records2=mysqli_query($db,$query);
                        while($rec=mysqli_fetch_array($records2, MYSQLI_ASSOC))
                        {
                        $id = $rec['course_id'];
                        }?>
                        
                        <script>
                        alert('Record Succsessfully Updated');
                        window.location = "course.php?id=<?php echo $id;?>";
                        </script>

<?php

}?>