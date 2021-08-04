<?php
@session_start();
$sql="SELECT * FROM `product` where product_id = '".$_GET["id"]."'";
	$query=$db->link->query($sql);
	$product = $query->fetch_array();

?>

		<style type="text/css">
			#confirm-card{
			    position: fixed; 
			    left: 28%; 
			    top: 4%; 
			    width: 800px; 
			    height: 200px;
			    padding: 15px 10px;
			    background-color: #f1f1f1;
			    border: 1px solid #000;
				display: none;
			}
		</style>
		<section id="pro-main-layer">
			<div>
				<div id="confirm-card">
					<div class="row">
						<div class="col-10">
							<div>
								<span><i class="fas fa-times"></i></span>
							<span><p>You have added <span style="color: orange;">Apple iMac 24" 4K Retina Display M1 8 Core CPU, 8 Core GPU, 256GB SSD, Green (MGPH3ZP/A) 2021</span> to your shopping cart!</p></span>
							</div>
							<div class="d-flex;">
								<button>View Cart</button>
								<button>Confirm Order</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="pro-front-layer">
				<div class="container-fluid px-4">
					<div class="row">
						<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
							<ol class="breadcrumb">
							  <li class="breadcrumb-item"><a href="index.php"><i class="fas fa-home"></i></a></li>
							  <li class="breadcrumb-item"><a href="#"><?php print $product[3] ?></a></li>
							  <li class="breadcrumb-item"><a href="#"><?php print $product[5] ?></a></li>
							  <li class="breadcrumb-item active" aria-current="page"><?php print $product[2] ?></li>
							</ol>
						  </nav>
					</div>
					<div id="pro-top-nav">
						<nav id="left-nav">
							<ul class="d-flex">
								<li><a href="#">Reviews</a></li>
								<li><a href="#">Questions</a></li>
								<li class="d-flex"><a href="#" class="left-nav-last">Share</a><div class="share-icon"><i class="fab fa-facebook"></i><i class="fab fa-flickr"></i></div></li>
							</ul>
						</nav>
						<nav id="left-nav">
							<ul class="d-flex">
								<li class="d-flex">
									<i class="fas fa-bookmark mr-2"></i>
									<div>
										<a href="#"> &nbsp;&nbsp;Save</a>
									</div>
								</li>
								<li class="d-flex">
									<i class="fas fa-recycle mr-2"></i>
									<div>
										<a href="#" class="right-nav-last"> &nbsp;&nbsp;Add to Compare</a>
									</div>
								</li>
							</ul>
						</nav>
					</div>
				</div>
				<div id="pro-front-detail">
					<div class="row px-5">
						<div class="col-12 col-lg-5 p-5">
							<a data-bs-toggle="modal" data-bs-target="#exampleModal">
								<img src="../admin/img/productimg/<?php print $product[0] ?>.jpg" style="width: 120%;" alt="#">
							</a>
								<button type="button" class="all-img-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
									See all image
								</button>
								<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
									<div class="modal-content"
									>
										<div class="modal-body" style="position: relative; padding: 0; margin: 0;">
												<i class="fas fa-times" data-bs-dismiss="modal"
												></i>
											<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
												<div class="carousel-inner">
												  <div class="carousel-item active">
													<img src="../assets/img/fpro1.jpg" class="d-block w-100" alt="...">
												  </div>
												  <div class="carousel-item">
													<img src="../assets/img/fpro2.jpg" class="d-block w-100" alt="...">
												  </div>
												  <div class="carousel-item">
													<img src="../assets/img/fpro3.jpg" class="d-block w-100" alt="...">
												  </div>
												</div>
												<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
												  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
												  <span class="visually-hidden">Previous</span>
												</button>
												<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
												  <span class="carousel-control-next-icon" aria-hidden="true"></span>
												  <span class="visually-hidden">Next</span>
												</button>
											  </div>
										</div>
									</div>
									</div>
								</div>
						</div>
						<div class="col-12 col-lg-7">
							<div class="product-summary">
								<h1><?php print $product[1] ?></h1>
								<ul class="ul1">
									<li><span>Price : <b style="font-size: 11px; color: #000;"><?php print $product[6] ?>৳</b></span></li>
									<li><span>Regular price : <b style="font-size: 11px; color: #000;"><?php print $product[7] ?>৳</b></span></li>
									<li><span>Status : <b><?php print $product[8] ?></b></span></li>
									<li><span>product Code : <b><?php print $product[0] ?></b></span></li>
									<li><span>Brand : <b><?php print $product[3] ?></b></span></li>
								</ul>
								<h3>Key Features</h3>
								<ul class="ul2"> 
									<li>MPN: 82BG004EMJ</li>
									<li>Model: Yoga 9 14ITL5</li>
									<li>Intel Core i7-1185G7 Processor (12M Cache, 3.00 GHz up to 4.80 GHz)</li>
									<li>16GB LPDDR4x 4266MHz RAM</li>
									<li>1TB SSD M.2 2280 PCIe NVMe</li>
									<li>14″ FHD (1920×1080) Touch Display</li>
								</ul>
								<p class="view-more-btn">View More Info</p>
								<h5>Payment Options</h5>
								<div class="payment-system">
									<div class="payment-box1 mr-2">
										<div class="payment-layer">
											<div class="row">
												<div class="col-lg-2">
													<form>
														<input type="radio">
													</form>
												</div>
												<div class="col-lg-10"><small><h6>199,000৳</h6> adipisicing elit. Facere quae amet libero aliquid labore quaerat Lorem, ipsum.!</small></div>
											</div>
										</div>
									</div>
									<div class="payment-box2">
										<div class="payment-layer">
											<div class="row ml-2">
												<div class="col-lg-2">
													<form>
														<input type="radio">
													</form>
												</div>
												<div class="col-lg-10"><small><h6>34,100৳/month</h6> adipisicing elit. Facere quae amet libero aliquid labore quaerat Lorem, ipsum.!</small></div>
											</div>
										</div>
									</div>
								</div>
								<div>
									<div id="counter">
										<div class="row">
											<div class="col-lg-2">
												<div class="counter-layer">
												<a class="counting-btn" onclick="decrement()">-</a>
												<p id="counting"></p>
												<a class="counting-btn" onclick="increment()">+</a>
												</div>
											</div>
											<div class="col-lg-4">
												<button class="btn mt-0">
													Buy Now
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="container-fluid mt-4">
						<div class="row">
							<div class="col-12">
								<nav class="details-bottom-nav">
									<ul class="navbar-nav">
										<li class="nav-item">
										  <a class="nav-link active" target=".details-bottom-nav">Specifications</a>
										</li>
										<li class="nav-item">
										  <a class="nav-link" target=".ques-body">Descriptions</a>
										</li>
										<li class="nav-item">
										  <a class="nav-link" target=".ques-body">Questions</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" target=".ques-body">Review(0)</a>
										  </li>
									  </ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="product-details">
			<div class="product-details-layer">
				<div class="row">
					<div class="col-lg-8">
						<div class="pro-details-left-layer">
							<h2>Specification</h2>
							<table class="data-table">
								<colgroup>
									<col class="name">
									<col class="value">
								</colgroup>
								<thead>
								<tr>
									<td class="heading-row" colspan="3">Basic Information</td>
								</tr>
								</thead>
								<tbody>
								<tr class="common-description">
									<td class="name">
										Processor
									</td>
									<td class="value">
										<?php print $product[9] ?>
									</td>
								</tr>
								<tr class="common-description">
									<td class="name">
										Display
									</td>
									<td class="value">
										<?php print $product[10] ?>
									</td>
								</tr>
								<tr class="common-description">
									<td class="name">
										Memory
									</td>
									<td class="value">
										<?php print $product[11] ?>
									</td>
								</tr>
								<tr class="common-description">
									<td class="name">
										Storage
									</td>
									<td class="value">
										<?php print $product[12] ?><br>
									</td>
								</tr>
								<tr class="common-description">
									<td class="name">
										Graphics
									</td>
									<td class="value">
										<?php print $product[13] ?>
									</td>
								</tr>
								<tr class="common-description">
									<td class="name">
										Operating System
									</td>
									<td class="value">
										<?php print $product[14] ?>
									</td>
								</tr>
								<tr>
									<td class="name">
										Battery
									</td>
									<td class="value">
										4 Cell Battery
									</td>
								</tr>
							</tbody>
							<thead>
								<tr>
									<td class="heading-row" colspan="3">Input Devices</td>
								</tr>
							</thead>
							<tbody>
								<tr class="common-description">
									<td class="name">
										Keyboard
									</td>
									<td class="value">
										<?php print $product[15] ?>
									</td>
								</tr>
								<tr>
									<td class="name">
										WebCam
									</td>
									<td class="value">
										<?php print $product[16] ?>
									</td>
								</tr>                            
							</tbody>			
							<thead>
								<tr>
									<td class="heading-row" colspan="3">
										Network &amp; Wireless Connectivity
									</td>
								</tr>
							</thead>
							<tbody>
								<tr class="common-description">
									<td class="name">
										Wi-Fi
									</td>
									<td class="value">
										<?php print $product[18] ?>
									</td>
								</tr>
								<tr>
									<td class="name">
										Bluetooth
									</td>
									<td class="value">
										<?php print $product[19] ?>
									</td>
								</tr> 
							</tbody>
							<thead>
								<tr>
									<td class="heading-row" colspan="3">
										Ports, Connectors &amp; Slots
									</td>
								</tr>
							</thead>
							<tbody>
								<tr class="common-description">
									<td class="name">
										USB (s)
									</td>
									<td class="value">
										<?php print $product[20] ?><br>2 x USB-C 3.2 Gen 2 (Thunderbolt 4, DisplayPort™ &amp; power delivery)
									</td>
								</tr>
								<tr class="common-description">
									<td class="name">
										Audio Jack Combo
									</td>
									<td class="value">
										Headphone / mic combo
									</td>
								</tr>
								<tr class="common-description">
									<td class="name">
										Extra RAM Slot
									</td>
									<td class="value">
										N/A
									</td>
								</tr>
								<tr class="common-description">
									<td class="name">
										Extra M.2 Slot
									</td>
									<td class="value">
										N/A
									</td>
								</tr>
								<tr>
									<td class="name">
										Supported SSD Type
									</td>
									<td class="value">
										M.2 2280 PCIe 3.0×4 NVMe
									</td>
								</tr>                            
							</tbody>		
							<thead>
								<tr>
									<td class="heading-row" colspan="3">
										Physical Specification
									</td>
								</tr>
							</thead>
							<tbody>
								<tr class="common-description">
									<td class="name">
										Dimensions (W x D x H)
									</td>
									<td class="value">
										<?php print $product[21] ?> x <?php print $product[22] ?> x <?php print $product[23] ?>
									</td>
								</tr>
								<tr class="common-description">
									<td class="name">
										Weight
									</td>
									<td class="value">
										<?php print $product[24] ?>
									</td>
								</tr>
								<tr>
									<td class="name">
										Color(s)
									</td>
									<td class="value">
										<?php print $product[25] ?>
									</td>
								</tr>                            
							</tbody>	
							<thead>
								<tr>
									<td class="heading-row" colspan="3">
										Warranty
									</td>
								</tr>
								</thead>
								<tbody>
								<tr class="common-description">
									<td class="name">
										Manufacturing Warranty
									</td>
									<td class="value">
										<?php print $product[26] ?>
									</td>
								</tr>                            
							</tbody>	
							</table>
						</div>
						<div class="pro-details-left-layer">
							<h2>Descriptions</h2>
							<h4 class="text-muted"><?php print $product[1] ?></h4>
							<p><?php print $product[27] ?></p>
						</div>
						<div class="pro-details-left-layer pro-ques-div">
							<div class="ques-header">
								<div class="ques">
									<h2 style="margin-bottom: 0;">Questions</h2>
									<p class="text-muted">
										Have question about this product? Get specific details about this product from expert.
									</p>
								</div>
								<div>
									<button class="ques-btn">
										Ask Question
									</button>
								</div>
							</div>
							<div class="ques-body">
								<span class="d-block"><i class="fas fa-comment-dots"></i></span>
								<small>
									There are no questions asked yet. Be the first one to ask a question.
								</small>
							</div>
						</div>
						<div class="pro-details-left-layer pro-ques-div">
							<div class="ques-header">
								<div class="ques">
									<h2 style="margin-bottom: 0;">Review(0)</h2>
									<p class="text-muted">
										Get specific details about this product from customers who own it.
									</p>
								</div>
								<div>
									<button class="ques-btn">
										Write a Review
									</button>
								</div>
							</div>
							<div class="ques-body">
								<span class="d-block"><i class="fas fa-reply-all"></i></span>
								<small>
									This product has no reviews yet. Be the first one to write a review.
								</small>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="pro-details-right-layer">
							<h2>Related Products</h2>
							<div class="related-product mt-3">
								<div>
									<img src="../assets/img/fpro20.jpg" alt="#">
								</div>
								<div style="margin-left: 6px;">
									<p style="margin-bottom: 0;"><a href="#">Dell Latitude 9510 2-in-1 Core i7 10th Gen 15.6" FHD Touch Laptop with Windows 10 Pro</a></p>
									<span>209,000৳</span><br>
									<div class="compare-link">
										<i class="fas fa-recycle mr-2"></i> Add to Compare
									</div>
								</div>
							</div>
							<div class="related-product mt-3">
								<div>
									<img src="../assets/img/fpro21.jpg" alt="#">
								</div>
								<div style="margin-left: 6px;">
									<p style="margin-bottom: 0;"><a href="#">
										Dell Latitude 9410 2-in-1 Core i7 10th Gen 14"FHD Multi-Touch Laptop</a></p>
									<span>182,000৳</span><br>
									<div class="compare-link">
										<i class="fas fa-recycle mr-2"></i> Add to Compare
									</div>
								</div>
							</div>
							<div class="related-product mt-3">
								<div>
									<img src="../assets/img/fpro22.jpg" alt="#">
								</div>
								<div style="margin-left: 6px;">
									<p style="margin-bottom: 0;"><a href="#">Microsoft Surface Pro 7 Core i7 10th Gen 16GB Ram 512GB SSD 12.3" Multi-Touch Display</a></p>
									<span>182,000৳</span><br>
									<div class="compare-link">
										<i class="fas fa-recycle mr-2"></i> Add to Compare
									</div>
								</div>
							</div>
							<div class="related-product mt-3">
								<div>
									<img src="../assets/img/fpro23.jpg" alt="#">
								</div>
								<div style="margin-left: 6px;">
									<p style="margin-bottom: 0;"><a href="#">Huawei Matebook X Pro Core i7 10th Gen MX250 2GB Graphics 13.9" 3k Touch Laptop</a></p>
									<span>185,000৳</span><br>
									<div class="compare-link">
										<i class="fas fa-recycle mr-2"></i> Add to Compare
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

	