<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="">
    <meta name="keywords"
        content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/logo/favicon1.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/logo/favicon1.png" type="image/x-icon">
    <title> Add New User</title>

    <!-- Google font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Fontawesome css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/font-awesome.css">

    <!-- Linear Icon css -->
    <link rel="stylesheet" href="assets/css/linearicon.css">

    <!-- remixicon css -->
    <link rel="stylesheet" type="text/css" href="assets/css/remixicon.css">

    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/themify.css">

    <!--Dropzon css-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/dropzone.css">

    <!-- Feather icon css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/feather-icon.css">

    <!-- Plugins css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/chartist.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/date-picker.css">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/bootstrap.css">

    <!-- App css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>
    <!-- tap on top start -->
    <div class="tap-top">
        <span class="lnr lnr-chevron-up"></span>
    </div>
    <!-- tap on tap end -->

    <!-- page-wrapper Start -->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start -->
        <?php include 'includes/header.php'; ?>
        <!-- Page Header End -->

        <!-- Page Body Start -->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <?php include 'includes/sidebar.php'; ?>
            <!-- Page Sidebar Ends-->

            <!-- Page Sidebar Start -->
            <div class="page-body">
                <!-- New User start -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-sm-8 m-auto">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="title-header option-title">
                                                <h5>Add New User</h5>
                                            </div>
                                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" id="pills-home-tab"
                                                        data-bs-toggle="pill" data-bs-target="#pills-home"
                                                        type="button">Account</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="pills-profile-tab"
                                                        data-bs-toggle="pill" data-bs-target="#pills-profile"
                                                        type="button">Pernission</button>
                                                </li>
                                            </ul>

                                            <div class="tab-content" id="pills-tabContent">
                                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel">
                                                    <form class="theme-form theme-form-2 mega-form">
                                                        <div class="card-header-1">
                                                            <h5>Product Information</h5>
                                                        </div>

                                                        <div class="row">
                                                            <div class="mb-4 row align-items-center">
                                                                <label
                                                                    class="form-label-title col-lg-2 col-md-3 mb-0">First
                                                                    Name</label>
                                                                <div class="col-md-9 col-lg-10">
                                                                    <input class="form-control" type="text">
                                                                </div>
                                                            </div>

                                                            <div class="mb-4 row align-items-center">
                                                                <label
                                                                    class="col-lg-2 col-md-3 col-form-label form-label-title">Email
                                                                    Address</label>
                                                                <div class="col-md-9 col-lg-10">
                                                                    <input class="form-control" type="email">
                                                                </div>
                                                            </div>

                                                            <div class="mb-4 row align-items-center">
                                                                <label
                                                                    class="col-lg-2 col-md-3 col-form-label form-label-title">Password</label>
                                                                <div class="col-md-9 col-lg-10">
                                                                    <input class="form-control" type="password">
                                                                </div>
                                                            </div>

                                                            <div class="row align-items-center">
                                                                <label
                                                                    class="col-lg-2 col-md-3 col-form-label form-label-title">Confirm
                                                                    Password</label>
                                                                <div class="col-md-9 col-lg-10">
                                                                    <input class="form-control" type="password">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </form>
                                                </div>

                                                <div class="tab-pane fade" id="pills-profile" role="tabpanel">
                                                    <div class="card-header-1">
                                                        <h5>Product Related Permition</h5>
                                                    </div>
                                                    <div class="mb-4 row align-items-center">
                                                        <label class="col-md-2 mb-0">Add Product</label>
                                                        <div class="col-md-9">
                                                            <form class="radio-section">
                                                                <label>
                                                                    <input type="radio" name="opinion" checked>
                                                                    <i></i>
                                                                    <span>Allow</span>
                                                                </label>

                                                                <label>
                                                                    <input type="radio" name="opinion" />
                                                                    <i></i>
                                                                    <span>Deny</span>
                                                                </label>
                                                            </form>
                                                        </div>
                                                    </div>

                                                    <div class="mb-4 row align-items-center">
                                                        <label class="col-md-2 mb-0">Update Product</label>
                                                        <div class="col-md-9">
                                                            <form class="radio-section">
                                                                <label>
                                                                    <input type="radio" name="opinion" />
                                                                    <i></i>
                                                                    <span>Allow</span>
                                                                </label>

                                                                <label>
                                                                    <input type="radio" name="opinion" checked>
                                                                    <i></i>
                                                                    <span>Deny</span>
                                                                </label>
                                                            </form>
                                                        </div>
                                                    </div>

                                                    <div class="mb-4 row align-items-center">
                                                        <label class="col-md-2 mb-0">Delete Product</label>
                                                        <div class="col-md-9">
                                                            <form class="radio-section">
                                                                <label>
                                                                    <input type="radio" name="opinion" checked>
                                                                    <i></i>
                                                                    <span>Allow</span>
                                                                </label>

                                                                <label>
                                                                    <input type="radio" name="opinion" />
                                                                    <i></i>
                                                                    <span>Deny</span>
                                                                </label>
                                                            </form>
                                                        </div>
                                                    </div>

                                                    <div class="mb-4 row align-items-center">
                                                        <label class="col-md-2 mb-0">Apply Discount</label>
                                                        <div class="col-md-9">
                                                            <form class="radio-section">
                                                                <label>
                                                                    <input type="radio" name="opinion" />
                                                                    <i></i>
                                                                    <span>Allow</span>
                                                                </label>

                                                                <label>
                                                                    <input type="radio" name="opinion" checked>
                                                                    <i></i>
                                                                    <span>Deny</span>
                                                                </label>
                                                            </form>
                                                        </div>
                                                    </div>

                                                    <div class="card-header-1">
                                                        <h5>Category Related Permition</h5>
                                                    </div>
                                                    <div class="mb-4 row align-items-center">
                                                        <label class="col-md-2 mb-0">Add Product</label>
                                                        <div class="col-md-9">
                                                            <form class="radio-section">
                                                                <label>
                                                                    <input type="radio" name="opinion" checked>
                                                                    <i></i>
                                                                    <span>Allow</span>
                                                                </label>

                                                                <label>
                                                                    <input type="radio" name="opinion" />
                                                                    <i></i>
                                                                    <span>Deny</span>
                                                                </label>
                                                            </form>
                                                        </div>
                                                    </div>

                                                    <div class="mb-4 row align-items-center">
                                                        <label class="col-md-2 mb-0">Update Product</label>
                                                        <div class="col-md-9">
                                                            <form class="radio-section">
                                                                <label>
                                                                    <input type="radio" name="opinion" />
                                                                    <i></i>
                                                                    <span>Allow</span>
                                                                </label>

                                                                <label>
                                                                    <input type="radio" name="opinion" checked>
                                                                    <i></i>
                                                                    <span>Deny</span>
                                                                </label>
                                                            </form>
                                                        </div>
                                                    </div>

                                                    <div class="mb-4 row align-items-center">
                                                        <label class="col-md-2 mb-0">Delete Product</label>
                                                        <div class="col-md-9">
                                                            <form class="radio-section">
                                                                <label>
                                                                    <input type="radio" name="opinion" />
                                                                    <i></i>
                                                                    <span>Allow</span>
                                                                </label>

                                                                <label>
                                                                    <input type="radio" name="opinion" checked>
                                                                    <i></i>
                                                                    <span>Deny</span>
                                                                </label>
                                                            </form>
                                                        </div>
                                                    </div>

                                                    <div class="mb-4 row align-items-center">
                                                        <label class="col-md-2 mb-0">Apply Discount</label>
                                                        <div class="col-md-9">
                                                            <form class="radio-section">
                                                                <label>
                                                                    <input type="radio" name="opinion" checked>
                                                                    <i></i>
                                                                    <span>Allow</span>
                                                                </label>

                                                                <label>
                                                                    <input type="radio" name="opinion" />
                                                                    <i></i>
                                                                    <span>Deny</span>
                                                                </label>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- New User End -->

                <!-- footer start -->
                <?php include 'includes/footer.php'; ?>
                <!-- footer end -->
            </div>
            <!-- Page Sidebar End -->
        </div>
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

    <!-- customizer js -->
    <script src="assets/js/customizer.js"></script>

    <!-- Sidebar js-->
    <script src="assets/js/config.js"></script>

    <!-- Plugins JS -->
    <script src="assets/js/sidebar-menu.js"></script>
    <script src="assets/js/notify/bootstrap-notify.min.js"></script>
    <script src="assets/js/notify/index.js"></script>

    <!--Dropzon js -->
    <script src="assets/js/dropzone/dropzone.js"></script>
    <script src="assets/js/dropzone/dropzone-script.js"></script>

    <!-- sidebar effect -->
    <script src="assets/js/sidebareffect.js"></script>

    <!-- Theme js -->
    <script src="assets/js/script.js"></script>
</body>

</html>