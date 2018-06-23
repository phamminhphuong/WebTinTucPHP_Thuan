<?php

require('connect.php');
if(isset($_GET['id'])){
	$id = $_GET['id'];

$sql = "DELETE FROM `book` WHERE b_id='$id';";
$result = mysqli_query($conn, $sql);
if(!$result){
    var_dump($sql);
      echo "Delete query cannot be executed !!!";
  }else{
  	echo"<script>alert('Delete book successfully');document.location='list.php';</script>";
}
}
?>

