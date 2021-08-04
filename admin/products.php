
<?php
@session_start();
include('../database_connection/dbconnect.php');
$db = new startech_connection();
	$fetch[0] = $fetch[1] = $fetch[2] = $fetch[3] =  $fetch[4] = $fetch[5] = $fetch[6] = $fetch[7] = $fetch[8] = $fetch[9] = $fetch[10] = $fetch[11] = $fetch[12] = $fetch[13] = $fetch[14] = $fetch[15] = $fetch[16] = $fetch[17] = $fetch[18] = $fetch[19] = $fetch[20] = $fetch[21] = $fetch[22] = $fetch[23] = $fetch[24] = $fetch[25] = $fetch[26] = $fetch[27] = "";

	if(isset($_POST["add"])){
		$pId = $_POST["product_id"];
		$pName = $_POST["product"];
		$item = $_POST["item"];
		$brand = $_POST["brand"];
		$category = $_POST["category"];
		$subCategory = $_POST["sub_category"];
		$price = $_POST["price"];
		$regularPrice = $_POST["regular_price"];
		$status = $_POST["status"];
		$processor = $_POST["processor"];
		$dislay = $_POST["display"];
		$memory = $_POST["memory"];
		$storge = $_POST["storage"];
		$graphics = $_POST["graphics"];
		$operating_system = $_POST["operating_system"];
		$keyboard = $_POST["keyboard"];
		$optical_drive = $_POST["optical_drive"];
		$webCam = $_POST["webCam"];
		$wiFi = $_POST["wiFi"];
		$bluetooth = $_POST["bluetooth"];
		$slots = $_POST["slots"];
		$height = $_POST["height"];
		$width = $_POST["width"];
		$depth = $_POST["depth"];
		$weight = $_POST["weight"];
		$color = $_POST["color"];
		$warrenty = $_POST["warrenty"];
		$description = $_POST["description"];

		$sql = $db->link->query("INSERT INTO `product`(`product_id`, `product_name`, `item_name`, `brand_name`, `category_name`, `sub_category_name`, `price`, `regular_price`, `status`, `processor`, `display`, `memory`, `storage`, `graphics`, `operating_system`, `keyboard`, `optical_drive`, `webcam`, `wifi`, `bluetooth`, `slots`, `height`, `width`, `depth`, `weight`, `color`, `warranty`, `description`) VALUES ('$pId','$pName','$item','$brand','$category','$subCategory','$price','$regularPrice','$status','$processor','$dislay','$memory','$storge','$graphics','$operating_system','$keyboard','$optical_drive','$webCam','$wiFi','$bluetooth','$slots','$height','$width','$depth','$weight','$color','$warrenty','$description')");
		if($sql){   
			$path = "img/productimg/$pId.jpg";
			move_uploaded_file($_FILES['product_image']['tmp_name'], $path);
			echo "Add Successfully";
		}else{
			echo "Add Unsuccessful";
		}
	}

		if(isset($_POST["update"]))
		{
		$pId = $_POST["product_id"];
		$pName = $_POST["product"];
		$item = $_POST["item"];
		$brand = $_POST["brand"];
		$category = $_POST["category"];
		$subCategory = $_POST["sub_category"];
		$price = $_POST["price"];
		$regularPrice = $_POST["regular_price"];
		$status = $_POST["status"];
		$processor = $_POST["processor"];
		$dislay = $_POST["display"];
		$memory = $_POST["memory"];
		$storge = $_POST["storage"];
		$graphics = $_POST["graphics"];
		$operating_system = $_POST["operating_system"];
		$keyboard = $_POST["keyboard"];
		$optical_drive = $_POST["optical_drive"];
		$webCam = $_POST["webCam"];
		$wiFi = $_POST["wiFi"];
		$bluetooth = $_POST["bluetooth"];
		$slots = $_POST["slots"];
		$height = $_POST["height"];
		$width = $_POST["width"];
		$depth = $_POST["depth"];
		$weight = $_POST["weight"];
		$color = $_POST["color"];
		$warrenty = $_POST["warrenty"];
		$description = $_POST["description"];

		$sql = $db->link->query("REPLACE INTO `product`(`product_id`, `product_name`, `item_name`, `brand_name`, `category_name`, `sub_category_name`, `price`, `regular_price`, `status`, `processor`, `display`, `memory`, `storage`, `graphics`, `operating_system`, `keyboard`, `optical_drive`, `webcam`, `wifi`, `bluetooth`, `slots`, `height`, `width`, `depth`, `weight`, `color`, `warranty`, `description`) VALUES ('$pId','$pName','$item','$brand','$category','$subCategory','$price','$regularPrice','$status','$processor','$dislay','$memory','$storge','$graphics','$operating_system','$keyboard','$optical_drive','$webCam','$wiFi','$bluetooth','$slots','$height','$width','$depth','$weight','$color','$warrenty','$description')");

		if($sql)
			{
			$path="img/productimg/$pId.jpg";
			move_uploaded_file($_FILES['product_image']['tmp_name'],$path);
			echo "Update Successfully";
			}else{
			echo "Update Unsuccessful";
			}
				
			}
			
		
		if(isset($_GET["del"]))
			{
				$del = $db->link->query("DELETE FROM product where `product_id` = '".$_GET["del"]."'");

					if($del)
					{

						$path="img/productimg/".$_GET["del"].".jpg";
						unlink($path);
						echo "Delete Successfully";
					}
					else 
					{
						echo "Delete Unsuccessful";
					}
			}
		if(isset($_GET["edit"]))
				{
				$select = $db->link->query("SELECT * FROM product where `product_id` = '".$_GET["edit"]."'");
				$fetch=$select->fetch_array(); 
				}

if($_SESSION['logstatus'] == 1)
{
?>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Add Product</title>
	<link rel="stylesheet" type="text/css" href="../assets/webfonts/all.min.css">
	<link rel="stylesheet" href="https://fonts.maateen.me/adorsho-lipi/font.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/fontawesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.6.22/css/uikit.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
	<link rel="stylesheet" type="text/css" href="css/admin-style.css">
	<script src="https://alhelalacademy.edu.bd/js/vendor/jquery-1.11.3.min.js"></script>
	<script type="text/javascript">

		function searchCategory()
		{
			var item = $('#item').val();
			$.post('searchCat.php',{itemName:item}, 
				function(result)
				{
					$("#category").html(result);
				});

		}

	</script>
</head>
<body>
    <div class="container-fluid add-admin-form">
		<div class="row">
			<div class="col-12">
				<div class="form-title-layer">
					<h5><i class="fas fa-users"></i>&nbsp;&nbsp;Add Product</h5>
				</div>
			</div>
		</div>
		<form method="POST" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<!-- row 1 -->
			<div class="row">
				<div class="col-2">
					<label for="product_id">Product ID</label>
				</div>
				<div class="col-10">
					<input type="number" class="form-control" name="product_id" value="<?php print $fetch[0] ?>">
				</div>
			</div>
			<!-- row 2 -->
			<div class="row">
				<div class="col-2">
					<label for="product">Product Name</label>
				</div>
				<div class="col-10">
					<input type="text" class="form-control" name="product" value="<?php print $fetch[1] ?>">
				</div>
			</div>
			<!-- row 3 -->
			<div class="row">
				<div class="col-2">
					<label for="item">Item</label>
				</div>
				<div class="col-10">
					<select name="item" class="form-control" id="item" onchange="return searchCategory()">
						<option>Select Name</option>
						<?php
						$selectItem = $db->link->query("SELECT * from `item_table`");
						while($fetchItem = $selectItem->fetch_array()){
							print "<option>$fetchItem[1]</option>";
						}
						?>
					</select>
				</div>
			</div>
			<!-- row 4 -->
			<div class="row">
				<div class="col-2">
					<label for="brand">Brand</label>
				</div>
				<div class="col-10">
					<select name="brand" class="form-control">
						<option>Select Name</option>
						<?php
						$selectItem = $db->link->query("SELECT * from `brand_table`");
						while($fetchItem = $selectItem->fetch_array()){
							print "<option>$fetchItem[1]</option>";
						}
						?>
					</select>
				</div>
			</div>
			<!-- row 5 -->
			<div class="row">
				<div class="col-2">
					<label for="category">Category</label>
				</div>
				<div class="col-10">
					<select name="category" class="form-control" id="category">
						<option>Select Name</option>
					</select>
				</div>
			</div>
			<!-- row 6 -->
			<div class="row">
				<div class="col-2">
					<label for="sub_category">Sub-Category</label>
				</div>
				<div class="col-10">
					<select name="sub_category" class="form-control">
						<option>Select Name</option>
						<?php
						$selectSubc = $db->link->query("SELECT * from `sub_category_table`");
						while($fetchSubc = $selectSubc->fetch_array()){
							print "<option>$fetchSubc[1]</option>";
						}
						?>
					</select>
				</div>
			</div>
			<!-- row 7 -->
			<div class="row">
				<div class="col-2">
					<label for="price">Price</label>
				</div>
				<div class="col-10">
					<input type="text" class="form-control" name="price" value="<?php print $fetch[6] ?>">
				</div>
			</div>
			<!-- row 8 -->
			<div class="row">
				<div class="col-2">
					<label for="regular_price">Regular Price</label>
				</div>
				<div class="col-10">
					<input type="text" class="form-control" name="regular_price" value="<?php print $fetch[7] ?>">
				</div>
			</div>
			<!-- row 9 -->
			<div class="row">
				<div class="col-2">
					<label for="status">Status</label>
				</div>
				<div class="col-10">
					<select name="status" class="form-control">
						<option>In Stock</option>
						<option>Out of Stock</option>
						<option>Pre-order</option>
					</select>
				</div>
			</div>
			<!-- row 10 -->
			<div class="row">
				<div class="col-2">
					<label for="processor">Processor</label>
				</div>
				<div class="col-10">
					<input type="text" class="form-control" name="processor" value="<?php print $fetch[9] ?>">
				</div>
			</div>
			<!-- row 11 -->
			<div class="row">
				<div class="col-2">
					<label for="display">Display</label>
				</div>
				<div class="col-10">
					<input type="text" class="form-control" name="display" value="<?php print $fetch[10] ?>">
				</div>
			</div>
			<!-- row 12 -->
			<div class="row">
				<div class="col-2">
					<label for="memory">Memory</label>
				</div>
				<div class="col-10">
					<input type="text" class="form-control" name="memory" value="<?php print $fetch[11] ?>">
				</div>
			</div>
			<!-- row 13 -->
			<div class="row">
				<div class="col-2">
					<label for="storage">Storage</label>
				</div>
				<div class="col-10">
					<input type="text" class="form-control" name="storage" value="<?php print $fetch[12] ?>">
				</div>
			</div>
			<!-- row 14 -->
			<div class="row">
				<div class="col-2">
					<label for="graphics">Graphics</label>
				</div>
				<div class="col-10">
					<input type="text" class="form-control" name="graphics" value="<?php print $fetch[13] ?>">
				</div>
			</div>
			<!-- row 15 -->
			<div class="row">
				<div class="col-2">
					<label for="operating_system">Operating system</label>
				</div>
				<div class="col-10">
					<input type="text" class="form-control" name="operating_system" value="<?php print $fetch[14] ?>">
				</div>
			</div>
			<!-- row 16 -->
			<div class="row">
				<div class="col-2">
					<label for="keyboard">Keyboard</label>
				</div>
				<div class="col-10">
					<input type="text" class="form-control" name="keyboard" value="<?php print $fetch[15] ?>">
				</div>
			</div>
			<!-- row 17 -->
			<div class="row">
				<div class="col-2">
					<label for="optical_drive">Optical drive</label>
				</div>
				<div class="col-10">
					<input type="text" class="form-control" name="optical_drive" value="<?php print $fetch[16] ?>">
				</div>
			</div>
			<!-- row 18 -->
			<div class="row">
				<div class="col-2">
					<label for="webCam">WebCam</label>
				</div>
				<div class="col-10">
					<input type="text" class="form-control" name="webCam" value="<?php print $fetch[17] ?>">
				</div>
			</div>
			<!-- row 19 -->
			<div class="row">
				<div class="col-2">
					<label for="wiFi">Wi-Fi</label>
				</div>
				<div class="col-10">
					<input type="text" class="form-control" name="wiFi" value="<?php print $fetch[18] ?>">
				</div>
			</div>
			<!-- row 20-->
			<div class="row">
				<div class="col-2">
					<label for="bluetooth">Bluetooth</label>
				</div>
				<div class="col-10">
					<input type="text" class="form-control" name="bluetooth" value="<?php print $fetch[19] ?>">
				</div>
			</div>
			<!-- row 21 -->
			<div class="row">
				<div class="col-2">
					<label for="slots">Slots</label>
				</div>
				<div class="col-10">
					<input type="text" class="form-control" name="slots" value="<?php print $fetch[20] ?>">
				</div>
			</div>
			<!-- row 22 -->
			<div class="row">
				<div class="col-2">
					<label for="height">Height</label>
				</div>
				<div class="col-10">
					<input type="text" class="form-control" name="height" value="<?php print $fetch[21] ?>">
				</div>
			</div>
			<!-- row 23 -->
			<div class="row">
				<div class="col-2">
					<label for="width">Width</label>
				</div>
				<div class="col-10">
					<input type="text" class="form-control" name="width" value="<?php print $fetch[22] ?>">
				</div>
			</div>
			<!-- row 24 -->
			<div class="row">
				<div class="col-2">
					<label for="depth">Depth</label>
				</div>
				<div class="col-10">
					<input type="text" class="form-control" name="depth" value="<?php print $fetch[23] ?>">
				</div>
			</div>
			<!-- row 25 -->
			<div class="row">
				<div class="col-2">
					<label for="weight">Weight</label>
				</div>
				<div class="col-10">
					<input type="text" class="form-control" name="weight" value="<?php print $fetch[24] ?>">
				</div>
			</div>
			<!-- row 26 -->
			<div class="row">
				<div class="col-2">
					<label for="color">Color</label>
				</div>
				<div class="col-10">
					<input type="text" class="form-control" name="color" value="<?php print $fetch[25] ?>">
				</div>
			</div>
			<!-- row 27 -->
			<div class="row">
				<div class="col-2">
					<label for="warrenty">Warrenty</label>
				</div>
				<div class="col-10">
					<input type="text" class="form-control" name="warrenty" value="<?php print $fetch[26] ?>">
				</div>
			</div>
			<!-- row 28 -->
			<div class="row">
				<div class="col-2">
					<label for="description">Description</label>
				</div>
				<div class="col-10">
					<input type="text" class="form-control" name="description" value="<?php print $fetch[1] ?>">
				</div>
			</div>
			<!-- row 29 -->
			<div class="row">
				<div class="col-2">
					<label for="product_image">Image</label>
				</div>
				<div class="col-10">
					<input type="file" class="form-control" name="product_image">
				</div>
			</div>
			<!-- row 30 -->
			<div class="row">
				<div class="col-12" style="text-align: center;">
					<button class="btn btn-primary" name="add">Add</button>
					<button class="btn btn-success" name="update">Update</button>
				</div>
			</div>
		</form>
	</div>


</body>
<?php
}else{
	print "You Can't Authorized to access this page! <br><br><br>" ;
	print "<a href='../home/controlpanel.php'>Please Login</a>";
}
?>