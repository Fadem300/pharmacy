<?php
require("connection.php");
session_start();

if (isset($_POST['updatebtnpatient'])) {
    $username = $_POST['username'];
    $FName = $_POST['FName'];
    $LName = $_POST['LName'];
    $dateOfBirth = $_POST['dateOfBirth'];
    $password = $_POST['password'];
    $gender = $_POST['gender']; // Assuming gender is submitted via POST
    $Email = $_POST['Email'];
    $keyC = $_POST['keyC'];
    $PhoneNO = $_POST['PhoneNO'];
    $numberflat_house = $_POST['numberflat_house'];
    $road_house = $_POST['road'];
    $BLD = $_POST['BLD'];
    $governorate = $_POST['governorate'];

    $query = "UPDATE patient SET 
        FName = ?,
        LName = ?,
        dateOfBirth = ?,
        `password` = ?,
        gender = ?,
        Email = ?,
        `keyC` = ?,
        PhoneNO = ?,
        `numberflat_house` = ?,
        `road` = ?,
        `BLD` = ?,
        `governorate` = ?
        WHERE username = ?";

    // Prepare the statement
    $statement = mysqli_prepare($con, $query);

    // Bind the parameter values
    mysqli_stmt_bind_param(
        $statement,
        'ssssssisissis',
        $FName,
        $LName,
        $dateOfBirth,
        $password,
        $gender,
        $Email,
        $keyC,
        $PhoneNO,
        $numberflat_house,
        $road_house,
        $BLD,
        $governorate,
        $username
    );

    // Execute the query
    if (mysqli_stmt_execute($statement)) {
        header("location: viewPatient.php");
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
    header("location: viewPatient.php");
    exit;
}
?>
