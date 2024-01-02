<?php
// Connection setup
require("connection.php");
session_start();

if (isset($_POST['updatebtnADMIN'])) {
    // Retrieve form data
    $Employee_ID = $_POST['Employee_ID'];
    $Name = $_POST['Name'];
    $administration_level = $_POST['administration_level'];
    $speciality = $_POST['speciality'];
    $dateOfBirth = $_POST['dateOfBirth'];
    $Email = $_POST['Email'];
    $key = $_POST['key'];
    $PhoneNO = $_POST['PhoneNO'];
    $numberflat_house = $_POST['numberflat_house'];
    $BLD = $_POST['BLD'];
    $road = $_POST['road'];
    $governorate = $_POST['governorate'];
    $gender = $_POST['gender'];

    // Prepare the SQL query
    $query = "UPDATE admin SET 
        `Name` = ?,
        administration_level = ?,
        speciality = ?,
        dateOfBirth = ?,
        Email = ?,
        `key` = ?,
        PhoneNO = ?,
        numberflat_house = ?,
        BLD = ?,
        road = ?,
        governorate = ?,
        gender = ?
        WHERE Employee_ID = ?";

    // Prepare the statement
    $statement = mysqli_prepare($con, $query);

    // Bind the parameters
    mysqli_stmt_bind_param(
        $statement,
        'ssssssssssssi',
        $Name,
        $administration_level,
        $speciality,
        $dateOfBirth,
        $Email,
        $key,
        $PhoneNO,
        $numberflat_house,
        $BLD,
        $road,
        $governorate,
        $gender,
        $Employee_ID
    );

    // Execute the query
    if (mysqli_stmt_execute($statement)) {
        header("location: viewAdmin.php");
        $_SESSION['STATUSUpdate'] = "DATA Update  SUCCESSFULLY";
        exit;
    } else {
        echo 'Please check the query.';
        echo "Error updating the record: " . mysqli_stmt_error($statement);
    }

    // Close the statement and connection
    mysqli_stmt_close($statement);
    mysqli_close($con);
} else {
    header("location: viewAdmin.php");
    exit;
}
?>
