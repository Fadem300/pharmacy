<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="style3Edit medicine .css">

    <script src="https://kit.fontawesome.com/ba22c05506.js" crossorigin="anonymous"></script>
    <title>Edit patient Information</title>
</head>
<body>
<div class="container">
            
    <div class="headercards"> 
          <div class="p1up">
                    <div class="card1"><img src="Images2/icon1.png" ></div>
                    <div class="card2"><p>patient Information</p> </div>
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
                    <div class="scroll" >
                    <ul>
                        <li>
                            <a href="Interface489.html" class="active">
                                <span class="icon"><i class="fas fa-home"></i></span>
                                <span class="item">Home</span>
                            </a>
                        </li>
                      
                       
                        <li>
                            <a href="addPatientforStaff.php">
                                <span class="icon"><i class="fas fa-user-friends"></i></span>
                                <span class="item">ADD Patient</span>
                            </a>
                        </li>
                      
                        <li>
                            <a href="addmedicineforStaff.php">
                                <span class="icon"><i class="fas fa-user-friends"></i></span>
                                <span class="item">ADD Medicine</span>
                            </a>
                        </li>
                        
                        
                        <li>
                            <a href="viewPatientforStaff.php">
                                <span class="icon"><i class="fas fa-tachometer-alt"></i></span>
                                <span class="item">view Patient</span>
                            </a>
                        </li>
                        <li>
                            <a href="viewmedicineforStaff.php">
                                <span class="icon"><i class="fas fa-tachometer-alt"></i></span>
                                <span class="item">view Medecine</span>
                            </a>
                        </li>
                       
                       
                        
                        
                        <li>
                            <a href="ListOfInvoicesforStaff.php">
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
                
            </div>


 <!--end of the sidebar-->



    </div>
            

            <div class="body2" >
            <form enctype="multipart/form-data" method="post">
    <?php

    extract($_POST);
    if (isset($createA)) { //if the user hit the create the auction button
        try {
            $db = new PDO('mysql:host=localhost;dbname=pharmacyq1;charset=UTF8', 'root', '');
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO patient VALUES ('$username','$password','$FName','$LName','$dateOfBirth','$gender','$Email','$key','$PhoneNO','$numberflat_house','$road','$BLD','$governorate') "; // add the supplier from the user input to the table
            $r = $db->exec($sql);



            $db = null; //close the database connection
           // header("location:Information/addPatient.php"); //To redirect the user to the main page after creating the auction
        } catch (PDOException $x) {
            die($x->getmessage());
        }
    }
    ?>    
            
                       <div class="containerInsid">

                                    <div class="h4"><h4>   pationt information sign in :</h4></div>

                        <div class="firscontent1">
                                    
                                    <div class="inputwrapper">
                                        <label for="name" class="newline" >Username</label><br/>
                                        <input  autocomplete="off" type="text" name="username" id="username" placeholder="username" style="width:180px ; height:30px "required>
                                    </div>
                                    <div class="inputwrapper">
                                        <label for="FName " class="newline" >First Name:</label><br/>
                                        <input   autocomplete="off" type="text" name="FName" id="FName" placeholder="FName" style="width:180px ; height:30px " required min="1">
                                    </div>

                                    <div class="inputwrapper">
                                        <label for="LName " class="newline" >Last Name :</label><br/>
                                        <input   autocomplete="off" type="text" name="LName" id="LName" placeholder="LName" style="width:180px ; height:30px " required min="1">
                                    </div>
   

                                  
                         </div>



                                <div class="firscontent1">


                                     <div class="inputwrapper">
                                        <label for="password" class="newline">password :</label> <br/>
                                        <input  autocomplete="off" type="password" name="password" id="password" placeholder="password" style="width:180px ; height:30px " required >   
                                     </div>

                                    <div class="inputwrapper">
                                        <label for="dateOfBirth" class="contact-pref">date of birth</label><br/> 
                                        <input autocomplete="off" type="date" name="dateOfBirth" id="dateOfBirth" placeholder="dateOfBirth" style="width:180px ; height:30px "required>   
                                    </div>


                                        <div class="inputwrapper">
                                            <label for="gender" class="contact-pref" >gender</label> <br/>
                                            <form>
                                                <label for="male">Male</label>
                                                <input  autocomplete="off" type="radio" id="male" name="gender" value="male" style="width:15px ; height:15px ">
                                            
                                                <label for="female">Female</label>
                                                <input  autocomplete="off" type="radio" id="female" name="gender" value="female"style="width:15px ; height:15px ">
                                            </form >
                                        
                                        </div>
                               
                                    </div>
                                    
<h4>address</h4>
                         <div class="Assrss">
                                        
                                            <div class="inputwrapper">
                                                    <label for="numberflat_house" class="contact-pref">numberflat_house</label><br/>
                                                    <input autocomplete="off" type=" number" name="numberflat_house" id="numberflat_house" placeholder="numberflat_house" style="width:150px ; height:30px " required min="1">>
                                            </div>

                                            <div class="inputwrapper">
                                                <label for="road" class="contact-pref">road</label><br/>
                                                <input autocomplete="off" type=" number" name="road" id="nroad" placeholder="numberroad" style="width:150px ; height:30px " required min="1">>
                                             </div>
                                        <br/>
                                            <div class="inputwrapper">
                                                <label for="BLD" class="contact-pref">BLD</label><br/>
                                                <input autocomplete="off" type=" number" name="BLD" id="BLD" placeholder="numberBLD" style="width:150px ; height:30px " required min="1">>
                                             </div>

                                            <div class="inputwrapper">
                                                <label for="governorate" class="contact-pref">governorate</label><br/>
                                                <input autocomplete="off" type=" tex" name="governorate" id="governorate" placeholder="governorate" style="width:150px ; height:30px " required min="1">>
                                             </div>


                         </div>

                                <div class="h4"><h4>conction:</h4></div>
                                <div class="conction">
                                
                                            <label for="phone">Enter your phone number:</label><br/>

                                                <input autocomplete="off" type="number" name="key"  id="pet-select"style="width:60px ; height:40px " placeholder="xxx"required min="1">
                                                <input autocomplete="off" type="number" name="PhoneNO" id="PhoneNO" placeholder="xxx xxx xxx"style="width:240px ; height:40px "required>

                                                <div class="inputwrapper">
                                                <label for="theProducer" class="newline"> Email :</label> <br/>
                                                <input autocomplete="off" type="Email" name="Email" id="Email" placeholder="Email " 
                                                style="width:300px ; height:40px "  required >   
                                             </div>

                                            <button type="submit" name="createA" style=" font-size:25px;"><i class="fa-solid fa-circle-plus   "></i>  ADD</button>

                                            <button style=" font-size:25px;"><i class="fa-solid fa-xmark"></i> Cancel </button>

                                </div>


</div>

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
