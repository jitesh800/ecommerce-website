<?php 
include "../../config/connection.php";
$database = new Database();
$con = $database->getConnection();


if(isset($_POST['displaySend'])){
    $sql = "SELECT * FROM products p INNER JOIN categories c ON p.cat_id = c.cat_id INNER JOIN sub_categories sb ON p.sub_cat_id = sb.sub_cat_id INNER JOIN brands br ON p.brand_id = br.brand_id ORDER BY product_id DESC";
    $result = mysqli_query($con,$sql);
    $output = "";
    $count = 1;


    while($row = mysqli_fetch_array($result)){
        $id = $row['product_id'];
        $categories = $row['cat_title'];
        $sub_categories = $row['sub_cat_title'];
        $product_brand = $row['brand_title'];
        $product_title = $row['product_title'];
        $product_tag = $row['product_tag'];
        $product_refund = $row['product_refund'];
        $product_quantity = $row['unit_quantity'];
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
        // $product_code = $row['product_code'];

        $output .="
        <tr>
            <td class='count-sec'>$count</td>
            <td>
                <div class='table-image'>
                    <img src='../assets/images/product/$product_image1' class='img-fluid' alt=''>
                </div>
            </td>
            <td>$product_title</td>
            <td>$categories </td>
            <td>$sub_categories</td>
            <td>$product_brand</td>
            <td>$product_tag</td>
            <td>$product_unit</td>
            <td>$product_quantity</td>
            <td>$product_refund</td>
            <td class='product-desc-card'>$product_discription</td>
            <td>$product_weight</td>
            <td>$product_mfg_date</td>
            <td class='td-price'><i class='fa-solid fa-indian-rupee-sign'></i>$product_price</td>
            <td>$product_refund</td>
            <td>$meta_title</td>
            <td>$meta_keyword</td>
            <td>$meta_discription</td>
            <td>$slug_url</td>

            <td>
                <ul>
                    <li>
                        <span><i class='fa-solid fa-pen-to-square btn btn-white' data-id='$id' id='edit-product' data-bs-toggle='modal' data-bs-target='#update-product-modal'></i></span>
                    </li>
                    <li>
                        <span> <i class='fa-solid fa-trash-can btn btn-white' data-id='$id' id='delete-product'></i></span>
                    </li>
                </ul>
            </td>
        </tr>
    ";
    $count++;
    }
    echo $output;
}


if(isset($_POST['id'])){
    $p_id = $_POST['id'];
    // print_r($p_id);
    $sql = "SELECT * FROM products p INNER JOIN categories c ON p.cat_id = c.cat_id INNER JOIN sub_categories sb ON p.sub_cat_id = sb.sub_cat_id INNER JOIN brands br ON p.brand_id = br.brand_id where product_id = '$p_id'";
    $output = "";
    $result = mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);
        $id = $row['product_id'];
        $cat_id = $row['cat_id'];
        $sub_cat_id = $row['sub_cat_id'];
        $brand_id = $row['brand_id'];
        $categories = $row['cat_title'];
        $sub_categories = $row['sub_cat_title'];
        $product_brand = $row['brand_title'];
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
        $unit = $row['product_unit'];
        $quantity = $row['unit_quantity'];
        $product_mfg_date = $row['product_mfg_date'];
        $meta_title = $row['meta_title'];
        $meta_keyword = $row['meta_keyword'];
        $meta_discription = $row['meta_discription'];
        $slug_url = $row['slug_url'];
        $output .="
        <div class='row'>
            <div class='col-12'>
                <div class='row'>
                    <div class='col-sm-11 m-auto'>
                        <div class='card'>
                            <div class='card-body'>
                                <div class='card-header-2'>
                                    <h5>Update Details</h5>
                                </div>
                                <input type='hidden' value='$id' name='update_id' id='update_id' class='form-control form-control-lg'>
                                <div class='mb-4 row align-items-center'>
                                    <label class='form-label-title col-sm-3 mb-0'>Product
                                        Title</label>
                                    <div class='col-sm-9'>
                                        <input class='form-control' type='text'
                                            placeholder='Product title' id='update_product_title' value='$product_title'>
                                    </div>
                                </div>
    
                                <div class='mb-4 row align-items-center'>
                                    <label
                                        class='col-sm-3 col-form-label form-label-title'>Category</label>
                                    <div class='col-sm-9'>
                                        <select class='js-example-basic-single w-100' name='state'
                                            id='update_product_category_list'>
                                            <option selected value='$cat_id'>$categories</option>";
                                            $sql_cat_list = "SELECT * FROM categories";
                                            $result_cat = mysqli_query($con,$sql_cat_list);
                                            while($row=mysqli_fetch_assoc($result_cat)) {
                                                $cat_title = $row['cat_title'];
                                                $cat_id = $row['cat_id'];
                                                $output .="<option value='$cat_id'>$cat_title</option>";
                                            }
                                            
                                            $output .="</select>
                                    </div>
                                </div>
    
                                <div class='mb-4 row align-items-center'>
                                    <label
                                        class='col-sm-3 col-form-label form-label-title'>Subcategory</label>
                                    <div class='col-sm-9' id='sub-cat-list'>
                                        <select class='js-example-basic-single w-100' name='state' id='update_product_subcategoryX'>
                                    
                                        </select>
                                    </div>
                                </div>
    
                                <div class='mb-4 row align-items-center'>
                                    <label
                                        class='col-sm-3 col-form-label form-label-title'>Brand</label>
                                    <div class='col-sm-9'>
                                        <select class='js-example-basic-single w-100'
                                            id='update_product_brand'>
                                            <option selected value='$brand_id'>$product_brand</option>
                                            <option value='1'>Girnar</option>
                                            <option value='2'>Red Label</option>
                                            <option value='3'>Taj Mehal</option>
                                            <option value='4'>Tata Tea</option>
                                        </select>
                                    </div>
                                </div>
    
                                <div class='mb-4 row align-items-center'>
                                    <label class='col-sm-3 col-form-label form-label-title'>Unit</label>
                                    <div class='col-sm-9'>
                                        <select class='js-example-basic-single w-100' id='update_product_unit'>
                                            <option selected>$unit</option>
                                            <option value='Kilogram'>Kilogram</option>
                                            <option value='Pieces'>Pieces</option>
                                        </select>
                                    </div>
                                </div>
    
                                <div class='mb-4 row align-items-center'>
                                    <label class='col-sm-3 col-form-label form-label-title'>Available Quantity</label>
                                    <div class='col-sm-9'>
                                        <div class='bs-example'>
                                            <input type='number' class='form-control'
                                                placeholder='' id='update_product_quantity' value='$quantity'>
                                        </div>
                                    </div>
                                </div>
                                <div class='mb-4 row align-items-center'>
                                    <label class='col-sm-3 col-form-label form-label-title'>Product Tags</label>
                                    <div class='col-sm-9'>
                                        <div class='bs-example'>
                                            <input type='text' class='form-control'
                                                placeholder='Type tag & hit enter' id='update_product_tag'
                                                data-role='tagsinput' value='$product_tag'>
                                        </div>
                                    </div>
                                </div>
    
                                <div class='mb-4 row align-items-center'>
                                    <label class='col-sm-3 col-form-label form-label-title'>Product Refund</label>
                                    <div class='col-sm-9'>
                                        <select class='js-example-basic-single w-100' id='update_product_refund'>
                                            <option selected>$product_refund</option>
                                            <option value='Refundable'>Refundable</option>
                                            <option value='Non Refundable'>Non Refundable</option>
                                        </select>
                                    </div>
                                </div>
    
                                <div class='row mt-2'>
                                    <div class='col-12'>
                                        <div class='row'>
                                            <label class='form-label-title col-sm-3 mb-0'>Product
                                                Description</label>
                                            <div class='col-sm-9'>
                                            <textarea name='' id='update-product-desc' cols='30' rows='10' >$product_discription</textarea>
                                     </div>
                                        </div>
                                    </div>
                                </div>
    
                                <div class='mt-4 row align-items-center'>
                                    <label class='col-sm-3 col-form-label form-label-title'>Featured Image1
                                        </label>
                                    <div class='col-sm-9'>
                                        <input class='form-control form-choose' type='file' id='new_file1' name='new_file1' multiple>
                                        <img src='../assets/images/product/$product_image1' style='width:30%;border-radius:5px;border:2px solid ; margin-top:15px' />
                                        <input type='hidden' value='$product_image1' name='old_file1' id='old_file1' class='form-control form-control-lg'>
                                    </div>
                                </div>

                                <div class='mt-4 row align-items-center'>
                                    <label class='col-sm-3 col-form-label form-label-title'>Featured Image2
                                        </label>
                                    <div class='col-sm-9'>
                                        <input class='form-control form-choose' type='file' id='new_file2' name='new_file2' multiple>
                                        <img src='../assets/images/product/$product_image2' style='width:30%;border-radius:5px;border:2px solid ; margin-top:15px' />
                                        <input type='hidden' value='$product_image2' name='old_file2' id='old_file2' class='form-control form-control-lg'>
                                    </div>
                                </div>

                                <div class='mt-4 row align-items-center'>
                                    <label class='col-sm-3 col-form-label form-label-title'>Featured Image3
                                        </label>
                                    <div class='col-sm-9'>
                                        <input class='form-control form-choose' type='file' id='new_file3' name='new_file3' multiple>
                                        <img src='../assets/images/product/$product_image3' style='width:30%;border-radius:5px;border:2px solid ; margin-top:15px' />
                                        <input type='hidden' value='$product_image3' name='old_file3' id='old_file3' class='form-control form-control-lg'>
                                    </div>
                                </div>

                                <div class='mt-4 row align-items-center'>
                                <label class='col-sm-3 col-form-label form-label-title'>Featured Image4
                                    </label>
                                <div class='col-sm-9'>
                                    <input class='form-control form-choose' type='file' id='new_file4' name='new_file4' multiple>
                                    <img src='../assets/images/product/$product_image4' style='width:30%;border-radius:5px;border:2px solid ; margin-top:15px' />
                                    <input type='hidden' value='$product_image4' name='old_file4' id='old_file4' class='form-control form-control-lg'>
                                </div>
                            </div>
    
                                <div class='mt-4 row align-items-center'>
                                    <label class='col-sm-3 col-form-label form-label-title'>Manufacturing Date</label>
                                    <div class='col-sm-9'>
                                        <div class='bs-example'>
                                            <input type='date' class='form-control'
                                                placeholder='Type tag & hit enter' id='update_product_manufacturing' value='$product_mfg_date'>
                                        </div>
                                    </div>
                                </div>
    
                                <div class='mt-4 row align-items-center'>
                                    <label class='col-sm-3 form-label-title'>price</label>
                                    <div class='col-sm-9'>
                                        <input class='form-control' type='number' placeholder='0'
                                            id='update_product_price' value='$product_price'>
                                    </div>
                                </div>
    
                                <div class='mt-4 row align-items-center'>
                                    <label class='form-label-title col-sm-3 mb-0'>Meta Title</label>
                                    <div class='col-sm-9'>
                                        <input class='form-control' type='search'
                                            placeholder='Fresh Fruits' id='update_meta_title' value='$meta_title'>
                                    </div>
                                </div>
    
                                <div class='mt-4 row align-items-center'>
                                    <label class='form-label-title col-sm-3 mb-0'>Meta Keyword</label>
                                    <div class='col-sm-9'>
                                        <input class='form-control' type='search'
                                            placeholder='Fresh Fruits' id='update_meta_keyword' value='$meta_keyword'>
                                    </div>
                                </div>
    
                                <div class='mt-4 row'>
                                    <label class='form-label-title col-sm-3 mb-0'>Meta
                                        description</label>
                                    <div class='col-sm-9'>
                                        <textarea class='form-control' rows='3' 
                                            id='update_meta_desc'>$meta_discription</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    ";
    $output .="</div>";
    echo $output;
}


// categories start
if(isset($_POST['display_categories'])){
    $sql = "SELECT * FROM categories";
    $result = mysqli_query($con,$sql);
    $output = "";
    $count = 1;
    while($row = mysqli_fetch_array($result)){
        $cat_id = $row['cat_id'];
        $cat_title  = $row['cat_title'];
        $posted_date = $row['posted_date'];
        $output .="
        <tr>
        <td>$count</td>
        <td>$cat_title</td>
        <td>$posted_date</td>
        <td>
            <ul>
                <li>
                    <a href='order-detail.html'>
                        <i class='ri-eye-line'></i>
                    </a>
                </li>
                <li>
                    <a href='javascript:void(0)'>
                        <i class='ri-pencil-line' data-id='$cat_id' id='edit-category' data-bs-toggle='modal' data-bs-target='#update-category-modal'></i>
                    </a>
                </li>
                <li>
                    <a href='javascript:void(0)'>
                        <i class='ri-delete-bin-line' data-id='$cat_id $cat_title' id='delete-category'></i>
                    </a>
                </li>
            </ul>
        </td>
    </tr>
    ";
    $count++;
    }
    echo $output;
}

if(isset($_POST['categoryId'])){
    $category_id = $_POST['categoryId'];
    // print_r($category_id);
    $sql = "SELECT * FROM categories where cat_id = '$category_id'";
    $output = "";
    $result = mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);
        $cat_id = $row['cat_id'];
        $cat_title = $row['cat_title'];
        $output .="
        <div class='mb-4 row align-items-center'>
            <input type='hidden' value='$cat_id' name='update-cat-id' id='update-cat-id' class='form-control form-control-lg'>
            <label class='form-label-title col-sm-3 mb-0'>Category</label>
            <div class='col-sm-9'>
                <input class='form-control' type='text' placeholder='Category Name' id='update_product_category' value='$cat_title'>
            </div>
        </div>
    ";
    echo $output;
}

// subcategories start
if(isset($_POST['display_subcategories'])){
    $sql = "SELECT * FROM sub_categories";
    $result = mysqli_query($con,$sql);
    $output = "";
    $count = 1;
    while($row = mysqli_fetch_array($result)){
        $sub_cat_id = $row['sub_cat_id'];
        $sub_cat_title  = $row['sub_cat_title'];
        $posted_date = $row['posted_date'];
        $output .="
        <tr>
        <td>$count</td>
        <td>$sub_cat_title</td>
        <td>$posted_date</td>
        <td>
            <ul>
                <li>
                    <a href='order-detail.html'>
                        <i class='ri-eye-line'></i>
                    </a>
                </li>
                <li>
                    <a href='javascript:void(0)'>
                        <i class='ri-pencil-line' data-id='$sub_cat_id' id='edit-sub-category' data-bs-toggle='modal' data-bs-target='#update-sub-category-modal'></i>
                    </a>
                </li>
                <li>
                    <a href='javascript:void(0)'>
                        <i class='ri-delete-bin-line' data-id='$sub_cat_id $sub_cat_title' id='delete-subcategory'></i>
                    </a>
                </li>
            </ul>
        </td>
    </tr>
    ";
    $count++;
    }
    echo $output;
}

// display parent categoreis
if(isset($_POST['parent_categories'])){
    $sql = "SELECT * FROM categories";
    $result = mysqli_query($con,$sql);
    $output = "";
    while($row = mysqli_fetch_array($result)){
        $cat_id = $row['cat_id'];
        $cat_title  = $row['cat_title'];
        $output .="
        <option value='$cat_id'>$cat_title</option>
    ";

    }
    echo $output;
}

if(isset($_POST['sub_cat_id'])){
    $sub_cat_id = $_POST['sub_cat_id'];
    // print_r($sub_cat_id);
    $sql = "SELECT * FROM categories c INNER JOIN sub_categories s ON c.cat_id = s.sub_cat_parent Where sub_cat_id = '$sub_cat_id'";
    $output = "";
    $result = mysqli_query($con,$sql);

    $row=mysqli_fetch_assoc($result);
        $cat_id = $row['cat_id'];
        $cat_title = $row['cat_title'];
        $sub_cat_id = $row['sub_cat_id'];
        $sub_cat_title = $row['sub_cat_title'];
        $output .="

            <div class='mb-4 row align-items-center'>
                <input type='hidden' value='$sub_cat_id' name='' id='sub_cat_id' class='form-control form-control-lg'>
                <label class='form-label-title col-sm-3 mb-0'>Sub Category</label>
                <div class='col-sm-9'>
                    <input class='form-control' type='text' placeholder='Sub Category Name' id='product_sub_category' value='$sub_cat_title'>
                </div>
            </div>
        
            ";
            
            $output .="<div class='mb-4 row align-items-center'>
            <label
                class='col-sm-3 col-form-label form-label-title'>Parent Category</label>
            <div class='col-sm-9'>
                <select class='js-example-basic-single w-100'
                    id='product_brand'>";
                    $sql_all_cat = "SELECT * FROM categories";
                    $result_cat = mysqli_query($con,$sql_all_cat);
                    while($row=mysqli_fetch_assoc($result_cat)) {
                        $cat_title = $row['cat_title'];
                        $cat_id = $row['cat_id'];
                        $output .="<option value='$cat_id'>$cat_title</option>";
                    }
                    
                $output .="</select>
            </div>
        </div>";
    
    echo $output;


}

if(isset($_POST['catId'])){
    $sql = "SELECT * FROM sub_categories where sub_cat_parent='".$_POST['catId']."'";
    $result = mysqli_query($con,$sql);
    $output = "";
    $count = 1;
    
    while($row = mysqli_fetch_array($result)){
        $sub_cat_id = $row['sub_cat_id'];
        $sub_cat_title  = $row['sub_cat_title'];
        $posted_date = $row['posted_date'];
        $output .="
        <option selected value='$sub_cat_id'>$sub_cat_title</option>    
    ";
    
    $count++;
    }
    
    echo $output;
}




?>
<script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>

<script>
    var myClassicEditor
    ClassicEditor.create(document.querySelector('#update-product-desc'))
        .then(editor => { myClassicEditor = editor; })
        .catch(error => {
            console.error(error);
        });
</script>
<script>
$("#update_product_category_list").change(function () {
    var catId = $('#update_product_category_list').val();
    //alert(catId);
    $.ajax({
        url: "model/display-data.php",
        type: "POST",
        data: { catId: catId },
        success: function (data, status) {
            console.log(data);
            $('#update_product_subcategoryX').html(data);
        }
    })
});
</script>