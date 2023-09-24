<?php
include '../config/connection.php';
$database = new Database();
$con = $database->getConnection();


	if($_POST['type'] == ""){
		$sql = "SELECT * FROM categories";

		$query = mysqli_query($con,$sql) or die("Query Unsuccessful.");

		$str = "";
		while($row = mysqli_fetch_assoc($query)){
		  $str .= "<option value='{$row['cat_id']}'>{$row['cat_title']}</option>";
		}
	}else if($_POST['type'] == "subcatData"){

		$sql = "SELECT * FROM sub_categories WHERE sub_cat_parent = {$_POST['id']}";

		$query = mysqli_query($con,$sql) or die("Query Unsuccessful.");

		$str = "";
		while($row = mysqli_fetch_assoc($query)){
		  $str .= "<option value='{$row['sub_cat_id']}'>{$row['sub_cat_title']}</option>";
		}
	}

	echo $str;
 ?>
 <?php

// $conn = mysqli_connect("localhost","root","","test") or die("Connection failed");

// if($_POST['type'] == ""){
//     $sql = "SELECT * FROM country_tb";

//     $query = mysqli_query($conn,$sql) or die("Query Unsuccessful.");

//     $str = "";
//     while($row = mysqli_fetch_assoc($query)){
//       $str .= "<option value='{$row['cid']}'>{$row['cname']}</option>";
//     }
// }else if($_POST['type'] == "subcatData"){

//     $sql = "SELECT * FROM state_tb WHERE country = {$_POST['id']}";

//     $query = mysqli_query($conn,$sql) or die("Query Unsuccessful.");

//     $str = "";
//     while($row = mysqli_fetch_assoc($query)){
//       $str .= "<option value='{$row['sid']}'>{$row['sname']}</option>";
//     }
// }

// echo $str;
// ?>