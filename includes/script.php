    <!-- latest jquery-->
    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <!-- jquery ui-->
    <script src="assets/js/jquery-ui.min.js"></script>

    <!-- Bootstrap js-->
    <script src="assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap/popper.min.js"></script>

    <!-- feather icon js-->
    <script src="assets/js/feather/feather.min.js"></script>
    <script src="assets/js/feather/feather-icon.js"></script>

    <!-- Lazyload Js -->
    <script src="assets/js/lazysizes.min.js"></script>

    <!-- Slick js-->
    <script src="assets/js/slick/slick.js"></script>
    <script src="assets/js/bootstrap/bootstrap-notify.min.js"></script>
    <script src="assets/js/slick/custom_slick.js"></script>

    <!-- Auto Height Js -->
    <script src="assets/js/auto-height.js"></script>

    <!-- Quantity Js -->
    <script src="assets/js/quantity.js"></script>

    <!-- Timer Js -->
    <script src="assets/js/timer1.js"></script>
    <script src="assets/js/timer2.js"></script>
    <script src="assets/js/timer3.js"></script>
    <script src="assets/js/timer4.js"></script>

    <!-- Fly Cart Js -->
    <script src="assets/js/fly-cart.js"></script>

    <!-- WOW js -->
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/custom-wow.js"></script>

    <!-- script js -->
    <script src="assets/js/script.js"></script>
  <script>

$('.single-item').slick({
    dots: true,
    infinite: true,
  speed: 1500,
  arrows: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 4000,
  arrows: true,
    prevArrow: '<div class="slick-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>',
    nextArrow: '<div class="slick-next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>',
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});