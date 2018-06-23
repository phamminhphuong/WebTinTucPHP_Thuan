<?php 
session_start();
require('connect.php');
$id = $_GET['id'];
  $result = mysqli_query($conn, "SELECT * FROM `user` WHERE id=$id");
  if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}
var_dump($result);
  while($row = mysqli_fetch_array($result)){
    $username = $row['username'];
    $user_email = $row['user_email'];
    $user_phone = $row['user_phone'];
    $user_address = $row['user_address'];
  }
 ?>
 <html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
      /*Contact sectiom*/
      .content-header{
        font-family: 'Oleo Script', cursive;
        color:#fcc500;
        font-size: 45px;
      }

      .section-content{
        text-align: center; 

      }
      #contact{
          
          font-family: 'Teko', sans-serif;
        padding-top: 60px;
        width: 100%;
        width: 100vw;
        height: 550px;
        background: #3a6186; /* fallback for old browsers */
        background: -webkit-linear-gradient(to left, #3a6186 , #89253e); /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to left, #3a6186 , #89253e); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
          color : #fff;    
      }
      .contact-section{
        padding-top: 40px;
      }
      .contact-section .col-md-6{
        width: 50%;
      }

      .form-line{
        border-right: 1px solid #B29999;
      }

      .form-group{
        margin-top: 10px;
      }
      label{
        font-size: 1.3em;
        line-height: 1em;
        font-weight: normal;
      }
      .form-control{
        font-size: 1.3em;
        color: #080808;
      }
      textarea.form-control {
          height: 135px;
         /* margin-top: px;*/
      }

      .submit{
        font-size: 1.1em;
        float: right;
        width: 150px;
        background-color: transparent;
        color: #fff;

      }

    </style>
  </head>

  <body>
    <link href="https://fonts.googleapis.com/css?family=Oleo+Script:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Teko:400,700" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  
<section id="contact">
      <div class="section-content">
        <h1 class="section-header">Hanu <p></p> <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> Edit User</span></h1>
      </div>
      <div class="contact-section">
      <div class="container">
        <form role="form" method="post" action="">
          <div class="col-md-6 form-line">
              <div class="form-group">
                <label for="id">User Name</label>
                <input type="text" class="form-control" id="name" placeholder=" Enter Name" name="username" value="<?php echo $username; ?>">
              </div>
              <div class="form-group">
                <label for="name">User Email</label>
                <input type="text" class="form-control" id="email" placeholder=" Enter Email" name="user_email" value="<?php echo $user_email; ?>">
              </div>  
              <div class="form-group">
                <label for="price">User Phone</label>
                <input type="text" class="form-control" id="phone" placeholder=" Enter Phone" name="user_phone" value="<?php echo $user_phone; ?>">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for ="description"> User Address</label>
                <textarea  class="form-control" id="address" placeholder="Enter Address" name="user_address"><?php echo $user_address; ?></textarea>
              </div>
              <div>
                <button type="submit" class="btn btn-default submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>  Edit User</button>
              </div>
              
          </div>
        </form>
      </div>
    </section>
  </body>

</html>

<?php
  if(isset($_POST['username'])    &&
     isset($_POST['user_email']) &&
     isset($_POST['user_phone'])   && 
     isset($_POST['user_address'])){

    $username = $_POST['username'];
    $user_email = $_POST['user_email'];
    $user_phone = $_POST['user_phone'];
    $user_address = $_POST['user_address'];

    $sql = "UPDATE `user` SET `username`='$username', `user_email`='$user_email', `user_phone`='$user_phone', `user_address` ='$user_address' WHERE id=$id";
      $result = mysqli_query($conn, $sql);

      if(!$result){
        printf("Error: %s\n", mysqli_error($conn));exit();
        echo"<script>alert('Insert query cannot be executed !!!');document.location='editCus.php';</script>";
      }
      echo"<script>alert('User updated successfully!');document.location='usercontrol.php';</script>";
    } 
 ?>
 <?php 
include 'templates/footer.php';
?>
  }
 ?>
