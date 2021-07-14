<?php
@session_start();
include("../database_connection/dbconnect.php");
$db = new startech_connection();


if($_SESSION['logstatus']==1){
?>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Add Slider</title>
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
					<h5><i class="fas fa-users"></i>&nbsp;&nbsp;My Slider</h5>
				</div>
			</div>
		</div>
        <table class="table table-bordered">
            <tr>
                <td>Slider ID</td>
                <td>Slider Name</td>
                <td>Picture</td>
                <td>Action</td>
            </tr>
            <?php
                $sql=$db->link->query("SELECT * from slider");
                while($fetch=$sql->fetch_array())
                {?>
                    <tr>
                        <td><?php echo $fetch[0];?></td>
                        <td><?php echo $fetch[1];?></td>
                        <td><img src="img/sliderimg/<?php echo $fetch[0];?>.jpg" height="100" width="100"></td>
                   
                        <td>
                            <a href="addslider.php?edit=<?php echo $fetch[0];?>" class="btn btn-info">Edit</a>
                            <a href="addslider.php?del=<?php echo $fetch[0];?>" class="btn btn-danger">Delete</a>
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
<?php
}else{
	print "You can't authorized to access this page ! <br><br>";
	print "<a href='../home/controlpanel.php'> Please Login </a>";
}

?>