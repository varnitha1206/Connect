<?php 
session_start();     
    include('connection.php'); 
    //  $post_id=null;
    //  $user_id=1;
    $post_status = $_POST["status"];  
    date_default_timezone_set("Asia/Kolkata");
    $post_date = date("Y-m-d");
    $post_time=date("G:i:s");  
    $ui=$_SESSION['user_id'];
        $sql = "INSERT into posts values(null,'$ui','$post_status','$post_date','$post_time')";  
        $result = mysqli_query($con, $sql);  
         header("location:feed.php");
            
?>