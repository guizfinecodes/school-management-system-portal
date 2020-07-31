
  <?php
  error_reporting(0);
  include('connect.php');
    if (isset($_POST['register'])){
        
        $asset_code=$_POST['asset_code'];
        $date_purchased=$_POST['date_purchased'];
        $estimated_value=$_POST['estimated_value'];
        $location=$_POST['location'];
        $description=$_POST['description'];
        $purchase_price=$_POST['purchase_price'];
        $serial_number=$_POST['serial_number'];
        $asset_condition=$_POST['asset_condition'];
        $quantity=$_POST['quantity'];
        $order_number=$_POST['order_number'];
        $active=$_POST['active'];
        $reason_for_disposing=$_POST['reason_for_disposing'];
        $updated_by=$_POST['updated_by'];


        $sql="UPDATE inventory SET asset_code='$asset_code',
                 date_purchased='$date_purchased',
                 estimated_value='$estimated_value',
                 location='$location',
                 description='$description',
                 purchase_price='$purchase_price',
                 serial_number='$serial_number',
                 asset_condition='$asset_condition',
                 quantity='$quantity',
                 order_number='$order_number',
                 active='$active',
                 reason_for_disposing='$reason_for_disposing',
                updated_by='$updated_by'
                  WHERE asset_code='$asset_code'" ;

                               
               mysqli_query($db,$sql);

?>
<?php
       
                        $query="SELECT * FROM inventory WHERE asset_code='$asset_code'";
                        $records2=mysqli_query($db,$query);
                        while($rec=mysqli_fetch_array($records2, MYSQLI_ASSOC))
                        {
                        $id = $rec['asset_id'];
                        }?>
                        
                        <script>
                        alert('Record Succsessfully Updated');
                        window.location = "view_inventory.php?id=<?php echo $id;?>";
                        </script>

<?php

}?>