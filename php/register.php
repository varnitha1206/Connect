<html>  
<head>  
    <title>Register</title> 
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  
    <link rel = "stylesheet" type = "text/css" href = "../css/home.css"> 
    <script>
 
 function validation()  
        {  
            var id=document.f2.id.value;  
            var ps=document.f2.pd.value; 
            var psc=document.f2.pdc.value; 
            var email=document.f2.em.value;
            var index;
            index=email.search(/@/);
            if(id.length=="" && ps.length=="") {  
                alert("User Name and Password fields are empty");  
                return false;  
            }  
            else if(id.length=="")
            {  
                alert("User Name is empty");  
                return false;  
            }   
            else  if (ps.length=="") 
            {  
                alert("Password field is empty");  
                return false;  
            }  
            else if (ps.length!=psc.length)
            {
            
                    alert("The passwords do not match");
                    return false;
                
            }
            else{
                if(index==-1||index==0)
                {
                    alert("Invalid email ID entered");
                    return false;
                }
            }                            
        }      
</script>
</head>


<body style=" background-color:rgb(63, 40, 96);">
<header>
      <?php include('navbar.php'); ?>
</header> 
    <div id = "frm" style="width:365px;">   
        <img src="https://www.pngkit.com/png/detail/128-1280585_user-icon-fa-fa-user-circle.png" width="100px" height="100px"></center>
        <form name="f2" action = "insert.php" onsubmit = "return validation()" method = "POST"> 
        <br>
        Full name: <input type="text" name="fn" required><br><br>
        Email:&emsp;&ensp;<input type="text" name="em" required><br>
        <br>
        Gender:  <select name="gender" id="gender" required >
                                    <option value ="Female">Female</option>
                                    <option value ="Male">Male</option>
                                    <option value="Others">Others</option> 
                                </select><br><br>
        Password: <input type="password" name="pd" required><br>
        <br>
        Retype Password: <input type="password" name="pdc" required><br><br>
        <center><input type="submit" id="btn1" value="create" required></center>
        </form>    
    </div>
</body>
</html>