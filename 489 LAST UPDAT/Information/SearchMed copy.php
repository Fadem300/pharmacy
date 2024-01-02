










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
        .containerI{
            background: #c2c8ec;
    border-radius: 30px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.35);
    overflow: hidden;
    width: 768px;
    max-width: 100%;
    min-height: 480px;
    margin-top: 10px;
    margin-left: 700px;
    padding-top: 50px;
    margin-top: 50px;
}
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

  .thelink{
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
                    <div class="card2"><p>search  Medecine</p> </div>
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
           
                                                                                <br><br>
            
            <form enctype="multipart/form-data" method="post">
      
            <form action="SearchMed copy.php" method="POST">
        <h1>Search for a Medicine:</h1>
        <input type="text" name="search">
        <input type="submit"  name="btn" style="color: black" >
    </form>
</div></div>
    <?php 
if(isset($_POST['btn'])){
?>
                       
<div class="containerI">
                      
<table>
    <tr>
        <th>Medicine Name</th>
        <th>Medicine Price</th>
        <th>Medicine Quantity</th>
        <th>Medicine dateOfCreate and end</th>
        <th>Medicine theProducer</th>
        <th>Description</th>
        <th>Action</th>
    </tr>

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
                                                       "; 
    $result=mysqli_query($con,$query);
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <td><?php echo $row['medicine_name'] ?></td>
            <td><?php echo $row['price'] ?></td>
            <td><?php echo $row['quantity'] ?></td>
            <td><?php echo $row['dateOfCreate'] ?> // <?php echo $row['dateOfEnd'] ?></td>
            <td><?php echo $row['theProducer'] ?></td>
            <td><?php echo $row['description'] ?></td>
            <td>
               
            </td>
        </tr>
        <?php
    }
    ?>
</table>

<br><br><br>
<a href="cart.php" class="thelink">Go to Cart</a>
<?php 
/*if btn */
}?>
<br>

<br>
<br>









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





















