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
          <label for id="username">User</label>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input id="fb_name" type="text" class="form-control" name="fb_name" placeholder="Username" style="font-size: 15px">
          </div>
          <br>

          <label for id="email">Email</label>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input id="fb_email" type="text" class="form-control" name="fb_email" placeholder="Email" style="font-size: 15px">
          </div>
          <br>

          <label for id="phone">Phone number</label>
          <div class="input-group">
            <span class="input-group-addon">
              <i class="glyphicon glyphicon-lock"></i></span>
              <input id="fb_phone" type="text" class="form-control" name="fb_phone" placeholder="Phone number" style="font-size: 15px">  
            </div> 
          </div>
          <br>

          <label for id="comment">Comment</label>
          <div class="input-group">
            <span class="input-group-addon">
              <i class="glyphicon glyphicon-lock"></i></span>
              <input id="fb_comment" type="text" class="form-control" name="fb_comment" placeholder="Comment" style="font-size: 15px">  
            </div> 
          </div>

          <br>
          <div class="col-sm-6" style="text-align: right;">
            <a href="index.php">&nbsp;Home</a>
          </div>
          <br><br>
          <div style="text-align: center;">
            <button type="submit" name="submit" class="btn btn-success" style="background-color:#B0006D; color:white;"><i class="fa fa-bullhorn">&nbsp;Submit</i></button>
          </div>
        </form>
      </div>

    </div>
  </div>
</body>
</html>

<?php

         include('connect.php');
         
         if(isset($_POST['submit'])){
             $email = $_POST["fb_email"] ;
             $phone = $_POST["fb_phone"];
             $name = $_POST["fb_name"];
             $comment = $_POST["fb_comment"];
          
            if($name == "" || $email == "" || $phone == "" || $comment == "") {
                echo "<script>alert('You must fill in fully information');document.location='feedback.php'</script>";
              }
            else{
                $sql = "SELECT * FROM feedback WHERE fb_email = '$email' and `fb_name`='$name'";
                $result = mysqli_query($conn,$sql);
              }
        if (mysqli_num_rows($result) > 0){
          echo "<script>document.location='index.php';alert('Username was available');</script>";
        }
        else{
                    $sql = "INSERT INTO feedback (fb_email, fb_comment, fb_name, fb_phone) VALUES ('$email', '$name', '$comment','$phone')";
                    mysqli_query($conn, $sql);
                    echo "<script>document.location='index.php';alert('Thank for your feedback!');</script>";
                }
            }
            
?>
  