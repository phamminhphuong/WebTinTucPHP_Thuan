<!DOCTYPE html>
<?php session_start(); ?>
<html>
<head>
  <title>Hanu</title>
  <!--font Tiếng việt-->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--link icon của css và google-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <!--link font chữ của google-->
  <link href='https://fonts.googleapis.com/css?family=Allura' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Annie Use Your Telescope' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Coming Soon' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Delius' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Architects Daughter' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Cherry Swash' rel='stylesheet'>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <body>

    <!--FORM LOG IN-->

    <div class="container">
      <div class="jumbotron" style="background-color: #f4a892;color: white;margin-top: 20px">
        <span style="float: left">
          <h2 style="font-family:Allura"><i>Ha Noi University Library...</i></h2>
        </span>
        <span style="float: right;margin-top: -48px;margin-right: -50px">
          
        </span>
        <br><br><br>
      </div>

      
        <div class="col-sm-6">
         <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top: 10px;float:left;width: 500px;height:170px">

          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="images/slideshow7.png" style="width: 500px;height:170px">
            </div>

            <div class="item">
              <img src="images/slideshow8.png" style="width: 500px;height:170px">
            </div>

            <div class="item">
              <img src="images/slideshow9.png" style="width: 500px;height:170px">
            </div>

          </div>

          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>

          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

<form action="" method="post">
      <div class="col-sm-6" style="margin-top: 10px">
        <div class="form">
          <label for id="email">Email</label>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input id="email" type="text" class="form-control" name="email" placeholder="Email" style="font-size: 15px">
          </div>
          <br>

          <label for id="pass">Password</label>
          <div class="input-group">
            <span class="input-group-addon">
              <i class="glyphicon glyphicon-lock"></i></span>
              <input id="user_password" type="password" class="form-control" name="user_password" placeholder="Password" style="font-size: 15px">  
            </div> 
          </div>

          <br>
          <div class="col-sm-6">
            <input type="checkbox" name="">&nbsp;Remember me</a>
          </div>
          <div class="col-sm-6" style="text-align: right;">
            <a href="">Forgot your password?</a>
          </div>
          <br><br>
          <div style="text-align: center;">
            <button type="submit" name="dangnhap" class="btn btn-success" style="background-color:#B0006D; color:white;"><i class="fa fa-bullhorn">&nbsp;Log in</i></button>
          </div>
        </form>
      </div>

    </div>
  </div>
</body>
</html>

<?php
  include 'connect.php';
  if (isset($_POST['dangnhap']))
  {
  $email = $_POST['email'];
  $pass = md5($_POST['user_password']);  
  $sql = "SELECT * FROM user WHERE `user_email`='$email' and `user_password`='$pass'";
  $result = mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
  if ($row['role']==0) {
    echo "<script>alert('Wrong email or pasword');document.location='login.php'</script>";
  }
  elseif ($row['role']== '1') {
    $_SESSION['login_user'] = $row['user_email'];
    $_SESSION['user_role'] = $row['role'];
    echo"<script>document.location='index.php';alert('Log in successfully');</script>";
    // header("Location:list.php");
    // echo $SESSION['login_user']."|".$SESSION['user_role'];
  }
  else{
     $_SESSION['login_user'] = $row['user_email'];
    $_SESSION['user_role'] = $row['role'];
      echo"<script>document.location='index.php';alert('Log in successfully');</script>";
  }
}
?>