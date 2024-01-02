<?php
require("connection.php");
session_start();

if (isset($_POST['updatebtnSupplier'])) {
    $Supplier_id = $_POST['Supplier_id'];
    $FName = $_POST['FName'];
    $LName = $_POST['LName'];
    $Email = $_POST['Email'];
    $key = $_POST['key'];
    $PhoneNO = $_POST['PhoneNO'];
    $description = $_POST['description'];

    $query = "UPDATE Supplier SET 
        FName = ?,
        LName = ?,
        Email = ?,
        `key` = ?,
        PhoneNO = ?,
        `description` = ?
        WHERE Supplier_id = ?";

    // Prepare the statement
    $statement = mysqli_prepare($con, $query);

    // Bind the parameter values
    mysqli_stmt_bind_param(
        $statement,
        'ssssisi',
        $FName,
        $LName,
        $Email,
        $key,
        $PhoneNO,
        $description,
        $Supplier_id
    );

    // Execute the query
    if (mysqli_stmt_execute($statement)) {
        header("location: viewsupplier.php");
        $_SESSION['STATUSUpdate'] = "DATA Updated SUCCESSFULLY";
        exit;
    } else {
        echo 'Please check the query.';
        echo "Error updating the record: " . mysqli_stmt_error($statement);
    }

    // Close the statement and connection
    mysqli_stmt_close($statement);
    mysqli_close($con);

} else {
    header("location: viewsupplier.php");
    exit;
}
?>
