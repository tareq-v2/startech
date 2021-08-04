<?php
@session_start();

include("../database_connection/dbconnect.php");
$db = new startech_connection();
if($_SESSION['logstatus']==1)
{

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Startech Admin</title>
	<link rel="stylesheet" type="text/css" href="../assets/webfonts/all.min.css">
	<link rel="stylesheet" href="https://fonts.maateen.me/adorsho-lipi/font.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/fontawesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.6.22/css/uikit.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/uikit.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
	<link rel="stylesheet" type="text/css" href="css/admin-style.css">


</head>
<body>
    <div class="container-fluid">
		<div class="row">
			<div class="col-2 px-0" style="position: relative;">
				<div class="top-nav-logo" style="position: fixed; width: 225px;">
					<a href="index.php">
						<img class="img-fluid" style="z-index: 9;" src="../assets/img/logo.png" alt="#">
					</a>
				</div>
			</div>
			<div class="col-10 px-0">
				<div class="top-nav">
					<div>
						<h6>Welcome to <span style="color: rgba(252, 40, 2, 0.767); font-size: 16px;">startech admin panel</span></h6>
					</div>
					<div id="logout-section" style="cursor: pointer;">
						<div id="profile-pic">
							<div id="active"></div>
							<img src="../assets/img/fb.jpg" alt="#">
						</div>
						<span style="margin: 20px 0 0 15px; color: green; font-size: 13px;">SBIT</span><span style="color: rgb(243, 52, 52); margin: 15px 0 0 0;">&nbsp;&#11167;</span>
					</div>
					<div id="login-card">
						<div id="testId">
							<a style="cursor: pointer;" onclick="closeCard()"><i class="fas fa-times"></i></a>
						</div>
						<div>
							<img src="../assets/img/fb.jpg" alt="#">
							<div class="inner-text">
								<p style="color: green; font-size: 22px;">SBIT</p>
									<small class="text-muted mb-2"><?php  ?></small>
								<br>
								<p><?php include('../home/testing.php'); ?></p>
								<br>
								<span>
									<i class="fas fa-power-off" style="color: rgb(54, 211, 223); margin-left: 3px;"></i>&nbsp;<span style="color: red;"><a style="color: red; text-decoration: none;" href="../home/controlpanel.php">Sign Out</a></span>
								</span>
							</div>

						</div>
					</div>
					<script>
						window.addEventListener('DOMContentLoaded', function (){
							let testing = document.querySelector('#logout-section') 
							testing.addEventListener('click', function (){
								let mainCard = document.querySelector('#login-card')
									mainCard.style.display = 'block'
							})
							let closeId = document.querySelector('#testId')
							closeId.addEventListener('click', function (){
								let mainCard = document.querySelector('#login-card')
									mainCard.style.display = 'none'
							})
						})
					</script>
				</div>
			</div>
		</div>
		<div class="row" style="position: relative;">
			<div class="col-2 px-0" style="width: 225px; position: fixed; top: 85px; left: 0; overflow-y: auto;">
				<div class="accordion accordion-flush" id="accordionFlushExample">
					<div class="accordion-item">
					  <h4 class="accordion-header" id="flush-headingOne">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
							<i class="fab fa-expeditedssl" style="width: 25px; font-size: 22px;"></i>&nbsp;Administrator
						</button>
					  </h4>
					  <div id="flush-collapseOne" class="accordion-collapse show" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
						<div class="accordion-body">
							<ul>
								
								<li><i class="fas fa-user-shield"></i><a href="#">&nbsp;&nbsp;<a href="admininfo.php" target="framebody">Admin Information</a></li>
								<li><i class="fas fa-user-shield"></i><a href="#">&nbsp;&nbsp;<a href="createadmin.php" target="framebody">Create Admin</a></li>
								<li><i class="fas fa-user-shield"></i><a href="#">&nbsp;&nbsp;<a href="viewadmin.php" target="framebody">View Admin</a></li>
							</ul>
						</div>
					  </div>
					</div>
					<div class="accordion-item">
					  <h2 class="accordion-header" id="flush-headingTwo">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
							<i class="fas fa-bars" style="width: 25px; font-size: 22px;"></i>&nbsp;Main Menu
						</button>
					  </h2>
					  <div id="flush-collapseTwo" class="accordion-collapse show" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
						<div class="accordion-body">
							<div class="accordion-body" style="background: #6D747A;">
								<ul>
									<li><i class="fab fa-product-hunt"></i><a href="#">&nbsp;&nbsp;<a href="addproduct.php" target="framebody">Add product</a></li>
									<li><i class="fab fa-product-hunt"></i><a href="#">&nbsp;&nbsp;<a href="products.php" target="framebody">Products</a></li>
									<li><i class="fab fa-product-hunt"></i><a href="#">&nbsp;&nbsp;<a href="viewproduct.php" target="framebody">View product</a></li>
									<li><i class="fab fa-product-hunt"></i><a href="#">&nbsp;&nbsp;<a href="productSubDescription.php" target="framebody">Add Product Desciption</a></li>
									<li><i class="fab fa-product-hunt"></i><a href="#">&nbsp;&nbsp;<a href="additems.php" target="framebody">Add Items</a></li>
									<li><i class="fab fa-product-hunt"></i><a href="#">&nbsp;&nbsp;<a href="addbrand.php" target="framebody">Add Brands</a></li>
									<li><i class="fab fa-product-hunt"></i><a href="#">&nbsp;&nbsp;<a href="addcategory.php" target="framebody">Add Category</a></li>
									<li><i class="fab fa-product-hunt"></i><a href="#">&nbsp;&nbsp;<a href="addsubcategory.php" target="framebody">Add Sub-Category</a></li>
									<li><i class="fab fa-product-hunt"></i><a href="#">&nbsp;&nbsp;<a href="addslider.php" target="framebody">Add Slider</a></li>
									<li><i class="fab fa-product-hunt"></i><a href="#">&nbsp;&nbsp;<a href="viewslider.php" target="framebody">View Slider</a></li>
									<li><i class="fab fa-product-hunt"></i><a href="#">&nbsp;&nbsp;<a href="addsideimg.php" target="framebody">Add Side Image</a></li>
									<li><i class="fab fa-product-hunt"></i><a href="#">&nbsp;&nbsp;<a href="viewsideimage.php" target="framebody">View Side Image</a></li>
								</ul>
							</div>
						</div>
					  </div>
					</div>
					<div class="accordion-item">
					  <h2 class="accordion-header" id="flush-headingThree">
						<button class="accordion-button xxx collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
							<i class="fas fa-cogs" style="width: 25px; font-size: 22px;"></i>&nbsp;&nbsp;Setting
						</button>
					  </h2>
					  <div id="flush-collapseThree" class="accordion-collapse show" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
						<div class="accordion-body">
							<ul>
								<li><i class="fas fa-cogs"></i><a href="#">&nbsp;&nbsp;<a href="addprivacy.php" target="framebody">Privacy policy</a></li>
								<li><i class="fas fa-cogs"></i><a href="#">&nbsp;&nbsp;<a href="addtermsandcondition.php" target="framebody">Terms and conditions</a></li>
								<li><i class="fas fa-cogs"></i><a href="#">&nbsp;&nbsp;<a href="faq.php" target="framebody">Frequently Ask Question</a></li>
								<li><i class="fas fa-cogs"></i><a href="#">&nbsp;&nbsp;<a href="career.php" target="framebody">Careers</a></li>
							</ul>
						</div>
					  </div>
					</div>
				  </div>
			</div>
			<div class="col-10 px-0">
				<iframe style="margin-left: 225px;" src="adminfrontpage.php" width="100%" height="800px" name="framebody"> </iframe>
			</div>
		</div>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.6.22/js/uikit.min.js"></script>
	<script src="../assets/js/jquery-3.5.1.slim.min.js"></script>
	<script src="../assets/js/uikit.min.js"></script>
	<script src="../assets/js/bootstrap.bundle.min.js"></script>
	<script src="js/admin.js"></script>
</body>
</html>
<?php
}
else
{
    print "<h1>You can't authorize to see this page!</h1>";
    print "<a href='../home/controlpanel.php'> Please login</a>";
}
?>