<!DOCTYPE html>
<html lang="en">
<?php
session_start();
// Report all PHP errors (adjust the level as needed)
error_reporting(E_ALL);

// Display errors to the screen during development (change to 0 in production)
ini_set('display_errors', 1);

if(isset($_POST['submits'])) {
    
$name =$_POST['name'];
$password=$_POST['password'];
$Fname=$_POST['Fname'];
$Lname=$_POST['Lname'];
$email = $_POST['email'];
$DOB = $_POST['DOB'];
$gender = $_POST['gender'];
$keyC = $_POST['keyC'];
$phonenumber = $_POST['phonenumber'];
$numberflat_house=$_POST['numberflat_house'];
$road = $_POST['road'];
$BLD = $_POST['BLD'];
$gov = $_POST['gov'];


$conn = new mysqli('localhost','root','','pharmacyq1');
if($conn->connect_error)
{
    
    die('connection failed :'.$conn->connect_error);
}else
{
    $stmt = $conn->prepare("SELECT username FROM patient WHERE username=?");
    $stmt->bind_param("s", $name);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows >= 1) {
        $_SESSION['usertaken'] = "Username already taken";  
    }
    
    else
    {
        
    $stmt = $conn->prepare("insert into patient(username,password,Fname,Lname,dateOfBirth,gender,Email,keyC,phoneNO,numberflat_house,road,BLD,governorate) 
    values(?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("sssssssiiiiis",$name, $password, $Fname, $Lname, $DOB , $gender,$email , $keyC, $phonenumber,$numberflat_house,$road, $BLD, $gov);
    $stmt->execute();
    $stmt->close();
    $conn->close();
    }
}
}
?>
<?php


if(isset($_POST['submitl'])){
$username = $_POST['username'];
$password = $_POST['password'];
$_SESSION['user'] =$_POST['username'];
$conn = new mysqli('localhost', 'root', '', 'pharmacyq1');
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
} else {
    $stmtP = $conn->prepare("SELECT `username`, `password` FROM `patient` WHERE `username` = ? AND `password` = ?");
    $stmtP->bind_param("ss", $username, $password);
    $stmtP->execute();
    $resultP = $stmtP->get_result();

    $stmtA = $conn->prepare("SELECT `Employee_ID`, `password` FROM `admin` WHERE `Employee_ID` = ? AND `password` = ?");
    $stmtA->bind_param("ss", $username, $password);
    $stmtA->execute();
    $resultA = $stmtA->get_result();

    $stmtPH = $conn->prepare("SELECT `Employee_ID`, `password` FROM `pharmacist` WHERE `Employee_ID` = ? AND `password` = ?");
    $stmtPH->bind_param("ss", $username, $password);
    $stmtPH->execute();
    $resultPH = $stmtPH->get_result();
    

    if ($resultP->num_rows > 0) {
        header("Location: homeforuser.php");
        exit();
    } 
    
    else if($resultA->num_rows > 0) {
        header("Location: homeforadmen.php");
    }

    else if($resultPH->num_rows > 0) {
        header("Location: homeforstaff.php");
    }

    else{
        $_SESSION['usernotfound'] = "wrong username or password";
    }
}
    $stmtP->close();
    $stmtA->close();
    $stmtPH->close();
    $conn->close();



}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style1.css">
    
    <title>Modern Login Page </title>
    <style>
        .groop1
        {
            background-color: red;
            display: flex;
        }
    </style>
   
</head>

<body>
    
    <nav>
        <div class="nav-container">
                  <img src="Images/icon1.png" >
        </div>
        </nav>
<div class="title"><h1>pharmacy management System </h1></div>

    <div class="container" id="container">


        
        <div class="form-container sign-up">
            <form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" id="signupForm">
                <h1>Create Account</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registeration</span>
                <input type="text" placeholder="username" name="name" id="signupName">
                <span id="signupUsernamespan"> 
               
                 </span>
                 <span id="signupUsernamespan2"> 
                 <?php 
                 echo isset($_SESSION['usertaken']) ? $_SESSION['usertaken'] : '';
                 if (isset($_SESSION['usertaken'])) {
                    unset($_SESSION['usertaken']);
                } ?>
                 </span>
                <input type="password" placeholder="Password" name="password" id="signupPassword">
                <span id="signuppasswordspan"></span>
                <input type="text" placeholder="first name" name="Fname" id="Fname">
                <span id="Fnamespan"></span>
                <input type="text" placeholder="last name" name="Lname" id="Lname">
                <span id="Lnamespan"></span>
                <input type="date" placeholder="date of birth" name="DOB" id="DOB">
                <span id="DOBspan"></span>
                <label for="gender">gender:</label>
                <select id="gender" name="gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                <span id="genderspan"></span>
                <input type="text" placeholder="email" name="email" id="email">
                <span id="emailspan"></span>

             <div class="groop1" >   
                <input type="number" placeholder="country code" name="keyC" id="keyC" style=" width: 100px;             background-color: red; " >
                <span id="keyspan"></span>
                <input type="number" placeholder="phone number" name="phonenumber" id="phonenumber">
                <span id="phoneNspan"></span>
            </div>
                    <div class="grop2">
                        <input type="number" placeholder="house or flat" name="numberflat_house" id="numberflat_house" style=" width: 100px;             background-color: red; " >
                        <span id="housespan"></span>
                        <input type="number" placeholder="road" name="road" id="road" style=" width: 100px;             background-color: red; ">
                        <span id="roadspan"></span>
                        <input type="number" placeholder="building" name="BLD" id="BLD" style=" width: 100px;             background-color: red; ">
                        <span id="BLDspan"></span>
                        <input type="text" placeholder="governorate" name="gov" id="gov" style=" width: 100px;             background-color: red; ">
                        <span id="govspan"></span>
                    </div>
                <button type="submit" name="submits">Sign Up</button>

            </form>
            
        </div>
        <div class="form-container sign-in">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" id="loginForm" >
                <h1>Sign In</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>or use your email password</span>
                <input type="text" placeholder="username" name="username" id="loginUsername">
                <span id="loginUsernamespan"></span>
                <input type="password" placeholder="Password" name="password" id="loginPassword">
                <span id="loginpasswordspan"></span>
                <span id="loginpasswordspan2">
                <?php 
                 echo isset($_SESSION['usernotfound']) ? $_SESSION['usernotfound'] : '';
                 if (isset($_SESSION['usernotfound'])) {
                    unset($_SESSION['usernotfound']);
                } ?>
                </span>
                <a href="#">Forget Your Password?</a>
                <button  type="submit" name="submitl">Sign In</button>
            </form>
        
           
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back!</h1>
                    <p>Enter your personal details to use all of site features</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hello, Friend!</h1>
                    <p>Register with your personal details to use all of site features</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
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
                <p>COpyright 2023 .Registration System. All Right Reserved</p>
              </div>
        
        
        </div>
        
        
    </footer>

    <script src="script.js">
 </script>
    
</body>

</html>