<?php
require("connection.php");
$query="select * from medicine";
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
    <title>view Medecine</title>
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
                    <div class="card2"><p>view Medecine</p> </div>
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
                                                                                
           <a href="SearchMed.php">
            <button type="submit" name="createA"><i class="fa-solid fa-magnifying-glass fa-2xl"></i><br></button>
</a>
                                                                                <br><br>
                       <?php
                       
                       /*

extract($_POST);
try {
    $db = new PDO('mysql:host=localhost;dbname=pharmacyq1;charset=UTF8', 'root', '');
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // aaisha change sql statement
    $sql = "SELECT * FROM medicine";
    $r = $db->query($sql);
    $count= $r->rowCount();
    echo "<center>";
    echo "<br><br><h1>Total results are : ".$count."</h1>";
    
    $db = null;
} catch (PDOException $x) {
    die($x->getMessage());
}
?>
<div class="containerInsidoutput">

<hr>


<br><br>


<?php

while ($row = $r->fetch()) {
    echo "<table border=1 '>";
    echo "<tr>";
    echo "<th> <h4>Medicine ID:</h4> <h5> $row[0] </h5></th>";
    echo "<th> <h4>Medicine Name:</h4> <h5> $row[1] </h5></th>";
    echo "<th> <h4> Medicine Price:</h4><h5> $row[2] </h5></th>";
    echo "<th> <h4> Medicine Quantity:</h4> <h5> $row[3] </h5> </th>";
    echo "<th>  <h4>Medicine dateOfCreate and end:</h4><h5>( $row[4]),($row[5]) </h5> </th>";
    echo "<th>  <h4> Medicine theProducer:</h4><h5> $row[6] </h5>  </th>";
    echo "<th>  <h4> Medicine Supplierphonenumber:</h4><h5> ($row[7]) $row[8]</h5>  </th>";
    echo "<th>  <h4> Medicine theProducer:</h4><h5> $row[9] </h5>  </th>";
   ?>
    <th><th>
        <?php
 
    echo "<br>";
    echo " </tr>";
   echo " </table>";
    
}*/

  
?>
 
<table border=1>
    <tr >
        <th>Medicine ID</th>
        <th>Medicine Name</th>
        <th>Medicine Price</th>
        <th>Medicine Quantity</th>
        <th>Medicine dateOfCreate and end</th>
        <th>Medicine theProducer</th>
        <th>Medicine Supplier phone number</th>
        <th>description </th>

       


    </tr>
                        <tr >
                        <?php

                            while($row = mysqli_fetch_assoc($result))
                        {?>
                        <td><?php echo $row['medicine_ID'] ?></td>

                        <td><?php echo $row['medicine_name'] ?></td>

                        <td><?php echo $row['price'] ?></td>

                        <td><?php echo $row['quantity'] ?></td>

                        <td><?php echo $row['dateOfCreate']?>//<?php echo $row['dateOfEnd']  ?></td>

                        <td><?php echo $row['theProducer'] ?></td>

                        <td>(<?php echo $row['key']?> )<?php echo $row['Supplierphonenumber']  ?></td>
                        

                        <td><?php echo $row['description'] ?></td>


                        <td><a href="Editmedecen.php?Mupdate=<?php echo $row['medicine_ID']?>" class="link-dark">
                        <i class="fa-solid fa-pen-to-square fa-lg" style="color: #ff0000;"></i></td>

                        <td>
                        <a href="deletemedecen.php?MDEEL=<?php echo $row['medicine_ID']?>" class="link-dark">
                        <i class="fa-solid fa-trash fs-5 me-3"></i></a>
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






















