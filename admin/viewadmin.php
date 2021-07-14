<?php

@session_start();
include("../database_connection/dbconnect.php");
$db = new startech_connection();

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
        
		
    <div class="container my-5">
    	<div class="row">
			<div class="col-12">
				<div class="form-title-layer">
					<h5><i class="fas fa-users"></i>&nbsp;&nbsp;Admins</h5>
				</div>
			</div>
		</div>
    	<table class="table table-bordered mt-4">
        <tr>
            <td>User ID</td>
            <td>User Name</td>
            <td>Email</td>
            <td>Phone</td>
            <td>Password</td>
            <td>Confirm pass</td>
            <td>Role</td>
			<td>Action</td>
        </tr>
        <?php
            $sql=$db->link->query("SELECT `user_id`, `username`, `email`, `phone`, `password`, `re_password`, `role` FROM `create_admin`");
        	while($fetch=$sql->fetch_array())
        {?>
        <tr>
        	<td><?php echo $fetch[0];?></td>
        	<td><?php echo $fetch[1];?></td>
        	<td><?php echo $fetch[2];?></td>
        	<td><?php echo $fetch[3];?></td>
        	<td><?php echo $fetch[4];?></td>
        	<td><?php echo $fetch[5];?></td>
			<td><?php echo $fetch[0];?></td>
            <td>
               <a href="createadmin.php?edit=<?php echo $fetch[0];?>" class="btn btn-info">Edit</a>
               <a href="createadmin.php?del=<?php echo $fetch[0];?>" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        <?php
            }
        ?>
    </table>
    </div>
                           

    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.6.22/js/uikit.min.js"></script>
	<script src="../assets/js/jquery-3.5.1.slim.min.js"></script>
	<script src="../assets/js/bootstrap.bundle.min.js"></script>
	<script src="./js/admin.js"></script>
</body>