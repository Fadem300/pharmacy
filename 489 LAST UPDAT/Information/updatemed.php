<?php 
require("connection.php");
session_start();

if (isset($_POST['updatebtn'])) {
    $medicine_ID = $_POST['medicine_ID'];
    $medicine_name = $_POST['medicine_name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $dateOfCreate = $_POST['dateOfCreate'];
    $dateOfEnd = $_POST['dateOfEnd'];
    $theProducer = $_POST['theProducer'];
    $key = $_POST['key'];
    $Supplierphonenumber = $_POST['Supplierphonenumber'];
    $description = $_POST['description'];

    $query = "UPDATE medicine SET 
     medicine_name = ?,
     price = ?,
     quantity = ?,
     dateOfCreate = ?,
     dateOfEnd = ?,
     theProducer = ?,
     `key` = ?,
     Supplierphonenumber = ?,
     description = ?
   WHERE medicine_ID = ?";


    // Prepare the statement
    $statement = mysqli_prepare($con, $query);

    // Bind the parameter values
    mysqli_stmt_bind_param(
        $statement,
        'sssssssssi',
        $medicine_name,
        $price,
        $quantity,
        $dateOfCreate,
        $dateOfEnd,
        $theProducer,
        $key,
        $Supplierphonenumber,
        $description,
        $medicine_ID
    );

    // Execute the query
    if (mysqli_stmt_execute($statement)) {
        header("location: viewmedicine.php");
        $_SESSION['STATUSUpdate'] = "DATA Update  SUCCESFULLY";

        exit; 
    } else {
        echo 'Please check the query.';
        echo "Error updating the record: " . mysqli_stmt_error($statement);
    }

    // Close the statement and connection
    mysqli_stmt_close($statement);
    mysqli_close($con);
} else {
    header("location: viewmedicine.php");
    exit;
}
?>