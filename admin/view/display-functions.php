<?php 
include "C:/xampp/htdocs/ecommerce-project/config/connection.php";
$database = new Database();
$con = $database->getConnection();

function products(){
    global $con;
    $sql = "SELECT * from products";
    $query = mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($query)){
        $categories = $row['cat_id'];
        $sub_categories = $row['sub_cat_id'];
        $product_brand = $row['brand_id'];
        $product_title = $row['product_title'];
        $product_tag = $row['product_tag'];
        $product_refund = $row['product_refund'];
        $product_discription = $row['product_discription'];
        $product_image1 = $row['product_image1'];
        $product_image2 = $row['product_image2'];
        $product_image3 = $row['product_image3'];
        $product_image4 = $row['product_image4'];
        $product_weight = $row['product_weight'];
        $product_price = $row['product_price'];
        $product_unit = $row['product_unit'];
        $product_mfg_date = $row['product_mfg_date'];
        $meta_title = $row['meta_title'];
        $meta_keyword = $row['meta_keyword'];
        $meta_discription = $row['meta_discription'];
        $slug_url = $row['slug_url'];
        $product_code = $row['product_code'];
        echo "
            <div class='col-xxl-2 col-lg-3 col-md-4 col-6 wow fadeInUp'>
                <div class='product-box-4'>
                    <div class='product-image'>
                        <div class='label-flex'>
                            <button class='btn p-0 wishlist btn-wishlist notifi-wishlist'>
                                <i class='iconly-Heart icli'></i>
                            </button>
                        </div>

                        <a href='product-detail'>
                            <img src='assets/images/product/$product_image1' class='img-fluid' alt='' >
                        </a>

                        <ul class='option'>
                            <li data-bs-toggle='tooltip' data-bs-placement='top' title='Quick View'>
                                <a href='javascript:void(0)' data-bs-toggle='modal' data-bs-target='#view'>
                                    <i class='iconly-Show icli'></i>
                                </a>
                            </li>
                            <li data-bs-toggle='tooltip' data-bs-placement='top' title='Wishlist'>
                                <a href='wishlist.php' >
                                <i class='fa-regular fa-heart'></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class='product-detail'>
                        <ul class='rating'>
                            <li>
                                <i data-feather='star' class='fill'></i>
                            </li>
                            <li>
                                <i data-feather='star' class='fill'></i>
                            </li>
                            <li>
                                <i data-feather='star'></i>
                            </li>
                            <li>
                                <i data-feather='star'></i>
                            </li>
                            <li>
                                <i data-feather='star'></i>
                            </li>
                        </ul>
                        <a href='product-detail'>
                            <h5 class='name'>$product_title</h5>
                        </a>
                        <h5 class='price theme-color'><i class='fa-solid fa-indian-rupee-sign'></i>$product_price<del><i class='fa-solid fa-indian-rupee-sign'></i> 65.25</del></h5>
                        <div class='price-qty'>
                            <div class='counter-number'>
                                <div class='counter'>
                                    <div class='qty-left-minus' data-type='minus' data-field=''>
                                        <i class='fa-solid fa-minus'></i>
                                    </div>
                                    <input class='form-control input-number qty-input' type='text'
                                        name='quantity' value='0'>
                                    <div class='qty-right-plus' data-type='plus' data-field=''>
                                        <i class='fa-solid fa-plus'></i>
                                    </div>
                                </div>
                            </div>

                            <button class='buy-button buy-button-2 btn btn-cart'>
                                <i class='iconly-Buy icli text-white m-0'></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        ";
    }
}

function categories(){
    global $con;
    $sql = "SELECT * from categories";
    $query = mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($query)){
        $cat_id = $row['cat_id'];
        $cat_title = $row['cat_title'];
        echo "
            <option value='$cat_id'>$cat_title</option>
        ";
    }
    return "Hello";
}
function sub_categories(){
    global $con;
    $sql = "SELECT * from sub_categories";
    $query = mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($query)){
        $sub_cat_id  = $row['sub_cat_id'];
        $sub_cat_title = $row['sub_cat_title'];
        echo "
            <option value='$sub_cat_id'>$sub_cat_title</option>
        ";
    }
}


// show all categories in navbar
function show_categories(){
    global $con;
    $sql = "SELECT * from categories";
    $query = mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($query)){
        $cat_id = $row['cat_id'];
        $cat_title  = $row['cat_title'];
        echo "
            <a class='dropdown-item sub-cat-hover' href='$cat_id'><span class='fa-solid fa-arrow-right-long category-arrow'></span>  $cat_title</a>
        ";
    }
}

function show_subcategories(){
    global $con;
    if(isset($_GET['cat_id'])){
        $uniqueId = $_GET['cat_id'];
        $sql= "SELECT * from sub_categories Where sub_cat_parent = '$uniqueId'";
        $query = mysqli_query($con,$sql);
        while($row = mysqli_fetch_array($query)){
            $sub_cat_title = $row['sub_cat_title'];
            echo "
                <div class='col-lg-6'>
                    <a class='dropdown-item' href=''><i class='fa-solid fa-caret-right'></i>$sub_cat_title</a>
                </div>
            ";
        }
   
    }
}

if(isset($_POST['cat_id'])){
    global $con;
    $sql = "SELECT * from sub_categories where sub_cat_parent='".$_POST['cat_id']."'";
    $query = mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($query)){
        $cat_id = $row['sub_cat_id'];
        $sub_cat_title  = $row['sub_cat_title'];
        echo "
            <div class='col-lg-6'>
                <a class='dropdown-item' href='$cat_id'><i class='fa-solid fa-caret-right'></i>$sub_cat_title</a>
            </div>
        ";
    }
}



?>

