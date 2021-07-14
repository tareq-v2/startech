<?php
@session_start();
include('../database_connection/dbconnect.php');
$db = new startech_connection();
	$fetch[0]="";
	$fetch[1]="";
	$fetch[2]="";
	$fetch[3]="";
	$fetch[4]="";
	$fetch[5]="";
	$fetch[6]="";
	$fetch[6]="";
	$fetch[7]="";
	$fetch[8]="";

	if(isset($_POST["add"]))
		{
		$pId = $_POST["product_id"];
		$iName = $_POST["item_name"];
		$cName = $_POST["category_name"];
		$subcName = $_POST["sub_category_name"];
		$bName = $_POST["brand_name"];
		$pName = $_POST["product_name"];
		$description = $_POST["description"];
		$sPrice = $_POST["sell_price"];
		$mesurement = $_POST["measurement"];

		$sql = $db->link->query("INSERT INTO product_table (product_id, item_name, category_name, subc_name, brand_name, product_name, description, sale_price, mesurement) VALUES ('$pId','$iName','$cName','$subcName','$bName','$pName','$description','$sPrice', '$mesurement')");

		if($sql)
		{   
			$path="img/productimg/$pId.jpg";
			move_uploaded_file($_FILES['product_image']['tmp_name'],$path);
			echo "Add Successfully";
		}
		else 
		{
		echo "Add Unsuccessful";
		}
		}
		if(isset($_POST["update"]))
		{
		$pId = $_POST["product_id"];
		$iName = $_POST["item_Name"];
		$cName = $_POST["categeory_name"];
		$subcName = $_POST["sub_category_name"];
		$bName = $_POST["brand_name"];
		$pName = $_POST["product_name"];
		$description = $_POST["description"];
		$sPrice = $_POST["sell_price"];
		$mesurement = $_POST["measurement"];

		$sql = $db->link->query("REPLACE INTO product_table (product_id, item_name, category_name, subc_name, brand_name, product_name, description, sale_price, mesurement) VALUES ('$pId','$iName','$cName','$subcName','$bName','$pName','$description','$sPrice', '$mesurement')");

		if($sql)
			{
			$path="img/productimg/$pId.jpg";
			move_uploaded_file($_FILES['product_image']['tmp_name'],$path);
			echo "Update Successfully";
			}else{
			echo "Update Unsuccessful";
			}
				
			}
			else{
				print "Please fill up all fields!!";
			}
		
		if(isset($_GET["del"]))
			{
				$del = $db->link->query("DELETE FROM product_table where `product_id` = '".$_GET["del"]."'");

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
						$select = $db->link->query("SELECT * FROM product_table where `product_id` = '".$_GET["edit"]."'");
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
			<div class="row">
				<div class="col-2">
					<label for="product_id">Product ID</label>
				</div>
				<div class="col-10">
					<input type="text" class="form-control" name="product_id" value="<?php print $fetch[0] ?>">
				</div>
			</div>
			<div class="row">
				<div class="col-2">
					<label for="product_name">Product Name</label>
				</div>
				<div class="col-10">
					<input type="text" class="form-control" name="product_name" value="<?php print $fetch[1] ?>">
				</div>
			</div>
			<div class="row">
				<div class="col-2">
					<label for="sell_price">Sell price</label>
				</div>
				<div class="col-10">
					<input type="text" class="form-control" name="sell_price" value="<?php print $fetch[2] ?>">
				</div>
			</div>
			<div class="row">
				<div class="col-2">
					<label for="measurement">Measurement</label>
				</div>
				<div class="col-10">
					<input type="text" class="form-control" name="measurement" value="<?php print $fetch[3] ?>">
				</div>
			</div>
			<div class="row">
				<div class="col-2">
					<label for="description">Description</label>
				</div>
				<div class="col-10">
					<input type="text" class="form-control" name="description" value="<?php print $fetch[4] ?>">
				</div>
			</div>
			<div class="row">
				<div class="col-2">
					<label for="item_name">Item Name</label>
				</div>
				<div class="col-10">
					<select name="item_name" class="form-control">
						<option>Select Item Name</option>
						<?php
						$selectItem = $db->link->query("SELECT * from `item_table`");
						while($fetchItem = $selectItem->fetch_array()){
							print "<option>$fetchItem[1]</option>";
						}
						?>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="col-2">
					<label for="category_name">Category Name</label>
				</div>
				<div class="col-10">
					<select name="category_name"class="form-control">
						<option>Select Category Name</option>
						<?php
							$selectItem= $db->link->query("SELECT * FROM `category_table`");
							while($fetchitem=$selectItem->fetch_array())
							{
								print "<option>$fetchitem[1]</option>";
							}
						?>
                    			</select>
				</div>
			</div>
			<div class="row">
				<div class="col-2">
					<label for="sub_category_name">Sub category Name</label>
				</div>
				<div class="col-10">
					<select name="sub_category_name"class="form-control">
						<option>Select Sub-Category</option>
						<?php
							$selectItem= $db->link->query("SELECT * FROM `sub_category_table`");
							while($fetchitem=$selectItem->fetch_array())
							{
								print "<option>$fetchitem[1]</option>";
							}
						?>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="col-2">
					<label for="brand_name">Brand Name</label>
				</div>
				<div class="col-10">
					 <input type="text" name="brand_name" class="form-control">
				</div>
			</div>
			<div class="row">
				<div class="col-2">
					<label for="product_image">Image</label>
				</div>
				<div class="col-10">
					<input type="file" class="form-control" name="product_image">
				</div>
			</div>
			<div class="row">
				<div class="col-12" style="text-align: center;">
					<button class="btn btn-primary" name="add">Add</button>
					<button class="btn btn-success" name="update">Update</button>
				</div>
			</div>
		</form>
	</div>

    	<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.6.22/js/uikit.min.js"></script>
	<script src="../assets/js/jquery-3.5.1.slim.min.js"></script>
	<script src="../assets/js/bootstrap.bundle.min.js"></script>
	<script src="./js/admin.js"></script>
</body>
<?php
}else{
	print "You Can't Authorized to access this page! <br><br><br>" ;
	print "<a href='../home/controlpanel.php'>Please Login</a>";
}
?>