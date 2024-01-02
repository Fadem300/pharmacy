<?php
include_once 'connection.php';
$total = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
    <title>Stock Report</title>
    <link rel="stylesheet" href="StockReportStyle.css">
    <script src="https://kit.fontawesome.com/ba22c05506.js" crossorigin="anonymous"></script>

    

</head>
<body>

    <div class="headercards"> 
        <div class="p1up">
                  <div class="card1"><img src="Images2/icon1.png" ></div>
                  <div class="card2"> <label for="date-filter"><b>Date:</b> <input type="date" id="date-filter"></label>
                    <br>
                    <label for="time-filter"><b>Time:</b> <input type="time" id="time-filter"></label></div>
          </div>

                
<br>


  
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
 <br>
    <h1>Stock Report</h1>
    <div class="container">

         <?php
         if(isset($_GET['msg'])) {
              $msg = $_GET['msg'];
              echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
              '.$msg.'
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
         }
         ?>
        
        <!--<form action="addTo_stock.php" method="post">
            
            <div class="form-group">
            <input type="text" class="medicine_name" name="medicine_name" placeholder="Medicine Name" required>
            </div>
            <div class="form-group">
            <input type="text" class="category" name="category" placeholder="Category" required>
            </div>
            <div class="form-group">
            <input type="number" class="purchase_cost" name="purchase_cost" placeholder="Purchase Cost" required>
            </div>
            <div class="form-group">
            <input type="number" class="qty" name="quantity" placeholder="Quantity" required>
            </div>
            <div class="form-group">
            <input type="text" class="supplier" name="supplier" placeholder="Supplier" required>
            </div>
            <div class="form-group">
            <input type="date" class="expire_date" name="expire_date" placeholder="Expire Date" required>
            </div>
            <div class="form-group">
            <input type="submit" class="AddTo_stock" value="Add to Stock" name="submit">
            </div>
        </form>
        </div>-->
        <br>
        <br>

      <form class="form-inline" method="POST" action="">
			<input type="date" class="form-control" placeholder="Start"  name="date1" value="<?php echo isset($_POST['date1']) ? $_POST['date1'] : '' ?>" />
			<input type="date" class="form-control" placeholder="End"  name="date2" value="<?php echo isset($_POST['date2']) ? $_POST['date2'] : '' ?>"/>
			<button class="btn btn-primary" name="search"><span class="glyphicon glyphicon-search"></span></button> <a href="index.php" type="button" class="btn btn-success"><span class = "glyphicon glyphicon-refresh"><span></a>
		  </form>
      
    <section class="row print-container">
    <table id="table" width="100%">
        <tr>
            <th>ID</th>
            <th>Medicine Name</th>
            <!--<th>Category</th>-->
            <!--<th>Purchase Cost</th>-->
            <th>Quantity</th>
            <th>Supplier</th>
            <th>Expire Date</th>
            <th>Remove</th>
        
        </tr>
        <?php
      include "connection.php";
      $sql = "SELECT medicine_ID, medicine_name, quantity, dateOfEnd, FName FROM medicine, supplier" ;
      
      $result = mysqli_query($con, $sql);
      while ($row = mysqli_fetch_assoc($result)) {
        
        $medicine_name = $row['medicine_name'];
        $quantity = $row['quantity'];
        $Supplier_name = $row['FName'];
        $date = $row['dateOfEnd'];
        ?>


           <tr>
            <td><?php echo $row['medicine_ID']; ?></td>
            <td><?php echo $row['medicine_name']; ?></td>

            
            <td><?php echo $row['quantity']; ?></td>
            <td><?php echo $row['FName']; ?></td>
            <td><?php echo $row['dateOfEnd']; ?></td>
        
            <td>
              <a href="delete2.php?id=<?php echo $row['medicine_ID']?>" class="link-dark"><i class="fa-solid fa-trash
              fs-5 me-3"></i></a>
            </td>
            </tr>
            
            
        <?php
      }
    
  
        ?>
          
     
        </table>
        <?php ?>
       
        <!--<h3><b>Grand Total:</b> <span><b><?php echo $total; ?></b></span></h3>-->
        
    </section>
    
    <button onclick="window.print();" id="print" class="generate-btn"><b>Generate Report</b></button>




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

<!--Bootstrap 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
-->

<script>
           var hamburger = document.querySelector(".hamburger");
        hamburger.addEventListener("click", function(){
            document.querySelector("body").classList.toggle("active");
        })
      </script>
</body>
</html>