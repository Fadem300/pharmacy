<?php


$username = $_POST['username'];
$password = $_POST['password'];

$conn = new mysqli('localhost', 'root', '', 'pharmacyq1');
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
} else {
    $stmtP = $conn->prepare("SELECT `username`, `password` FROM `patient` WHERE `username` = ? AND `password` = ?");
    $stmtP->bind_param("ss", $username, $password);
    $stmtP->execute();
    $resultP = $stmtP->get_result();

    $stmtA = $conn->prepare("SELECT `Employee_ID`, `password` FROM `admin` WHERE `Employee_ID` = ? AND `password` = ?");
    $stmtA->bind_param("ss", $username, $password);
    $stmtA->execute();
    $resultA = $stmtA->get_result();

    $stmtPH = $conn->prepare("SELECT `Employee_ID`, `password` FROM `pharmacist` WHERE `Employee_ID` = ? AND `password` = ?");
    $stmtPH->bind_param("ss", $username, $password);
    $stmtPH->execute();
    $resultPH = $stmtPH->get_result();
    

    if ($resultP->num_rows > 0) {
        header("Location: homeforuser.php");
    } 
    
    else if($resultA->num_rows > 0) {
        header("Location: homeforadmen.php");
    }

    else if($resultPH->num_rows > 0) {
        header("Location: homeforstaff.php");
    }

    else{
        header("Location: login-signin.html");
    }
}
    $stmtP->close();
    $stmtA->close();
    $stmtPH->close();
    $conn->close();




?>

