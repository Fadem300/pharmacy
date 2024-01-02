<?php
include "connection.php;";

$Employee_ID = $_GET['Employee_ID'];
$sql = "DELETE FROM admin WHERE Employee_ID = $Employee_ID";
$result = mysqli_query($conn, $sql);
if($result){
    header("Location: viewAdmin.php?msg=Record deleted successfully");
}
else {
    echo "Failed: " . mysqli_error($con);
   }
   ?>