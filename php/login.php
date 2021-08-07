<html>
    <head>
        <title>Login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel = "stylesheet" type = "text/css" href = "../css/home.css"> 
    </head>
    <body style=" background-color:rgb(63, 40, 96);"> 
    <header>
      <?php include('navbar.php'); ?>
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