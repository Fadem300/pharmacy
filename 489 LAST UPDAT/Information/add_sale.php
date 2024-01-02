<?php
include "db_connection.php";

if (isset($_POST["submit"])) {
    $date = $_POST["Date"];
    $invoice_number = $_POST["invoice_number"];
    $medicine_name = $_POST["medicine_name"];
    $price = $_POST["price"];
    $quantity = $_POST["quantity"];
   
   
    
    $sql = "INSERT INTO sales (id, date, invoice_number, medicine_name, price, quantity) VALUES(NULL, '$date','$invoice_number','$medicine_name','$price','$quantity')";

    $result = mysqli_query($conn, $sql);

    if($result){
        header("Location: SalesSummary.php?msg=New record created successfully");
        
       }
    else {
        echo "Failed: " . mysqli_error($conn);
       }
}
?>
