
<?php
@session_start();
include("../database_connection/dbconnect.php");
$db = new startech_connection();
$fetch[0]="";
$fetch[1]="";

if(isset($_POST["add"]))
    {
        $sliderid = $_POST["slider_id"];
        $urlName = $_POST["slider_url"];
        if(!empty($sliderid) && !empty($urlName))
        {
        $sql = $db->link->query("INSERT INTO sideimg (`sl`,`url_name`) VALUES ('$sliderid','$urlName')");

            if($sql)
            {
                $path="img/sideimg/$sliderid.jpg";
                move_uploaded_file($_FILES['side_image']['tmp_name'],$path);
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
        $sliderid = $_POST["slider_id"];
        $urlName = $_POST["slider_url"];
        if(!empty($sliderid) && !empty($urlName))
        {
        $sql = $db->link->query("REPLACE INTO sideimg (`sl`,`url_name`) VALUES ('$sliderid','$urlName')");

        if($sql)
            {
            $path="img/sliderimg/$sliderid.jpg";
            move_uploaded_file($_FILES['side_image']['tmp_name'],$path);
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
        $del = $db->link->query("DELETE FROM sideimg where `sl` = '".$_GET["del"]."'");

            if($del)
            {

                $path="img/sideimg/".$_GET["del"].".jpg";
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
                 $select = $db->link->query("SELECT * FROM sideimg where `sl` = '".$_GET["edit"]."'");
                 $fetch=$select->fetch_array(); 
            }

if($_SESSION['logstatus']==1){
?>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Add Side Image</title>
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
					<h5><i class="fas fa-users"></i>&nbsp;&nbsp;Add Side Image</h5>
				</div>
			</div>
		</div>
		<form method="POST" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<div class="row">
				<div class="col-2">
					<label for="slider_id">Side Image ID</label>
				</div>
				<div class="col-10">
					<input type="text" class="form-control" name="slider_id">
				</div>
			</div>
			<div class="row">
				<div class="col-2">
					<label for="slider_url">Side Image URL</label>
				</div>
				<div class="col-10">
					<input type="text" class="form-control" name="slider_url">
				</div>
			</div>
			<div class="row">
				<div class="col-2">
					<label for="side_image">Image</label>
				</div>
				<div class="col-10">
					<input type="file" class="form-control" name="side_image">
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
	print "You can't authorized to access this page ! <br><br>";
	print "<a href='../home/controlpanel.php'> Please Login </a>";
}
?>