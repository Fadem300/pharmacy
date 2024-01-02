<?php
require ("connection.php");
$medicine_ID=$_GET['Mupdate'];
$query="select * from medicine where medicine_ID='".$medicine_ID."' ";
$result=mysqli_query($con,$query);

while($row = mysqli_fetch_assoc($result))
{
    $medicine_ID=$row['medicine_ID'];
   $medicine_name=$row['medicine_name'];
   $price=$row['price'];
    $quantity=$row['quantity'];
    $dateOfCreate=$row['dateOfCreate'];
    $dateOfEnd= $row['dateOfEnd'] ;
    $theProducer=$row['theProducer'];
    $key=$row['key'];
    $Supplierphonenumber= $row['Supplierphonenumber'];  
    $description= $row['description'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style3Edit medicine .css">

    <script src="https://kit.fontawesome.com/ba22c05506.js" crossorigin="anonymous"></script>
    <title>Edit medicine  </title>
</head>
<body>
<div class="container">
            
    <div class="headercards"> 
          <div class="p1up">
                    <div class="card1"><img src="Images2/icon1.png" ></div>
                    <div class="card2"><p>Edit medicine  </p> </div>
            </div>


                


 <!--start of the sidebar-->
                  
 <div class="wrapper">
                <div class="section">
                    <div class="top_navbar">
                        <div class="hamburger">
                            <a href="#">
                                <i class="fas fa-bars"></i>
                            </a>
                        </div>
                    </div>
                     
                </div>
                <div class="sidebar">
                    <div class="profile">
                        <img src="Images2/icon1.png" alt="profile_picture"style="width:50px; height:50px;">
                        <h3>parmacy</h3>
                        <p>BH</p>
                    </div>
                    <ul>
                        <li>
                            <a href="Interface489.html" class="active">
                                <span class="icon"><i class="fas fa-home"></i></span>
                                <span class="item">Home</span>
                            </a>
                        </li>
                      
                        <li>
                            <a href="addadmin.php">
                                <span class="icon"><i class="fas fa-user-friends"></i></span>
                                <span class="item">ADD admin</span>
                            </a>
                        </li>
                        <li>
                            <a href="addPatient.php">
                                <span class="icon"><i class="fas fa-user-friends"></i></span>
                                <span class="item">ADD Patient</span>
                            </a>
                        </li>
                        <li>
                            <a href="addstaff.php">
                                <span class="icon"><i class="fas fa-user-friends"></i></span>
                                <span class="item">ADD Staff</span>
                            </a>
                        </li>
                        <li>
                            <a href="addSupplier.php">
                                <span class="icon"><i class="fas fa-user-friends"></i></span>
                                <span class="item">ADD Supplier</span>
                            </a>
                        </li>
                        <li>
                            <a href="addmedicine.php">
                                <span class="icon"><i class="fas fa-user-friends"></i></span>
                                <span class="item">ADD Medicine</span>
                            </a>
                        </li>
                        
                        <li>
                            <a href="viewAdmin.php">
                                <span class="icon"><i class="fas fa-tachometer-alt"></i></span>
                                <span class="item">view Admin</span>
                            </a>
                        </li>
                        <li>
                            <a href="viewPatient.php">
                                <span class="icon"><i class="fas fa-tachometer-alt"></i></span>
                                <span class="item">view Patient</span>
                            </a>
                        </li>
                        <li>
                            <a href="viewmedicine.php">
                                <span class="icon"><i class="fas fa-tachometer-alt"></i></span>
                                <span class="item">view Medecine</span>
                            </a>
                        </li>
                        <li>
                            <a href="viewStaff.php">
                                <span class="icon"><i class="fas fa-tachometer-alt"></i></span>
                                <span class="item">view  pharmacist</span>
                            </a>
                        </li>
                        <li>
                            <a href="viewsupplier.php">
                                <span class="icon"><i class="fas fa-tachometer-alt"></i></span>
                                <span class="item">view Supplier</span>
                            </a>
                        </li>
                        
                       
                        <li>
                            <a href="SalesSummary.php">
                                <span class="icon"><i class="fas fa-chart-line"></i></span>
                                <span class="item">Sales summary</span>
                            </a>
                        </li>
                        <li>
                            <a href="StockReport.php">
                                <span class="icon"><i class="fas fa-chart-line"></i></span>
                                <span class="item">Stock report</span>
                            </a>
                        </li>
                        
                        <li>
                            <a href="ListOfInvoices.php">
                                <span class="icon"><i class="fas fa-chart-line"></i></span>
                                <span class="item">List of invoices</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="icon"><i class="fas fa-cog"></i></span>
                                <span class="item">Settings</span>
                            </a>
                        </li>
                        <li>
                            <a href="exit.html">
                                <span class="icon"><i class="fa-solid fa-arrow-right-from-bracket "></i></span>
                                <span class="item">exit</span>
                            </a>
                        </li>
                    </ul>
                </div>
                
            </div>


 <!--end of the sidebar-->









</div>


            <div class="body2" >
            <?php
/*
    extract($_POST);
    if (isset($createA)) { //if the user hit the create the auction button
        try {
            $db = new PDO('mysql:host=localhost;dbname=pharmacyq1;charset=UTF8', 'root', '');
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO medicine VALUES ('$medicine_ID','$medicine_name','$price','$quantity','$dateOfCreate','$dateOfEnd','$theProducer','$key','$Supplierphonenumber','$description') "; // add the info from the user input to the table
            $r = $db->exec($sql);



            $db = null; //close the database connection
          //  header("location:Information/addmedicine.php"); //To redirec t the user to the main page after creating the auction
        } catch (PDOException $x) {
            die($x->getmessage());
        }
    }*/
    ?> 
<form enctype="multipart/form-data" method="post" action="updatemed.php">
    <div class="containerInsid">
        <div class="h4">
            <h4>Update Medicine</h4>
        </div>

        <div class="firscontent1">
            <div class="inputwrapper">
                <label for="medicine_ID" class="newline">Medicine ID:</label><br/>
                <input value="<?php echo $medicine_ID ?>" autocomplete="off" type="number" name="medicine_ID" id="medicine_ID" placeholder="Medicine ID" style="width:300px; height:40px" required>
            </div>

            <div class="inputwrapper">
                <label for="medicine_name" class="newline">Medicine Name:</label><br/>
                <input value="<?php echo $medicine_name ?>" autocomplete="off" type="text" name="medicine_name" id="medicine_name" placeholder="Medicine Name" style="width:300px; height:40px" required>
            </div>
        </div>

        <div class="firscontent2">
            <div class="inputwrapper">
                <label for="price" class="newline">Price:</label><br/>
                <input value="<?php echo $price ?>" autocomplete="off" type="number" name="price" id="price" placeholder="Price" style="width:300px; height:40px" required>
            </div>

            <div class="inputwrapper">
                <label for="quantity" class="newline">Quantity:</label><br/>
                <input value="<?php echo $quantity ?>" autocomplete="off" type="number" name="quantity" id="quantity" placeholder="Quantity" style="width:300px; height:40px" required min="1">
            </div>
        </div>

        <div class="firscontent2">
            <div class="inputwrapper">
                <label for="dateOfCreate" class="newline">Date of Create:</label><br/>
                <input value="<?php echo $dateOfCreate ?>" autocomplete="off" type="date" name="dateOfCreate" id="dateOfCreate" style="width:300px; height:40px" required>
            </div>

            <div class="inputwrapper">
                <label for="dateOfEnd" class="newline">Date of End:</label><br/>
                <input value="<?php echo $dateOfEnd ?>" autocomplete="off" type="date" name="dateOfEnd" id="dateOfEnd" style="width:300px; height:40px" required>
            </div>
        </div>

        <div class="firscontent2">
            <div class="inputwrapper">
                <label for="theProducer" class="newline">The Producer:</label><br/>
                <input value="<?php echo $theProducer ?>" autocomplete="off" type="text" name="theProducer" id="theProducer" placeholder="The Producer" style="width:300px; height:40px" required>
            </div>

            <div class="inputwrapper">
                <label for="Supplierphonenumber" class="newline">Supplier Phone Number:</label><br/>
                <input value="<?php echo $key ?>" autocomplete="off" type="number" name="key" required min="1" id="pet-select" style="width:60px; height:40px" placeholder="xxx">
                <input value="<?php echo $Supplierphonenumber ?>" autocomplete="off" type="text" name="Supplierphonenumber" id="Supplierphonenumber" placeholder="xxx xxx xxx" style="width:240px; height:40px" required>
            </div>
        </div>

        <div class="h4">
            <h4>Description:</h4>
        </div>
        <div class="conction">
            <label for="description">Enter your description:</label><br/>
            <input value="<?php echo $description ?>" autocomplete="off" type="text" id="description" name="description" placeholder="Enter your description" style="width:500px; height:120px" required>

            <button type="submit" name="updatebtn">
                <i class="fa-solid fa-circle-plus fa-3x"></i><br>Update
            </button>
        </div>
    </div>
</form>

            </div>

                    

            <footer>

                <div class="footer-content">
                  <h3></h3>
                
                      <ul class="footerHelp">
                        <li>
                          <a href="#">contact us</a>
                          <i class=" fas fa-solid fa-phone"></i>
                        </li>
                
                        <li>
                          <a href="#">About Us</a>
                          <i class="fas fa-regular fa-address-card"></i>
                        </li>
                
                        <li>
                          <a href="#">Help</a>
                          <i class="fas fa-question"></i>
                        </li>
                      </ul>
                
                      <div class="footer-bottom">
                        <p>COpyriht 2024 .parmacy  System. All Right Reserved</p>
                      </div>
                
                
                </div>
                
                
                </footer>

</div>
<script>
           var hamburger = document.querySelector(".hamburger");
        hamburger.addEventListener("click", function(){
            document.querySelector("body").classList.toggle("active");
        })
      </script>
</body>
</html>
