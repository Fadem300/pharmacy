<?php
require ("connection.php");
$Supplier_id=$_GET['Supplier_update'];
$query="select * from Supplier where Supplier_id='".$Supplier_id."' ";
$result=mysqli_query($con,$query);

while($row = mysqli_fetch_assoc($result))
{
    $Supplier_id=$row['Supplier_id'];
   $FName=$row['FName'];
   $LName=$row['LName'];

    $Email=$row['Email'];
    $key=$row['key'];
    $PhoneNO= $row['PhoneNO'];  
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
    <title> Update Supplier  </title>
</head>
<body>
<div class="container">
            
    <div class="headercards"> 
          <div class="p1up">
                    <div class="card1"><img src="Images2/icon1.png" ></div>
                    <div class="card2"><p>Update Supplier </p> </div>
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
                        <h3>pharmacy</h3>
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
                
            <form enctype="multipart/form-data" method="post" action="updatSupplier.php">
       
                       <div class="containerInsid">

                                    <div class="h4"><h4>   Update Supplier</h4></div>

                        <div class="firscontent1">

                                    <div class="inputwrapper">
                                        <label for=" Supplier_id" class="newline" >supplier ID :</label><br/>
                                        <input value="<?php echo $Supplier_id ?>"  autocomplete="off" type="number" name="Supplier_id" id="Supplier_id" placeholder="Supplier_id" style="width:300px ; height:40px " required>
                                    </div>

                                  
                                    


                                   
                         </div>


 
                                <div class="firscontent2">

                                    

                                     <div class="inputwrapper">
                                        <label for="FName " class="newline" >Supplier  first Name :</label><br/>
                                        <input  value="<?php echo $FName ?>"  autocomplete="off" type="text" name="FName" id="FName" placeholder="FName" style="width:300px ; height:40px " required min="1">
                                    </div>

                                    <div class="inputwrapper">
                                        <label for="LName " class="newline" >Supplier Last Name :</label><br/>
                                        <input  value="<?php echo $LName ?>"  autocomplete="off" type="text" name="LName" id="LName" placeholder="LName" style="width:300px ; height:40px " required min="1">
                                    </div>
            

                                    </div>


                                    
                 

                                        <div class="firscontent2">

                                            <div class="inputwrapper">
                                                <label for="theProducer" class="newline"> Email :</label> <br/>
                                                <input value="<?php echo $Email ?>" autocomplete="off" type="Email" name="Email" id="Email" placeholder="Email " 
                                                style="width:300px ; height:40px "  required >   
                                             </div>

                                             
                                             <div class="inputwrapper">
                                                <label for="Supplierphonenumber" class="newline">Supplier phone number </label> <br/>
                                                
                                                <input value="<?php echo $key ?>" autocomplete="off" type="number" name="key" required min="1" id="pet-select"style="width:60px ; height:40px ">
                                                <input value="<?php echo $PhoneNO ?>" autocomplete="off" type="number" name="PhoneNO" id="PhoneNO" placeholder="xxx xxx xxx"style="width:240px ; height:40px "required>   
                                            </div>
        
                                            
                                            </div>
                                        
    
                                    
                                    


                                <div class="h4"><h4>description:</h4></div>
                                <div class="conction">
                                
                                            <label for="description drp">Enter your description:</label><br/>
                                            <input value="<?php echo $description ?>" autocomplete="off" type="text" id="description" name="description" placeholder="  Enter your description.."style="width:500px ; height:120px " required >
 

                                            
                                            <button type="submit" name="updatebtnSupplier" style=" font-size:25px;"><i class="fa-solid fa-circle-plus   "></i>  Update</button>


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
