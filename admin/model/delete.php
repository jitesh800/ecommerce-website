<?php 
include "../../config/connection.php";
$database = new Database();
$con = $database->getConnection();
if(isset($_POST["deleteId"])){
    $id=$_POST["deleteId"];
    $sql="SELECT * FROM products WHERE product_id='$id'";
    $run_sql=mysqli_query($con,$sql);
    $result=mysqli_fetch_assoc($run_sql);

    unlink("../../assets/images/product/".$result["product_image1"]);
    unlink("../../assets/images/product/".$result["product_image2"]);
    unlink("../../assets/images/product/".$result["product_image3"]);
    unlink("../../assets/images/product/".$result["product_image4"]);
    $sql1="DELETE FROM products WHERE product_id='$id'";
    $run_sql1=mysqli_query($con,$sql1);
    if($run_sql1){
        echo 1;
    }else{
        echo 0;
    }

}

if(isset($_POST['category_delete_id'])){
    $uniqueId = $_POST['category_delete_id'];

    $sql = "DELETE from categories where cat_id ='$uniqueId'";
    $result = mysqli_query($con,$sql);
    if($result){
        echo "1";
    }else{
        echo "0";
    }
}

if(isset($_POST['subcategory_delete_id'])){
   $uniqueId = $_POST['subcategory_delete_id'];

   $sql = "DELETE from sub_categories where sub_cat_id ='$uniqueId'";
   $result = mysqli_query($con,$sql);
   if($result){
       echo "1";
   }else{
       echo "0";
   }
}

?>