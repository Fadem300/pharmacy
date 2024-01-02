


<?PHP

include "connection.php";
session_start();


//delet  Patient  
$username= $_GET['PDEEL'];
$query = "DELETE FROM patient WHERE username ='".$username."'";
$result=mysqli_query($con,$query);
if($result){
    header("Location: viewPatient.php?msg=Record deleted successfully");
    $_SESSION['STATUSdelet'] = "DATA DELETE SUCCESFULLY";

}
else {
    echo "Failed: " . mysqli_error($conn);
   }


?>
