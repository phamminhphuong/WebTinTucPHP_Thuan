<!DOCTYPE html>
<?php session_start() ?>
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
  <style>
    body {
      margin: 0px;
    }

    .topnav {
      overflow: hidden;
      background-color: #f4a892;
      vertical-align: 14px;
      margin-top: 15px;
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
      background-color: white;
      color: black;
      text-decoration: none;
    }

    .topnav a.active {
      background-color: #f4a892;
      color: white;
    }

    .right {
      position: absolute;
      right: 70px;
    }

    .slogan {
      position: absolute;
      left: 215px;
      top: 37px;
    }

    .search {
      position: absolute;
      right: 75px;
      top: 37px;
      padding-left: 10px;
    }

    #searchId {
      width: 200px;
      padding-left: 10px;
      border: 1px solid grey;
    }

    #searchId {
      width: 200px;
      margin-top:15px;
      
    }
    input::placeholder {
      font-family: Delius;
      color: #f4a892;
      font-size: "30";
    }
    #btnSearch{
      width:50px;
      height:40px;
      
      display: inline;
      /* margin-top: -10px !important; */
      border-radius:  4px;
      background: white;
      border: 1px solid grey;
      margin-top: -20px;
      top:-8;
      position:absolute;

    }
    div.jum {
      font-family: Delius!important;
    }
  </style>
  <div style="padding-left: 70px;padding-top:10px;padding-bottom:0px;color:#B0006D; background-color:white;font-size:250%;font-family:Allura;">
    <img src="images/hanu.png" style="width:150px;height:150px">
    <div class="slogan">
      <b>
        <i>&nbsp&nbsp&nbsp&nbspHaNoi University Library...</b>
      </i>
    </div>
  </div>

  <div class="search" style="font-family: Delius">
    <form action="search.php" method="POST">
      <input id="searchId" type="text" placeholder="Search..." size="15" style="font-size:25px" name="key">&nbsp;
      <div  style="display:inline-block; position:relative">
        <button id="btnSearch" type="submit" name="search">
          <i class="fa fa-search"></i>
        </button>
      </div>
    </form>
  </div>
  </did>
  </div>


</head>

<body>

  <div class="topnav" style="font-size:25px;font-family:Annie Use Your Telescope;text-decoration: none">
    <a class="active" href="index.php">
      <i class="fa fa-home"></i>
    </a>
    <a href="Encyclopedias.php">Encyclopedias</a>
    <a href="ForeignLanguage.php">ForeignLanguage</a>
    <a href="Sciencefiction.php">Sciencefiction</a>
    <a href="Major.php">Major</a>
    <a href="contact.php">About us</a>
    <a href="feedback.php">Feedback</a>



    <div class="right" style="font-size:25px;font-family:Annie Use Your Telescope;">

      <script>
        $(document).ready(function () {
          $('[data-toggle="tooltip"]').tooltip();
        });
      </script>
      <?php if (isset($_SESSION['login_user'])) {
          if($_SESSION['user_role']=='1'){
      
          ?>
          <a href="login.php" class="dropdown-toggle" data-toggle="dropdown">
            <?php echo 'Hi, '.$_SESSION['login_user']."!"; ?>

            <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" style="font-size: 20px;font-family: Delius">
              <li>
                <a href="index.php">
                  <i class="fa fa-user-o"></i>&nbsp;My Account</a>
              </li>
              <li>
                <a href="list.php">
                  <i class="fa fa-wrench"></i>&nbsp;Admin Functions</a>
              </li>
              <li>
                <a href="logout.php">
                  <i class="fa fa-window-close-o"></i>&nbsp;Log out</a>
              </li>
            </ul>
          </a>
          <?php }else{ ?>
              <a href="login.php" class="dropdown-toggle" data-toggle="dropdown">
              <?php echo 'Hi, '.$_SESSION['login_user']."!"; ?>

              <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" style="font-size: 20px;font-family: Delius">
                <li>
                  <a href="index.php">
                    <i class="fa fa-user-o"></i>&nbsp;My Account</a>
                </li>
            
                <li>
                  <a href="logout.php">
                    <i class="fa fa-window-close-o"></i>&nbsp;Log out</a>
                </li>
              </ul>
            </a>
      <?php }}else{ ?>
      <a href="login.php">Log In</a>

      <a href="register.php">Sign Up</a>
      <?php } ?>
    </div>

  </div>


  <br>
  <div class="container">
    <div class="jumbotron" style="background-color: white; font-size: 20px;">
      <div class="col-sm-3 jum" style="font-family: Delius">
        <i class="fa fa-clock-o">&nbsp;Opening 7am - 6pm</i>
      </div>
      <div class="col-sm-3 jum" style="font-family: Delius">
        <i class="fa fa-phone">&nbsp;Hotline 0969725813</i>
      </div>
    </div>
  </div>
  </div>
</body>
</div>
</div>
</head>

</html>