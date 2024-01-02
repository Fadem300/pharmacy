<?php
include "connection.php";

if (isset($_POST["submit"])) {
    /*$date = $_POST["Date"];*/
    $invoice_number = $_POST["invoice_number"];
    $invoice_id = $_POST["invoice_id"];
    /*$patient_name = $_POST["patient_name"];*/
    /*$quantity = $_POST["quantity"];*/
    /*$price = $_POST["price"];*/
    
   
   
    
    $sql = "INSERT INTO invoice (invoice_id, invoice_number) VALUES('$invoice_id', '$invoice_number')";

    $result = mysqli_query($con, $sql);

    if($result){
        header("Location: ListOfInvoices.php?msg=New record created successfully");
        
       }
    else {
        echo "Failed: " . mysqli_error($con);
       }
}
?>
