<body>
  <?php
  include 'templates/header_navi.php';
  include 'connect.php';
  include 'sql.php';
  ?>

  <div class="container" style="margin-top: 30px">
    <?php foreach ($detail as $key => $value) { ?>
    <div class="col-sm-1">
    <img href="#" src="<?php echo $value['b_img1']; ?>" height="80px" width="80px" class="side"><br><br>
    <img href="#" src="<?php echo $value['b_img2']; ?>" height="80px" width="80px" class="side"><br><br>
    <img href="#" src="<?php echo $value['b_img3']; ?>" height="80px" width="80px" class="side"><br><br>
    <img href="#" src="<?php echo $value['b_img4']; ?>" height="80px" width="80px" class="side"><br><br>
  </div>
  <div class="col-sm-1 ">
    <img href="#" src="<?php echo $value['b_img']; ?>" height="500px" width="500px" class="main">
  </div>
  <div class="col-sm-4" style="margin-left: 500px;font-family: Delius;font-size: 20px;color: #B0006D">
    <div class="panel panel-danger">
      <div class="panel-heading" style="text-align: center;"><b> <?php echo $value['b_name']; ?></b></div>
      <div class="panel-body">
          <li> Book ID: <?php echo $value['b_id']; ?></li><br>
          <li> Book Description:<br> <p style="margin-left: 30px"><?php echo $value['b_des']; ?>
          
      </div>
    </div>
  </div>
</div>


<br><br><br><br>
<div class="container">
  <ul class="nav nav-tabs col-sm-5" style="margin-left: 100px;font-size: 20px">
      <li><a href="contact.php">About Us</a></li>
    </ul>
  </div>
    
  <?php } ?>
</div>
  </div>
</button>

<br><br>
   
    <?php
  include 'templates/footer.php';
  ?>
  <script>
    $(function() {
      $(".side").on('click',function() {
      var src = $(this).attr("src");
      $(".main").attr("src",src);
    });
    });
  </script>
</body>
</html>