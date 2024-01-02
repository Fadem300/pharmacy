<?php



?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="style3Edit medicine .css">

    <script src="https://kit.fontawesome.com/ba22c05506.js"  crossorigin="anonymous"></script>
    <title>view Patient</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <style>
        button{
    background-color: #512da8;
    color: #fff;
    font-size: 12px;
    padding: 10px 45px;
    border: 1px solid transparent;
    border-radius: 8px;
    font-weight: 600;
    letter-spacing: 0.5px;
    text-transform: uppercase;
    margin-top: 10px;
    cursor: pointer;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.35);
    margin-left: 90px;
}
button:hover  {
  
    color: greenyellow;
  }
  table, th, td {
    border: 1px solid;
    border-collapse: collapse;

  }
  th{
    background-color: lightblue;
  }
  .alert {
  padding: 10px;
  background-color: #f44336;
  color: white;
  margin-bottom: 30px;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}


    </style>
</head>
<body>
<div class="container">
            
    <div class="headercards"> 
          <div class="p1up">
                    <div class="card1"><img src="Images2/icon1.png" ></div>
                    <div class="card2"><p>view Patient</p> </div>
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
                            <a href="viewmedicineforuser.php">
                                <span class="icon"><i class="fas fa-tachometer-alt"></i></span>
                                <span class="item">view Medecine</span>
                            </a>
                        </li>
                        <li>
                            <a href="setting.php">
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
            <?php
session_start();

if (isset($_POST['changePassword'])) {
    $newPassword = $_POST['newPassword'];
    $username = $_SESSION['username']; 

    require("connection.php");


    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

   // $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT); // Hash the new password
    $updateQuery = "UPDATE patient SET password = ? WHERE username = ?";
    $stmt = $con->prepare($updateQuery);
    $stmt->bind_param("ss", $newPassword, $username);

    if ($stmt->execute()) {
        header("Location: homeforuser.php");
    } else {
        echo "Error updating password: " . $con->error;
    }

    $stmt->close();
    $con->close();
}
?>

            <h2>Change Password</h2>
    <form action="setting.php" method="post">
        <label for="newPassword">New Password:</label>
        
        <input   type="text" id="newPassword" name="newPassword" required>
        <input type="submit" name="changePassword" value="Change Password">
    </form>
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





















