<?php /*
include "connection.php";
$Employee_ID = $_GET['ID'];
$sql = "DELETE FROM admin WHERE Employee_ID = $Employee_ID";
$result = mysqli_query($conn, $sql);
if($result){
    header("Location: viewAdmin.php?msg=Record deleted successfully");
}
else {
    echo "Failed: " . mysqli_error($conn);
   }
 */   ?>  



<?PHP

include "connection.php";


session_start();




//delet medecen 
$medicine_ID= $_GET['MDEEL'];
$query = "DELETE FROM medicine WHERE medicine_ID='".$medicine_ID."'";
$result=mysqli_query($con,$query);
if($result){
    header("Location: viewmedicine.php?msg=Record deleted successfully");
    $_SESSION['STATUSdelet'] = "DATA DELETE SUCCESFULLY";
}
else {
    echo "Failed: " . mysqli_error($conn);
   }










?>
