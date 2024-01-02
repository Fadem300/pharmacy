<?php
include "connection.php";
$id = $_GET['id'];
$sql = "DELETE FROM medicine WHERE medicine_ID = $id";
$result = mysqli_query($con, $sql);
if($result){
    header("Location: StockReport.php?msg=Record deleted successfully");
}
else {
    echo "Failed: " . mysqli_error($con);
   }
   ?>