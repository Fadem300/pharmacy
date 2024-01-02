 



<?PHP

include "connection.php";

session_start();



// delet admin 
$Employee_ID= $_GET['ADEEL'];
$query = "DELETE FROM admin WHERE Employee_ID='".$Employee_ID."'";
$result=mysqli_query($con,$query);
if($result){
    header("Location: viewAdmin.php?msg=Record deleted successfully");
    $_SESSION['STATUSdelet'] = "DATA DELETE SUCCESFULLY";

}
else {
    echo "Failed: " . mysqli_error($conn);
   }


?>
