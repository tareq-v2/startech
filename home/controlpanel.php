 <?php
@session_start();
include "../database_connection/dbconnect.php";

unset($_SESSION['logstatus']);
$db = new startech_connection();
if(isset($_POST["admin_login"])){
	   	$user_name=$_POST["admin_email"];
		$user_pass=$_POST["admin_password"];
	    if(!empty($user_name) && !empty($user_pass)){
		    $sql=$db->link->query("SELECT * FROM  `create_admin`  where `email`='{$user_name}' AND `password`='{$user_pass}'");

		    if($sql->num_rows>0)
		    {	
		    	$_SESSION['logstatus']=1;
		    	$_SESSION['admin_email'] = $user_name;
		        echo "<script>location='../admin/'</script>";
		    }
		    else
		    {
		        echo "Invalid Username or Password";
		    }
		}
 	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Startech</title>
	<link rel="icon" type="image/x-icon" href="../assets/img/logo.png">
	<link rel="stylesheet" type="text/css" href="../assets/css/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/slick.css">
	<link rel="stylesheet" type="text/css" href="../assets/webfonts/all.min.css">
	<link rel="stylesheet" href="https://fonts.maateen.me/adorsho-lipi/font.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/fontawesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.6.22/css/uikit.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>
<body>
	<div class="container-fluid p-0">
		<!-- This is header -->
		<header>
			<div class="header-top">
				<div class="container-fluid">
					<div class="row d-block d-lg-none responsive-header" uk-sticky="animation: uk-animation-slide-top">
						<div class="col-4" style="position: relative;">
							<a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" ><i class="fas fa-bars"></i></a>
							<div class="offcanvas offcanvas-start" style="position: absolute; top: 90px;" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
								<div class="offcanvas-body">
									<div class="accordion accordion-flush" id="accordionFlushExample">
										<div class="accordion-item">
											<h2 class="accordion-header" id="flush-headingOne">
											<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne">
												Desktop
											</button>
											</h2>
											<div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
											<div class="accordion-body">
												<ul class="navbar-nav">
													<li class="nav-item dropdown-mobile">
														<a href="#" class="nav-link dropbtn-mobile">&nbsp;&nbsp;Brand pc</a>
														<ul class="navbar-nav dropdown-content-mobile">
															<li class="nav-item"><a href="#" class="nav-link">RYZEN PC</a></li>
															<li class="nav-item"><a href="#" class="nav-link">Gaming PC</a></li>
														</ul>
													</li>
													<li class="nav-item"><a href="#" class="nav-link">&nbsp;&nbsp;Special pc</a></li>
													<li class="nav-item"><a href="#" class="nav-link">&nbsp;&nbsp;Gaming pc</a></li>
													<li class="nav-item"><a href="#" class="nav-link">&nbsp;&nbsp;Star pc</a></li>
												</ul>
											</div>
											</div>
										</div>
										<div class="accordion-item">
											<h2 class="accordion-header" id="flush-heading2">
												<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse2">
												Laptop
												</button>
											</h2>
											<div id="flush-collapse2" class="accordion-collapse collapse show" aria-labelledby="flush-heading2" data-bs-parent="#accordionFlushExample">
												<div class="accordion-body">
													<ul class="navbar-nav">
														<li class="nav-item"><a href="category.php" class="nav-link">&nbsp;&nbsp;All Laptop</a></li>
														<li class="nav-item"><a href="#" class="nav-link">&nbsp;&nbsp;Gaming Laptop</a></li>
														<li class="nav-item"><a href="#" class="nav-link">&nbsp;&nbsp;Premium ultrabook</a></li>
														<li class="nav-item"><a href="#" class="nav-link">&nbsp;&nbsp;Laptop Bag</a></li>
													</ul>
												</div>
											</div>
										</div>
										<div class="accordion-item">
											<h2 class="accordion-header" id="flush-heading3">
												<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse3">
												Component
												</button>
											</h2>
											<div id="flush-collapse3" class="accordion-collapse collapse" aria-labelledby="flush-heading3" data-bs-parent="#accordionFlushExample">
												<div class="accordion-body">
													<ul class="navbar-nav">
														<li class="nav-item"><a href="#" class="nav-link">&nbsp;&nbsp;SSD</a></li>
														<li class="nav-item"><a href="#" class="nav-link">&nbsp;&nbsp;Ram(Desktop)</a></li>
														<li class="nav-item"><a href="#" class="nav-link">&nbsp;&nbsp;Ram(Laptop)</a></li>
														<li class="nav-item"><a href="#" class="nav-link">&nbsp;&nbsp;Motherboard</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-4">
							<img src="../assets/img/logo.png" alt="logo">
						</div>
						<div class="col-4">
							<i class="fas fa-shopping-cart" style="position: absolute; left: 90%; top: 36px;"></i>
							<i class="fas fa-search" onmouseover="mySearch()" style="position: absolute; left: 80%; top: 36px;"></i>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-2 d-none d-lg-block" style="position: relative;">
							<a href="index.php">
								<img src="../assets/img/logo.png" alt="logo" class="p-3 mylogo">
							</a>
						</div>
						<div class="col-lg-4  d-none d-lg-block">
							<div class="search">
							  <input type="text" class="form-control d-none d-lg-block" style="margin-top: 25px;" placeholder="Search">
							  <i class="fas fa-search"></i>
							</div>
						</div>
						<div class="col-lg-5 d-flex">
							<div class="d-flex">
								<span class="d-none d-lg-block">
									<i class="fas fa-gift"></i>
								</span>
								<span class="d-none d-lg-block">
									<p>Offers</p>
									<a href="?page=offerfront"><small class="text-muted" style="font-size: 13px;">Latest Offers</small></a>
								</span>
							</div>
							<div class="d-flex">
								<span class="d-none d-lg-block" style="position: relative;">
									<i class="fas fa-bolt bolt-icon" style="position: absolute; font-size: 120%; color: #EF4A23;"></i>
								</span>
								<span class="d-none d-lg-block">
									<p>Thunders</p>
									<a href="#"><small class="text-muted" style="margin-top: -15px; font-size: 13px;">Thunder Deals</small></a>
								</span>
							</div>
							<div class="d-flex">
								<span class="d-none d-lg-block">
									<i class="fas fa-user"></i>
								</span>
								<span class="d-none d-lg-block">
									<p>Account</p>
									<small class="text-muted" style="margin-top: -15px; font-size: 13px;">
										<a href="?page=register">Register</a> or 
										<a href="?page=login">Login</a>
									</small>
								</span>
							</div>
							<div id="pc-builder" class="d-none d-lg-block">
								Pc Builder
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="header-middle" uk-sticky="animation: uk-animation-slide-top">
				<nav class="d-none d-lg-block">
					<ul class="navbar-nav">
						<li class="nav-item dropdown">
							<a class="nav-link dropbtn" href="#">Desktop</a>
							<ul class="dropdown-content">
								<li class="nav-item dropdown1">
									<a href="#" class="nav-link dropbtn1">Special Pc</a>
									<ul class="dropdown-content1">
										<li class="nav-item"><a href="#" class="nav-link">1</a></li>
										<li class="nav-item"><a href="#" class="nav-link">2</a></li>
										<li class="nav-item"><a href="#" class="nav-link">3</a></li>
									</ul>
								</li>
								<li class="nav-item"><a href="#" class="nav-link">Star Pc</a></li>
								<li class="nav-item"><a href="#" class="nav-link">Gaming Pc</a></li>
								<li class="nav-item"><a href="#" class="nav-link">Brand Pc</a></li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropbtn" href="#"z>Laptop</a>
							<ul class="dropdown-content">
								<li class="nav-item"><a href="?page=category" class="nav-link">All Laptop</a></li>
								<li class="nav-item"><a href="#" class="nav-link">Gaming Laptop</a></li>
								<li class="nav-item"><a href="#" class="nav-link">Laptop Bag</a></li>
								<li class="nav-item"><a href="#" class="nav-link">Laptop Accessories</a></li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropbtn" href="#">Component</a>
							<ul class="dropdown-content">
								<li class="nav-item"><a href="#" class="nav-link">SSD</a></li>
								<li class="nav-item"><a href="#" class="nav-link">RAM (Laptop)</a></li>
								<li class="nav-item"><a href="#" class="nav-link">RAM (Desktop)</a></li>
								<li class="nav-item"><a href="#" class="nav-link">Motherboard</a></li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropbtn" href="#">Monitor</a>
							<ul class="dropdown-content">
								<li class="nav-item"><a href="#" class="nav-link">Asus</a></li>
								<li class="nav-item"><a href="#" class="nav-link">LG</a></li>
								<li class="nav-item"><a href="#" class="nav-link">Dell</a></li>
								<li class="nav-item"><a href="#" class="nav-link">Gigabyte</a></li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropbtn" href="#">UPS</a>
							<ul class="dropdown-content">
								<li class="nav-item"><a href="#" class="nav-link">Online ups</a></li>
								<li class="nav-item"><a href="#" class="nav-link">Offline ups</a></li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropbtn" href="#">Tablet</a>
							<ul class="dropdown-content">
								<li class="nav-item"><a href="#" class="nav-link">Apple</a></li>
								<li class="nav-item"><a href="#" class="nav-link">Lenovo</a></li>
								<li class="nav-item"><a href="#" class="nav-link">Huawei</a></li>
								<li class="nav-item"><a href="#" class="nav-link">Microsoft</a></li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropbtn" href="#">Office Equipment</a>
							<ul class="dropdown-content">
								<li class="nav-item"><a href="#" class="nav-link">Printer</a></li>
								<li class="nav-item"><a href="#" class="nav-link">Projector</a></li>
								<li class="nav-item"><a href="#" class="nav-link">Scanner</a></li>
								<li class="nav-item"><a href="#" class="nav-link">IPS</a></li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropbtn" href="#">Camera</a>
							<ul class="dropdown-content">
								<li class="nav-item"><a href="#" class="nav-link">DSLR Camera</a></li>
								<li class="nav-item"><a href="#" class="nav-link">Digital Camera</a></li>
								<li class="nav-item"><a href="#" class="nav-link">Video Camera</a></li>
								<li class="nav-item"><a href="#" class="nav-link">Camera Accessories</a></li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropbtn" href="#">Security</a>
							<ul class="dropdown-content">
								<li class="nav-item"><a href="#" class="nav-link">CC Camera</a></li>
								<li class="nav-item"><a href="#" class="nav-link">IP Camera</a></li>
								<li class="nav-item"><a href="#" class="nav-link">Door Lock</a></li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropbtn" href="#">Networking</a>
							<ul class="dropdown-content">
								<li class="nav-item"><a href="#" class="nav-link">Router</a></li>
								<li class="nav-item"><a href="#" class="nav-link">Network Switch</a></li>
								<li class="nav-item"><a href="#" class="nav-link">LAN Card</a></li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropbtn" href="#">Accessories</a>
							<ul class="dropdown-content">
								<li class="nav-item"><a href="#" class="nav-link">Keyboard</a></li>
								<li class="nav-item"><a href="#" class="nav-link">Mouse</a></li>
								<li class="nav-item"><a href="#" class="nav-link">Mouse Pad</a></li>
								<li class="nav-item"><a href="#" class="nav-link">Headphone</a></li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropbtn" href="#">Software</a>
							<ul class="dropdown-content">
								<li class="nav-item"><a href="#" class="nav-link">Operating System</a></li>
								<li class="nav-item"><a href="#" class="nav-link">Office Application</a></li>
								<li class="nav-item"><a href="#" class="nav-link">Antivirus</a></li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropbtn" href="#">Server & Storage</a>
							<ul class="dropdown-content">
								<li class="nav-item"><a href="#" class="nav-link">Workstation</a></li>
								<li class="nav-item"><a href="#" class="nav-link">Server</a></li>
								<li class="nav-item"><a href="#" class="nav-link">Storage</a></li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropbtn" href="#">TV</a>
							<ul class="dropdown-content">
								<li class="nav-item"><a href="#" class="nav-link">Sony</a></li>
								<li class="nav-item"><a href="#" class="nav-link">Samsung</a></li>
								<li class="nav-item"><a href="#" class="nav-link">LG</a></li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropbtn" href="#">AC</a>
							<ul class="dropdown-content">
								<li class="nav-item"><a href="#" class="nav-link">General</a></li>
								<li class="nav-item"><a href="#" class="nav-link">Midea</a></li>
								<li class="nav-item"><a href="#" class="nav-link">Gree</a></li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropbtn" href="#">Gadget</a>
							<ul class="dropdown-content">
								<li class="nav-item"><a href="#" class="nav-link">Smart Watch</a></li>
								<li class="nav-item"><a href="#" class="nav-link">Drone</a></li>
								<li class="nav-item"><a href="#" class="nav-link">TV Box</a></li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropbtn" href="#">Gaming</a>
							<ul class="dropdown-content">
								<li class="nav-item"><a href="#" class="nav-link">Gaming Chair</a></li>
								<li class="nav-item"><a href="#" class="nav-link">Keyboard</a></li>
								<li class="nav-item"><a href="#" class="nav-link">Gaming Pad</a></li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
			<div class="container-fluid">
				<input type="text" id="hidden-search-icon" class="form-control d-lg-none" placeholder="Search" style="display: none;">
			</div>
		</header>

		<section class="my-5">
     		<div class="container-fluid">
				<div class="row">
					<div class="col-md-4 m-auto">
						<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
							<h5 style="text-align: center; color: grey;">Startech Admin</h5>
							<div class="form-group">
								<label for="admin_email">Email</label>
								<input type="text" class="form-control mb-2" name="admin_email">
							</div>
							<div class="form-group">
								<label for="admin_password">Password</label>
								<input type="text" class="form-control mt-1 mb-2" name="admin_password">
							</div>
							<button class="btn btn-block mt-1 btn-success" name="admin_login" type="submit">Login</button>
						</form>
					</div>
				</div>
			</div>
 		</section>

		<!-- This is footer -->
		<footer>
			<div class="header-mobile-footer d-block d-lg-none pl-0">
				<ul class="d-flex">
					<li style="margin-left: 5px;">
						<a href="#">
							<div><i class="fas fa-gift"></i></div>
							<div>
								<small>Offers</small>
							</div>
						</a>
					</li>
					<li style="position: relative; margin-right: 30px;">
						<a href="#">
							<div><i class="fas fa-bolt"></i></div>
							<div style="position: absolute; left: 10px;">
								<small>Thunders</small>
							</div>
						</a>
					</li>
					<li style="position: relative;">
						<a href="#">
							<div style="padding-left: 9px;"><i class="fas fa-laptop"></i></div>
							<div>
								<small>Pc Builder</small>
							</div>
						</a>
					</li>
					<li>
						<a href="#">
							<div style="padding-left: 12px;"><i class="fas fa-compress-arrows-alt"></i></div>
							<div>
								<small>Compare(0)</small>
							</div>
						</a>
					</li>
					<li>
						<a href="#">
							<div style="padding-left: 7px;"><i class="fas fa-user"></i></div>
							<div>
								<small>Account</small>
							</div>
						</a>
					</li>
				</ul>
			</div>
			<div class="footer">
				<div class="container">
					<div class="row pt-2 pb-1 myf">
						<div class="col-12 col-lg-4 pt-5">
							<h6 class="text-muted">Support</h6>
							<div class="footer-box-layer">
								<div class="footer-box">
									<div class="row">
										<div class="col-lg-3">
											<i class="fas fa-phone p-4 mb-1" style="font-size: 125%;"></i>
										</div>
										<div class="col-lg-1"></div>
										<div class="col-lg-7 pt-2 fb-1">
											<p class="text-muted" style="margin-bottom: 0; font-size: 13px;">9AM-6PM</p>
											<p style="color: orange;">01933221144</p>
										</div>
									</div>
								</div>
								<div class="footer-box">
									<div class="row">
										<div class="col-lg-3">
											<i class="fas fa-search-location p-4 mb-1" style="font-size: 125%;"></i>
										</div>
										<div class="col-lg-1"></div>
										<div class="col-lg-7 pt-2 fb-1">
											<p class="text-muted" style="margin-bottom: 0; font-size: 13px;">Store Location</p>
											<p style="color: orange;">Find Our Location</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-5 pt-5 about-us-section">
							<div class="footer-about-us">
								<h6 class="text-muted">About us</h6>
								<div class="row">
									<div class="col-lg-5">
										<ul class="footer-list">
											<li><a href="#">EMI Terms</a></li>
											<li><a href="#">Privacy Policy</a></li>
											<li><a href="#">Careers</a></li>
											<li><a href="#">Contact us</a></li>
										</ul>
									</div>
									<div class="col-lg-7">
										<ul class="footer-list">
											<li><a href="#">Terms and Conditions</a></li>
											<li><a href="#">Return and Refund policy</a></li>
											<li><a href="#">Online Delivery</a></li>
											<li><a href="#">Blog</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12  col-lg-3 pt-5">
							<div class="stay-connect-layer">
								<h6 class="text-muted">Stay Connected</h6>
							<p style="color: aliceblue; font-size: 14px; font-family: 'Times New Roman', Times, serif; letter-spacing: 1px;">Star tech & Engineering Ltd</p>
							<p style="font-size: 13px; color: rgb(235, 217, 217, 0.7)">6th floor, 28 Kazi Nazrul Islam Ave,Navana Zohura Square, Dhaka.</p>
							<p style="margin-bottom: 0; color:bisque; font-family: serif;">Email</p>
							<p style="margin-bottom: 0; color:bisque; font-family: serif;">info.webteam@startechbd.com</p>
							<ul class="d-flex social-icons">
								<li><a href="#"><i class="fab fa-instagram"></i></a></li>
								<li><a href="#"><i class="fab fa-facebook-messenger"></i></a></li>
								<li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
							</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="container-fluid py-2 developer">
					<h6>This site is created for testing purpose. Designed by <a href="https://www.facebook.com/tareq-v2" target="_blank">Tareq</a></h6>
				</div>
			</div>
		</footer>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.6.22/js/uikit.min.js"></script>
	<script src="../assets/js/jquery-3.5.1.slim.min.js"></script>
	<script src="../assets/js/bootstrap.bundle.min.js"></script>
	<script src="../assets/js/slick.min.js"></script>
	<script src="../assets/js/script.js"></script>
</body>
</html>