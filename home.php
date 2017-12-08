<?php
session_start();


?>
<!DOCTYPE HTML>
<html>

<head>
    <title>Home</title>
    <link rel="stylesheet" href="css/style.css">

    <body style="background-color:rgb(162, 224, 224)">

        <div id="main-wrapper">
            <center>
                <h2>Home page</h2>
                <h3>Wellcome <?php echo $_SESSION['username']?></h3>
                <img src="img/login.jpeg" alt="" srcset="" class="img"></img>
            </center>

            <form class="myform" action="index.php" method="post">
                
                
                <input name="logout"type="submit" id="logout_but" value="Log out" />
                
            </form>
            <?php 
            if(isset($_POST['logout']))
            {
            session_destroy();
            header('location:index.php');
            }
            ?>
        </div>
    </body>




</head>



</html>