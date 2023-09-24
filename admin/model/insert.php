<?php 
include "../../config/connection.php";
$database = new Database();
$con = $database->getConnection();
if(isset($_POST["product_title"])){
    $product_title=$_POST["product_title"];
    $product_category = $_POST['product_category'];
    $product_subcategory = $_POST['product_subcategory'];
    $product_brand = $_POST['product_brand'];
    $product_unit = $_POST['product_unit'];
    $product_quantity = $_POST['product_quantity'];
    $product_tag = $_POST['product_tag'];
    $product_refund = $_POST['product_refund'];
    $product_discription = $_POST['product_discription'];
    $product_weight = $_POST['product_weight'];
    $product_manufacturing = $_POST['product_manufacturing'];
    $product_price = $_POST['product_price'];
    $product_meta_title = $_POST['product_meta_title'];
    $product_meta_keyword = $_POST['product_meta_keyword'];
    $product_meta_desc = $_POST['product_meta_desc'];
    $slug_url = strtolower($product_title);
    $slug_url = '/'.str_replace(' ','-',$slug_url);
    $file1=$_FILES["product_img1"]["name"];
    $file2=$_FILES["product_img2"]["name"];
    $file3=$_FILES["product_img3"]["name"];
    $file4=$_FILES["product_img4"]["name"];

    $temp_file1=$_FILES["product_img1"]["tmp_name"];
    $temp_file2=$_FILES["product_img2"]["tmp_name"];
    $temp_file3=$_FILES["product_img3"]["tmp_name"];
    $temp_file4=$_FILES["product_img4"]["tmp_name"];


    $extention=array('jpg','JPG','png','PNG','JPEG','jpeg','webp');
    $validation=pathinfo($file1,PATHINFO_EXTENSION);

        $new_name1=rand()."-".$file1;
        $new_name2=rand()."-".$file2;
        $new_name3=rand()."-".$file3;
        $new_name4=rand()."-".$file4;


        if(!in_array($validation,$extention)){
            echo 3;
        }else{
            $sql="INSERT INTO products (cat_id,	sub_cat_id,	brand_id,product_title,product_tag,product_refund,
            	product_discription,product_image1,product_image2,product_image3,product_image4,
                product_weight,product_price,product_unit,unit_quantity,product_mfg_date,meta_title,
                meta_keyword,meta_discription,slug_url) 
                VALUES ('$product_category','$product_subcategory','$product_brand','$product_title',
                '$product_tag','$product_refund','$product_discription','$new_name1','$new_name2','$new_name3','$new_name4',
                '$product_weight','$product_price','$product_unit','$product_quantity','$product_manufacturing',
                '$product_meta_title','$product_meta_keyword','$product_meta_desc','$slug_url')";
            if(mysqli_query($con,$sql)){
                move_uploaded_file($temp_file1,"../../assets/images/product/".$new_name1);
                move_uploaded_file($temp_file2,"../../assets/images/product/".$new_name2);
                move_uploaded_file($temp_file3,"../../assets/images/product/".$new_name3);
                move_uploaded_file($temp_file4,"../../assets/images/product/".$new_name4);
                echo "1";
            }else{
                echo 0;
            }
        }
};

// insert porduct categories
if(isset($_POST['category'])){
    $product_category = $_POST['category'];

    $sql = "INSERT into categories (cat_title) VALUES ('$product_category')";
    $result = mysqli_query($con,$sql);
    
    if($result){
        echo "1";
    }else{
        echo "0";
    };
};

// insert porduct sub categories
if(isset($_POST['sub_category'])){
    $product_sub_category = $_POST['sub_category'];
    $parent_category = $_POST['parent_category'];

    $sql = "INSERT into sub_categories (sub_cat_title,sub_cat_parent) VALUES ('$product_sub_category','$parent_category')";
    $result = mysqli_query($con,$sql);
    
    if($result){
        echo "1";
    }else{
        echo "0";
    };  
};

?>