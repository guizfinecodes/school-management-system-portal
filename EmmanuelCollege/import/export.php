<?php
/*
 * @author Shahrukh Khan
 * @website http://www.thesoftwareguy.in
 * @facebbok https://www.facebook.com/Thesoftwareguy7
 * @twitter https://twitter.com/thesoftwareguy7
 * @googleplus https://plus.google.com/+thesoftwareguyIn
 */

require_once("configure.php");

$filename = "testing-exports.csv";
        
header("Content-type: text/csv");
header("Content-Disposition: attachment; filename=$filename");
header("Pragma: no-cache");
header("Expires: 0");

$sql = "SELECT * FROM tbl_products1 WHERE 1";

try {
    $stmt = $DB->prepare($sql);
    $stmt->execute();
    $results = $stmt->fetchAll();
} catch (Exception $ex) {
    printErrorMessage($ex->getMessage());
}

$content = array();
$title = array("Name", "Quantity", "Model", "Price", "Weight", "Status");
foreach ($results as $rs) {
    $row = array();

    $row[] = stripslashes($rs["products_name"]);
    $row[] = stripslashes($rs["products_quantity"]);
    $row[] = stripslashes($rs["products_model"]);
    $row[] = stripslashes($rs["products_price"]);
    $row[] = stripslashes($rs["products_weight"]);
    $row[] = ($rs["products_status"] == "A") ? "Active" : "Inactive";
    
    $content[] = $row;
    
}

$output = fopen('php://output', 'w');
fputcsv($output, $title);
foreach ($content as $con) {
    fputcsv($output, $con);
}
?>
