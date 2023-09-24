<?php 
// include '../config/connection.php'; 
// $database = new Database();
// $con = $database->getConnection();
?>
<?php include 'view/display-functions.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <!-- meta data -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="assets/images/logo/favicon1.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/logo/favicon1.png" type="image/x-icon">
    <title>Add New Product</title>

    <!-- Google font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Linear Icon css -->
    <link rel="stylesheet" href="assets/css/linearicon.css">

    <!-- Fontawesome css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/font-awesome.css">

    <!-- Themify icon css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/themify.css">

    <!--Dropzon css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/dropzone.css">

    <!-- Feather icon css-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/feather-icon.css">

    <!-- remixicon css -->
    <link rel="stylesheet" type="text/css" href="assets/css/remixicon.css">

    <!-- Select2 css -->
    <link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">

    <!-- Plugins css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/chartist.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/date-picker.css">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/bootstrap.css">

    <!-- Bootstrap-tag input css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/bootstrap-tagsinput.css">

    <!-- App css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

        <!-- sweet alert cdn -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  
</head>

<body>
    <!-- tap on top start -->
    <div class="tap-top">
        <span class="lnr lnr-chevron-up"></span>
    </div>
    <!-- tap on tap end -->

    <!-- page-wrapper start -->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        <?php include 'includes/header.php'; ?>
        <!-- Page Header Ends-->

        <!-- Page Body start -->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <?php include 'includes/sidebar.php'; ?>
            <!-- Page Sidebar Ends-->

            <div class="page-body">

                <!-- New Product Add Start -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-sm-9 m-auto">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-header-2">
                                                <h5>Product Information</h5>
                                            </div>

                                            <form class="theme-form theme-form-2 mega-form" id="product-form">
                                                <div class="mb-4 row align-items-center">
                                                    <label class="form-label-title col-sm-3 mb-0">Product
                                                        Title</label>
                                                    <div class="col-sm-9">
                                                        <input class="form-control" type="text"
                                                            placeholder="Product title" id="product_title">
                                                    </div>
                                                </div>

                                                <div class="mb-4 row align-items-center">
                                                    <label
                                                        class="col-sm-3 col-form-label form-label-title">Category</label>
                                                    <div class="col-sm-9">
                                                        <select class="js-example-basic-single w-100" name="state"
                                                            id="product_category">
                                                            <option >Select Categories</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="mb-4 row align-items-center">
                                                    <label
                                                        class="col-sm-3 col-form-label form-label-title">Subcategory</label>
                                                    <div class="col-sm-9">
                                                        <select class="js-example-basic-single w-100" name="state"
                                                            id="product_subcategory">
                                                            <option value=''></option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="mb-4 row align-items-center">
                                                    <label
                                                        class="col-sm-3 col-form-label form-label-title">Brand</label>
                                                    <div class="col-sm-9">
                                                        <select class="js-example-basic-single w-100"
                                                            id="product_brand">
                                                            <option disabled>Brand Menu</option>
                                                            <option value="1">Girnar</option>
                                                            <option value="2">Red Label</option>
                                                            <option value="3">Taj Mehal</option>
                                                            <option value="4">Tata Tea</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="mb-4 row align-items-center">
                                                    <label class="col-sm-3 col-form-label form-label-title">Unit</label>
                                                    <div class="col-sm-9">
                                                        <select class="js-example-basic-single w-100" id="product_unit">
                                                            <option disabled>Unit Menu</option>
                                                            <option value="Kilogram">Kilogram</option>
                                                            <option value="Pieces">Pieces</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="mb-4 row align-items-center">
                                                    <label class="col-sm-3 col-form-label form-label-title">Available Quantity</label>
                                                    <div class="col-sm-9">
                                                        <div class="bs-example">
                                                            <input type="number" class="form-control"
                                                                placeholder="" id="product_quantity">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-4 row align-items-center">
                                                    <label class="col-sm-3 col-form-label form-label-title">Product Tags</label>
                                                    <div class="col-sm-9">
                                                        <div class="bs-example">
                                                            <input type="text" class="form-control"
                                                                placeholder="Type tag & hit enter" id="product_tag"
                                                                data-role="tagsinput">
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- <div class="row align-items-center">
                                                    <label
                                                        class="col-sm-3 col-form-label form-label-title">Refundable</label>
                                                    <div class="col-sm-9">
                                                        <label class="switch">
                                                            <input type="checkbox" checked><span
                                                                class="switch-state" id="status"></span>
                                                               
                                                        </label>
                                                    </div>
                                                </div> -->

                                                <div class="mb-4 row align-items-center">
                                                    <label class="col-sm-3 col-form-label form-label-title">Product Refund</label>
                                                    <div class="col-sm-9">
                                                        <select class="js-example-basic-single w-100" id="product_refund">
                                                            <option disabled>Refund Statement</option>
                                                            <option value="Refundable">Refundable</option>
                                                            <option value="Non Refundable">Non Refundable</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="row mt-2">
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <label class="form-label-title col-sm-3 mb-0">Product
                                                                Description</label>
                                                            <div class="col-sm-9">
                                                            <textarea name="" id="editor" cols="30" rows="10" ></textarea>
                                                     </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mt-4 row align-items-center">
                                                    <label class="col-sm-3 col-form-label form-label-title">Featured Image
                                                        1</label>
                                                    <div class="col-sm-9">
                                                        <input class="form-control form-choose" type="file"
                                                            id="product_img1" multiple>
                                                    </div>
                                                </div>
                                                <div class="mt-4 row align-items-center">
                                                    <label class="col-sm-3 col-form-label form-label-title">Featured Image
                                                        2</label>
                                                    <div class="col-sm-9">
                                                        <input class="form-control form-choose" type="file"
                                                            id="product_img2" multiple>
                                                    </div>
                                                </div>
                                                <div class="mt-4 row align-items-center">
                                                    <label class="col-sm-3 col-form-label form-label-title">Featured Image
                                                        3</label>
                                                    <div class="col-sm-9">
                                                        <input class="form-control form-choose" type="file"
                                                            id="product_img3" multiple>
                                                    </div>
                                                </div>
                                                <div class="mt-4 row align-items-center">
                                                    <label class="col-sm-3 col-form-label form-label-title">Featured Image
                                                        4</label>
                                                    <div class="col-sm-9">
                                                        <input class="form-control form-choose" type="file"
                                                            id="product_img4" multiple>
                                                    </div>
                                                </div>

                                                <div class="mt-4 row align-items-center">

                                                    <label class="col-sm-3 col-form-label form-label-title">Product Weight</label>
                                                    <div class="col-sm-9">
                                                        <label class="form-check-label m-0" for="">100gm</label>
                                                        <input class="checkbox_animated " type="checkbox" value="100gm" id="" />

                                                        <label class="form-check-label m-0" for="">200gm</label>
                                                        <input class="checkbox_animated " type="checkbox" value="200gm" id="" />

                                                        <label class="form-check-label m-0" for="">400gm</label>
                                                        <input class="checkbox_animated " type="checkbox" value="400gm" id="" />

                                                        <label class="form-check-label m-0" for="">500gm</label>
                                                        <input class="checkbox_animated " type="checkbox" value="500gm" id="" />

                                                        <label class="form-check-label m-0" for="">1kg</label>
                                                        <input class="checkbox_animated " type="checkbox" value="1kg" id="" />

                                                    </div>

                                                </div>

                                                <div class="mt-4 row align-items-center">
                                                    <label class="col-sm-3 col-form-label form-label-title">Manufacturing Date</label>
                                                    <div class="col-sm-9">
                                                        <div class="bs-example">
                                                            <input type="date" class="form-control"
                                                                placeholder="Type tag & hit enter" id="product_manufacturing">
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- <div class="mt-4 row align-items-center">
                                                    <label class="form-label-title col-sm-3 mb-0">Video
                                                        Link</label>
                                                    <div class="col-sm-9">
                                                        <input class="form-control" type="text"
                                                            placeholder="Video Link">
                                                    </div>
                                                </div> -->

                                                <div class="mt-4 row align-items-center">
                                                    <label class="col-sm-3 form-label-title">Product Price</label>
                                                    <div class="col-sm-9">
                                                        <input class="form-control" type="number" placeholder="0"
                                                            id="product_price">
                                                    </div>
                                                </div>

                                                <div class="mt-4 row align-items-center">
                                                    <label class="form-label-title col-sm-3 mb-0">Meta Title</label>
                                                    <div class="col-sm-9">
                                                        <input class="form-control" type="search"
                                                            placeholder="Fresh Fruits" id="product_meta_title">
                                                    </div>
                                                </div>

                                                <div class="mt-4 row align-items-center">
                                                    <label class="form-label-title col-sm-3 mb-0">Meta Keyword</label>
                                                    <div class="col-sm-9">
                                                        <input class="form-control" type="search"
                                                            placeholder="Fresh Fruits" id="product_meta_keyword">
                                                    </div>
                                                </div>

                                                <div class="mt-4 row">
                                                    <label class="form-label-title col-sm-3 mb-0">Meta
                                                        description</label>
                                                    <div class="col-sm-9">
                                                        <textarea class="form-control" rows="3"
                                                            id="product_meta_desc"></textarea>
                                                    </div>
                                                </div>
                                                
                                                <div id="success_response"></div>
                                                <div class="mt-5 d-flex justify-content-end" >
                                                    <button type="submit" class="btn btn-solid" id="product_submit"> Submit</button>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- New Product Add End -->

                <!-- footer Start -->
                <?php include 'includes/footer.php'; ?>
                <!-- footer En -->
            </div>
            <!-- Container-fluid End -->
        </div>
        <!-- Page Body End -->
    </div>
    <!-- page-wrapper End -->

    <!-- Modal Start -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <h5 class="modal-title" id="staticBackdropLabel">Logging Out</h5>
                    <p>Are you sure you want to log out?</p>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                    <div class="button-box">
                        <button type="button" class="btn btn--no" data-bs-dismiss="modal">No</button>
                        <button type="button" class="btn  btn--yes btn-primary">Yes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal End -->

    <!-- latest js -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap js -->
    <script src="assets/js/bootstrap/bootstrap.bundle.min.js"></script>

    <!-- feather icon js -->
    <script src="assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="assets/js/icons/feather-icon/feather-icon.js"></script>

    <!-- scrollbar simplebar js -->
    <script src="assets/js/scrollbar/simplebar.js"></script>
    <script src="assets/js/scrollbar/custom.js"></script>

    <!-- Sidebar js -->
    <script src="assets/js/config.js"></script>

    <!-- bootstrap tag-input js -->
    <script src="assets/js/bootstrap-tagsinput.min.js"></script>
    <script src="assets/js/sidebar-menu.js"></script>

    <!-- customizer js -->
    <script src="assets/js/customizer.js"></script>

    <!--Dropzon js -->
    <script src="assets/js/dropzone/dropzone.js"></script>
    <script src="assets/js/dropzone/dropzone-script.js"></script>

    <!-- Plugins js -->
    <script src="assets/js/notify/bootstrap-notify.min.js"></script>
    <script src="assets/js/notify/index.js"></script>

    <!-- ck editor js -->
    <!-- <script src="assets/js/ckeditor.js"></script>
    <script src="assets/js/ckeditor-custom.js"></script> -->
    <script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>

    <!-- select2 js -->
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/select2-custom.js"></script>

    <!-- sidebar effect -->
    <script src="assets/js/sidebareffect.js"></script>

    <!-- Theme js -->
    <script src="assets/js/script.js"></script>

    <!-- include script.js -->
    <script src="script.js"></script>

</body>


</html>

<script>
    var myClassicEditor
    ClassicEditor.create(document.querySelector('#editor'))
    .then(editor => { myClassicEditor = editor; })
    .catch(error => {
        console.error(error);
});

</script>


