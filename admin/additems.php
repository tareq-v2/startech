<?php
@session_start();
include("../database_connection/dbconnect.php");

$db = new startech_connection();
$fetch[0]="";
$fetch[1]="";
if(isset($_POST["add"]))
    {
        $itemId = $_POST["item_id"];
        $iName = $_POST["item_name"];
        if(!empty($itemId) && !empty($iName))
        {
        $sql = $db->link->query("INSERT INTO item_table (`item_id`,`item_name`) VALUES ('$itemId','$iName')");

            if($sql)
            {
                $path="img/itemimg/$itemId.jpg";
                move_uploaded_file($_FILES['item_image']['tmp_name'],$path);
                echo "Add Successfully";
            }
            else 
            {
                echo "Add Unsuccessful";
            }
        }
        else{
            print "Please fill up all fields!!";
        }
    }

if(isset($_POST["update"]))
    {
        $itemId = $_POST["item_id"];
        $iName = $_POST["item_name"];
        if(!empty($itemId) && !empty($iName))
        {
        $sql = $db->link->query("REPLACE INTO  item_table (`item_id`,`item_name`) VALUES ('$itemId','$iName')");

        if($sql)
            {
            $path="img/itemimg/$itemId.jpg";
            move_uploaded_file($_FILES['item_image']['tmp_name'],$path);
            echo "Update Successfully";
            }else 
                {
                    echo "Update Unsuccessful";
                }
                
            }
            else{
                print "Please fill up all fields!!";
            }
    }
if(isset($_GET["del"]))
            {
                $del = $db->link->query("DELETE FROM item_table where `item_id` = '".$_GET["del"]."'");

                    if($del)
                    {

                        $path="img/itemimg/".$_GET["del"].".jpg";
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
                 $select = $db->link->query("SELECT * FROM item_table where `item_id` = '".$_GET["edit"]."'");
                 $fetch=$select->fetch_array(); 
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
					<h5><i class="fas fa-users"></i>&nbsp;&nbsp;Add Item</h5>
				</div>
			</div>
		</div>
        <form method="POST" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<div class="row">
				<div class="col-2">
					<label for="item_id">Item ID</label>
				</div>
				<div class="col-10">
					<input type="text" class="form-control" name="item_id" value="<?php print $fetch[0] ?>">
				</div>
			</div>
			<div class="row">
				<div class="col-2">
					<label for="item_name">Item Name</label>
				</div>
				<div class="col-10">
					<input type="text" class="form-control" name="item_name" value="<?php print $fetch[1] ?>">
				</div>
			</div>
			<div class="row">
				<div class="col-2">
					<label for="item_image">Image</label>
				</div>
				<div class="col-10">
					<input type="file" class="form-control" name="item_image">
				</div>
			</div>
			<div class="row">
				<div class="col-12" style="text-align: center;">
					<button class="btn btn-primary" name="add">Add</button>
					<button class="btn btn-success" name="update">Update</button>
					<button class="btn btn-warning" name="view">View</button>
				</div>
			</div>
		</form>
		<?php
            if(isset($_POST["view"]))
            {
            ?>
            <table class="table table-bordered">
                <tr>
                        <td>Item ID</td>
                        <td>Item Name</td>
                        <td>Picture</td>
                        <td>Action</td>
                </tr>
                <?php
                        $sql=$db->link->query("SELECT * from item_table");
                        $i=1;
                        while($fetch=$sql->fetch_array())
                        {?>
                            <tr>
                                    <td><?php echo $fetch[0];?></td>
                                    <td><?php echo $fetch[1];?></td>
                                    <td><img src="img/itemimg/<?php echo $fetch[0];?>.jpg" height="100" width="100"></td>
                               
                                    <td>
                                        <a href="additems.php?edit=<?php echo $fetch[0];?>" class="btn btn-info">Edit</a>
                                        <a href="additems.php?del=<?php echo $fetch[0];?>" class="btn btn-danger">Delete</a>
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