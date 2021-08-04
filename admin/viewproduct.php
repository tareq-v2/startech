<?php
@session_start();
include("../database_connection/dbconnect.php");
$db = new startech_connection();

if($_SESSION['logstatus']==1)
{
?>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Add Category</title>
	<link rel="stylesheet" type="text/css" href="../assets/webfonts/all.min.css">
	<link rel="stylesheet" href="https://fonts.maateen.me/adorsho-lipi/font.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/fontawesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.6.22/css/uikit.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
	<link rel="stylesheet" type="text/css" href="css/admin-style.css">
</head>
<style>
    body .container-fluid{
        position: relative;
    }
    a{
        text-decoration: none;
    }
    a:hover{
        text-decoration: none;
    }
    #deleteSpan {
        position: absolute;
        left: 32%;
        top: 70%;
        height: 100px;
        width: 300px;
        margin-top: 100px;
        background-color: red;
        opacity: 7;
        display: none;
    }
    #deleteSpan h6{
        text-align: center;
        margin: 25px 0;
        font-size: 13px;
        font-family: cursive;
        color: #f1f1f1;
    }
    .spanbtn{
        margin: 20px 5px 5px 5px;
        padding: 0 7px;
        border-radius: none !important;
        border-radius: 3px;
    }
    .spanbtn:hover{
        box-shadow: 0 0 2px #000;
    }
    .spanbtn:focus{
        box-shadow: none !important;
    }
    .table td{
        font-size: 12px;
        font-family: sans-serif;
    }
</style>
<body>
   <div class="container-fluid">
   	 <div class="row">
		<div class="col-12">
			<div class="form-title-layer">
				<h5><i class="fas fa-users"></i>&nbsp;&nbsp;All Products</h5>
			</div>
		</div>
	</div>
    <table class="table table-bordered">
        <tr>
            <td>Product ID</td>
            <td>Product Name</td>
            <td>Item Name</td>
            <td>Brand Name</td>
            <td>Category name</td>
            <td>Sub-category Name</td>
            <td>Price</td>
            <td>Regular price</td>
            <td>Status</td>
            <td>Processor</td>
            <td>Display</td>
            <td>Memory</td>
            <td>Storage</td>
            <td>graphics</td>
            <td>operating System</td>
            <td>Keyboard</td>
            <td>Optical Drive</td>
            <td>WebCam</td>
            <td>Wi-Fi</td>
            <td>Bluetooth</td>
            <td>Slots</td>
            <td>Height</td>
            <td>Width</td>
            <td>Depth</td>
            <td>Weight</td>
            <td>Color</td>
            <td>Warrenty</td>
            <td>Description</td>
            <td>Image</td>
            <td>Action</td>
        </tr>
        <?php
        $sql=$db->link->query("SELECT * FROM product");
        while($fetch=$sql->fetch_array())
        {?>
        <tr>
            <td><?php echo $fetch[0];?></td>
            <td><div style="height: 80px; overflow-y: scroll;"><?php echo $fetch[1];?></div></td>
            <td><?php echo $fetch[2];?></td>
            <td><?php echo $fetch[3];?></td>
            <td><?php echo $fetch[4];?></td>
            <td><?php echo $fetch[5];?></td>
            <td><?php echo $fetch[6];?></td>
            <td><?php echo $fetch[7];?></td>
            <td><?php echo $fetch[8];?></td>
            <td><?php echo $fetch[9];?></td>
            <td><?php echo $fetch[10];?></td>
            <td><?php echo $fetch[11];?></td>
            <td><?php echo $fetch[12];?></td>
            <td><?php echo $fetch[13];?></td>
            <td><?php echo $fetch[14];?></td>
            <td><?php echo $fetch[15];?></td>
            <td><?php echo $fetch[16];?></td>
            <td><?php echo $fetch[17];?></td>
            <td><?php echo $fetch[18];?></td>
            <td><?php echo $fetch[19];?></td>
            <td><?php echo $fetch[20];?></td>
            <td><?php echo $fetch[21];?></td>
            <td><?php echo $fetch[22];?></td>
            <td><?php echo $fetch[23];?></td>
            <td><?php echo $fetch[24];?></td>
            <td><?php echo $fetch[25];?></td>
            <td><?php echo $fetch[26];?></td>
            <td><div style="height: 80px; overflow-y: scroll;"><?php echo $fetch[27];?></div></td>
            <td><img src="img/productimg/<?php echo $fetch[0];?>.jpg" height="50" width="50"></td>
            <td>
                <a href="products.php?edit=<?php echo $fetch[0];?>" class="btn btn-info">Edit</a>
                <a onclick="deleteProduct()" role="button" class="btn btn-danger">Delete</a>
            </td>
        </tr>
            <?php
        }
        ?>
    </table>
    <div id="deleteSpan">
        <div style="position: relative;">
            <h6>Are you sure, you want to delete this item?</h6>
            <div style="position: absolute; left: 26%; top: 100%;">
                <?php
                $sql=$db->link->query("SELECT * FROM product");
                if($fetch=$sql->fetch_array())
                {?>
                <a href="products.php?del=<?php echo $fetch[0];?>" class="spanbtn btn-warning">Delete</a>
                <?php
                    }
                ?>
                <button class="spanbtn btn-secondary" onclick="closeDeleteBtn()">Cancel</button>
            </div>
        </div>
    </div>
   </div>
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.6.22/js/uikit.min.js"></script>
	<script src="../assets/js/jquery-3.5.1.slim.min.js"></script>
	<script src="../assets/js/bootstrap.bundle.min.js"></script>
	<script src="./js/admin.js"></script>
    <script>
    
    function deleteProduct() {
        let deleteSpan = document.getElementById("deleteSpan");
        if (deleteSpan.style.display === "none") {
          deleteSpan.style.display === "block";
        }
      }

    function closeDeleteBtn(){
        let deleteSpan = document.getElementById("deleteSpan");
        if (deleteSpan.style.display === "block") {
          deleteSpan.style.display === "none";
        }
    }
    </script>
    
</body>
<?php
}
else
{
    print "<h1>You can't authorize to see this page!</h1>";
    print "<a href='../home/controlpanel.php'> Please login</a>";
}
?>