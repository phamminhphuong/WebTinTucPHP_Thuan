
<?php 
include('connect.php');
//khi an nut search 
if(isset($_POST['search'])) {
	$key = $_POST['key'];
	//kiem tra xem ng dung da nhap cai gi chua
	if($key == ""){
		echo "<script>alert('You must fill in keyword to search');document.location='index.php'</script>";
	}else{
		$sql = "SELECT * FROM book WHERE b_name LIKE '%$key%'";
		$result = mysqli_query($conn,$sql);
		
		while ($row = $result->fetch_assoc()) {
        ?>
        <div class="col-sm-3">
		<div class="panel panel-danger">
			<div class="panel-heading">
				<a href="detail.php?id=<?=$row['b_id']?>">
				<b><?php echo $row['b_name']; ?></b>
				</a>
			</div>
					
					
			<div class="panel-body" style="background-color:#F08080">
				<a href="detail.php?id=<?php echo $row['b_id']?>">
				<img src="<?php echo $row['b_img']; ?>" class="img-circle" style="width:100%"></a>
			</div>
				
		</div>
	</div>
        <?php
    	}
	}
}
	?>
