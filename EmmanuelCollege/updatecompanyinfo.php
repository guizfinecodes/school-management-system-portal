
  <?php
  error_reporting(0);
  include('connect.php');
    
   if (ISSET($_POST['register'])){

            if (getimagesize($_FILES['clogo']['tmp_name'])==TRUE)
            {
            $clogo=addslashes(($_FILES['clogo']['tmp_name']));
            $logoname=addslashes(($_FILES['clogo']['logoname']));
            $clogo=file_get_contents($clogo);
            $clogo=base64_encode($clogo);
            }
                       
                $cname=$_POST['cname'];
                $cemail = $_POST['cemail'];
                $ccontact= $_POST['ccontact'];
                $clocation = $_POST['clocation'];
              
    
            $sql2="UPDATE `companyinfo` SET `cname`='$cname',`cemail`='$cemail',`ccontact`='$ccontact',`clocation`='$clocation' ,`clogo`='$clogo'WHERE `auto`=1" ;


               mysqli_query($db,$sql2);
            

?>
<?php
       
                        $query="SELECT * FROM companyinfo WHERE auto=1";
                        $records2=mysqli_query($db,$query);
                        while($rec=mysqli_fetch_array($records2, MYSQLI_ASSOC))
                        {
                        $id = $rec['course_id'];
                        }?>
                        
                        <script>
                        alert('Company Info Succsessfully Updated');
                        window.location = "companyinfo.php?id=<?php echo $id;?>";
                        </script>

<?php

}?>