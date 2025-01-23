<?php
    session_start();
    $email='';
    if(isset($_SESSION['email']))
    {
        $email=$_SESSION['email'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
.carousel-item{
    min-height: 280px;
}
</style>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>e-quiz</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="m-4">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">FastEAT</a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    
                    
                </div>
               
                <div class="navbar-nav">
                    <a href="signup.php" class="nav-item nav-link">Sign Up</a>
                   
                </div>
            </div>
        </div>
    </nav>

    <!doctype html>
<html class="no-js" lang="zxx">
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> FastEat</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <div class="slider-area">
            <div class="slider-active owl-dot-style owl-carousel">
                <div class="single-slider pt-210 pb-220 bg-img" style="background-image:url(assets/img/slider/slider-1.jpg);">
                    <div class="container">
                        <div class="slider-content slider-animated-1">
                            <h1 class="animated">Drink & Heathy Food</h1>
                            <h3 class="animated">Fresh Heathy and Organic.</h3>
                            <div class="slider-btn mt-90">
                                <a class="animated" href="signin.php">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider pt-210 pb-220 bg-img" style="background-image:url(assets/img/slider/slider-2.jpg);">
                    <div class="container">
                        <div class="slider-content slider-animated-1">
                            <h1 class="animated">Drink & Heathy Food</h1>
                            <h3 class="animated">Fresh Heathy and Organic.</h3>
                            <div class="slider-btn mt-90">
                                <a class="animated" href="signin.php">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="assets/js/vendor/jquery-1.12.0.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>
