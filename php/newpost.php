<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/home.css">
    <title>timeline</title>
</head>
<body style="background-color: rgb(63, 40, 96);text-align: center;">
<header>
      <?php include('navbar.php'); ?>
  </header>
<section class="Part2">
<div class="container">
  <div class="row">
    <div class="col-lg-12 col-sm-12"><center>
    <form class="form-group mt-4" action="postdet.php" onsubmit = "true" method = "POST" } > 

        
<textarea class="form-control" name="status" rows="3" id="status" style="margin:20% 50%; height:250px; "></textarea><br>

<input type="submit" value="Post" id='postStatus' style="position:absolute; margin:-20% 45%;"> 

</form></center>
    </div>
  </div>
</div>
<!-- <div class="btn1" style="margin-left:70%;">
        <form class="form-group mt-4" action="try3.php" onsubmit = "true" method = "POST"} > 

        
            <textarea class="form-control" name="status" rows="3" id="status" style="margin:auto;"></textarea><br>
            
            <input type="submit" value="Post" id='postStatus'> 

        </form>
</div> -->
        
    </section>
    </body>
    </html>