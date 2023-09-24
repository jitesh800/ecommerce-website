<?php
include "../../config/connection.php";
$database = new Database();
$con = $database->getConnection();

if(isset($_POST["id"])){
    $id=$_POST["id"];
    // print_r($id);
    $update_product_title=$_POST["update_product_title"];
    $update_product_category=$_POST["update_product_category"];
    $update_product_subcategory=$_POST["update_product_subcategory"];
    $update_product_brand=$_POST["update_product_brand"];
    $update_product_unit=$_POST["update_product_unit"];
    $update_product_quantity=$_POST["update_product_quantity"];
    $update_product_tag=$_POST["update_product_tag"];
    $update_product_refund=$_POST["update_product_refund"];
    $update_product_discription=$_POST["update_product_discription"];
    $update_product_manufacturing=$_POST["update_product_manufacturing"];
    $update_product_price=$_POST["update_product_price"];
    $update_meta_title=$_POST["update_meta_title"];
    $update_meta_keyword=$_POST["update_meta_keyword"];
    $update_meta_desc=$_POST["update_meta_desc"];

    $old_file1=$_POST["old_file1"];
    $old_file2=$_POST["old_file2"];
    $old_file3=$_POST["old_file3"];
    $old_file4=$_POST["old_file4"];

        if(!empty($_FILES["new_file1"]["name"])){
            $file1=$_FILES['new_file1']["name"];
            $tmp_file1=$_FILES["new_file1"]["tmp_name"];
            // print_r($file1);
            $new_image1 = "";
            $new_image1 = rand(). "-".$file1;
            $sql="UPDATE products SET product_image1='$new_image1',cat_id='$update_product_category', sub_cat_id='$update_product_subcategory',
            brand_id='$update_product_brand',product_title='$update_product_title',product_tag='$update_product_tag',
            product_refund='$update_product_refund',product_discription='$update_product_discription',
            product_price='$update_product_price',product_unit='$update_product_unit',unit_quantity='$update_product_quantity',
            product_mfg_date='$update_product_manufacturing',meta_title='$update_meta_title',meta_keyword='$update_meta_keyword',
            meta_discription='$update_meta_desc' WHERE product_id='$id'";
            move_uploaded_file($tmp_file1,'../../assets/images/product/'.$new_image1);
            unlink('../../assets/images/product/'.$old_file1);

        }else{
            $sql="UPDATE products SET cat_id='$update_product_category', sub_cat_id='$update_product_subcategory',
            brand_id='$update_product_brand',product_title='$update_product_title',product_tag='$update_product_tag',
            product_refund='$update_product_refund',product_discription='$update_product_discription',
            product_price='$update_product_price',product_unit='$update_product_unit',unit_quantity='$update_product_quantity',
            product_mfg_date='$update_product_manufacturing',meta_title='$update_meta_title',meta_keyword='$update_meta_keyword',
            meta_discription='$update_meta_desc' WHERE product_id='$id'"; 
        }
        $result = mysqli_query($con,$sql);


        if(!empty($_FILES["new_file2"]["name"])){
                $file2=$_FILES['new_file2']["name"];
                $tmp_file2=$_FILES["new_file2"]["tmp_name"];
                // print_r($file1);
                $new_image2 = "";
                $new_image2 = rand(). "-".$file2;
                $sql="UPDATE products SET product_image2='$new_image2',cat_id='$update_product_category', sub_cat_id='$update_product_subcategory',
                brand_id='$update_product_brand',product_title='$update_product_title',product_tag='$update_product_tag',
                product_refund='$update_product_refund',product_discription='$update_product_discription',
                product_price='$update_product_price',product_unit='$update_product_unit',unit_quantity='$update_product_quantity',
                product_mfg_date='$update_product_manufacturing',meta_title='$update_meta_title',meta_keyword='$update_meta_keyword',
                meta_discription='$update_meta_desc' WHERE product_id='$id'";
                move_uploaded_file($tmp_file2,'../../assets/images/product/'.$new_image2);
                unlink('../../assets/images/product/'.$old_file2);
    
            }else{
                $sql="UPDATE products SET cat_id='$update_product_category', sub_cat_id='$update_product_subcategory',
                brand_id='$update_product_brand',product_title='$update_product_title',product_tag='$update_product_tag',
                product_refund='$update_product_refund',product_discription='$update_product_discription',
                product_price='$update_product_price',product_unit='$update_product_unit',unit_quantity='$update_product_quantity',
                product_mfg_date='$update_product_manufacturing',meta_title='$update_meta_title',meta_keyword='$update_meta_keyword',
                meta_discription='$update_meta_desc' WHERE product_id='$id'"; 
            }
            $result = mysqli_query($con,$sql);

        if(!empty($_FILES["new_file3"]["name"])){
            $file3=$_FILES['new_file3']["name"];
            $tmp_file3=$_FILES["new_file3"]["tmp_name"];
            // print_r($file1);
            $new_image3 = "";
            $new_image3 = rand(). "-".$file3;
            $sql="UPDATE products SET product_image3='$new_image3',cat_id='$update_product_category', sub_cat_id='$update_product_subcategory',
            brand_id='$update_product_brand',product_title='$update_product_title',product_tag='$update_product_tag',
            product_refund='$update_product_refund',product_discription='$update_product_discription',
            product_price='$update_product_price',product_unit='$update_product_unit',unit_quantity='$update_product_quantity',
            product_mfg_date='$update_product_manufacturing',meta_title='$update_meta_title',meta_keyword='$update_meta_keyword',
            meta_discription='$update_meta_desc' WHERE product_id='$id'";
            move_uploaded_file($tmp_file3,'../../assets/images/product/'.$new_image3);
            unlink('../../assets/images/product/'.$old_file3);

        }else{
            $sql="UPDATE products SET cat_id='$update_product_category', sub_cat_id='$update_product_subcategory',
            brand_id='$update_product_brand',product_title='$update_product_title',product_tag='$update_product_tag',
            product_refund='$update_product_refund',product_discription='$update_product_discription',
            product_price='$update_product_price',product_unit='$update_product_unit',unit_quantity='$update_product_quantity',
            product_mfg_date='$update_product_manufacturing',meta_title='$update_meta_title',meta_keyword='$update_meta_keyword',
            meta_discription='$update_meta_desc' WHERE product_id='$id'"; 
        }
        $result = mysqli_query($con,$sql);

    if(!empty($_FILES["new_file4"]["name"])){
        $file4=$_FILES['new_file4']["name"];
        $tmp_file4=$_FILES["new_file4"]["tmp_name"];
        // print_r($file1);
        $new_image4 = "";
        $new_image4 = rand(). "-".$file4;
        $sql="UPDATE products SET product_image4='$new_image4',cat_id='$update_product_category', sub_cat_id='$update_product_subcategory',
        brand_id='$update_product_brand',product_title='$update_product_title',product_tag='$update_product_tag',
        product_refund='$update_product_refund',product_discription='$update_product_discription',
        product_price='$update_product_price',product_unit='$update_product_unit',unit_quantity='$update_product_quantity',
        product_mfg_date='$update_product_manufacturing',meta_title='$update_meta_title',meta_keyword='$update_meta_keyword',
        meta_discription='$update_meta_desc' WHERE product_id='$id'";
        move_uploaded_file($tmp_file4,'../../assets/images/product/'.$new_image4);
        unlink('../../assets/images/product/'.$old_file4);

    }else{
        $sql="UPDATE products SET cat_id='$update_product_category', sub_cat_id='$update_product_subcategory',
        brand_id='$update_product_brand',product_title='$update_product_title',product_tag='$update_product_tag',
        product_refund='$update_product_refund',product_discription='$update_product_discription',
        product_price='$update_product_price',product_unit='$update_product_unit',unit_quantity='$update_product_quantity',
        product_mfg_date='$update_product_manufacturing',meta_title='$update_meta_title',meta_keyword='$update_meta_keyword',
        meta_discription='$update_meta_desc' WHERE product_id='$id'"; 
    }
    $result = mysqli_query($con,$sql);
    if($result){
        echo "1";

        }else{
            echo 0;
}

}

if(isset($_POST["category_id"])){
    $category_id=$_POST["category_id"];
    $update_product_category = $_POST["update_product_category"];

    $sql = "UPDATE categories SET cat_title = '$update_product_category'  WHERE cat_id = $category_id";
    $result = mysqli_query($con,$sql);
    if($result){
        echo "1";
        }else{
         echo 0;
}

    

}


?>