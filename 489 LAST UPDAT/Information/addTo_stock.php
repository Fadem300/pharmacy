<?php
include "db_connection2.php";

if (isset($_POST["submit"])) {
    $medicine_name = $_POST["medicine_name"];
    $category = $_POST["category"];
    $purchase_cost = $_POST["purchase_cost"];
    $quantity = $_POST["quantity"];
    $supplier = $_POST["supplier"];
    $expire_date = $_POST["expire_date"];
   
   
    
    $sql = "INSERT INTO `stock`(id, medicine_name, category, purchase_cost, quantity, supplier, expire_date) VALUES (NULL, '$medicine_name', '$category', '$purchase_cost', '$quantity', '$supplier', '$expire_date')";

    $result = mysqli_query($conn, $sql);

    if($result){
        header("Location: StockReport.php?msg=New record created successfully");
        
       }
    else {
        echo "Failed: " . mysqli_error($conn);
       }
}
?>
