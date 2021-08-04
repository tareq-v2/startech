<?php

include('../database_connection/dbconnect.php');
$db = new startech_connection();

$item=$_POST['itemName'];

$selectCat = $db->link->query("SELECT * from `category_table` where item_name = '$item'");
while($fetchCat = $selectCat->fetch_array()){
		print "<option>$fetchCat[1]</option>";
}

?>