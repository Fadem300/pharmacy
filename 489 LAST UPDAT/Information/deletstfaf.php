<?PHP
include "connection.php";
session_start();


//delet  pharmacist
$Employee_ID= $_GET['SDEEL'];
$query = "DELETE FROM pharmacist WHERE Employee_ID='".$Employee_ID."'";
$result=mysqli_query($con,$query);
if($result){
    header("Location: viewStaff.php?msg=Record deleted successfully");
    $_SESSION['STATUSdelet'] = "DATA DELETE SUCCESFULLY";

}
else {
    echo "Failed: " . mysqli_error($conn);
   }

?>
