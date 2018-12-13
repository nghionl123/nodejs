<?php
session_start();
//tiến hành kiểm tra là người dùng đã đăng nhập hay chưa
//nếu chưa, chuyển hướng người dùng ra lại trang đăng nhập
if (!isset($_SESSION['username'])) {
	header('Location: dangnhap.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Báo Cáo Thực Tập</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="css.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	
	<div class="container-fluid">
		<div class="container">
			<h5 class="bg-primary">Tai Khoan : <?php echo $_SESSION['username'];  ?></h5>
		</div>
		
		<div class="container" style="margin-top: 10px"><!-- bat dau menu-->
			<div class="row">
				<div class="col-2">
					<img src="hinh/icon/1.jpg" style="width: 50px; height: 50px;">
				</div>
				<div class="col-10 btn-link text-right">
					Lớp : TQW17<br>
					Tên : Võ Minh Nhựt	
				</div>
			</div>
			
			<div class="row bg-info text-center mau-a">
				
				<div class="col-2">
					<button class="btn btn-info"><a href="index.php">Trang Chủ</a> </button> 
				</div> 
				<div class="col-2">
					<button class="btn btn-info"><a href="">Sản Phẩm</a></button>
				</div>
				<div class="col-2">
					<button class="btn btn-info"><a href="">Giới Thiệu</a></button>
				</div>
				<div class="col-2">
					<button class="btn btn-info"><a href="">Nhà Sản Xuất</a></button>
				</div>
				<div class="col-4">
					<button class="btn btn-info"><a href="dangnhap.php">Đăng Nhập </a></button>
					||
					<button class="btn btn-info"><a href="dangky.php">Đăng Ký</a></button>
				</div>
			</div>
		</div><!-- end menu-->
		<div class="row">		<!-- bat dau banner-->
			<div class="container" id="edit-img" > 
				<div id="myCarousel" class="carousel slide" data-ride="carousel" >
					<!-- Indicators -->
					<ol class="carousel-indicators" >
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner">
						<div class="item active">
							<?php
							require_once "connect.php";
							$path = "hinh/banner/";
							$dl_sp = "select * from banner where new = '1'";
							$query = mysqli_query($conn,$dl_sp);
							while ($docdl = mysqli_fetch_assoc($query)) {
								$path_hinh=$path.$docdl['hinh'];
								echo "<img src='$path_hinh'>";
							}
							?>
						</div>

						<div class="item">
							<?php
							require_once "connect.php";
							$path = "hinh/banner/";
							$dl_sp = "select * from banner where new = '2'";
							$query = mysqli_query($conn,$dl_sp);
							while ($docdl = mysqli_fetch_assoc($query)) {
								$path_hinh=$path.$docdl['hinh'];
								echo "<img src='$path_hinh'>";
							}
							?>
						</div>
						
						<div class="item">
							<?php
							require_once "connect.php";
							$path = "hinh/banner/";
							$dl_sp = "select * from banner where new = '2'";
							$query = mysqli_query($conn,$dl_sp);
							while ($docdl = mysqli_fetch_assoc($query)) {
								$path_hinh=$path.$docdl['hinh'];
								echo "<img src='$path_hinh'>";
							}
							?>
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
		</div><!-- end banner-->


		<div class="container"><!-- bat dau san pham-->
			<div class="row">
				<h3>Sản Phẩm Hot</h3>
			</div>
			<div class='row'>
				<?php
				require_once "connect.php";
				$path = "hinh/sanpham/";
				$dl_sp = "select * from san_pham where new = '1'";
				$query = mysqli_query($conn,$dl_sp);
				while ($docdl = mysqli_fetch_assoc($query)) {
					$path_hinh=$path.$docdl['hinh'];
					echo "<div class='card col-4'>";
					echo "<div class='card-img'>";
					echo "<img src='$path_hinh' style='width: 300px;height: 250px'>";
					echo "</div>";
					echo "<div class='card-info text-center'>";
					echo $docdl['ten_sp']; 
					echo "</div>";
					echo "<div class='card-link btn btn-info'>";
					echo "Mua Sản Phẩm"; 
					echo "</div>";
					echo "</div>";
					
				}
				
				?>
			</div>
			
		</div><!-- end san pham hot-->

		<div class="container bg-info mb-5 text-center" style="margin-top: 20px;">
			<div class="row">
				<div class="modal-footer">
					© 2006-2018 Bản quyền của Máy ảnh JP | Địa chỉ: 362 Thái Hà, Hà Nội (gần Trung tâm chiếu phim Quốc gia)Ư
					ĐT :  (024) 35 720 633 -  (024) 35 379 594 - (024) 62 757 151 | Email :mayanhjp@yahoo.com - mayanhjp@gmail.com
					Canon | Nikon | Sony | Fujifilm | Panasonic
				</div>
				
			</div>
			
		</div>
	</body>
	</html>