<?php
require 'dbconfig/config.php';
?>

<!DOCTYPE HTML>
<html>

<head>
    <title>Register form</title>
    <link rel="stylesheet" href="css/style.css">

    <body style="background-color:rgb(162, 224, 224)">

        <div id="main-wrapper">
            <center>
                <h2>Register</h2>
                <img src="img/login.jpeg" alt="" srcset="" class="img"></img>
            </center>

            <form class="myform" action="reg.php" method="post">
                <label><b>Username</b></label><br>
                <input name="username" type="text" class="inputval" placeholder="Type your username" required /><br>
                <label><b>Password</b></label><br>
                <input name="password"type="password" class="inputval" placeholder="Type your password" required /><br>
                <label><b>Conform password</b></label><br>
                <input name="cpassword" type="password" class="inputval" placeholder="conform password" required /><br>
                <input name="submit_btn"type="submit" id="regis_but" value="Sign Up" /><br>
                <a href="index.php"><input type="button" id="bck_but" value="<<=== back" /></a>
                
            </form>
            <?php
if(isset($_POST['submit_btn'])){
    //echo'<script type="text/javascript"> alert("sign up button clicked")</script>';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    if($password == $cpassword)
    {

         $query="select* from user WHERE username='$username'";
         $query_run=mysqli_query($con,$query);
         if(mysqli_num_rows($query_run)>0)
         {
            echo'<script type="text/javascript"> alert("user alredy exists try another user name")</script>';
        
        }
         else
         {
            $query="insert into user values('$username','$password')";
            $query_run=mysqli_query($con,$query);
            if($query_run)
            {
                echo'<script type="text/javascript"> alert("User registered.... go to log in page to login")</script>';
                
            }
            else
            {
                echo'<script type="text/javascript"> alert("error!")</script>';
                
            }
         }

    }
    else
    {
        echo'<script type="text/javascript"> alert("passwords are not matching....")</script>';
    }
   
    
}
            ?>
        </div>
    </body>




</head>



</html>