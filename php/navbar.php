<?php include('connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/home.css" > 
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Connect</title>
</head>
<body>
 
            <nav class="navbar navbar-expand-lg" style="background-color:rgb(95, 218, 152);">
                <a class="navbar-brand" href="feed.php" style="color: white;">
                    <strong><h2>Connect</h2></strong> 
                  </a>
            
              <div style="z-index: 100;position:relative;left:890px;">
                   <?php
                   session_start();
                   if (isset($_SESSION['email'])) {
                    echo '<a href="feed.php" class="btn btn-warning" id="b12" style="background-color: rgb(250, 139, 96); border:solid rgb(250, 139, 96) 2px;margin-left:4px; color:white;">Hi, '.$_SESSION['uname'].'</a> 
                     <a href="logout.php" class="btn btn-danger" id="b13" style="background-color: rgb(250, 139, 96);border:solid rgb(250, 139, 96) 2px;">Logout</a>';
                    } else {
                    echo '<a href="login.php" class="btn btn-success id="b14"" data-target="modal1" style="background-color: rgb(250, 139, 96); border:solid rgb(250, 139, 96) 2px;">Login</a>&nbsp
                    <a href="register.php" class="btn btn-success" id="b15" data-target="modal2" style="background-color: rgb(250, 139, 96); border:solid rgb(250, 139, 96) 2px;">Register</a>';
                    }
                    ?>
                    
                </div>   





<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>