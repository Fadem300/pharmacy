<?php
// Connection setup
require("connection.php");
$Employee_ID = $_GET['staff_update'];
$query = "SELECT * FROM pharmacist WHERE Employee_ID = '".$Employee_ID."'";
$result = mysqli_query($con, $query);

while ($row = mysqli_fetch_assoc($result)) {
    $Employee_ID = $row['Employee_ID'];
    $Name = $row['Name'];
    $degree = $row['degree'];
    $speciality = $row['speciality'];
    $dateOfBirth = $row['dateOfBirth'];
    $Email = $row['Email'];
    $key = $row['key'];
    $PhoneNO = $row['PhoneNO'];
    $numberflat_house = $row['numberflat_house'];
    $BLD = $row['BLD'];
    $road = $row['road'];
    $governorate = $row['governorate'];
    $gender = $row['gender'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="style3Edit medicine .css">

    <script src="https://kit.fontawesome.com/ba22c05506.js" crossorigin="anonymous"></script>
    <title>Update Staff pharmacist Information</title>
</head>
<body>
<div class="container">
            
    <div class="headercards"> 
          <div class="p1up">
                    <div class="card1"><img src="Images2/icon1.png" ></div>
                    <div class="card2"><p>Update pharmacist Information</p> </div>
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
            <form enctype="multipart/form-data" method="post" action="updatStaff.php">
  
            
                       <div class="containerInsid">

                                    <div class="h4"><h4>   pharmacist information sign in :</h4></div>

                                    <div class="firscontent1">
                                    
                                    <div class="inputwrapper">
                                        <label for="name" class="newline" >Employee_ID</label><br/>
                                        <input  value="<?php echo $Employee_ID ?>" autocomplete="off" type="text" name="Employee_ID" id="Employee_ID" placeholder="Employee_ID" style="width:135px ; height:30px "required>
                                    </div>
                                    <div class="inputwrapper">
                                        <label for="Name " class="newline" >Name:</label><br/>
                                        <input   value="<?php echo $Name ?>" autocomplete="off" type="text" name="Name" id="Name" placeholder="Name" style="width:135px ; height:30px " required min="1">
                                    </div>

                                    <div class="inputwrapper">
                                        <label for="LName " class="newline" >degree:</label><br/>
                                        <input  value="<?php echo $degree ?>"  autocomplete="off" type="text" name="degree" id="degree" placeholder="degree" style="width:135px ; height:30px " required >
                                    </div>

                                    <div class="inputwrapper">
                                        <label for="speciality " class="newline" >speciality :</label><br/>
                                        <input   value="<?php echo $speciality ?>"  autocomplete="off" type="text" name="speciality" id="speciality" placeholder="speciality" style="width:135px ; height:30px " required >
                                    </div>
   

                                  
                         </div>


                                <div class="firscontent1">



                                    <div class="inputwrapper">
                                        <label for="dateOfBirth" class="contact-pref">date of birth</label><br/> 
                                        <input value="<?php echo $dateOfBirth ?>"  autocomplete="off" type="date" name="dateOfBirth" id="dateOfBirth" placeholder="dateOfBirth" style="width:180px ; height:30px "required>   
                                    </div>


                                    <div class="inputwrapper">
                                            <label for="gender" class="contact-pref" >gender</label> <br/>
                                            <form>
                                                <label for="male">Male</label>
                                                <input  value="Male"<?php if ( $gender =='Male') {echo"checked " ;} ?> Male  autocomplete="off" type="radio" id="male" name="gender" value="male" style="width:15px ; height:15px " required min="1" >
                                            
                                                <label for="female">Female</label>
                                                <input   value="Female"<?php if ( $gender =='Female') {echo"checked " ;} ?> Female  autocomplete="off" type="radio" id="female" name="gender" value="female"style="width:15px ; height:15px "required min="1">
                                            </form >
                                        
                                        </div>
                               
                                    </div>
                                    
<h4>address</h4>
                         <div class="Assrss">
                                        
                                            <div class="inputwrapper">
                                                    <label for="numberflat_house" class="contact-pref">numberflat_house</label><br/>
                                                    <input  value="<?php echo $numberflat_house ?>" autocomplete="off" type=" number" name="numberflat_house" id="numberflat_house" placeholder="numberflat_house" style="width:150px ; height:30px " required min="1">>
                                            </div>

                                            <div class="inputwrapper">
                                                <label for="road" class="contact-pref">road</label><br/>
                                                <input value="<?php echo $road ?>"  autocomplete="off" type=" number" name="road" id="nroad" placeholder="numberroad" style="width:150px ; height:30px " required min="1">>
                                             </div>
                                        <br/>
                                            <div class="inputwrapper">
                                                <label for="BLD" class="contact-pref">BLD</label><br/>
                                                <input value="<?php echo $BLD ?>" autocomplete="off" type=" number" name="BLD" id="BLD" placeholder="numberBLD" style="width:150px ; height:30px " required min="1">>
                                             </div>

                                            <div class="inputwrapper">
                                                <label for="governorate" class="contact-pref">governorate</label><br/>
                                                <input value="<?php echo $governorate ?>"  autocomplete="off" type=" tex" name="governorate" id="governorate" placeholder="governorate" style="width:150px ; height:30px " required min="1">>
                                             </div>


                         </div>

                                <div class="h4"><h4>conction:</h4></div>
                                <div class="conction">
                                
                                            <label for="phone">Enter your phone number:</label><br/>

                                                <input value="<?php echo $key ?>"  autocomplete="off" type="number" name="key"  id="pet-select"style="width:60px ; height:40px " placeholder="xxx"required min="1">
                                                <input  value="<?php echo $PhoneNO ?>" autocomplete="off" type="number" name="PhoneNO" id="PhoneNO" placeholder="xxx xxx xxx"style="width:240px ; height:40px "required>

                                                <div class="inputwrapper">
                                                <label for="theProducer" class="newline"> Email :</label> <br/>
                                                <input  value="<?php echo $Email ?>" autocomplete="off" type="Email" name="Email" id="Email" placeholder="Email " 
                                                style="width:300px ; height:40px "  required >   
                                             </div>

                                            <button type="submit" name="updatebtnstaff" style=" font-size:25px;"><i class="fa-solid fa-circle-plus   "></i>  Update</button>

                                     
                                      



                           
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
