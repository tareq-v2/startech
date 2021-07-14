<?php
@session_start();
include("../database_connection/dbconnect.php");
$db = new startech_connection();
$fetch[0]="";
$fetch[1]="";
$fetch[2]="";
$fetch[3]="";
$fetch[4]="";
$fetch[5]="";

if(isset($_POST["add"])) {

	$userId = $_POST["user_id"];
	$adminUser = $_POST["user_name"];
	$adminMail = $_POST["user_email"];
	$adminPhone = $_POST["user_phone"];
	$adminPass = $_POST["user_password"];
	$adminCpass = $_POST["user_con_password"];
	$adminrole = $_POST["user_role"];

	if(!empty($adminMail) && !empty($adminPass)){
		if($adminPass==$adminCpass){
		$sql = $db->link->query("INSERT INTO create_admin (user_id, username, email, phone, password, re_password, role) VALUES ('$userId','$adminUser','$adminMail', '$adminPhone', '$adminPass', '$adminCpass', '$adminrole')");
			if($sql){
				echo "Update successful";
			}else{
				echo "Update Not successful";
			}
		}else{
			print "Password Not Match!!";
		}
	}
	else
	{
		print "Please Fillup All Fields!!";
	}
}

if(isset($_POST["update"]))
{
	$userId = $_POST["user_id"];
	$adminUser = $_POST["user_name"];
	$adminMail = $_POST["user_email"];
	$adminPhone = $_POST["user_phone"];
	$adminPass = $_POST["user_password"];
	$adminCpass = $_POST["user_con_password"];
	$adminrole = $_POST["user_role"];

	if(!empty($adminMail) && !empty($adminPass))
	{
		if($adminPass==$adminCpass)
		{
			$sql = $db->link->query("REPLACE INTO create_admin (user_id, username, email, phone, password, re_password, role) VALUES ('$userId','$adminUser','$adminMail', '$adminPhone', '$adminPass', '$adminCpass', '$adminrole')");
			
			if($sql){
				echo "Update successful";
			}else{
				echo "Update Not successful";
			}
		}
		else
		{
			print "Password Not Match!!";
		}
	}
	else
	{
		print "Please Fillup All Fields!!";
	}
}
if(isset($_GET["del"]))
	{
		$del = $db->link->query("DELETE FROM create_admin WHERE `user_id`='".$_GET["del"]."'");

		if($del)
			{
				echo "Delete Successfully";
				}
				else 
				{
					echo "Delete Unsuccessful";
				}
		}
if(isset($_GET["edit"]))
	{
		$select = $db->link->query("SELECT * FROM create_admin WHERE `user_id`='".$_GET["edit"]."'");
		$fetch=$select->fetch_array(); 
	}

?>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Create Admin</title>
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
					<h5><i class="fas fa-users"></i>&nbsp;&nbsp;Add Admin</h5>
				</div>
			</div>
		</div>
		<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<div class="row">
				<div class="col-2">
					<label for="user_id">User ID</label>
				</div>
				<div class="col-10">
					<input type="text" class="form-control" name="user_id" value="<?php print $fetch[0]; ?>">
				</div>
			</div>
			<div class="row">
				<div class="col-2">
					<label for="user_name">User Name</label>
				</div>
				<div class="col-10">
					<input type="text" class="form-control" name="user_name" value="<?php print $fetch[1]; ?>">
				</div>
			</div>
			<div class="row">
				<div class="col-2">
					<label for="user_email">Email</label>
				</div>
				<div class="col-10">
					<input type="email" class="form-control" name="user_email" value="<?php print $fetch[2]; ?>">
				</div>
			</div>
			<div class="row">
				<div class="col-2">
					<label for="user_phone">Phone Number</label>
				</div>
				<div class="col-10">
					<input type="number" class="form-control" name="user_phone" value="<?php print $fetch[3]; ?>">
				</div>
			</div>
			<div class="row">
				<div class="col-2">
					<label for="user_password">Password</label>
				</div>
				<div class="col-10">
					<input type="number" class="form-control" name="user_password" value="<?php print $fetch[4]; ?>">
				</div>
			</div>
			<div class="row">
				<div class="col-2">
					<label for="user_con_password">Re-enter Password</label>
				</div>
				<div class="col-10">
					<input type="number" class="form-control" name="user_con_password" value="<?php print $fetch[5]; ?>">
				</div>
			</div>
			<div class="row">
				<div class="col-2">
					<label for="user_role">Role</label>
				</div>
				<div class="col-10">
					<select name="user_role" class="form-control">
						<option value="1">Admin</option>
						<option value="1">Moderator</option>
					</select>
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