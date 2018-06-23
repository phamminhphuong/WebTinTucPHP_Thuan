</br>
    <div class = "Encyclopedias_list">
    <h1 align="center" class=" content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s">Encyclopedias</h1>
    <div class="col-6"><button type="button" class="btn btn-success btn-lg float-right" onclick="window.location.href='addBook.php'"><i class="fa fa-check-square-o"></i>&nbsp;Add Book</button></div>
    </br>
    <table class="table table-striped">
      <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Description</th>
      <th colspan="2"></th>
    </tr>
    </thead>

    <?php foreach ($Encyclopedias as $field => $value) { ?>
     
     <tbody> 
     <tr>
      <td><?= $value['b_id']?></td>
      <td><?= $value['b_name'];?></td>
      <td><?= $value['b_des'];?></td>
      <td style="text-align: center;"><a href="delete.php?id=<?php echo $value['b_id']; ?>" id="delete" class="btn btn-danger" onClick="return confirm('Do your want to delete this book?')"><i class="fa fa-close"></i>&nbsp;Delete</a></td>
      <td style="text-align: center;"><a href="editBook.php?id=<?php echo $value['b_id']; ?>" id="edit" class="btn btn-primary"><i class="fa fa-edit"></i>&nbsp;Edit</a></td>
    </tr>
    <?php
      }
    ?>
  </tbody>
  </table>
  </div> <!-- end tshirts_list -->

</br>
    <div class = "ForeignLanguage_list">
    <h1 align="center" class=" content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s">ForeignLanguage</h1>
    <div class="col-6"><button type="button" class="btn btn-success btn-lg float-right" onclick="window.location.href='addBook.php'"><i class="fa fa-check-square-o"></i>&nbsp;Add Book</button></div>
    </br>
    <table class="table table-striped">
      <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Description</th>
      <th colspan="2"></th>
    </tr>
  </thead>
  <tbody>

    <?php foreach ($ForeignLanguage as $field => $value) { ?>
      
     <tr>
      <td><?= $value['b_id']?></td>
      <td><?= $value['b_name'];?></td>
      <td><?= $value['b_des'];?></td>
      <td style="text-align: center;"><a href="delete.php?id=<?php echo $value['b_id']; ?>" id="delete" class="btn btn-danger" onClick="return confirm('Do your want to delete this book?')"><i class="fa fa-close"></i>&nbsp;Delete</a></td>
      <td style="text-align: center;"><a href="editBook.php?id=<?php echo $value['b_id']; ?>" id="edit" class="btn btn-primary"><i class="fa fa-edit"></i>&nbsp;Edit</a></td>
    </tr>
    <?php
      }
    ?>
  </tbody>
  </table>
  </div> <!-- end hoodies_list -->

  </br>
    <div class = "Specialistpress_list">
    <h1 align="center" class=" content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s">Specialistpress</h1>
    <div class="col-6"><button type="button" class="btn btn-success btn-lg float-right" onclick="window.location.href='addBook.php'"><i class="fa fa-check-square-o"></i>&nbsp;Add Book</button></div>
    </br>
    <table class="table table-striped">
      <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Description</th>
      <th colspan="2"></th>
    </tr>
  </thead>
  <tbody>

    <?php foreach ($Specialistpress as $field => $value) { ?>
      
     <tr>
      <td><?= $value['b_id']?></td>
      <td><?= $value['b_name'];?></td>
      <td><?= $value['b_des'];?></td>
      <td style="text-align: center;"><a href="delete.php?id=<?php echo $value['b_id']; ?>" id="delete" class="btn btn-danger" onClick="return confirm('Do your want to delete this book?')"><i class="fa fa-close"></i>&nbsp;Delete</a></td>
      <td style="text-align: center;"><a href="editBook.php?id=<?php echo $value['b_id']; ?>" id="edit" class="btn btn-primary"><i class="fa fa-edit"></i>&nbsp;Edit</a></td>
    </tr>
    <?php
      }
    ?>
  </tbody>
  </table>
  </div> <!-- end coats_list -->

  </br>
    <div class = "Sciencefiction_list">
    <h1 align="center" class=" content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s">Sciencefiction</h1>
    <div class="col-6"><button type="button" class="btn btn-success btn-lg float-right" onclick="window.location.href='addBook.php'"><i class="fa fa-check-square-o"></i>&nbsp;Add Book</button></div>
    </br>
    <table class="table table-striped">
      <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Description</th>
      <th colspan="2"></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Sciencefiction as $field => $value) { ?>
      
     <tr>
      <td><?= $value['b_id']?></td>
      <td><?= $value['b_name'];?></td>
      <td><?= $value['b_des'];?></td>
      <td style="text-align: center;"><a href="delete.php?id=<?php echo $value['b_id']; ?>" id="delete" class="btn btn-danger" onClick="return confirm('Do your want to delete this product?')"><i class="fa fa-close"></i>&nbsp;Delete</a></td>
      <td style="text-align: center;"><a href="editBook.php?id=<?php echo $value['b_id']; ?>" id="edit" class="btn btn-primary"><i class="fa fa-edit"></i>&nbsp;Edit</a></td>
    </tr>
    <?php
      }
    ?>
  </tbody>
  </table>
  </div> <!-- end dresses_list -->

  </br>
  <div class = "Major_list">
    <h1 align="center" class=" content-header wow fadeIn " data-wow-delay="0.2s" data-wow-duration="2s">Major</h1>
    <div class="col-6"><button type="button" class="btn btn-success btn-lg float-right" onclick="window.location.href='addBook.php'"><i class="fa fa-check-square-o"></i>&nbsp;Add Book</button></div>
    </br>
    <table class="table table-striped" >
      <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Description</th>
      <th colspan="2"></th>
    </tr>
  </thead>
  <tbody>

    <?php foreach ($Major as $field => $value) { ?>
      
     <tr>
      <td><?= $value['b_id']?></td>
      <td><?= $value['b_name'];?></td>
      <td><?= $value['b_des'];?></td>
      <td style="text-align: center;"><a href="delete.php?id=<?php echo $value['b_id']; ?>" id="delete" class="btn btn-danger" onClick="return confirm('Do your want to delete this book?')"><i class="fa fa-close"></i>&nbsp;Delete</a></td>
      <td style="text-align: center;"><a href="editBook.php?id=<?php echo $value['b_id']; ?>" id="edit" class="btn btn-primary"><i class="fa fa-edit"></i>&nbsp;Edit</a></td>
    </tr>
    <?php
      }
    ?>
  </tbody>
  </table>
  </div> <!-- end shoes_list -->
</div> <!-- end div container -->