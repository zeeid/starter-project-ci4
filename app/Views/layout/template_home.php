<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= $title ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="assets/css/normalize.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <!-- Font-awesome CSS-->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- Owl Caousel CSS -->
    <link rel="stylesheet" href="assets/vendor/OwlCarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendor/OwlCarousel/owl.theme.default.min.css">
    <!-- Main Menu CSS -->
    <link rel="stylesheet" href="assets/css/meanmenu.min.css">
    <!-- Magnific CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
    <!-- Switch Style CSS -->
    <link rel="stylesheet" href="assets/css/hover-min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/style.css">
    <!-- For IE -->
    <link rel="stylesheet" type="text/css" href="assets/css/ie-only.css" />
    <!-- Modernizr Js -->
    <script src="assets/js/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an 
        <strong>outdated</strong> browser. Please 
        <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
    </p>
    <![endif]-->
    <!-- Add your site or application content here -->
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->

    <!-- RENDER KONTEN -->
        <?= $this->renderSection('konten'); ?>
    <!-- RENDER KONTEN -->

    <!-- jquery-->
    <script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
    <!-- Plugins js -->
    <script src="assets/js/plugins.js" type="text/javascript"></script>
    <!-- Popper js -->
    <script src="assets/js/popper.js" type="text/javascript"></script>
    <!-- Bootstrap js -->
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- WOW JS -->
    <script src="assets/js/wow.min.js"></script>
    <!-- Owl Cauosel JS -->
    <script src="assets/vendor/OwlCarousel/owl.carousel.min.js" type="text/javascript"></script>
    <!-- Meanmenu Js -->
    <script src="assets/js/jquery.meanmenu.min.js" type="text/javascript"></script>
    <!-- Srollup js -->
    <script src="assets/js/jquery.scrollUp.min.js" type="text/javascript"></script>
    <!-- jquery.counterup js -->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <!-- Isotope js -->
    <script src="assets/js/isotope.pkgd.min.js" type="text/javascript"></script>
    <!-- Magnific Popup -->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Ticker Js -->
    <script src="assets/js/ticker.js" type="text/javascript"></script>
    <!-- Custom Js -->
    <script src="assets/js/main.js" type="text/javascript"></script>
</body>

</html>