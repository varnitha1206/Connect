<?php
include('connection.php');
$pid=$_GET["rn"];
$sql="DELETE From posts WHERE post_id='$pid'";
$result=mysqli_query($con, $sql);
header("location:feed.php");
?>