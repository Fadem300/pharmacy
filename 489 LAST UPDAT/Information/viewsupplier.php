<?php
require("connection.php");

$query="select * from supplier";
$result=mysqli_query($con,$query);
session_start();


?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="style3Edit medicine .css">

    <script src="https://kit.fontawesome.com/ba22c05506.js"  crossorigin="anonymous"></script>
    <title>admin pharmacist Information</title>
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
                    <div class="card2"><p>view Supplier</p> </div>
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
            <a href="Searchsupplier.php">                                                           
            <button type="submit" name="creates"><i class="fa-solid fa-magnifying-glass fa-2xl"></i><br></button>
</a>  
<br>
<br>
            <form enctype="multipart/form-data" method="post">
      
                                                                                <?php


                                                                                if(isset($_SESSION['STATUSdelet']))
                                                                                {
                                                                                    ?>
                                                                                        <div class="alert">
                                                                                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                                                                                        <strong>!!   </strong> <?php echo $_SESSION['STATUSdelet']; ?>
                                                                                        </div>
                                                                                            
                                                                                <?php
                                                                                    
                                                                                    unset( $_SESSION['STATUSdelet']);

                                                                                }
                                                                                if(isset($_SESSION['STATUSUpdate']))
                                                                                {
                                                                                    ?>
                                                                                        <div class="alert">
                                                                                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                                                                                        <strong>!!   </strong> <?php echo $_SESSION['STATUSUpdate']; ?>
                                                                                        </div>
                                                                                            
                                                                                <?php
                                                                                    
                                                                                    unset( $_SESSION['STATUSUpdate']);

                                                                                }
                                                                                ?>
                                                                                
            
                       






<table border=1>
    <tr >
        <th>Supplier ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email:</th>
        <th>PhoneNO:</th>
        <th>description</th>
        

       


    </tr>
                        <tr >
                        <?php

                            while($row = mysqli_fetch_assoc($result))
                        {?>
                        <td><?php echo $row['Supplier_id'] ?></td>

                        <td><?php echo $row['FName'] ?></td>

                        <td><?php echo $row['LName'] ?></td>

                        <td><?php echo $row['Email'] ?></td>
                        
                        <td>(<?php echo $row['key']?> )<?php echo $row['PhoneNO']  ?></td>

                        <td><?php echo $row['description'] ?></td>

                        <td><a href="EditSupplier.php?Supplier_update=<?php echo $row['Supplier_id']?>" class="link-dark">
                        <i class="fa-solid fa-pen-to-square fa-lg" style="color: #ff0000;"></i></td>

                        <td>
              <a href="deletesupplier.php?SSDEEL=<?php echo $row['Supplier_id']?>" class="link-dark"><i class="fa-solid fa-trash
              fs-5 me-3"></i></a>
                        </td>                       



                                </tr>
                        <?php
                            }
                            ?>

                       


</table>
<br>
<br>
<br>

<button onclick="window.print();" id="print" class="generate-btn"><b>Generate Report</b></button>
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





















