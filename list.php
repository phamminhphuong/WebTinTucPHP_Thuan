<?php 
      session_start();
      require('sql.php');
   //    if(!isset($_SESSION['login_user'])){
   //      echo "no session!!!";
   // }else{
   //  echo $_SESSION['login_user']."|".$_SESSION['user_role'];
   // }
      if (isset($_SESSION['user_role'])) {
        if ($_SESSION['user_role'] != '2') {
          echo "<script>alert('This is admin page!!!');document.location='index.php';</script>";
        }
      }else{
        echo"<script>alert('This is admin page!!!');document.location='index.php';</script>";
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
    
        <h1>Hanu Library Management</h1>
        <h2><em> Welcome Administrator </em></h2>
    </div>
    <div class="topnav" style="font-size:25px;font-family:Annie Use Your Telescope;text-decoration: none">
    <a class="active" href="index.php"><i class="fa fa-home"></i></a>
    <a href="usercontrol.php">User Control</a>
    <a href="bookcontrol.php">Book Control</a>
  </div>

  </br>
    <div class = "Encyclopedias_list">
    <h1 align="center" class=" content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s">Encyclopedias</h1>
    <div class="col-6"><button type="button" class="btn btn-success btn-lg float-right" onclick="window.location.href='addBook.php?cate_id=P'"><i class="fa fa-check-square-o"></i>&nbsp;Add Book</button></div>
    </br>
    <table class="table table-striped">
      <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Description</th>
      <th colspan="2"></th>
    </tr>
    </thead>

    <?php foreach ($Encyclopedias as $field => $value) { ?>
     
     <tbody> 
     <tr>
      <td><?= $value['b_id']?></td>
      <td><?= $value['b_name'];?></td>
      <td><?= $value['b_des'];?></td>
      <td style="text-align: center;"><a href="delete.php?id=<?php echo $value['b_id']; ?>" id="delete" class="btn btn-danger" onClick="return confirm('Do your want to delete this book?')"><i class="fa fa-close"></i>&nbsp;Delete</a></td>
      <td style="text-align: center;"><a href="editUser.php?id=<?php echo $value['user_id']; ?>" id="edit" class="btn btn-primary"><i class="fa fa-edit"></i>&nbsp;Edit</a></td>
    </tr>
    <?php
      }
    ?>
  </tbody>
  </table>
  </div> <!-- end tshirts_list -->

</br>
    <div class = "Foreign Language_list">
    <h1 align="center" class=" content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s">Foreign Language</h1>
    <div class="col-6"><button type="button" class="btn btn-success btn-lg float-right" onclick="window.location.href='addBook.php?cate_id=A'"><i class="fa fa-check-square-o"></i>&nbsp;Add Book</button></div>
    </br>
    <table class="table table-striped">
      <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Description</th>
      <th colspan="2"></th>
    </tr>
  </thead>
  <tbody>

    <?php foreach ($ForeignLanguage as $field => $value) { ?>
      
     <tr>
      <td><?= $value['b_id']?></td>
      <td><?= $value['b_name'];?></td>
      <td><?= $value['b_des'];?></td>
      <td style="text-align: center;"><a href="delete.php?id=<?php echo $value['b_id']; ?>" id="delete" class="btn btn-danger" onClick="return confirm('Do your want to delete this book?')"><i class="fa fa-close"></i>&nbsp;Delete</a></td>
      <td style="text-align: center;"><a href="editBook.php?id=<?php echo $value['b_id']; ?>" id="edit" class="btn btn-primary"><i class="fa fa-edit"></i>&nbsp;Edit</a></td>
    </tr>
    <?php
      }
    ?>
  </tbody>
  </table>
  </div> <!-- end hoodies_list -->

  </br>
    <div class = "Specialist press_list">
    <h1 align="center" class=" content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s">Specialist press</h1>
    <div class="col-6"><button type="button" class="btn btn-success btn-lg float-right" onclick="window.location.href='addBook.php?cate_id=K'"><i class="fa fa-check-square-o"></i>&nbsp;Add Book</button></div>
    </br>
    <table class="table table-striped">
      <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Description</th>
      <th colspan="2"></th>
    </tr>
  </thead>
  <tbody>

    <?php foreach ($Specialistpress as $field => $value) { ?>
      
     <tr>
      <td><?= $value['b_id']?></td>
      <td><?= $value['b_name'];?></td>
      <td><?= $value['b_des'];?></td>
      <td style="text-align: center;"><a href="delete.php?id=<?php echo $value['b_id']; ?>" id="delete" class="btn btn-danger" onClick="return confirm('Do your want to delete this product?')"><i class="fa fa-close"></i>&nbsp;Delete</a></td>
      <td style="text-align: center;"><a href="editBook.php?id=<?php echo $value['b_id']; ?>" id="edit" class="btn btn-primary"><i class="fa fa-edit"></i>&nbsp;Edit</a></td>
    </tr>
    <?php
      }
    ?>
  </tbody>
  </table>
  </div> <!-- end coats_list -->

  </br>
    <div class = "Sciencefiction_list">
    <h1 align="center" class=" content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s">Sciencefiction</h1>
    <div class="col-6"><button type="button" class="btn btn-success btn-lg float-right" onclick="window.location.href='addBook.php?cate_id=V'"><i class="fa fa-check-square-o"></i>&nbsp;Add Book</button></div>
    </br>
    <table class="table table-striped">
      <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Description</th>
      <th colspan="2"></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Sciencefiction as $field => $value) { ?>
      
     <tr>
      <td><?= $value['b_id']?></td>
      <td><?= $value['b_name'];?></td>
      <td><?= $value['b_des'];?></td>
      <td style="text-align: center;"><a href="delete.php?id=<?php echo $value['b_id']; ?>" id="delete" class="btn btn-danger" onClick="return confirm('Do your want to delete this product?')"><i class="fa fa-close"></i>&nbsp;Delete</a></td>
      <td style="text-align: center;"><a href="editBook.php?id=<?php echo $value['b_id']; ?>" id="edit" class="btn btn-primary"><i class="fa fa-edit"></i>&nbsp;Edit</a></td>
    </tr>
    <?php
      }
    ?>
  </tbody>
  </table>
  </div> <!-- end dresses_list -->

  </br>
  <div class = "Major_list">
    <h1 align="center" class=" content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s">Major</h1>
    <div class="col-6"><button type="button" class="btn btn-success btn-lg float-right" onclick="window.location.href='addBook.php?cate_id=G'"><i class="fa fa-check-square-o"></i>&nbsp;Add Book</button></div>
    </br>
    <table class="table table-striped" >
      <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Description</th>
      <th colspan="2"></th>
    </tr>
  </thead>
  <tbody>

    <?php foreach ($Major as $field => $value) { ?>
      
     <tr>
      <td><?= $value['b_id']?></td>
      <td><?= $value['b_name'];?></td>
      <td><?= $value['b_des'];?></td>
      <td style="text-align: center;"><a href="delete.php?id=<?php echo $value['b_id']; ?>" id="delete" class="btn btn-danger" onClick="return confirm('Do your want to delete this book?')"><i class="fa fa-close"></i>&nbsp;Delete</a></td>
      <td style="text-align: center;"><a href="editBook.php?id=<?php echo $value['b_id']; ?>" id="edit" class="btn btn-primary"><i class="fa fa-edit"></i>&nbsp;Edit</a></td>
    </tr>
    <?php
      }
    ?>
  </tbody>
  </table>
  </div> <!-- end shoes_list -->
</div> <!-- end div container -->
  </body>
  <footer>
    <?php 
    include 'templates/footer.php'; ?>
  </footer>
</html>