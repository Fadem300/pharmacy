<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="style3Edit medicine .css">

    <script src="https://kit.fontawesome.com/ba22c05506.js" crossorigin="anonymous"></script>
    <title>HOME page</title>
    <style>
        .containerhome{
    background: #c2c8ec;
    border-radius: 30px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.35);
    overflow: hidden;
    width: 1000px;
    max-width: 100%;
    min-height: 480px;
    margin-top: 10px;
}
.conteneras1 {
   width: 100%;
   display: flex;
   flex-direction: row;
   flex-wrap: wrap;
   justify-content: center;
   align-items: center;
}

.centered-div {
   width: 40%;
   height: 100px;
   margin: 10px;
   padding: 5px;
   color: white;
}
h4{
    align-self: center;
}
    </style>
</head>
<body>
<div class="container">
            
    <div class="headercards"> 
          <div class="p1up">
                    <div class="card1"><img src="Images2/icon1.png" ></div>
                    <div class="card2"><p>HOME page</p> </div>
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
                            <a href="homeforadmen.php" class="active">
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
                
            </div>


 <!--end of the sidebar-->











    </div>
            

            <div class="body2" >
            <form enctype="multipart/form-data" method="post">
     
            
                       <div class="containerhome">
<div class="conteneras1">
    <div class="centered-div">
    

                                    <form action="SearchMed.php" method="POST">
        <h1>Search for a Medicine:</h1>
        <input type="text" name="search">
        <input type="submit"  name="btn" style="color: black" >
    </form>
</div></div>
    <?php 
if(isset($_POST['btn'])){
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
                        $search=$_POST['search'];
                        include"connection.php";
                        $query= "SELECT * FROM medicine  WHERE  medicine_name         LIKE '%$search%' 
                                                                OR medicine_ID LIKE '%$search%'  
                                                                OR price  LIKE '%$search%' 
                                                                OR quantity  LIKE '%$search%' 
                                                                OR   dateOfCreate LIKE '%$search%'       
                                                                OR dateOfEnd  LIKE '%$search%'
                                                                OR theProducer  LIKE '%$search%'
                                                                OR  Supplierphonenumber LIKE '%$search%'
                                                                           "; 
                        $result=mysqli_query($con,$query);
            

                            while($row = mysqli_fetch_assoc($result))
                        {?>
                        <td> <h6><?php echo $row['medicine_ID'] ?></h6></td>

                        <td><h6><?php echo $row['medicine_name'] ?></h6></td>

                        <td><h6><?php echo $row['price'] ?></h6></td>

                        <td><h6><?php echo $row['quantity'] ?></h6></td>

                        <td><h6><?php echo $row['dateOfCreate']?>//<?php echo $row['dateOfEnd']  ?></h6></td>

                        <td><h6><?php echo $row['theProducer'] ?></h6></td>

                        <td><h6>(<?php echo $row['key']?> )<?php echo $row['Supplierphonenumber']  ?></h6></td>
                        

                        <td><h6><?php echo $row['description'] ?></h6></td>


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


<?php 
/*if btn */
}?>


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
