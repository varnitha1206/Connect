<html>
    <head>
        <title>Login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel = "stylesheet" type = "text/css" href = "../css/home.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
    </head>
    <body style=" background-color:rgb(63, 40, 96);"> 
    <header>
    <nav class="navbar navbar-expand-lg" style="background-color:rgb(95, 218, 152);">
                <a class="navbar-brand" href="../index.php" style="color: white;">
                    <strong><h2>Connect</h2></strong> 
                  </a>
            
              <div style="position:absolute;right:30px;">
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
        </header> 
    <div id = "frm" >  
        <img src="https://www.pngkit.com/png/detail/128-1280585_user-icon-fa-fa-user-circle.png" width="100px" height="100px"></center><br><br>
        <form name="f1" action = "authentication.php" onsubmit = "return validation()" method = "POST"> 
        <center>
            <p>  
                <label>     Email: </label> <br> 
                <input type = "text" id ="user" name  = "user" />  
            </p>  
            <p>  
                <label>     Password: </label><br>  
                <input type = "password" id ="pass" name  = "pass" />  
            </p>
        <center>  
            <p>     
                <center><input type =  "submit" id = "btn1" value = "Login" /> </center>
                <br> 
               <center> Don't have an account?<a href="register.php"><br><center>Create account<center></a></center>
            </p>  
        </form>  
    </div>  
    
</body>
<script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>
</html>