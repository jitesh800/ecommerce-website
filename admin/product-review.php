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
    <title> Product Review</title>

    <!-- Google font-->
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Fontawesome css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/font-awesome.css">

    <!-- Linear Icon css -->
    <link rel="stylesheet" href="assets/css/linearicon.css">

    <!-- remixicon css -->
    <link rel="stylesheet" type="text/css" href="assets/css/remixicon.css">

    <!-- Data Table css -->
    <link rel="stylesheet" type="text/css" href="assets/css/datatables.css">

    <!-- Themify icon css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/themify.css">

    <!-- Feather icon css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/feather-icon.css">

    <!-- Plugins css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/animate.css">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/bootstrap.css">

    <!-- App css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>
    <!-- tap on top start-->
    <div class="tap-top">
        <span class="lnr lnr-chevron-up"></span>
    </div>
    <!-- tap on tap end-->

    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        <?php include 'includes/header.php'; ?>
        <!-- Page Header Ends-->

        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <?php include 'includes/sidebar.php'; ?>
            <!-- Page Sidebar Ends-->

            <!-- product review section start -->
            <div class="page-body">

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card card-table">
                                <!-- Table Start -->
                                <div class="card-body">
                                    <div class="title-header option-title">
                                        <h5>Product Reviews</h5>
                                    </div>
                                    <div>
                                        <div class="table-responsive">
                                            <table class="user-table ticket-table review-table theme-table table"
                                                id="table_id">
                                                <thead>
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>Customer Name</th>
                                                        <th>Product Name</th>
                                                        <th>Rating</th>
                                                        <th>Comment</th>
                                                        <th>Published</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>01</td>
                                                        <td>Maureen Biologist</td>
                                                        <td>Outwear & Coats</td>
                                                        <td>
                                                            <ul class="rating">
                                                                <li>
                                                                    <i class="fas fa-star theme-color"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star theme-color"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star"></i>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                        <td>The Product is No Longer Needed</td>
                                                        <td class="td-check">
                                                            <i class="ri-checkbox-circle-line"></i>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>02</td>
                                                        <td>Caroline Harris</td>
                                                        <td>Slim Fit Plastic Coat</td>
                                                        <td>
                                                            <ul class="rating">
                                                                <li>
                                                                    <i class="fas fa-star theme-color"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star theme-color"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star theme-color"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star theme-color"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star theme-color"></i>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                        <td>The Product is No Longer Needed</td>
                                                        <td class="td-check">
                                                            <i class="ri-checkbox-circle-line"></i>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>03</td>
                                                        <td>Lucy Morile</td>
                                                        <td>Men's Sweatshirt</td>
                                                        <td>
                                                            <ul class="rating">
                                                                <li>
                                                                    <i class="fas fa-star theme-color"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star"></i>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                        <td>The Product is No Longer Needed</td>
                                                        <td class="td-check">
                                                            <i class="ri-checkbox-circle-line"></i>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>04</td>
                                                        <td>Jennifer Straight</td>
                                                        <td>Men's Hoodie t-shirt</td>
                                                        <td>
                                                            <ul class="rating">
                                                                <li>
                                                                    <i class="fas fa-star theme-color"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star theme-color"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star theme-color"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star theme-color"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star"></i>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                        <td>The Product is No Longer Needed</td>
                                                        <td class="td-cross">
                                                            <i class="ri-close-circle-line"></i>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>05</td>
                                                        <td>Kevin Millett</td>
                                                        <td>Outwear & Coats</td>
                                                        <td>
                                                            <ul class="rating">
                                                                <li>
                                                                    <i class="fas fa-star theme-color"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star theme-color"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star theme-color"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star"></i>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                        <td>The Product is No Longer Needed</td>
                                                        <td class="td-check">
                                                            <i class="ri-checkbox-circle-line"></i>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>06</td>
                                                        <td>czxc</td>
                                                        <td>Slim Fit Plastic Coat</td>
                                                        <td>
                                                            <ul class="rating">
                                                                <li>
                                                                    <i class="fas fa-star theme-color"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star theme-color"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star"></i>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                        <td>The Product is No Longer Needed</td>
                                                        <td class="td-cross">
                                                            <i class="ri-close-circle-line"></i>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>07</td>
                                                        <td>Kevin Millett</td>
                                                        <td>Men's Sweatshirt</td>
                                                        <td>
                                                            <ul class="rating">
                                                                <li>
                                                                    <i class="fas fa-star theme-color"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star theme-color"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star theme-color"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star theme-color"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star theme-color"></i>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                        <td>The Product is No Longer Needed</td>
                                                        <td class="td-cross">
                                                            <i class="ri-close-circle-line"></i>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>08</td>
                                                        <td>Dillon Bradshaw</td>
                                                        <td>Men's Hoodie t-shirt</td>
                                                        <td>
                                                            <ul class="rating">
                                                                <li>
                                                                    <i class="fas fa-star theme-color"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star theme-color"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star theme-color"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star theme-color"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star theme-color"></i>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                        <td>The Product is No Longer Needed</td>
                                                        <td class="td-check">
                                                            <i class="ri-checkbox-circle-line"></i>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>09</td>
                                                        <td>Lorna Bonner</td>
                                                        <td>Outwear & Coats</td>
                                                        <td>
                                                            <ul class="rating">
                                                                <li>
                                                                    <i class="fas fa-star theme-color"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star theme-color"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star theme-color"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star theme-color"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star theme-color"></i>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                        <td>The Product is No Longer Needed</td>
                                                        <td class="td-cross">
                                                            <i class="ri-close-circle-line"></i>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>10</td>
                                                        <td>Richard Johnson</td>
                                                        <td>Slim Fit Plastic Coat </td>
                                                        <td>
                                                            <ul class="rating">
                                                                <li>
                                                                    <i class="fas fa-star theme-color"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star"></i>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                        <td>The Product is No Longer Needed</td>
                                                        <td class="td-check">
                                                            <i class="ri-checkbox-circle-line"></i>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>11</td>
                                                        <td>Lorraine McDowell</td>
                                                        <td>Men's Sweatshirt</td>
                                                        <td>
                                                            <ul class="rating">
                                                                <li>
                                                                    <i class="fas fa-star theme-color"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star theme-color"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star theme-color"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star"></i>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                        <td>The Product is No Longer Needed</td>
                                                        <td class="td-check">
                                                            <i class="ri-checkbox-circle-line"></i>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Table End -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Container-fluid Ends-->

                <div class="container-fluid">
                    <!-- footer start-->
                    <?php include 'includes/footer.php'; ?>
                    <!-- footer end -->
                </div>
            </div>
            <!-- product review section End -->
        </div>
        <!-- Page Body end-->

        <!-- Modal start -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
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
        <!-- Modal end -->
    </div>
    <!-- page-wrapper end-->

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

    <!-- Sidebar js -->
    <script src="assets/js/config.js"></script>

    <!-- Plugins JS -->
    <script src="assets/js/sidebar-menu.js"></script>
    <script src="assets/js/notify/bootstrap-notify.min.js"></script>
    <script src="assets/js/notify/index.js"></script>

    <!-- Data table js -->
    <script src="assets/js/jquery.dataTables.js"></script>
    <script src="assets/js/custom-data-table.js"></script>

    <!-- sidebar effect -->
    <script src="assets/js/sidebareffect.js"></script>

    <!-- Theme js -->
    <script src="assets/js/script.js"></script>
</body>

</html>