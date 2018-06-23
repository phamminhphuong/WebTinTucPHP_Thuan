<body>
  <?php
  include 'templates/header_navi.php';
  include 'templates/verticalmenu.php';
  include 'sql.php';
  include 'connect.php'
  ?>

  <div class="container" style="font-family:Delius;font-size: 130%;margin-top: 10px">  
    <span style="margin-left: 100px">
     <button id="n" class="btn btn-default" style="font-size: 22px"><i class="fa fa-th"></i></button>
     <button id="d" class="btn btn-default" style="font-size: 22px"><i class="fa fa-list-ul"></i></button>
   </span>
<br><br>
  <div class="col-sm-10" style="margin-left: 50px;text-align:center;"> 
  <div class="row">
          <?php foreach ($ForeignLanguage as $field => $value) { ?>
  
    <div class="ngang">
    <div class="col-sm-3">
      <div class="panel panel-danger">
          <div class="panel-heading">
            <a href="detail.php?id=<?php echo $value['b_id']?>"><b><?php echo $value['b_name']; ?></b>
            </a></div>
          <div class="panel-body" style="background-color:#F08080">
            <a href="detail.php?id=<?php echo $value['pro_id']?>">
            <img src="images/<?php echo $value['b_img']; ?>" class="img-circle" style="width:100%"></a></div>
          
            
          </div>
      </div>
    </div>
    </div>
    <!-- Hien thi hang doc -->
    <div class="doc" style="display: none;" >
        <div class="col-sm-10" style="margin-left: 150px">
      <div class="col-sm-4">
        <img src="images/<?php echo $value['b_img']; ?>" class="img-circle" style="width:100%"></a>
      </div>

      <div class="col-sm-5" style="text-align: left;margin-left: 50px">
        <li><b> Name: <?php echo $value['b_name']; ?></b><br><br></li>
        <li><?php echo $value['b_des']; ?><br><br></li>

      </div>
      <br><br>
      
    </div>
    </div>
    <?php } ?>
       </div></div></div>   
  </div>
  </div>
</button>
</div>
<script>
  $(function() {
    // Khi click vao button co id la n
    $("#n").click(function() {
      //Hiện div có id la ngang
      $("div.ngang").show();
      //Ẩn div có id la doc
      $("div.doc").hide();
    });
    //Tương tự với dọc 
    $("#d").click(function() {
      $("div.ngang").hide();
      $("div.doc").show();
    });
  });
</script>
</body>
<?php
include 'templates/footer.php';
?>
</body>
</html>