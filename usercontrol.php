<?php 
      session_start();
      require('sql.php');
   //    if(!isset($_SESSION['login_user'])){
   //      echo "no session!!!";
   // }else{
   //  echo $_SESSION['login_user']."|".$_SESSION['user_role'];
   // }
      if (isset($_SESSION['user_role'])) {
        if ($_SESSION['user_role'] != '1') {
          echo "<script>alert('This is admin page!!!');document.location='index.php';</script>";
        }
      }else{
        echo"<script>document.location='list.php';</script>";
      }
?>
<html>
  <head>
    <!-- scripts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<!--link font chữ của google-->
      <link href='https://fonts.googleapis.com/css?family=Allura' rel='stylesheet'>
      <link href='https://fonts.googleapis.com/css?family=Annie Use Your Telescope' rel='stylesheet'>
      <link href='https://fonts.googleapis.com/css?family=Coming Soon' rel='stylesheet'>
      <link href='https://fonts.googleapis.com/css?family=Delius' rel='stylesheet'>
      <link href='https://fonts.googleapis.com/css?family=Architects Daughter' rel='stylesheet'>
      <link href='https://fonts.googleapis.com/css?family=Cherry Swash' rel='stylesheet'>


      
    <style type="text/css">
      .bg {
        height: 20%; 
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
      }
      /*table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
      }
    td, th {
      border: 1px solid #CCC;
      text-align: left;
      padding: 8px;
      }
    th {
      text-align: center;
      }
    tr:nth-child(even) {
      background-color: #dddddd;
      }*/
    .content-header{
        font-family: 'Oleo Script', cursive;
        color:#fcc500;
        font-size: 45px;
      }
      .content-header{
        font-family: 'Oleo Script', cursive;
        color:#fcc500;
        font-size: 45px;
      }

      .section-content{
        text-align: center; 

      }

      .jum-b{
          background-color: #F08080;
          font-family: Delius;
      }
      .jumbotron h1 {
          color: white;
          text-shadow: 1px 1px #000, 2px 2px #000;
      }
      .jumbotron p, small {
          color: white;
      }

      em {
          color: #000000;
          text-shadow: 1px 1px #FFF, 2px 2px #FFF;
      }
      .topnav {
    overflow: hidden;
    background-color: #f4a892;
    vertical-align: 14px; 
    margin-top:15px;
    margin-left: 70px;
    margin-right: 70px;
  }
      .topnav a {
    float: left;
    color: #f2f2f2;
    text-align: center;
    padding: 16px 14px;
    text-decoration: none;
  }

  .topnav a:hover {
    background-color:white;
    color: black;
    text-decoration: none;
  }

  .topnav a.active {
    background-color: #f4a892;
    color: white;
  }
    </style>
  </head>

  <body>

    <!-- <section class="bg" class="jumbotron jumbotron-fluid " style="border-bottom: 1px solid #CCC;">
    <div class="container">
      <h1 class="display-4"><strong>Germe Store Management</strong></h1>
      <p class="lead socicon soc-36">Welcome Administrator <b><?= $_SESSION['login_user']?></b></p>
    </div>
    </section> -->
    <div class="container">
    <div class="jumbotron jum-b" style="margin-top: 20px">
    
        <h1>Ha Noi University Library Management</h1>
        <h2><em> Welcome Administrator </em></h2>
    </div>
    <div class="topnav" style="font-size:25px;font-family:Annie Use Your Telescope;text-decoration: none">
    <a class="active" href="index.php"><i class="fa fa-home"></i></a>
    <a href="list.php">Book Control</a>
    <a href="usercontrol.php">User Control</a>
  </div>

    </br>
    <div class = "user_list">
    <h1 align="center" class=" content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s">User</h1>
    <table class="table table-striped">
      <thead>
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Address</th>
      <th colspan="2"></th>
    </tr>
    </thead>

    <?php foreach ($user as $value) { ?>
    
     <tbody> 
     <tr>
      <td><?= $value['username']?></td>
      <td><?= $value['user_email']?></td>
      <td><?= $value['user_phone']?></td>
      <td><?= $value['user_address']?></td>
      <td style="text-align: center;"><a href="deleteUser.php?id=<?php echo $value['id']; ?>" id="delete" class="btn btn-danger" onClick="return confirm('Do your want to delete this user?')"><i class="fa fa-close"></i>&nbsp;Delete</a></td>
      <td style="text-align: center;"><a href="editUser.php?id=<?php echo $value['id']; ?>" id="edit" class="btn btn-primary"><i class="fa fa-edit"></i>&nbsp;Edit</a></td>
    </tr>
    <?php
      }
    ?>

  </tbody>
  </table>
  </div> 