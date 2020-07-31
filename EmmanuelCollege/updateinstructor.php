
  <?php
  //error_reporting(0);
  include('connect.php');
    if (isset($_POST['register'])){
 

                $instructor_id=$_POST['instructor_id'];
                $fullname = $_POST['fullname'];
                $username = $_POST['username'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                


                $sql3="UPDATE `instructors` SET `fullname`='$fullname',`username`='$username',`phone`='$phone',`email`='$email',`password`='$password' WHERE `instructor_id`='$instructor_id'"; 
                
               //mysqli_query($db,$sql);
               mysqli_query($db,$sql3);

?>
<?php
       
                        $query="SELECT * FROM instructors WHERE instructor_id='$instructor_id'";
                        $records2=mysqli_query($db,$query);
                        while($rec=mysqli_fetch_array($records2, MYSQLI_ASSOC))
                        {
                        $id = $rec['instructor_id'];
                        }?>
                        
                        <script>
                        alert('Record Succsessfully Updated');
                        window.location = "instructors.php?id=<?php echo $instructor_id;?>";
                        </script>

<?php

}?>