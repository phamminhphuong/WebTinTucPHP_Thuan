<?php 
require('connect.php');
$id = $_GET['id'];
  $result = mysqli_query($conn, "SELECT * FROM book WHERE b_id ='$id'");
  if (!$result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}
  while($row = mysqli_fetch_array($result)){
    $b_id = $row['b_id'];
    $b_name = $row['b_name'];
    $description = $row['b_des'];
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
        <h1 class="section-header">Hanu <p></p> <span class="content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s"> Edit book</span></h1>
      </div>
      <div class="contact-section">
      <div class="container">
        <form role="form" method="post" action="">
          <div class="col-md-6 form-line">
              <div class="form-group">
                <label for="id">Book ID</label>
                <input type="text" class="form-control" id="id" placeholder=" Enter ID" name="b_id" value="<?php echo $b_id; ?>">
              </div>
              <div class="form-group">
                <label for="name">Book Name</label>
                <input type="text" class="form-control" id="name" placeholder=" Enter Name" name="b_name" value="<?php echo $b_name; ?>">
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for ="description"> Book Description</label>
                <textarea  class="form-control" id="description" placeholder="Enter Product description" name="b_des"><?php echo $description; ?></textarea>
              </div>
              <div>
                <button type="submit" class="btn btn-default submit"><i class="fa fa-paper-plane" aria-hidden="true"></i>  Edit Book</button>
              </div>
              
          </div>
        </form>
      </div>
    </section>
  </body>

</html>

<?php
  if(isset($_POST['b_id'])&&
     isset($_POST['b_name']) &&
     isset($_POST['b_des'])){
    $b_id = $_POST['b_id'];
    $b_name = $_POST['b_name'];
    $description = $_POST['b_des'];

    $sql = "UPDATE `book` SET b_des = '$description',b_id='$b_id',b_name='$b_name' WHERE b_id = '$id'"; 
      $result = mysqli_query($conn, $sql);
      if(!$result){
        printf("Error: %s\n", mysqli_error($conn));exit();
        echo"<script>alert('Insert query cannot be executed !!!');document.location='addBook.php';</script>";
      }
      echo"<script>alert('Product updated successfully!');document.location='list.php';</script>";
    } 
include 'templates/footer.php';
?>