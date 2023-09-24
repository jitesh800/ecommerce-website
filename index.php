<?php 
// include 'config/connection.php';
// $database = new Database();
// $con = $database->getConnection();
?>
<?php include 'admin/view/display-functions.php'; ?>
<!DOCTYPE html>
<html lang="en">
<!-- top-head include -->
<?php include 'includes/top-head.php'; ?>
<!-- //top-head include -->

<body>

    <!-- Header Start -->
    <?php include 'includes/header.php'; ?>
    <!-- Header End -->

    <!-- home section start -->
    <!-- <div class=" banner-sec">
         <div class="single-item">
            <div> <img src="assets/images/banner/banner1.webp" alt="" width="100%" class="main-banner"></div>
            <div> <img src="assets/images/banner/banner4.webp" alt="" width="100%" class="main-banner"></div>
            <div> <img src="assets/images/banner/banner6.gif" alt="" width="100%" class="main-banner"></div>
            <div> <img src="assets/images/banner/banner3.webp" alt="" width="100%" class="main-banner"></div>
        </div>
    </div> -->

    <div class="services_carousel owl-carousel owl-theme">
        <div class='item'>
            <img src='assets/images/banner/banner1.webp' alt='' width='100%' height='' class='main-banner'>
        </div>
        <div class='item'>
            <img src='assets/images/banner/banner4.webp' alt='' width='100%' height='' class='main-banner'>
        </div>
        <div class='item'>
            <img src='assets/images/banner/banner6.gif' alt='' width='100%' height='' class='main-banner'>
        </div>
        <div class='item'>
            <img src='assets/images/banner/banner3.webp' alt='' width='100%' height='' class='main-banner'>
        </div>
    </div>

    <!-- Value Section Start -->
    <section>
        <div class="container-fluid-lg">
            <div class="title">
                <h2>Shop By Categories</h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="three-slider arrow-slider ratio_65">
                        <div>
                            <div class="offer-banner hover-effect">
                                <img src="assets/images/banner/kadha.jpg" class="img-fluid bg-img blur-up lazyload"
                                    alt="">
                                <div class="banner-detail">
                                    <h5 class="theme-color">Herbal Kadha</h5>
                                    <!-- <h6>Fresh Vegetable</h6> -->
                                </div>
                                <div class="offer-box">
                                    <button onclick="location.href = 'shop';"
                                        class="btn-category btn theme-bg-color text-white">Shop Now</button>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="offer-banner hover-effect">
                                <img src="assets/images/banner/soap.jpg" class="img-fluid bg-img blur-up lazyload"
                                    alt="">
                                <div class="banner-detail">
                                    <h5 class="theme-color">Herbal Soap</h5>
                                    <!-- <h6>Organic Vegetable</h6> -->
                                </div>
                                <div class="offer-box">
                                    <button onclick="location.href = 'shop';"
                                        class="btn-category btn theme-bg-color text-white">Shop Now</button>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="offer-banner hover-effect">
                                <img src="assets/images/banner/tea.jpg" class="img-fluid bg-img blur-up lazyload"
                                    alt="">
                                <div class="banner-detail">
                                    <h5 class="theme-color">Herbal Tea</h5>
                                    <!-- <h6>Fruita & Vagerables</h6> -->
                                </div>
                                <div class="offer-box">
                                    <button onclick="location.href = 'shop';"
                                        class="btn-category btn theme-bg-color text-white">Shop Now</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Value Section End -->

    <!-- Deal Section Start -->
    <section class="deal-section">
        <div class="container-fluid-lg">
            <div class="title">
                <h2>Deal Of The Day</h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="three-slider-1 arrow-slider">
                        <div>
                            <div class="deal-box wow fadeInUp">
                                <a href="shop" class="category-image order-sm-2">
                                    <img src="assets/images/banner/deal_herbal_tea.png"
                                        class="img-fluid blur-up lazyload" alt="">
                                </a>

                                <div class="deal-detail order-sm-1">
                                    <button class="buy-box btn theme-bg-color text-white btn-cart">
                                        <i class="iconly-Buy icli m-0"></i>
                                    </button>
                                    <div class="hot-deal">
                                        <span>Hot Deals</span>
                                    </div>
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="shop" class="text-title">
                                        <h5>Day Time Premix Lemon Tea</h5>
                                    </a>
                                    <h5 class="price"> &#8377; 120.00 <span>&#8377; 150.00</span></h5>
                                    <div class="progress custom-progressbar">
                                        <div class="progress-bar" style="width: 50%" role="progressbar"
                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="item">Sold: <span>30 Items</span></h4>
                                    <h4 class="offer">Hurry up offer end in</h4>
                                    <div class="timer" id="clockdiv-4" data-hours="1" data-minutes="2" data-seconds="3">
                                        <ul>
                                            <li>
                                                <div class="counter">
                                                    <div class="days">
                                                        <h6></h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="counter">
                                                    <div class="hours">
                                                        <h6></h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="counter">
                                                    <div class="minutes">
                                                        <h6></h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="counter">
                                                    <div class="seconds">
                                                        <h6></h6>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="deal-box wow fadeInUp" data-wow-delay="0.05s">
                                <a href="shop" class="category-image order-sm-2">
                                    <img src="assets/images/banner/herbal_soap.png" class="img-fluid blur-up lazyload"
                                        alt="">
                                </a>

                                <div class="deal-detail order-sm-1">
                                    <button class="buy-box btn theme-bg-color text-white btn-cart">
                                        <i class="iconly-Buy icli m-0"></i>
                                    </button>
                                    <div class="hot-deal">
                                        <span>Hot Deals</span>
                                    </div>
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="shop" class="text-title">
                                        <h5>Sneh Herbal Soap</h5>
                                    </a>
                                    <h5 class="price"> &#8377; 70.21 <span>&#8377; 95.00</span></h5>
                                    <div class="progress custom-progressbar">
                                        <div class="progress-bar" style="width: 50%" role="progressbar"
                                            aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="item">Sold: <span>12 Items</span></h4>
                                    <h4 class="offer">Hurry up offer end in</h4>
                                    <div class="timer" id="clockdiv-1" data-hours="1" data-minutes="2" data-seconds="3">
                                        <ul>
                                            <li>
                                                <div class="counter">
                                                    <div class="days">
                                                        <h6></h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="counter">
                                                    <div class="hours">
                                                        <h6></h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="counter">
                                                    <div class="minutes">
                                                        <h6></h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="counter">
                                                    <div class="seconds">
                                                        <h6></h6>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Deal Section End -->

    <!-- Product Sction Start -->
    <section class="product-section">
        <div class="container-fluid-lg">
            <div class="title title-flex-2">
                <h2>Our Products</h2>
                <ul class="nav nav-tabs tab-style-color-2 tab-style-color" id="myTab">
                    <li class="nav-item">
                        <button class="nav-link btn active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all"
                            type="button">All</button>
                    </li>

                    <li class="nav-item">
                        <button class="nav-link btn" id="cooking-tab" data-bs-toggle="tab" data-bs-target="#cooking"
                            type="button"> Herbal Tea</button>
                    </li>

                    <li class="nav-item">
                        <button class="nav-link btn" id="fruits-tab" data-bs-toggle="tab" data-bs-target="#fruits"
                            type="button">Herbal Kadha</button>
                    </li>

                    <li class="nav-item">
                        <button class="nav-link btn" id="beverage-tab" data-bs-toggle="tab" data-bs-target="#beverage"
                            type="button">Herbal Soap</button>
                    </li>
                </ul>
            </div>

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                    <div class="row g-8">
                        <?php echo products(); ?>

                        <div class="col-xxl-2 col-lg-3 col-md-4 col-6 wow fadeInUp" data-wow-delay="0.05s">
                            <div class="product-box-4">
                                <div class="product-image">
                                    <div class="label-flex">
                                        <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                            <i class="iconly-Heart icli"></i>
                                        </button>
                                    </div>

                                    <a href="product-detail">
                                        <img src="assets/images/product/soap1.jpeg" class="img-fluid" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="wishlist.html">
                                                <i class="fa-regular fa-heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-detail">
                                        <h5 class="name">Potato</h5>
                                    </a>
                                    <h5 class="price theme-color"><i class="fa-solid fa-indian-rupee-sign"></i>
                                        70.21<del><i class="fa-solid fa-indian-rupee-sign"></i> 65.25</del></h5>
                                    <div class="price-qty">
                                        <div class="counter-number">
                                            <div class="counter">
                                                <div class="qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa-solid fa-minus"></i>
                                                </div>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="0">
                                                <div class="qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa-solid fa-plus"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="buy-button buy-button-2 btn btn-cart">
                                            <i class="iconly-Buy icli text-white m-0"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-2 col-lg-3 col-md-4 col-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="product-box-4">
                                <div class="product-image">
                                    <div class="label-flex">
                                        <div class="discount">
                                            <label>50%</label>
                                        </div>

                                        <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                            <i class="iconly-Heart icli"></i>
                                        </button>
                                    </div>

                                    <a href="product-detail">
                                        <img src="assets/images/product/tea1.jpeg" class="img-fluid" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="wishlist.html">
                                                <i class="fa-regular fa-heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-detail">
                                        <h5 class="name">Baby Chili</h5>
                                    </a>
                                    <h5 class="price theme-color"><i
                                            class="fa-solid fa-indian-rupee-sign"></i>70.21<del> <i
                                                class="fa-solid fa-indian-rupee-sign"></i> 65.25</del></h5>
                                    <div class="price-qty">
                                        <div class="counter-number">
                                            <div class="counter">
                                                <div class="qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa-solid fa-minus"></i>
                                                </div>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="0">
                                                <div class="qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa-solid fa-plus"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="buy-button buy-button-2 btn btn-cart">
                                            <i class="iconly-Buy icli text-white m-0"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-2 col-lg-3 col-md-4 col-6 wow fadeInUp" data-wow-delay="0.15s">
                            <div class="product-box-4">
                                <div class="product-image">
                                    <div class="label-flex">
                                        <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                            <i class="iconly-Heart icli"></i>
                                        </button>
                                    </div>

                                    <a href="product-detail">
                                        <img src="assets/images/product/tea2.jpeg" class="img-fluid" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="wishlist.html">
                                                <i class="fa-regular fa-heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-detail">
                                        <h5 class="name">Broccoli</h5>
                                    </a>
                                    <h5 class="price theme-color"><i class="fa-solid fa-indian-rupee-sign"></i>
                                        70.21<del> <i class="fa-solid fa-indian-rupee-sign"></i> 65.25</del></h5>
                                    <div class="price-qty">
                                        <div class="counter-number">
                                            <div class="counter">
                                                <div class="qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa-solid fa-minus"></i>
                                                </div>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="0">
                                                <div class="qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa-solid fa-plus"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="buy-button buy-button-2 btn btn-cart">
                                            <i class="iconly-Buy icli text-white m-0"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-2 col-lg-3 col-md-4 col-6 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="product-box-4">
                                <div class="product-image">
                                    <div class="label-flex">
                                        <div class="discount">
                                            <label>-25%</label>
                                        </div>

                                        <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                            <i class="iconly-Heart icli"></i>
                                        </button>
                                    </div>

                                    <a href="product-detail">
                                        <img src="assets/images/product/tea3.jpeg" class="img-fluid" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="wishlist.html">
                                                <i class="fa-regular fa-heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-detail">
                                        <h5 class="name">Peru</h5>
                                    </a>
                                    <h5 class="price theme-color"><i class="fa-solid fa-indian-rupee-sign"></i>
                                        70.21<del><i class="fa-solid fa-indian-rupee-sign"></i> 65.25</del></h5>
                                    <div class="price-qty">
                                        <div class="counter-number">
                                            <div class="counter">
                                                <div class="qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa-solid fa-minus"></i>
                                                </div>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="0">
                                                <div class="qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa-solid fa-plus"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="buy-button buy-button-2 btn btn-cart">
                                            <i class="iconly-Buy icli text-white m-0"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-2 col-lg-3 col-md-4 col-6 wow fadeInUp" data-wow-delay="0.25s">
                            <div class="product-box-4">
                                <div class="product-image">
                                    <div class="label-flex">
                                        <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                            <i class="iconly-Heart icli"></i>
                                        </button>
                                    </div>

                                    <a href="product-detail">
                                        <img src="assets/images/product/tea4.jpeg" class="img-fluid" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="wishlist.html">
                                                <i class="fa-regular fa-heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-detail">
                                        <h5 class="name">Avacado</h5>
                                    </a>
                                    <h5 class="price theme-color"><i class="fa-solid fa-indian-rupee-sign"></i>
                                        70.21<del><i class="fa-solid fa-indian-rupee-sign"></i> 65.25</del></h5>
                                    <div class="price-qty">
                                        <div class="counter-number">
                                            <div class="counter">
                                                <div class="qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa-solid fa-minus"></i>
                                                </div>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="0">
                                                <div class="qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa-solid fa-plus"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="buy-button buy-button-2 btn btn-cart">
                                            <i class="iconly-Buy icli text-white m-0"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-2 col-lg-3 col-md-4 col-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="product-box-4">
                                <div class="product-image">
                                    <div class="label-flex">
                                        <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                            <i class="iconly-Heart icli"></i>
                                        </button>
                                    </div>

                                    <a href="product-detail">
                                        <img src="assets/images/product/tea5.jpeg" class="img-fluid" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="wishlist.html">
                                                <i class="fa-regular fa-heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-detail">
                                        <h5 class="name">Cucumber</h5>
                                    </a>
                                    <h5 class="price theme-color"><i class="fa-solid fa-indian-rupee-sign"></i>
                                        70.21<del><i class="fa-solid fa-indian-rupee-sign"></i> 65.25</del></h5>
                                    <div class="price-qty">
                                        <div class="counter-number">
                                            <div class="counter">
                                                <div class="qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa-solid fa-minus"></i>
                                                </div>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="0">
                                                <div class="qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa-solid fa-plus"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="buy-button buy-button-2 btn btn-cart">
                                            <i class="iconly-Buy icli text-white m-0"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-2 col-lg-3 col-md-4 col-6 wow fadeInUp" data-wow-delay="0.35s">
                            <div class="product-box-4">
                                <div class="product-image">
                                    <div class="label-flex">
                                        <div class="discount">
                                            <label>-25%</label>
                                        </div>

                                        <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                            <i class="iconly-Heart icli"></i>
                                        </button>
                                    </div>

                                    <a href="product-detail">
                                        <img src="assets/images/product/tea6.jpeg" class="img-fluid" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="wishlist.html">
                                                <i class="fa-regular fa-heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-detail">
                                        <h5 class="name">Beetroot</h5>
                                    </a>
                                    <h5 class="price theme-color"><i class="fa-solid fa-indian-rupee-sign"></i>
                                        70.21<del><i class="fa-solid fa-indian-rupee-sign"></i> 65.25</del></h5>
                                    <div class="price-qty">
                                        <div class="counter-number">
                                            <div class="counter">
                                                <div class="qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa-solid fa-minus"></i>
                                                </div>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="0">
                                                <div class="qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa-solid fa-plus"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="buy-button buy-button-2 btn btn-cart">
                                            <i class="iconly-Buy icli text-white m-0"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-2 col-lg-3 col-md-4 col-6 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="product-box-4">
                                <div class="product-image">
                                    <div class="label-flex">
                                        <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                            <i class="iconly-Heart icli"></i>
                                        </button>
                                    </div>

                                    <a href="product-detail">
                                        <img src="assets/images/product/tea7.jpeg" class="img-fluid" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="wishlist.html">
                                                <i class="fa-regular fa-heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-detail">
                                        <h5 class="name">Strawberry</h5>
                                    </a>
                                    <h5 class="price theme-color"><i
                                            class="fa-solid fa-indian-rupee-sign"></i>70.21<del><i
                                                class="fa-solid fa-indian-rupee-sign"></i>65.25</del></h5>
                                    <div class="price-qty">
                                        <div class="counter-number">
                                            <div class="counter">
                                                <div class="qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa-solid fa-minus"></i>
                                                </div>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="0">
                                                <div class="qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa-solid fa-plus"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="buy-button buy-button-2 btn btn-cart">
                                            <i class="iconly-Buy icli text-white m-0"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-2 col-lg-3 col-md-4 col-6 wow fadeInUp" data-wow-delay="0.45s">
                            <div class="product-box-4">
                                <div class="product-image">
                                    <div class="label-flex">
                                        <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                            <i class="iconly-Heart icli"></i>
                                        </button>
                                    </div>

                                    <a href="product-detail">
                                        <img src="assets/images/product/tea8.jpeg" class="img-fluid" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="wishlist.html">
                                                <i class="fa-regular fa-heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                    </ul>
                                    <a href="product-detail">
                                        <h5 class="name">Corn</h5>
                                    </a>
                                    <h5 class="price theme-color"><i class="fa-solid fa-indian-rupee-sign"></i>
                                        70.21<del><i class="fa-solid fa-indian-rupee-sign"></i> 65.25</del></h5>
                                    <div class="price-qty">
                                        <div class="counter-number">
                                            <div class="counter">
                                                <div class="qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa-solid fa-minus"></i>
                                                </div>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="0">
                                                <div class="qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa-solid fa-plus"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="buy-button buy-button-2 btn btn-cart">
                                            <i class="iconly-Buy icli text-white m-0"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-2 col-lg-3 col-md-4 col-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="product-box-4">
                                <div class="product-image">
                                    <div class="label-flex">
                                        <div class="discount">
                                            <label>50%</label>
                                        </div>

                                        <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                            <i class="iconly-Heart icli"></i>
                                        </button>
                                    </div>

                                    <a href="product-detail">
                                        <img src="assets/images/product/tea9.jpeg" class="img-fluid" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="wishlist.html">
                                                <i class="fa-regular fa-heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-detail">
                                        <h5 class="name">Cabbage</h5>
                                    </a>
                                    <h5 class="price theme-color"><i class="fa-solid fa-indian-rupee-sign"></i>
                                        70.21<del><i class="fa-solid fa-indian-rupee-sign"></i> 65.25</del></h5>
                                    <div class="price-qty">
                                        <div class="counter-number">
                                            <div class="counter">
                                                <div class="qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa-solid fa-minus"></i>
                                                </div>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="0">
                                                <div class="qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa-solid fa-plus"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="buy-button buy-button-2 btn btn-cart">
                                            <i class="iconly-Buy icli text-white m-0"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="cooking" role="tabpanel" aria-labelledby="cooking-tab">
                    <div class="row g-8">
                        <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                            <div class="product-box-4">
                                <div class="product-image">
                                    <div class="label-flex">
                                        <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                            <i class="iconly-Heart icli"></i>
                                        </button>
                                    </div>

                                    <a href="product-detail">
                                        <img src="assets/images/product/tea1.jpeg" class="img-fluid" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="wishlist.html">
                                                <i class="fa-regular fa-heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-detail">
                                        <h5 class="name">Eggplant</h5>
                                    </a>
                                    <h5 class="price theme-color"><i class="fa-solid fa-indian-rupee-sign"></i>
                                        70.21<del><i class="fa-solid fa-indian-rupee-sign"></i> 65.25</del></h5>
                                    <div class="price-qty">
                                        <div class="counter-number">
                                            <div class="counter">
                                                <div class="qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa-solid fa-minus"></i>
                                                </div>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="0">
                                                <div class="qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa-solid fa-plus"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="buy-button buy-button-2 btn btn-cart">
                                            <i class="iconly-Buy icli text-white m-0"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                            <div class="product-box-4">
                                <div class="product-image">
                                    <div class="label-flex">
                                        <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                            <i class="iconly-Heart icli"></i>
                                        </button>
                                    </div>

                                    <a href="product-detail">
                                        <img src="assets/images/product/tea2.jpeg" class="img-fluid" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="wishlist.html">
                                                <i class="fa-regular fa-heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                    </ul>
                                    <a href="product-detail">
                                        <h5 class="name">Eggplant</h5>
                                    </a>
                                    <h5 class="price theme-color"><i class="fa-solid fa-indian-rupee-sign"></i>
                                        70.21<del><i class="fa-solid fa-indian-rupee-sign"></i> 65.25</del></h5>
                                    <div class="price-qty">
                                        <div class="counter-number">
                                            <div class="counter">
                                                <div class="qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa-solid fa-minus"></i>
                                                </div>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="0">
                                                <div class="qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa-solid fa-plus"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="buy-button buy-button-2 btn btn-cart">
                                            <i class="iconly-Buy icli text-white m-0"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                            <div class="product-box-4">
                                <div class="product-image">
                                    <div class="label-flex">
                                        <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                            <i class="iconly-Heart icli"></i>
                                        </button>
                                    </div>

                                    <a href="product-detail">
                                        <img src="assets/images/product/tea3.jpeg" class="img-fluid" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="wishlist.html">
                                                <i class="fa-regular fa-heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-detail">
                                        <h5 class="name">Onion</h5>
                                    </a>
                                    <h5 class="price theme-color"><i class="fa-solid fa-indian-rupee-sign"></i>
                                        70.21<del><i class="fa-solid fa-indian-rupee-sign"></i> 65.25</del></h5>
                                    <div class="price-qty">
                                        <div class="counter-number">
                                            <div class="counter">
                                                <div class="qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa-solid fa-minus"></i>
                                                </div>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="0">
                                                <div class="qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa-solid fa-plus"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="buy-button buy-button-2 btn btn-cart">
                                            <i class="iconly-Buy icli text-white m-0"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                            <div class="product-box-4">
                                <div class="product-image">
                                    <div class="label-flex">
                                        <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                            <i class="iconly-Heart icli"></i>
                                        </button>
                                    </div>

                                    <a href="product-detail">
                                        <img src="assets/images/product/tea4.jpeg" class="img-fluid" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="wishlist.html">
                                                <i class="fa-regular fa-heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-detail">
                                        <h5 class="name">Potato</h5>
                                    </a>
                                    <h5 class="price theme-color"><i class="fa-solid fa-indian-rupee-sign"></i>
                                        70.21<del><i class="fa-solid fa-indian-rupee-sign"></i> 65.25</del></h5>
                                    <div class="price-qty">
                                        <div class="counter-number">
                                            <div class="counter">
                                                <div class="qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa-solid fa-minus"></i>
                                                </div>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="0">
                                                <div class="qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa-solid fa-plus"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="buy-button buy-button-2 btn btn-cart">
                                            <i class="iconly-Buy icli text-white m-0"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                            <div class="product-box-4">
                                <div class="product-image">
                                    <div class="label-flex">
                                        <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                            <i class="iconly-Heart icli"></i>
                                        </button>
                                    </div>

                                    <a href="product-detail">
                                        <img src="assets/images/product/tea5.jpeg" class="img-fluid" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="wishlist.html">
                                                <i class="fa-regular fa-heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                    </ul>
                                    <a href="product-detail">
                                        <h5 class="name">Baby Chili</h5>
                                    </a>
                                    <h5 class="price theme-color"><i
                                            class="fa-solid fa-indian-rupee-sign"></i>70.21<del><i
                                                class="fa-solid fa-indian-rupee-sign"></i>65.25</del></h5>
                                    <div class="price-qty">
                                        <div class="counter-number">
                                            <div class="counter">
                                                <div class="qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa-solid fa-minus"></i>
                                                </div>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="0">
                                                <div class="qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa-solid fa-plus"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="buy-button buy-button-2 btn btn-cart">
                                            <i class="iconly-Buy icli text-white m-0"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                            <div class="product-box-4">
                                <div class="product-image">
                                    <div class="label-flex">
                                        <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                            <i class="iconly-Heart icli"></i>
                                        </button>
                                    </div>

                                    <a href="product-detail">
                                        <img src="assets/images/product/tea6.jpeg" class="img-fluid" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="wishlist.html">
                                                <i class="fa-regular fa-heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-detail">
                                        <h5 class="name">Broccoli</h5>
                                    </a>
                                    <h5 class="price theme-color"><i
                                            class="fa-solid fa-indian-rupee-sign"></i>70.21<del><i
                                                class="fa-solid fa-indian-rupee-sign"></i>65.25</del></h5>
                                    <div class="price-qty">
                                        <div class="counter-number">
                                            <div class="counter">
                                                <div class="qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa-solid fa-minus"></i>
                                                </div>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="0">
                                                <div class="qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa-solid fa-plus"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="buy-button buy-button-2 btn btn-cart">
                                            <i class="iconly-Buy icli text-white m-0"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                            <div class="product-box-4">
                                <div class="product-image">
                                    <div class="label-flex">
                                        <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                            <i class="iconly-Heart icli"></i>
                                        </button>
                                    </div>

                                    <a href="product-detail">
                                        <img src="assets/images/product/tea7.jpeg" class="img-fluid" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="wishlist.html">
                                                <i class="fa-regular fa-heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-detail">
                                        <h5 class="name">Pea</h5>
                                    </a>
                                    <h5 class="price theme-color"><i
                                            class="fa-solid fa-indian-rupee-sign"></i>70.21<del><i
                                                class="fa-solid fa-indian-rupee-sign"></i>65.25</del></h5>
                                    <div class="price-qty">
                                        <div class="counter-number">
                                            <div class="counter">
                                                <div class="qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa-solid fa-minus"></i>
                                                </div>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="0">
                                                <div class="qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa-solid fa-plus"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="buy-button buy-button-2 btn btn-cart">
                                            <i class="iconly-Buy icli text-white m-0"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                            <div class="product-box-4">
                                <div class="product-image">
                                    <div class="label-flex">
                                        <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                            <i class="iconly-Heart icli"></i>
                                        </button>
                                    </div>

                                    <a href="product-detail">
                                        <img src="assets/images/product/tea8.jpeg" class="img-fluid" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="wishlist.html">
                                                <i class="fa-regular fa-heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                    </ul>
                                    <a href="product-detail">
                                        <h5 class="name">Cucumber</h5>
                                    </a>
                                    <h5 class="price theme-color"><i
                                            class="fa-solid fa-indian-rupee-sign"></i>70.21<del><i
                                                class="fa-solid fa-indian-rupee-sign"></i>65.25</del></h5>
                                    <div class="price-qty">
                                        <div class="counter-number">
                                            <div class="counter">
                                                <div class="qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa-solid fa-minus"></i>
                                                </div>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="0">
                                                <div class="qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa-solid fa-plus"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="buy-button buy-button-2 btn btn-cart">
                                            <i class="iconly-Buy icli text-white m-0"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                            <div class="product-box-4">
                                <div class="product-image">
                                    <div class="label-flex">
                                        <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                            <i class="iconly-Heart icli"></i>
                                        </button>
                                    </div>

                                    <a href="product-detail">
                                        <img src="assets/images/product/tea9.jpeg" class="img-fluid" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="wishlist.html">
                                                <i class="fa-regular fa-heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-detail">
                                        <h5 class="name">Cabbage</h5>
                                    </a>
                                    <h5 class="price theme-color"><i
                                            class="fa-solid fa-indian-rupee-sign"></i>70.21<del><i
                                                class="fa-solid fa-indian-rupee-sign"></i>65.25</del></h5>
                                    <div class="price-qty">
                                        <div class="counter-number">
                                            <div class="counter">
                                                <div class="qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa-solid fa-minus"></i>
                                                </div>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="0">
                                                <div class="qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa-solid fa-plus"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="buy-button buy-button-2 btn btn-cart">
                                            <i class="iconly-Buy icli text-white m-0"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="fruits" role="tabpanel" aria-labelledby="fruits-tab">
                    <div class="row g-8">
                        <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                            <div class="product-box-4">
                                <div class="product-image">
                                    <div class="label-flex">
                                        <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                            <i class="iconly-Heart icli"></i>
                                        </button>
                                    </div>

                                    <a href="product-detail">
                                        <img src="assets/images/product/kadha1.jpeg" class="img-fluid" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="wishlist.html">
                                                <i class="fa-regular fa-heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                    </ul>
                                    <a href="product-detail">
                                        <h5 class="name">Apple</h5>
                                    </a>
                                    <h5 class="price theme-color"><i
                                            class="fa-solid fa-indian-rupee-sign"></i>70.21<del><i
                                                class="fa-solid fa-indian-rupee-sign"></i>65.25</del></h5>
                                    <div class="price-qty">
                                        <div class="counter-number">
                                            <div class="counter">
                                                <div class="qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa-solid fa-minus"></i>
                                                </div>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="0">
                                                <div class="qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa-solid fa-plus"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="buy-button buy-button-2 btn btn-cart">
                                            <i class="iconly-Buy icli text-white m-0"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="beverage" role="tabpanel" aria-labelledby="beverage-tab">
                    <div class="row g-8">
                        <div class="col-xxl-2 col-lg-3 col-md-4 col-6">
                            <div class="product-box-4">
                                <div class="product-image">
                                    <div class="label-flex">
                                        <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                            <i class="iconly-Heart icli"></i>
                                        </button>
                                    </div>

                                    <a href="product-detail">
                                        <img src="assets/images/product/soap1.jpeg" class="img-fluid" alt="">
                                    </a>

                                    <ul class="option">
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                                <i class="iconly-Show icli"></i>
                                            </a>
                                        </li>
                                        <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                            <a href="wishlist.html">
                                                <i class="fa-regular fa-heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="product-detail">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <a href="product-detail">
                                        <h5 class="name">Eggplant</h5>
                                    </a>
                                    <h5 class="price theme-color"><i class="fa-solid fa-indian-rupee-sign"></i>
                                        70.21<del><i class="fa-solid fa-indian-rupee-sign"></i> 65.25</del></h5>
                                    <div class="price-qty">
                                        <div class="counter-number">
                                            <div class="counter">
                                                <div class="qty-left-minus" data-type="minus" data-field="">
                                                    <i class="fa-solid fa-minus"></i>
                                                </div>
                                                <input class="form-control input-number qty-input" type="text"
                                                    name="quantity" value="0">
                                                <div class="qty-right-plus" data-type="plus" data-field="">
                                                    <i class="fa-solid fa-plus"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <button class="buy-button buy-button-2 btn btn-cart">
                                            <i class="iconly-Buy icli text-white m-0"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Sction End -->

    <!-- Banner Section Start -->
    <section class="banner-section">
        <div class="container-fluid-lg">
            <div class="row gy-xl-0 gy-3">
                <div class="col-xl-6">
                    <div class="banner-contain-3 hover-effect">
                        <img src="assets/images/banner/bt1.jpg" class="bg-img img-fluid" alt="" height="auto">
                        <div
                            class="banner-detail banner-details-dark text-white p-center-left w-50 position-relative mend-auto">
                            <div>
                                <!-- <h6 class="ls-expanded text-uppercase">Premium</h6>
                                <h3 class="mb-sm-3 mb-1">Fresh Vegetable & Daily Eating</h3>
                                <h4>Get Extra 50% Off</h4>
                                <button class="btn theme-color bg-white btn-md fw-bold mt-sm-3 mt-1 mend-auto"
                                    onclick="location.href = 'shop';">Shop Now</button> -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="banner-contain-3 hover-effect">
                        <img src="assets/images/banner/bt2.jpg" class="bg-img img-fluid" alt="">
                        <div class="banner-detail text-dark p-center-left w-50 position-relative mend-auto">
                            <div>
                                <!-- <h6 class=" ls-expanded text-uppercase">available</h6>
                                <h3 class="mb-sm-3 mb-1">100% Natural & Healthy Fruits</h3>
                                <h4 class="text-content">Weekend Special</h4>
                                <button class="btn theme-bg-color text-white btn-md fw-bold mt-sm-3 mt-1 mend-auto"
                                    onclick="location.href = 'shop';">Shop Now</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->


    <!-- Product Sction Start -->
    <section class="product-section">
        <div class="container-fluid-lg">
            <div class="title">
                <h2>Top Products</h2>
            </div>

            <div class="slider-6 img-slider slick-slider-1 arrow-slider">
                <div>
                    <div class="product-box-4 wow fadeInUp">
                        <div class="product-image">
                            <div class="label-flex">
                                <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                    <i class="iconly-Heart icli"></i>
                                </button>
                            </div>

                            <a href="product-detail">
                                <img src="assets/images/product/kadha1.jpeg" class="img-fluid" alt="">
                            </a>

                            <ul class="option">
                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                        <i class="iconly-Show icli"></i>
                                    </a>
                                </li>
                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                    <a href="wishlist.html">
                                        <i class="fa-regular fa-heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="product-detail">
                            <ul class="rating">
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                                <li>
                                    <i data-feather="star"></i>
                                </li>
                            </ul>
                            <a href="product-detail">
                                <h5 class="name">Eggplant</h5>
                            </a>
                            <h5 class="price theme-color"><i class="fa-solid fa-indian-rupee-sign"></i> 70.21<del><i
                                        class="fa-solid fa-indian-rupee-sign"></i> 65.25</del></h5>
                            <div class="price-qty">
                                <div class="counter-number">
                                    <div class="counter">
                                        <div class="qty-left-minus" data-type="minus" data-field="">
                                            <i class="fa-solid fa-minus"></i>
                                        </div>
                                        <input class="form-control input-number qty-input" type="text" name="quantity"
                                            value="0">
                                        <div class="qty-right-plus" data-type="plus" data-field="">
                                            <i class="fa-solid fa-plus"></i>
                                        </div>
                                    </div>
                                </div>

                                <button class="buy-button buy-button-2 btn btn-cart">
                                    <i class="iconly-Buy icli text-white m-0"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                </div>

                <div>
                    <div class="product-box-4 wow fadeInUp">
                        <div class="product-image">
                            <div class="label-flex">
                                <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                    <i class="iconly-Heart icli"></i>
                                </button>
                            </div>

                            <a href="product-detail">
                                <img src="assets/images/product/tea3.jpeg" class="img-fluid" alt="">
                            </a>

                            <ul class="option">
                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                        <i class="iconly-Show icli"></i>
                                    </a>
                                </li>
                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                    <a href="wishlist.html">
                                        <i class="fa-regular fa-heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="product-detail">
                            <ul class="rating">
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                            </ul>
                            <a href="product-detail">
                                <h5 class="name">Eggplant</h5>
                            </a>
                            <h5 class="price theme-color"><i class="fa-solid fa-indian-rupee-sign"></i> 70.21<del><i
                                        class="fa-solid fa-indian-rupee-sign"></i> 65.25</del></h5>
                            <div class="price-qty">
                                <div class="counter-number">
                                    <div class="counter">
                                        <div class="qty-left-minus" data-type="minus" data-field="">
                                            <i class="fa-solid fa-minus"></i>
                                        </div>
                                        <input class="form-control input-number qty-input" type="text" name="quantity"
                                            value="0">
                                        <div class="qty-right-plus" data-type="plus" data-field="">
                                            <i class="fa-solid fa-plus"></i>
                                        </div>
                                    </div>
                                </div>

                                <button class="buy-button buy-button-2 btn btn-cart">
                                    <i class="iconly-Buy icli text-white m-0"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="product-box-4 wow fadeInUp">
                        <div class="product-image">
                            <div class="label-flex">
                                <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                    <i class="iconly-Heart icli"></i>
                                </button>
                            </div>

                            <a href="product-detail">
                                <img src="assets/images/product/tea5.jpeg" class="img-fluid" alt="">
                            </a>

                            <ul class="option">
                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                        <i class="iconly-Show icli"></i>
                                    </a>
                                </li>
                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                    <a href="wishlist.html">
                                        <i class="fa-regular fa-heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="product-detail">
                            <ul class="rating">
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                                <li>
                                    <i data-feather="star"></i>
                                </li>
                                <li>
                                    <i data-feather="star"></i>
                                </li>
                                <li>
                                    <i data-feather="star"></i>
                                </li>
                            </ul>
                            <a href="product-detail">
                                <h5 class="name">Onion</h5>
                            </a>
                            <h5 class="price theme-color"><i class="fa-solid fa-indian-rupee-sign"></i> 70.21<del><i
                                        class="fa-solid fa-indian-rupee-sign"></i> 65.25</del></h5>
                            <div class="price-qty">
                                <div class="counter-number">
                                    <div class="counter">
                                        <div class="qty-left-minus" data-type="minus" data-field="">
                                            <i class="fa-solid fa-minus"></i>
                                        </div>
                                        <input class="form-control input-number qty-input" type="text" name="quantity"
                                            value="0">
                                        <div class="qty-right-plus" data-type="plus" data-field="">
                                            <i class="fa-solid fa-plus"></i>
                                        </div>
                                    </div>
                                </div>

                                <button class="buy-button buy-button-2 btn btn-cart">
                                    <i class="iconly-Buy icli text-white m-0"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="product-box-4 wow fadeInUp">
                        <div class="product-image">
                            <div class="label-flex">
                                <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                    <i class="iconly-Heart icli"></i>
                                </button>
                            </div>

                            <a href="product-detail">
                                <img src="assets/images/product/tea7.jpeg" class="img-fluid" alt="">
                            </a>

                            <ul class="option">
                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                        <i class="iconly-Show icli"></i>
                                    </a>
                                </li>
                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                    <a href="wishlist.html">
                                        <i class="fa-regular fa-heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="product-detail">
                            <ul class="rating">
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                                <li>
                                    <i data-feather="star"></i>
                                </li>
                            </ul>
                            <a href="product-detail">
                                <h5 class="name">Pea</h5>
                            </a>
                            <h5 class="price theme-color"><i class="fa-solid fa-indian-rupee-sign"></i> 70.21<del><i
                                        class="fa-solid fa-indian-rupee-sign"></i> 65.25</del></h5>
                            <div class="price-qty">
                                <div class="counter-number">
                                    <div class="counter">
                                        <div class="qty-left-minus" data-type="minus" data-field="">
                                            <i class="fa-solid fa-minus"></i>
                                        </div>
                                        <input class="form-control input-number qty-input" type="text" name="quantity"
                                            value="0">
                                        <div class="qty-right-plus" data-type="plus" data-field="">
                                            <i class="fa-solid fa-plus"></i>
                                        </div>
                                    </div>
                                </div>

                                <button class="buy-button buy-button-2 btn btn-cart">
                                    <i class="iconly-Buy icli text-white m-0"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="product-box-4 wow fadeInUp">
                        <div class="product-image">
                            <div class="label-flex">
                                <div class="discount">
                                    <label>-25%</label>
                                </div>

                                <button class="btn p-0 wishlist btn-wishlist notifi-wishlist">
                                    <i class="iconly-Heart icli"></i>
                                </button>
                            </div>

                            <a href="product-detail">
                                <img src="assets/images/product/tea9.jpeg" class="img-fluid" alt="">
                            </a>

                            <ul class="option">
                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Quick View">
                                    <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#view">
                                        <i class="iconly-Show icli"></i>
                                    </a>
                                </li>
                                <li data-bs-toggle="tooltip" data-bs-placement="top" title="Wishlist">
                                    <a href="wishlist.html">
                                        <i class="fa-regular fa-heart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="product-detail">
                            <ul class="rating">
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                                <li>
                                    <i data-feather="star" class="fill"></i>
                                </li>
                                <li>
                                    <i data-feather="star"></i>
                                </li>
                                <li>
                                    <i data-feather="star"></i>
                                </li>
                                <li>
                                    <i data-feather="star"></i>
                                </li>
                            </ul>
                            <a href="product-detail">
                                <h5 class="name">Strawberry</h5>
                            </a>
                            <h5 class="price theme-color"><i class="fa-solid fa-indian-rupee-sign"></i> 70.21<del><i
                                        class="fa-solid fa-indian-rupee-sign"></i> 65.25</del></h5>
                            <div class="price-qty">
                                <div class="counter-number">
                                    <div class="counter">
                                        <div class="qty-left-minus" data-type="minus" data-field="">
                                            <i class="fa-solid fa-minus"></i>
                                        </div>
                                        <input class="form-control input-number qty-input" type="text" name="quantity"
                                            value="0">
                                        <div class="qty-right-plus" data-type="plus" data-field="">
                                            <i class="fa-solid fa-plus"></i>
                                        </div>
                                    </div>
                                </div>

                                <button class="buy-button buy-button-2 btn btn-cart">
                                    <i class="iconly-Buy icli text-white m-0"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Sction End -->

    <!-- Banner Section Start -->
    <section class="banner-section">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="banner-contain-3 section-b-space section-t-space hover-effect">
                        <img src="assets/images/banner/bt-3.jpg" class="img-fluid bg-img" alt="">
                        <div class="banner-detail p-center text-dark position-relative text-center p-0">
                            <div>
                                <h4 class="ls-expanded text-uppercase theme-color">Try Our New</h4>
                                <h2 class="my-3">100% Organic Best Quality Best Price</h2>
                                <h4 class="text-content fw-300">Best Fastkart Food Quality</h4>
                                <button class="btn theme-bg-color mt-sm-4 btn-md mx-auto text-white fw-bold"
                                    onclick="location.href = 'shop';">Shop Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->

    <!-- Blog Section Start -->
    <section class="blog-section">
        <div class="container-fluid-lg">
            <div class="title">
                <h2>Blog</h2>
            </div>

            <div class="slider-3 arrow-slider">
                <div>
                    <div class="blog-box ratio_50">
                        <div class="blog-box-image">
                            <a href="blog-detail.html">
                                <img src="assets/images/blog/blog1.jpg" class="img-fluid bg-img" alt="">
                            </a>
                        </div>

                        <div class="blog-detail">
                            <label>Conversion rate optimization</label>
                            <a href="blog-detail.html">
                                <h2>A Fresh Vegetable online market place a fresh...</h2>
                            </a>
                            <div class="blog-list">
                                <span>March 9, 2021</span>
                                <span>By Emil Kristensen</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="blog-box ratio_50">
                        <div class="blog-box-image">
                            <a href="blog-detail.html">
                                <img src="assets/images/blog/blog2.jpg" class="img-fluid bg-img" alt="">
                            </a>
                        </div>

                        <div class="blog-detail">
                            <label>Email Marketing</label>
                            <a href="blog-detail.html">
                                <h2>A Fresh Vegetable online market place a fresh...</h2>
                            </a>
                            <div class="blog-list">
                                <span>March 9, 2021</span>
                                <span>By Emil Kristensen</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="blog-box ratio_50">
                        <div class="blog-box-image">
                            <a href="blog-detail.html">
                                <img src="assets/images/blog/blog3.jpg" class="img-fluid bg-img" alt="">
                            </a>
                        </div>

                        <div class="blog-detail">
                            <label>Conversion rate optimization</label>
                            <a href="blog-detail.html">
                                <h2>A Fresh Vegetable online market place a fresh...</h2>
                            </a>
                            <div class="blog-list">
                                <span>March 9, 2021</span>
                                <span>By Emil Kristensen</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="blog-box ratio_50">
                        <div class="blog-box-image">
                            <a href="blog-detail.html">
                                <img src="assets/images/veg-3/blog/1.jpg" class="img-fluid bg-img" alt="">
                            </a>
                        </div>

                        <div class="blog-detail">
                            <label>Conversion rate optimization</label>
                            <a href="blog-detail.html">
                                <h2>A Fresh Vegetable online market place a fresh...</h2>
                            </a>
                            <div class="blog-list">
                                <span>March 9, 2021</span>
                                <span>By Emil Kristensen</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

    <!-- Newsletter Section Start -->
    <section class="newsletter-section section-b-space">
        <div class="container-fluid-lg">
            <div class="newsletter-box newsletter-box-2">
                <div class="newsletter-contain py-5">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xxl-4 col-lg-5 col-md-7 col-sm-9 offset-xxl-2 offset-md-1">
                                <div class="newsletter-detail">
                                    <h2>Join our newsletter and get...</h2>
                                    <h5><i class="fa-solid fa-indian-rupee-sign"></i> 20 discount for your first order
                                    </h5>
                                    <div class="input-box">
                                        <input type="email" class="form-control" id="exampleFormControlInput1"
                                            placeholder="Enter Your Email">
                                        <i class="fa-solid fa-envelope arrow"></i>
                                        <button class="sub-btn  btn-animation">
                                            <span class="d-sm-block d-none">Subscribe</span>
                                            <i class="fa-solid fa-arrow-right icon"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Newsletter Section End -->

    <!-- Footer Section Start -->
    <?php include 'includes/footer.php';?>
    <!-- Footer Section End -->

    <!-- Quick View Modal Box Start -->
    <div class="modal fade theme-modal view-modal" id="view" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header p-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="row g-sm-4 g-2">
                        <div class="col-lg-6">
                            <div class="slider-image">
                                <img src="assets/images/product/<?php echo $image; ?>"
                                    class="img-fluid blur-up lazyload" alt="">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="right-sidebar-modal">
                                <h4 class="title-name">Peanut Butter Bite Premium Butter Cookies 600 g</h4>
                                <h4 class="price"><i class="fa-solid fa-indian-rupee-sign"></i> 36.99</h4>
                                <div class="product-rating">
                                    <ul class="rating">
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star" class="fill"></i>
                                        </li>
                                        <li>
                                            <i data-feather="star"></i>
                                        </li>
                                    </ul>
                                    <span class="ms-2">8 Reviews</span>
                                    <span class="ms-2 text-danger">6 sold in last 16 hours</span>
                                </div>

                                <div class="product-detail">
                                    <h4>Product Details :</h4>
                                    <p>Candy canes sugar plum tart cotton candy chupa chups sugar plum chocolate I love.
                                        Caramels marshmallow icing dessert candy canes I love soufflé I love toffee.
                                        Marshmallow pie sweet sweet roll sesame snaps tiramisu jelly bear claw. Bonbon
                                        muffin I love carrot cake sugar plum dessert bonbon.</p>
                                </div>

                                <ul class="brand-list">
                                    <li>
                                        <div class="brand-box">
                                            <h5>Brand Name:</h5>
                                            <h6>Black Forest</h6>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="brand-box">
                                            <h5>Product Code:</h5>
                                            <h6>W0690034</h6>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="brand-box">
                                            <h5>Product Type:</h5>
                                            <h6>White Cream Cake</h6>
                                        </div>
                                    </li>
                                </ul>

                                <div class="select-size">
                                    <h4>Cake Size :</h4>
                                    <select class="form-select select-form-size">
                                        <option selected>Select Size</option>
                                        <option value="1.2">1/2 KG</option>
                                        <option value="0">1 KG</option>
                                        <option value="1.5">1/5 KG</option>
                                        <option value="red">Red Roses</option>
                                        <option value="pink">With Pink Roses</option>
                                    </select>
                                </div>

                                <div class="modal-button">
                                    <button onclick="location.href = 'cart.html';"
                                        class="btn btn-md add-cart-button icon">Add
                                        To Cart</button>
                                    <button onclick="location.href = 'product-left.html';"
                                        class="btn theme-bg-color view-button icon text-white fw-bold btn-md">
                                        View More Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quick View Modal Box End -->

    <!-- Location Modal Start -->
    <div class="modal location-modal fade theme-modal" id="locationModal" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Choose your Delivery Location</h5>
                    <p class="mt-1 text-content">Enter your address and we will specify the offer for your area.</p>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="location-list">
                        <div class="search-input">
                            <input type="search" class="form-control" placeholder="Search Your Area">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>

                        <div class="disabled-box">
                            <h6>Select a Location</h6>
                        </div>

                        <ul class="location-select custom-height">
                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Alabama</h6>
                                    <span>Min: <i class="fa-solid fa-indian-rupee-sign"></i> 130</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Arizona</h6>
                                    <span>Min: <i class="fa-solid fa-indian-rupee-sign"></i> 150</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>California</h6>
                                    <span>Min: <i class="fa-solid fa-indian-rupee-sign"></i> 110</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Colorado</h6>
                                    <span>Min: <i class="fa-solid fa-indian-rupee-sign"></i> 140</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Florida</h6>
                                    <span>Min: <i class="fa-solid fa-indian-rupee-sign"></i> 160</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Georgia</h6>
                                    <span>Min: <i class="fa-solid fa-indian-rupee-sign"></i> 120</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Kansas</h6>
                                    <span>Min: <i class="fa-solid fa-indian-rupee-sign"></i> 170</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Minnesota</h6>
                                    <span>Min: <i class="fa-solid fa-indian-rupee-sign"></i> 120</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>New York</h6>
                                    <span>Min: <i class="fa-solid fa-indian-rupee-sign"></i>110</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0)">
                                    <h6>Washington</h6>
                                    <span>Min: <i class="fa-solid fa-indian-rupee-sign"></i> 130</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Location Modal End -->

    <!-- Deal Box Modal Start -->
    <div class="modal fade theme-modal deal-modal" id="deal-box" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <h5 class="modal-title w-100" id="deal_today">Deal Today</h5>
                        <p class="mt-1 text-content">Recommended deals for you.</p>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="deal-offer-box">
                        <ul class="deal-offer-list">
                            <li class="list-1">
                                <div class="deal-offer-contain">
                                    <a href="shop" class="deal-image">
                                        <img src="assets/images/vegetable/product/10.png" class="blur-up lazyload"
                                            alt="">
                                    </a>

                                    <a href="shop" class="deal-contain">
                                        <h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
                                        <h6><i class="fa-solid fa-indian-rupee-sign"></i> 52.57 <del>57.62</del>
                                            <span>500 G</span></h6>
                                    </a>
                                </div>
                            </li>

                            <li class="list-2">
                                <div class="deal-offer-contain">
                                    <a href="shop" class="deal-image">
                                        <img src="assets/images/vegetable/product/11.png" class="blur-up lazyload"
                                            alt="">
                                    </a>

                                    <a href="shop" class="deal-contain">
                                        <h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
                                        <h6><i class="fa-solid fa-indian-rupee-sign"></i> 52.57 <del>57.62</del>
                                            <span>500 G</span></h6>
                                    </a>
                                </div>
                            </li>

                            <li class="list-3">
                                <div class="deal-offer-contain">
                                    <a href="shop" class="deal-image">
                                        <img src="assets/images/vegetable/product/12.png" class="blur-up lazyload"
                                            alt="">
                                    </a>

                                    <a href="shop" class="deal-contain">
                                        <h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
                                        <h6><i class="fa-solid fa-indian-rupee-sign"></i> 52.57 <del>57.62</del>
                                            <span>500 G</span></h6>
                                    </a>
                                </div>
                            </li>

                            <li class="list-1">
                                <div class="deal-offer-contain">
                                    <a href="shop" class="deal-image">
                                        <img src="assets/images/vegetable/product/13.png" class="blur-up lazyload"
                                            alt="">
                                    </a>

                                    <a href="shop" class="deal-contain">
                                        <h5>Blended Instant Coffee 50 g Buy 1 Get 1 Free</h5>
                                        <h6><i class="fa-solid fa-indian-rupee-sign"></i> 52.57 <del>57.62</del>
                                            <span>500 G</span></h6>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Deal Box Modal End -->

    <!-- Cookie Bar Box Start -->
    <!-- <div class="cookie-bar-box">
        <div class="cookie-box">
            <div class="cookie-image">
                <img src="assets/images/cookie-bar.png" class="blur-up lazyload" alt="">
                <h2>Cookies!</h2>
            </div>

            <div class="cookie-contain">
                <h5 class="text-content">We use cookies to make your experience better</h5>
            </div>
        </div>

        <div class="button-group">
            <button class="btn privacy-button">Privacy Policy</button>
            <button class="btn ok-button">OK</button>
        </div>
    </div> -->
    <!-- Cookie Bar Box End -->

    <!-- Items section Start -->
    <div class="button-item">
        <button class="item-btn btn text-white">
            <i class="iconly-Bag-2 icli"></i>
        </button>
    </div>
    <div class="item-section">
        <button class="close-button">
            <i class="fas fa-times"></i>
        </button>
        <h6>
            <i class="iconly-Bag-2 icli"></i>
            <span>5 Items</span>
        </h6>
        <ul class="items-image">
            <li>
                <img src="assets/images/veg-3/cate1/1.png" alt="">
            </li>
            <li>
                <img src="assets/images/veg-3/cate1/2.png" alt="">
            </li>
            <li>+3</li>
        </ul>
        <button onclick="location.href = 'cart';" class="btn item-button btn-sm fw-bold"> <i
                class="fa-solid fa-indian-rupee-sign"></i> 20.70</button>
    </div>
    <!-- Items section End -->

    <!-- Tap to top start -->
    <div class="theme-option">
        <div class="back-to-top">
            <a id="back-to-top" href="#">
                <i class="fas fa-chevron-up"></i>
            </a>
        </div>
    </div>
    <!-- Tap to top end -->

    <!-- Bg overlay Start -->
    <div class="bg-overlay"></div>
    <!-- Bg overlay End -->

    <?php include 'includes/script.php'; ?>


    </script>

    <!--owlcarousel-->
    <script src="assets/js/owl.carousel.js"></script>

    <script>
        $(document).ready(function () {

            $(".services_carousel").owlCarousel({
                loop: true,
                autoplay: true,
                autoplaySpeed: 1500,
                nav: true,
                dots: true,
                // center: true,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    568: {
                        items: 1,
                        nav: false
                    },
                    768: {
                        items: 1,
                        nav: false
                    }
                }
            })

        })


    </script>

</body>

</html>