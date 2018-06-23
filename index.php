<body>

<?php
include 'templates/header_navi.php';
include 'templates/verticalmenu.php';
include 'sql.php';
?>



  <!-- SLIDE SHOW -->
  <div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top: 10px;margin-right:-35px;float: right;width: 1020px;height:350px">

      <!-- Indicators -->
        <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

      <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                      <img src="images/slideshow7.png" style="width: 1020px;height:350px">
            </div>

            <div class="item">
                      <img src="images/slideshow8.png" style="width: 1020px;height:350px">
            </div>

            <div class="item">
                      <img src="images/slideshow9.png" style="width: 1020px;height:350px">
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

<!--BOOK-->

<!--FAVOURITE-->
  <div style="font-family:Cherry Swash;font-size:150%;color:#B0006D;padding-left:70px">
      <br><i class="material-icons" style="vertical-align:-2px;">pets</i>&nbsp;<b>Favourite</b>
      <hr width="300px" align="left" style="border-color: #B0006D;margin-top: 5px">
  </div>

  <div class="container" style="font-family:Delius;font-size: 130%;text-align:center;">
  <div class="row">
          <?php foreach ($res_best as $field => $value) {?>


    <div class="col-sm-3">
      <div class="panel panel-danger">
          <div class="panel-heading">
            <a href="detail.php?id=<?php echo $value['b_id'] ?>">
            <b><?php echo $value['b_name']; ?></b></a>
          </div>
          <div class="panel-body" style="background-color:#F08080">
            <a href="detail.php?id=<?php echo $value['b_id'] ?>">
            <img src="images/<?php echo $value['b_img']; ?>" class="img-circle" style="width:100%;height:300px"></a>
          </div>
      </div>
    </div>
    <?php }?>

  </div>
  </div>


<!--HOODIE-->
  <div style="font-family:Cherry Swash;;font-size:150%;color:#B0006D;padding-left:70px">
      <br><i class="material-icons" style="vertical-align:-2px;">pets</i>&nbsp;<b>ForeignLanguage - Favourite! </b>
      <hr width="300px" align="left" style="border-color: #B0006D;margin-top: 5px">
  </div>


  <div class="container" style="font-family:Delius;font-size: 130%;text-align:center;">
  <div class="row">
          <?php foreach ($res_ForeignLanguage as $field => $value) {?>


    <div class="col-sm-3">
      <div class="panel panel-success">
          <div class="panel-heading">
            <a href="detail.php?id=<?php echo $value['b_id'] ?>">
            <b><?php echo $value['b_name']; ?></b></a></div>
          <div class="panel-body" style="background-color:#F08080">
            <a href="detail.php?id=<?php echo $value['b_id'] ?>">
            <img src="images/<?php echo $value['b_img']; ?>" class="img-circle" style="width:100%;height:300px"></a></div>

      </div>
    </div>
    <?php }?>

  </div>
  </div>


<!--T-SHIRT-->
  <div style="font-family:Cherry Swash;font-size:150%;color:#B0006D;padding-left:70px">
      <br><i class="material-icons" style="vertical-align:-2px;">pets</i>&nbsp;<b>Encyclopedias - Favourite!</b>
      <hr width="300px" align="left" style="border-color: #B0006D;margin-top: 5px">
  </div>

  <div class="container" style="font-family:Delius;font-size: 130%;text-align:center;">   <div class="row">
          <?php foreach ($res_Encyclopedias as $field => $value) {?>


    <div class="col-sm-3">
      <div class="panel panel-success">
          <div class="panel-heading">
            <a href="detail.php?id=<?php echo $value['pro_id'] ?>">
            <b><?php echo $value['b_name']; ?></b></a></div>
          <div class="panel-body" style="background-color:#F08080">
            <a href="detail.php?id=<?php echo $value['b_id'] ?>">
            <img src="images/<?php echo $value['b_img']; ?>" class="img-circle" style="width:100%;height:300px"></a></div>
      </div>
    </div>
    <?php }?>

  </div>
  </div>


<!--DRESS-->
  <div style="font-family:Cherry Swash;font-size:150%;color:#B0006D;padding-left:70px">
      <br><i class="material-icons" style="vertical-align:-2px;">pets</i>&nbsp;<b>Sciencefiction - Favourite!</b>
      <hr width="300px" align="left" style="border-color: #B0006D;margin-top: 5px">
  </div>

  <div class="container" style="font-family:Delius;font-size: 130%;text-align:center;">
      <div class="row">
              <?php foreach ($res_Sciencefiction as $field => $value) {?>


    <div class="col-sm-3">
      <div class="panel panel-danger">
          <div class="panel-heading">
            <a href="detail.php?id=<?php echo $value['b_id'] ?>"><b><?php echo $value['b_name']; ?></b></a></div>
          <div class="panel-body" style="background-color:#F08080">
            <a href="detail.php?id=<?php echo $value['b_id'] ?>">
            <img src="images/<?php echo $value['b_img']; ?>" class="img-circle" style="width:100%;height:300px"></a></div>

          </div>
      </div>
    </div>
   <?php }?>

  </div>
  </div>


<!--SHOE-->
  <div style="font-family:Cherry Swash;font-size:150%;color:#B0006D;padding-left:70px">
      <br><i class="material-icons" style="vertical-align:-2px;">pets</i>&nbsp;<b>Major - Favorite!</b>
      <hr width="300px" align="left" style="border-color: #B0006D;margin-top: 5px">
  </div>

  <div class="container" style="font-family:Delius;font-size: 130%;text-align:center;">
        <div class="row">
                <?php foreach ($res_Major as $field => $value) {?>


      <div class="col-sm-3">
        <div class="panel panel-danger">
            <div class="panel-heading">
              <a href="detail.php?id=<?php echo $value['b_id'] ?>"><b><?php echo $value['b_name']; ?></b></a></div>
            <div class="panel-body" style="background-color:#F08080">
              <a href="detail.php?id=<?php echo $value['b_id'] ?>">
              <img src="images/<?php echo $value['b_img']; ?>" class="img-circle" style="width:100%;height:300px"></a></div>

        </div>
      </div>
      <?php }?>

  </div>
  </div>


<?php
include 'templates/footer.php';
?>

</body>
  </html>
