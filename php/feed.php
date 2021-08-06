
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/home.css">
    <title>timeline</title>
</head>
<body style="background-color: rgb(63, 40, 96);">
<header>
      <?php include('navbar.php'); ?>
  </header>
  <div calss="b"> 
  <button type="button" class="btn btn-primary btn-lg" id="Button" onclick="window.location.href='newpost.php'" >Create a new post</button>      
        <?php
        
        include('connection.php'); 
        $sql="SELECT * from posts";
        $result = mysqli_query($con, $sql);
        
if ($result = $con->query($sql)) 
{
    while ($row = $result->fetch_assoc()) {
        $aa=$row["user_id"];
        $sql4="SELECT * from users where user_id ='$aa'";
        if ($result1 = $con->query($sql4)){
            $row1 = $result1->fetch_assoc();
        ?>
        
        <div class="chat" style="background-color: rgb(228, 241, 245);margin:10px auto;padding:10px; border-radius:10px; text-align: center;width:500px; ">
        <?php
        session_start();
    if($_SESSION['user_id']==$aa){ 
    ?> 
    <button type="button" class="btn-close" style="margin-right:10px;" aria-label="Close"></button>
    }
        <div class="usern" style="text-align:left;font-size: 130%; color:rgb(63, 40, 96)">
            <?php echo $row1["name"]?>
    </div> 
    <br> 
    <div class="p" style="text-align: justify;font-size:110%;">
        <?php echo $row["post_status"]; ?>
        </div>
        <div class="time" style="text-align:right; font-size: 80%;">
            <?php echo $row["post_time"]."<br>".$row["post_date"];?>
    </div> 
        </div>
        <?php
    }
}
}
    $result->free();
} 
?>



</div>
</body>
