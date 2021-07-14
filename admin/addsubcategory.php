<?php
@session_start();
include("../database_connection/dbconnect.php");
$db = new startech_connection();
$fetch_item[0]="";
$fetch_item[1]="";

if(isset($_POST["add"]))
    {   
        $subcId = $_POST["Sub_category_id"];
        $subcName = $_POST["sub_category_name"];
        $cName = $_POST["category_name"];
        $iName = $_POST["item_name"];

        $sql = $db->link->query("INSERT INTO sub_category_table (subc_id, sub_category_name, category_name, item_name) VALUES ('$subcId', '$subcName','$cName','$iName')");

        if($sql)
        {	
			$path="img/subcategoryimg/$subcId.jpg"; 
            move_uploaded_file($_FILES['sub_category_image']['tmp_name'],$path);
            echo "Add Successfully";
        }
        else 
        {
            echo "Add Unsuccessful";
        }
    }
    if(isset($_POST["update"]))
    {
        $subcId = $_POST["sub_category_id"];
        $subcName = $_POST["sub_category_name"];
        $cName = $_POST["category_name"];
        $iName = $_POST["item_name"];
        if(!empty($subcName) && !empty($cName) && !empty($iName))
        {
        $sql = $db->link->query("UPDATE `sub_category_table` SET `subc_id`='[$subcId]',`sub_category_name`='[$subcName]',`category_name`='[$cName]',`item_name`='[$iName]' WHERE `subc_id`='$subcId'");

        if($sql)
            {
				$path="img/subcategoryimg/$subcId.jpg";
				move_uploaded_file($_FILES['sub_category_image']['tmp_name'],$path);
                echo "Update Successfully";
            }else{
                echo "Update Unsuccessful";
            }
                
            }else{
                print "Please fill up all fields!!";
            }
    }
    if(isset($_GET["del"]))
            {
                $del = $db->link->query("DELETE FROM sub_category_table WHERE `subc_id` = '".$_GET["del"]."'");
                    if($del)
                    {
						$path="img/subcategoryimg/".$_GET["del"].".jpg";
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
                 $select = $db->link->query("SELECT * FROM sub_category_table WHERE `subc_id` = '".$_GET["edit"]."'");
                 $fetch_item=$select->fetch_array(); 
                  
            }
if($_SESSION['logstatus']==1)
{
?>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Startech Admin</title>
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
					<h5><i class="fas fa-users"></i>&nbsp;&nbsp;Add Sub-category</h5>
				</div>
			</div>
		</div>
		<form method="POST" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<div class="row">
				<div class="col-2">
					<label for="sub_category_id">Sub-category ID</label>
				</div>
				<div class="col-10">
					<input type="text" class="form-control" name="Sub_category_id" value="<?php print $fetch_item[0]?>">
				</div>
			</div>
			<div class="row">
				<div class="col-2">
					<label for="sub_category_name">Sub-category Name</label>
				</div>
				<div class="col-10">
					<input type="text" class="form-control" name="sub_category_name" value="<?php print $fetch_item[1]?>">
				</div>
			</div>
			<div class="row">
				<div class="col-2">
					<label for="category_name">Category Name</label>
				</div>
				<div class="col-10">
					<select name="category_name" class="form-control">
						<option>Select Category Name</option>
						<?php
							$selectCategory = $db->link->query("SELECT * from `category_table`");
							while($fetchCategory = $selectCategory->fetch_array()){
								print "<option>$fetchCategory[1]</option>";
							}

						?>
					</select>
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
					<label for="sub_category_image">Image</label>
				</div>
				<div class="col-10">
					<input type="file" class="form-control" name="sub_category_image">
				</div>
			</div>
			<div class="row">
				<div class="col-12" style="text-align: center;">
					<button class="btn btn-primary" name="add">Add</button>
					<button class="btn btn-success" name="update">Update</button>
					<button class="btn btn-warning" name="view" style="padding: auto 0;">View</button>
				</div>
			</div>
		</form>
		<?php
			if(isset($_POST["view"]))
			{
		?>
		<table class="table table-bordered">
			<tr>
				<td>Sub-Category ID</td>
				<td>Sub-Category Name</td>
				<td>Category Name</td>
				<td>Item name</td>
				<td>Image</td>
				<td>Action</td>
			</tr>
			<?php
				$sql=$db->link->query("SELECT * FROM sub_category_table");
				$i=1;
				while($fetch=$sql->fetch_array())
				{
				?>
				<tr>
					<td><?php echo $fetch[0];?></td>
					<td><?php echo $fetch[1];?></td>
					<td><?php echo $fetch[2];?></td>
					<td><?php echo $fetch[3];?></td>
					<td><img src="img/subcategoryimg/<?php echo $fetch[0];?>.jpg" height="100" width="100"></td>
					<td>
						<a href="addsubcategory.php?edit=<?php echo $fetch[0];?>" class="btn btn-info">Edit</a>
						<a href="addsubcategory.php?del=<?php echo $fetch[0];?>" class="btn btn-danger">Delete</a>
					</td>
				</tr>
				<?php
				}
			?>
		</table>
		<?php
			}
		?>
	</div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.6.22/js/uikit.min.js"></script>
	<script src="../assets/js/jquery-3.5.1.slim.min.js"></script>
	<script src="../assets/js/bootstrap.bundle.min.js"></script>
	<script src="./js/admin.js"></script>
</body>
<?php
}
else
{
    print "<h1>You can't authorize to see this page!</h1>";
    print "<a href='../home/controlpanel.php'> Please login</a>";
}
?>