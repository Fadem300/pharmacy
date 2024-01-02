<?php
$name =$_POST['name'];
$password=$_POST['password'];
$Fname=$_POST['Fname'];
$Lname=$_POST['Lname'];
$email = $_POST['email'];
$DOB = $_POST['DOB'];
$gender = $_POST['gender'];
$keyC = $_POST['keyC'];
$phonenumber = $_POST['phonenumber'];
$numberflat_house=$_POST['numberflat_house'];
$road = $_POST['road'];
$BLD = $_POST['BLD'];
$gov = $_POST['gov'];


$conn = new mysqli('localhost','root','','pharmacyq1');
if($conn->connect_error)
{
    die('connection failed :'.$conn->connect_error);
}else
{
    $stmt = $conn->prepare("SELECT username FROM patient WHERE username=?");
    $stmt->bind_param("s", $name);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows >= 1) {
        echo $name . " is already taken";
    }
    
    else
    {
    $stmt = $conn->prepare("insert into patient(username,password,Fname,Lname,dateOfBirth,gender,Email,keyC,phoneNO,numberflat_house,road,BLD,governorate) 
    values(?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("sssssssiiiiis",$name, $password, $Fname, $Lname, $DOB , $gender,$email , $keyC, $phonenumber,$numberflat_house,$road, $BLD, $gov);
    $stmt->execute();
    $stmt->close();
    $conn->close();
    }
}

?>