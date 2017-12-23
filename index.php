<?php
session_start();

require 'dbconfig/config.php'
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="css/style.css">

    <body style="background-color:rgb(162, 224, 224)">

        <div id="main-wrapper">
            <center>
                <h2>Log form</h2>
                <img src="img/login.jpeg" alt="" srcset="" class="img"></img>
            </center>

            <form class="myform" action="index.php" method="post">
                <label><b>Username</b></label><br>
                <input name="username" type="text" class="inputval" placeholder="Type your username" required/><br>
                <label><b>Password</b></label><br>
                <input name="password" type="password" class="inputval" placeholder="Type your password" required/><br>
                <input name="login" type="submit" id="login_but" value="Login" /><br>
                <a href="reg.php"><input type="button" id="regis_but" value="Register" /></a>
                
            </form>
         </div>
        <?php
if(isset($_POST['login']))
{
$username=$_POST['username'];
$password=$_POST['password'];
$query="select * from user WHERE username='$username' AND password='$password'";
$query_run=mysqli_query($con,$query);
if(mysqli_num_rows($query_run)>0)
{
$_SESSION['username']=$username;
header('location:home.php');
}
else
{
    echo'<script type="text/javascript"> alert("invalid credentials")</script>';
    
}

}
?>

    </body>
</head>
</html>