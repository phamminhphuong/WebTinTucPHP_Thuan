 <!DOCTYPE html>
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

    <!--FORM SIGN UP-->
    <form action="register.php" method="POST">
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
          <label for id="username">User</label>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input id="username" type="text" class="form-control" name="username" placeholder="Username" style="font-size: 15px">
          </div>
          <br>

          <label for id="email">Email</label>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input id="user_email" type="text" class="form-control" name="user_email" placeholder="Email" style="font-size: 15px">
          </div>
          <br>

          
          <label for id="phone">Phone</label>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input id="user_phone" type="text" class="form-control" name="user_phone" placeholder="Phone" style="font-size: 15px">
          </div>
          <br

          <label for id="address">Address</label>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input id="user_address" type="text" class="form-control" name="user_address" placeholder="Address" style="font-size: 15px">
          </div>
          <br>

          <label for id="pass">Password</label>
          <div class="input-group">
            <span class="input-group-addon">
              <i class="glyphicon glyphicon-lock"></i></span>
              <input id="user_password" type="password" class="form-control" name="user_password" placeholder="Password" style="font-size: 15px">  
            </div> 

            <div style="text-align: center;">
            <button type="submit" name="dangki" class="btn btn-success" style="background-color:#B0006D; color:white;"><i class="fa fa-bullhorn">&nbsp;Sign Up</i></button>
          </div>
        </div>
    </div>
</body>
</html>

<?php
         require('connect.php');
         if(isset($_POST['dangki'])){
             $email = $_POST["user_email"] ;
             $pass = md5($_POST["user_password"]);
             $username = $_POST["username"];
             $address = $_POST["user_address"];
             $phone = $_POST["user_phone"];
            if($username == "" || $email == "" || $address == "" || $phone == "" || $pass == ""){
                echo "<script>alert('You must fill in fully information');document.location='register.php'</script>";
            }
            else{
                $sql = "SELECT * FROM user WHERE user_email = '$email' and `user_password`='$pass'";
                $result = mysqli_query($conn,$sql);
				if (mysqli_num_rows($result) > 0){
          echo "<script>document.location='index.php';alert('Username was available');</script>";
        }
        else{
                    $sql = "INSERT INTO user(user_email, user_password, username, user_address, user_phone) VALUES ('$email', '$pass', '$username', '$address','$phone')";
                    mysqli_query($conn, $sql);
                    echo "<script>document.location='index.php';alert('Sign Up successfully');</script>";
                }
            }
        }
            
?>

