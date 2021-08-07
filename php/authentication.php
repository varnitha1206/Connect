<?php
session_start();
include('connection.php');
$email=$_POST["user"];
$passw=$_POST["pass"];
$sql="SELECT * from users where email='$email' and passwd='$passw'";
$query=mysqli_query($con,$sql);
$rows=mysqli_num_rows($query);
if($rows == 1){
    $sql3="SELECT * from users where email='$email'";

if ($result = $con->query($sql3)){
    $row = $result->fetch_assoc();
    $_SESSION['user_id'] = (int)$row['user_id'];
    $_SESSION['uname']=$row['name'];
    $_SESSION['email']=$row['email'];
}
    header("location:feed.php");
}
else{
    
    header("location:login.php");
    
}
?>     

