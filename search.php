<?php 
include('connect.php');
//khi an nut search 
if(isset($_POST['search'])) {
	$key = $_POST['key'];
	//kiem tra xem ng dung da nhap cai gi chua
	if($key == ""){
		echo "<script>alert('Bạn phải nhập thông tin vào ô search');document.location='index.php'</script>";
	}else{
		$sql = "SELECT * FROM book WHERE b_name LIKE '%$key%'";
		$result = mysqli_query($conn,$sql);
		$search = mysqli_fetch_all($result, MYSQLI_ASSOC);
	}
}
	?>
<html>

<body>
	<?php
  include 'templates/header_navi.php';
  include 'templates/verticalmenu.php';
  ?>
		<div class="container">
			<div class="col-sm-10" style="color:#B0006D;margin-left: 50px;margin-top: 10px;font-family: Delius;font-size: 17px">
				<div class="panel panel-danger">
					<div class="panel-heading" style="text-align: center">
						<h1>
							<b>Search books
								<?php echo $key?>
							</b>
						</h1>
					</div>
					<div class="panel-body">

						<div class="row">
							<?php
							 foreach ($search as $sea => $value) { ?>
								<div class="col-sm-4" style="text-align:center;margin-bottom:20px">
									<a href="detail.php?id=<?php echo $value['b_id']?>">
										<img src="images/<?php echo $value['b_img']; ?>" style="width:150px;height:200px">
									</a>
									<br>
								</div>
								
								<?php } ?>
						</div>
						
						</div>
					</div>
				</div>
			</div>
		</div>


		<footer>
			<?php
  include 'templates/footer.php';
  ?>
		</footer>
</body>

</html>