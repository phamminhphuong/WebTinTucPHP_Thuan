<body>
  <?php
  include 'templates/header_navi.php';
  include 'connect.php';
  include 'sql.php';
  ?>
<div class="container">
  <ul class="nav nav-tabs col-sm-5" style="margin-left: 100px;font-size: 20px">
      <li><b>Tên sách: </b><?php echo $detail['b_name']; ?></li>
    </ul>
  </div>
    
  <div class="container" style="margin-top: 30px">
   
    <div class="col-sm-1">
    
  </div>
  <div class="col-sm-1 ">
    <img href="#" src="images/<?php echo $detail['b_img']; ?>" height="500px" width="500px" class="main">
  </div>
  <div class="col-sm-4" style="margin-left: 500px;font-family: Delius;font-size: 20px;color: #B0006D">
    
  </div>
</div>


<br>
<div class="container">
      <p style="margin-left:110px;font-size:17px"><b>Nội dung: </b><?php echo $detail['b_des']; ?></p>
  </div>
    

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