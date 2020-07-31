
  <?php
  error_reporting(0);
  include('connect.php');
    if (isset($_POST['register'])){
 

                $staff_id=$_POST['staff_id'];
                $sirname = $_POST['sirname'];
                $firstname= $_POST['firstname'];
                $lastname = $_POST['lastname'];
                $idno = $_POST['idno'];
                $dateofbirth = $_POST['dateofbirth'];
                $gender = $_POST['gender'];
                $country_id = $_POST['country_id'];
                $county_id = $_POST['county_id'];
                $constituency_id = $_POST['constituency_id'];
                $mobile = $_POST['mobile'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $zipcode = $_POST['zipcode'];
                $doa = $_POST['doa'];
                $kra = $_POST['kra'];
                $nssf = $_POST['nssf'];
                $nhif = $_POST['nhif'];
                $roles = $_POST['roles'];
                $department_id = $_POST['department_id'];


                $sql2="UPDATE `staff` SET `sirname`='$sirname',`firstname`='$firstname',`lastname`='$lastname',`idno`='$idno',`dateofbirth`='$dateofbirth',`gender`='$gender',`country_id`='$country_id',`county_id`='$county_id',`constituency_id`='$constituency_id',`mobile`='$mobile',`email`='$email',`address`='$address',`zipcode`='$zipcode',`doa`='$doa',`kra`='$kra',`nssf`='$nssf',`nhif`='$nhif',`roles`='$roles',`department_id`='$department_id' WHERE `staff_id`=$staff_id"; 
                
               mysqli_query($db,$sql2);

?>
<?php
       
                        $query="SELECT * FROM staff WHERE staff_id='$staff_id'";
                        $records2=mysqli_query($db,$query);
                        while($rec=mysqli_fetch_array($records2, MYSQLI_ASSOC))
                        {
                        $id = $rec['staff_id'];
                        }?>
                        
                        <script>
                        alert('Record Succsessfully Updated');
                        window.location = "viewstaff.php?id=<?php echo $id;?>";
                        </script>

<?php

}?>