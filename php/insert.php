<?php
session_start();
include('connection.php');
$name=$_POST["fn"];
$email=$_POST["em"];
$sql2="SELECT * from users where email='$email'";
$result=mysqli_query($con, $sql2);
$rows=mysqli_num_rows($result);
if($rows == 1){
    header("location:login.php");
}
else{
$passwd=$_POST["pd"];
$gen=$_POST["gender"];
$sql="INSERT INTO users VALUES(null,'$name','$email','$passwd','$gen')";
$result = mysqli_query($con, $sql); 
$sql3="SELECT * from users where email='$email'";

if ($result = $con->query($sql3)){
    $row = $result->fetch_assoc();
    $_SESSION['user_id'] = (int)$row['user_id'];
    $_SESSION['uname']=$row['name'];
    $_SESSION['email']=$row['email'];
}
header("location:feed.php");

}       
?>