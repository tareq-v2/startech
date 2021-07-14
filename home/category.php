
	<style>
			/* Category page css */

			#category-main-layer{
			    background-color: #F2F4F8;
			}
			#category-main-layer #category-header{
			    background-color: #fff;
			}
			#category-main-layer .breadcrumb a{
			    text-decoration: none;
			    color: rgb(41, 40, 40);
			    font-size: small;
			}
			#category-main-layer #category-header ul{
			    display: flex;
			    flex-direction: row;
			    padding: 10px 0 20px 0;
			}
			#category-main-layer #category-header ul li:first-child{
			    margin-right: 0 !important;
			}
			#category-main-layer #category-header ul li{
			    list-style: none;
			    margin-right: 5px;
			    border: 1px solid #d1cdcdb4;
			    padding: 0 12px 4px 12px;
			    border-radius: 50px;
			}
			#category-main-layer #category-header ul a{
			    text-decoration: none;
			    color: #000;
			    font-family: var(--main-font);
			    font-size: small;
			}
			#category-main-layer #category-header ul a:hover{
			    color: #fff;
			}
			#category-main-layer #category-header ul li:hover{
			    background-color: rgb(85, 85, 253);
			}
			#category-main-layer .accordion {
			    font-family: var(--main-font);
			    border-radius: 3px;
			    margin: 10px 20px;
			}
			#category-main-layer .accordion-header button{
			    background-color: #fff;
			    color: rgb(95, 94, 94);
			    font-size: 20px;
			    padding: 7px;
			}
			#category-main-layer .accordion-body{
			    padding: 7px;
			}
			#category-main-layer .range-btn{
			    display: flex;
			    flex-direction: row;
			    justify-content: space-between;
			}
			#category-main-layer .range-btn1{
			    border: 1px solid rgb(161, 160, 160);
			    background: transparent;
			    font-size: small;
			}
			#category-main-layer .accordion-body li{
			    list-style: none;
			    margin: 7px 0;
			    padding-left: 0;
			}
			#category-main-layer .accordion-body ul{
			    padding-left: 0 !important;
			}
			#category-main-layer .category-pro-header{
			    display: flex;
			    flex-direction: row;
			    justify-content: space-between;
			    background-color: #fff;
			    border-radius: 4px;
			    margin: 10px 15px 0 -10px;
			}
			#category-main-layer .category-pro-header p{
			    margin: 15px 20px;
			    font-weight: bold;
			    color: rgba(0, 0, 0, 0.637);
			    font-family: var(--main-font);
			}
			#category-main-layer .category-pro-header-right{
			    display: flex;
			    flex-direction: row;
			    margin: 10px 20px;
			    font-family: var(--main-font);
			    font-size: 14px;
			}
			#category-main-layer .category-pro-header-right label{
			    margin-left: 5px;
			    color: rgb(79, 78, 78);
			}
			#category-main-layer .category-pro-header-right select{
			    padding: 5px;
			    border: none;
			    border-radius: 3px;
			    background-color: #e9e5e5ab;
			}
			#category-main-layer select:focus-visible{
			    outline: none !important;
			}
			.category-card{
			    background-color: #fff;
			    margin: 10px 15px 0 0;
			    border-radius: 3px;
			}
			.category-card:hover{
			    box-shadow: 0px 0px 10px #e8dfdf;
			}
			.category-card .p-item-name{
			    margin-bottom: 10px;
			    font-weight: 600;
			    font-size: 14px;
			    padding: 0 0 0 5px;
			}
			.category-card .p-item-name a{
			    color: #000;
			    text-decoration: none;
			    display: inline-block;
			    text-align: center;
			    font-size: 12px;
			}
			.category-card img{
			    margin-top: 5px;
			}
			.category-card .p-item-name a:hover{
			    color: var(--root-color);
			    text-decoration: underline;
			}
			.category-card li{
			    font-size: 12px;
			    color: #666666;
			    position: relative;
			    line-height: 16px;
			    padding-bottom: 10px;
			}
			.category-card ul{
			    border-bottom: 1px solid rgba(109, 107, 107, 0.467);
			    margin: 0 10px;
			}
			.category-card h5{
			    text-align: center;
			    margin: 5px;
			    font-size: 17px;
			    font-family: var(--main-font);
			    color: var(--root-color);
			}
			.category-card span{
			    display: flex;
			    line-height: 34px;
			    background: rgba(55, 75, 185, 0.1);
			    color: #3749BB;
			    border-radius: 4px;
			    font-size: 12px;
			    font-weight: 600;
			    padding: 8px;
			    margin: 6px 10px;
			    cursor: pointer;
			    justify-content: center;
			    align-content: center;
			}
			.category-card .span-1:hover{
			    background: rgb(63, 84, 199);
			    color: #ffffff;
			}
			.category-card .span-2{
			    background: rgba(233, 232, 232, 0.241) !important;
			}
			.category-card .span-2:hover{
			    background: rgba(173, 178, 208, 0.336) !important;
			    color: #606083;
			}
	</style>	

    <div class="container-fluid px-0">
    	<section id="category-main-layer">
            <div id="category-header">
                <div class="container-fluid">
                    <div class="row">
                        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                            <ol class="breadcrumb my-2">
                              <li class="breadcrumb-item"><a href="index.php"><i class="fas fa-home"></i></a></li>
                              <li class="breadcrumb-item"><a href="#">product</a></li>
                              <li class="breadcrumb-item"><a href="#">All Laptop</a></li>
                              <li class="breadcrumb-item active" aria-current="page"><a href="#">Laptop</a></li>
                            </ol>
                          </nav>
                    </div>
                    <ul>
                        <li><a href="#">Razer</a></li>
                        <li><a href="#">Mi</a></li>
                        <li><a href="#">MacBook</a></li>
                        <li><a href="#">Surface</a></li>
                        <li><a href="#">Dell</a></li>
                        <li><a href="#">HP</a></li>
                        <li><a href="#">Lenovo</a></li>
                        <li><a href="#">Acer</a></li>
                        <li><a href="#">Avita_Laptop</a></li>
                        <li><a href="#">Asus</a></li>
                        <li><a href="#">Gigabyte</a></li>
                        <li><a href="#">MSI</a></li>
                        <li><a href="#">Chuwi</a></li>
                        <li><a href="#">Huawei</a></li>
                        <li><a href="#">Nexstgo</a></li>
                        <li><a href="#">Walton</a></li>
                        <li><a href="#">iLife</a></li>
                    </ul>
                </div>
            </div>
			<div class="category-body">
				<div class="container-flud">
					<div class="row">
						<div class="col-lg-3">
							<div class="accordion" id="accordionPanelsStayOpenExample">
								<div class="accordion-item">
								  <h2 class="accordion-header" id="panelsStayOpen-headingOne">
									<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne">
									  Price Range
									</button>
								  </h2>
								  <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
									<div class="accordion-body">
										<input type="range" class="form-range my-3" min="100" max="10000" step="0.5" id="customRange3">
										<div class="range-btn">
											<button class="range-btn1">Low</button>
											<button class="range-btn1">High</button>
										</div>
									</div>
								  </div>
								</div>
							</div>
							<div class="accordion" id="accordionPanelsStayOpenExample">
								<div class="accordion-item">
								  <h2 class="accordion-header" id="panelsStayOpen-headingOne">
									<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne">
									  Availability
									</button>
								  </h2>
								  <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
									<div class="accordion-body">
										<ul>
											<li><input type="checkbox">&nbsp;In Stock</li>
											<li><input type="checkbox">&nbsp;Pre Order</li>
											<li><input type="checkbox">&nbsp;Upcoming</li>
										</ul>
									</div>
								  </div>
								</div>
							</div>
							<div class="accordion" id="accordionPanelsStayOpenExample">
								<div class="accordion-item">
								  <h2 class="accordion-header" id="panelsStayOpen-headingOne">
									<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne">
									  Brand
									</button>
								  </h2>
								  <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
									<div class="accordion-body">
										<ul>
											<li><input type="checkbox">&nbsp;Razer</li>
											<li><input type="checkbox">&nbsp;Mi</li>
											<li><input type="checkbox">&nbsp;MacBook</li>
											<li><input type="checkbox">&nbsp;Surface</li>
											<li><input type="checkbox">&nbsp;Dell</li>
											<li><input type="checkbox">&nbsp;HP</li>
											<li><input type="checkbox">&nbsp;Lenovo</li>
											<li><input type="checkbox">&nbsp;Acer</li>
											<li><input type="checkbox">&nbsp;Avita_Laptop</li>
											<li><input type="checkbox">&nbsp;Asus</li>
											<li><input type="checkbox">&nbsp;Gigabyte</li>
											<li><input type="checkbox">&nbsp;MSI</li>
											<li><input type="checkbox">&nbsp;Chuwi</li>
											<li><input type="checkbox">&nbsp;Huawei</li>
											<li><input type="checkbox">&nbsp;Nexstgo</li>
											<li><input type="checkbox">&nbsp;Walton</li>
											<li><input type="checkbox">&nbsp;iLife</li>
										</ul>
									</div>
								  </div>
								</div>
							</div>
						</div>
						<div class="col-lg-9">
								<div class="container-fluid p-0">
									<div class="row">
										<div class="col-lg-12">
											<div class="category-pro-header">
													<div> <p>All Laptop</p> </div>
													<div class="category-pro-header-right"> 
														<div>
															<label>Show:</label>
															<select>
																<option value="10">10</option>
																<option value="20">20</option>
																<option value="30">30</option>
																<option value="40">40</option>
																<option value="50">50</option>
																<option value="60">60</option>
															</select>
														</div>
														<div>
															<label>Sort By:</label>
															<select>
																<option>Default</option>
																<option>Price (Low > High)</option>
																<option>Price (High > Low)</option>
															</select>
														</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="container-fluid p-0">
									<div class="row">
										<div class="col-lg-3 category-card-layer" style="padding-left: 2px;">
											<div class="category-card">
												<img src="../assets/img/fpro24.jpg" alt="#">
												<h4 class="p-item-name"><a href="#">Microsoft Surface ARC Bluetooth Mouse</a></h4>
												<ul>
													<li>Wireless Bluetooth Mouse</li>
													<li>Wireless: Bluetooth 4.0</li>
													<li>Wireless technology: 2.4GHz</li>
													<li>Wireless distance: 10m</li>
												</ul>
												<h5>10,500৳</h5>
												<span class="span-1"><i class="fas fa-shopping-cart">&nbsp;&nbsp;Buy Now</i></span>
												
												<span class="span-2"><i class="fas fa-atom">&nbsp;&nbsp;Add to Compare</i></span>
												<br>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="category-card">
												<img src="../assets/img/fpro25.jpg" alt="#">
												<h4 class="p-item-name"><a href="#">Microsoft Surface Pro Signature Type Cover Ice Blue</a></h4>
												<ul>
													<li>Full QWERTY keyboard, compact design</li>
													<li>Large Glass Trackpad</li>
													<li>Alcantara Surface</li>
												</ul>
												<h5>15,000৳</h5>
												<span class="span-1"><i class="fas fa-shopping-cart">&nbsp;&nbsp;Buy Now</i></span>
												
												<span class="span-2"><i class="fas fa-atom">&nbsp;&nbsp;Add to Compare</i></span>
												<br>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="category-card">
												<img src="../assets/img/fpro26.jpg" alt="#">
												<h4 class="p-item-name"><a href="#">Microsoft Surface Pro Signature Type Cover Poppy Red</a></h4>
												<ul>
													<li>Full QWERTY keyboard, compact design</li>
													<li>Mechanical Keyset & LED Backlit Keys</li>
													<li>Large Glass Trackpad</li>
												</ul>
												<h5>15,000৳</h5>
												<span class="span-1"><i class="fas fa-shopping-cart">&nbsp;&nbsp;Buy Now</i></span>
												<span class="span-2"><i class="fas fa-atom">&nbsp;&nbsp;Add to Compare</i></span>
												<br>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="category-card">
												<img src="../assets/img/fpro27.jpg" alt="#">
												<h4 class="p-item-name"><a href="#">Microsoft Surface Pro Type Cover Keyboard - Black</a></h4>
												<ul>
													<li>Supported platforms Surface Pro</li>
													<li>Moving (mechanical) keys</li>
													<li>Interface Magnetic</li>
													<li>Sensors Accelerometer</li>
												</ul>
												<h5>10,500৳</h5>
												<span class="span-1"><i class="fas fa-shopping-cart">&nbsp;&nbsp;Buy Now</i></span>
												
												<span class="span-2"><i class="fas fa-atom">&nbsp;&nbsp;Add to Compare</i></span>
												<br>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-3" style="padding-left: 2px;">
											<div class="category-card">
												<img src="../assets/img/fpro28.jpg" alt="#">
												<h4 class="p-item-name"><a href="#">HP 15s-du1086TU Intel Celeron N4020 15.6 inch FHD Laptop with Win 10</a></h4>
												<ul>
													<li>Intel Celeron Processor N4020 (4M Cache, up to 2.80 GHz)</li>
													<li>4GB DDR4 RAM + 1TB HDD</li>
													<li>15.6 inch Full HD 1920x1080</li>
												</ul>
												<h5>34,000৳</h5>
												<span class="span-1"><i class="fas fa-shopping-cart">&nbsp;&nbsp;Buy Now</i></span>
												
												<span class="span-2"><i class="fas fa-atom">&nbsp;&nbsp;Add to Compare</i></span>
												<br>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="category-card">
												<img src="../assets/img/fpro29.jpg" alt="#">
												<h4 class="p-item-name"><a href="#">Asus Vivobook X515MA Celeron N4020 15.6" FHD Laptop</a></h4>
												<ul>
													<li>Intel Celeron Processor N4020 (4M Cache, 1.10 GHz up to 2.80 GHz)</li>
													<li>4GB DDR4 RAM</li>
													<li>1TB HDD</li>
												</ul>
												<h5>35,500৳</h5>
												<span class="span-1"><i class="fas fa-shopping-cart">&nbsp;&nbsp;Buy Now</i></span>
												
												<span class="span-2"><i class="fas fa-atom">&nbsp;&nbsp;Add to Compare</i></span>
												<br>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="category-card">
												<img src="../assets/img/fpro30.jpg" alt="#">
												<h4 class="p-item-name"><a href="#">HP 15s-du1088TU Intel Pentium N5030 15.6 inch FHD Laptop with Win 10</a></h4>
												<ul>
													<li>Intel Pentium Silver 5030 1.10 To 3.10 GHz Processor</li>
													<li>4GB DDR4 RAM + 1TB HDD</li>
													<li>Windows 10 Home</li>
												</ul>
												<h5>35,500৳</h5>
												<span class="span-1"><i class="fas fa-shopping-cart">&nbsp;&nbsp;Buy Now</i></span>
												<span class="span-2"><i class="fas fa-atom">&nbsp;&nbsp;Add to Compare</i></span>
												<br>
											</div>
										</div>
										<div class="col-lg-3">
											<div class="category-card">
												<img src="../assets/img/fpro31.jpg" alt="#">
												<h4 class="p-item-name"><a href="#">Microsoft Surface Pro Type Cover Keyboard - Black</a></h4>
												<ul>
													<li>Supported platforms Surface Pro</li>
													<li>Moving (mechanical) keys</li>
													<li>Interface Magnetic</li>
													<li>Sensors Accelerometer</li>
												</ul>
												<h5>10,500৳</h5>
												<span class="span-1"><i class="fas fa-shopping-cart">&nbsp;&nbsp;Buy Now</i></span>
												
												<span class="span-2"><i class="fas fa-atom">&nbsp;&nbsp;Add to Compare</i></span>
												<br>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
    	</section>  
    </div>  