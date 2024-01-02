<?php 
$db = new PDO('mysql:host=localhost;dbname=pharmacyq1;charset=utf8', 'root', '');

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$con = mysqli_connect("localhost","root", "", "pharmacyq1");

if(!$con) {
    die("Connection Error");
}