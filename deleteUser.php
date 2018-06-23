<?php

require('connect.php');
$id = $_GET['id'];

$sql = "DELETE FROM `user` WHERE id =$id";
$result = mysqli_query($conn, $sql);
if(!$result){
          echo "Delete query cannot be executed !!!";
  }else{
  	echo"<script>alert('Delete User successfully');document.location='usercontrol.php';</script>";
}
?>

