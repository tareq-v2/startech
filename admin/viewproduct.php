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
                <td>SL</td>
                <td>Item Name</td>
                <td>Category Name</td>
                <td>Sub-Category Name</td>
                <td>Brand name</td>
                <td>Product Name</td>
                <td>Description</td>
                <td>Sale price</td>
                <td>Mesurement</td>
                <td>Image</td>
                <td>Action</td>
        </tr>
        <?php
                $sql=$db->link->query("SELECT * FROM product_table");
                while($fetch=$sql->fetch_array())
                {?>
                    <tr>
                            <td><?php echo $fetch[0];?></td>
                            <td><?php echo $fetch[1];?></td>
                            <td><?php echo $fetch[2];?></td>
                            <td><?php echo $fetch[3];?></td>
                            <td><?php echo $fetch[4];?></td>
                            <td><?php echo $fetch[5];?></td>
                            <td><?php echo $fetch[6];?></td>
                            <td><?php echo $fetch[7];?></td>
                            <td><?php echo $fetch[8];?></td>
                            <td><img src="img/productimg/<?php echo $fetch[0];?>.jpg" height="50" width="50"></td>
                            <td>
                                <a href="addproduct.php?edit=<?php echo $fetch[0];?>" class="btn btn-info">Edit</a>
                                <a onclick="compareCart()" role="button" class="btn btn-danger">Delete</a>
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
                $sql=$db->link->query("SELECT * FROM product_table");
                if($fetch=$sql->fetch_array())
                {?>
                <a href="addproduct.php?del=<?php echo $fetch[0];?>" class="spanbtn btn-warning">Delete</a>
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
    function compareCart() {
        let cart = document.getElementById("deleteSpan");
        if (cart.style.display === "none") {
          cart.style.display = "block";
        } else {
          cart.style.display = "none";
        }
      }

    function closeDeleteBtn(){
        let cart = document.getElementById("deleteSpan");
        if (cart.style.display === "block") {
          cart.style.display = "none";
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