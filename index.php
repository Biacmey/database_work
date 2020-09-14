<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>卑鄙粘之棉_首頁</title>

    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content=" Inwardly
 Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!--// Meta tag Keywords -->
    <!-- css files -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
    <link href="css/style6.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="css/fontawesome-all.css">
    <!-- Font-Awesome-Icons-CSS -->
    <!-- //css files -->
    <!--web font-->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i" rel="stylesheet">
    <!--//web font-->
</head>

<body>
    <?php session_start(); ?>
    <!-- banner -->
    <section class="banner" id="home">
        <!-- header -->
        <header>
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <h1><a class="navbar-brand" href="index.php">
                            <span class="fab fa-osi"></span> 卑鄙粘之棉
                        </a></h1>
                    <button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <ul class="navbar-nav ml-lg-auto text-center">
                            <li class="nav-item active cool">
                                <a class="nav-link" href="index.php">首頁
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item cool">
                                <a class="nav-link" href="commodity.php">商品</a>
                            </li>

                            <li class="nav-item cool">
                                <a class="nav-link" href="custom.php">客製化</a>
                            </li>

                            <li class="nav-item cool">
                                <a class="nav-link" href="contact.php">問題回報</a>
                            </li>
                            <?php
                            //判斷COOKIE內是否有資料，有就顯示會員名稱、登出，否則登入/註冊
                            if (!isset($_SESSION["code"])) {
                            ?>
                                <li class="nav-item cool">
                                    <!--顯示登入/註冊按鈕-->
                                    <a class="nav-link" href="login.php">登入/註冊</a>
                                </li>
                            <?php
                            } else {
                            ?>
                                <li class="nav-item dropdown cool">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <?php echo $_SESSION["account"] ?>您好</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="blog.html">個人資訊</a>
                                        <a class="dropdown-item" href="changepswd.php">修改密碼</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="signout.php">登出</a>
                                    </div>
                                </li>

                            <?php
                            }
                            ?>

                            <!-- /search -->
                            <li class="search">
                                <div class="cd-main-header">
                                    <ul class="cd-header">
                                        <li>
                                            <a href="buybuycar.php">
                                                <img src="./images/buybuycar.png" style="background:rgba(177, 173, 173, 0.12); width:35px;height:35px">
                                                <span></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div id="cd-search" class="cd-search">
                                    <form action="#" method="post">
                                        <input name="Search" type="search" placeholder="Click enter after typing...">
                                    </form>
                                </div>
                            </li>

                            <!-- /search -->


                        </ul>


                    </div>
                </nav>
            </div>
        </header>
        <!-- //header -->
        <div class="callbacks_container">
            <ul class="rslides" id="slider3">
                <li>
                    <div class="slider-info bg1">
                        <div class="bs-slider-overlay">
                            <div class="banner-text-w3layouts container">
                                <h5 class="tag text-left mb-3">Interior Services</h5>
                                <h4 class="movetxt text-left agile-title text-uppercase">Bringing Creative interiors into life </h4>
                                <!-- /sub-content
                                <div class="top-content-info">
                                    <div class="top-content-left">
                                        <div class="top-gd">
                                            <h6>1300</h6>
                                            <p>Interiror Designs</p>
                                        </div>
                                        <div class="top-gd">
                                            <h6>800</h6>
                                            <p>In Process</p>
                                        </div>
                                        <div class="top-gd">
                                            <h6>900</h6>
                                            <p>New Ideas</p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="top-content-right">
                                        <div class="thim-click-to-bottom">
                                            <div class="rotate">
                                                <a href="#about" class="scroll">
                                                   <i class="fas fa-angle-double-down"></i>
                                                   Scroll
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                //sub-content -->
                            </div>
                        </div>
                    </div>

                </li>
                <li>
                    <div class="slider-info bg2">
                        <div class="bs-slider-overlay">
                            <div class="banner-text-w3layouts container">
                                <h5 class="tag text-left mb-3">Inspiring livings </h5>
                                <h4 class="movetxt text-left agile-title text-uppercase">Measuring dreams for building future</h4>
                                <!--/sub-content
                                <div class="top-content-info">
                                    <div class="top-content-left">
                                        <div class="top-gd">
                                            <h6>1800</h6>
                                            <p>Minimal Designs</p>
                                        </div>
                                        <div class="top-gd">
                                            <h6>600</h6>
                                            <p>In Process</p>
                                        </div>
                                        <div class="top-gd">
                                            <h6>900</h6>
                                            <p>New Ideas</p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="top-content-right">
                                        <div class="thim-click-to-bottom">
                                            <div class="rotate">
                                                <a href="#about" class="scroll">
                                                   <i class="fas fa-angle-double-down"></i>
                                                   Scroll
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                //sub-content-->
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="slider-info bg3">
                        <div class="bs-slider-overlay">
                            <div class="banner-text-w3layouts container">
                                <h5 class="tag text-left mb-3 ">Interior Services </h5>
                                <h4 class="movetxt text-left agile-title text-uppercase">Bringing Creative interiors into life</h4>
                                <!--/sub-content
                                <div class="top-content-info">
                                    <div class="top-content-left">
                                        <div class="top-gd">
                                            <h6>1600</h6>
                                            <p>Minimal Designs</p>
                                        </div>
                                        <div class="top-gd">
                                            <h6>700</h6>
                                            <p>In Process</p>
                                        </div>
                                        <div class="top-gd">
                                            <h6>900</h6>
                                            <p>New Ideas</p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="top-content-right">
                                        <div class="thim-click-to-bottom">
                                            <div class="rotate">
                                                <a href="#about" class="scroll">
                                                   <i class="fas fa-angle-double-down"></i>
                                                   Scroll
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                //sub-content-->
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="slider-info bg4">
                        <div class="bs-slider-overlay">
                            <div class="banner-text-w3layouts container">
                                <h5 class="tag text-left mb-3 ">Inspiring livings</h5>
                                <h4 class="movetxt text-left agile-title text-uppercase">Measuring dreams for building future</h4>
                                <!--/sub-content
                                <div class="top-content-info">
                                    <div class="top-content-left">
                                        <div class="top-gd">
                                            <h6>1300</h6>
                                            <p>Interiror Designs</p>
                                        </div>
                                        <div class="top-gd">
                                            <h6>800</h6>
                                            <p>In Process</p>
                                        </div>
                                        <div class="top-gd">
                                            <h6>900</h6>
                                            <p>New Ideas</p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="top-content-right">
                                        <div class="thim-click-to-bottom">
                                            <div class="rotate">
                                                <a href="#about" class="scroll">
                                                   <i class="fas fa-angle-double-down"></i>
                                                   Scroll
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                //sub-content-->
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- //banner -->
    <!--/banner-bottom-w3ls-->
    <section class="banner-bottom-w3ls py-md-5 py-4" id="about">
        <div class="container">
            <div class="inner-sec-wthreelayouts py-md-5 py-4">
                <div class="row">
                    <div class="col-lg-6 about-img">
                        <img src="images/ab.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-lg-6 about-right">
                        <h3>About Us</h3>
                        <h4>Showcase your work in a new way</h4>
                        <p class="my-4">Lorem ipsum dolor sit amet Neque porro quisquam est qui dolorem Lorem int ipsum dolor sit amet when an unknown printer took a galley of type.Vivamus id tempor felis. Cras sagittis mi sit amet malesuada mollis. Mauris porroinit consectetur cursus tortor vel interdum. </p>
                        <!--/about-in-->
                        <div class="row">
                            <div class="col-lg-6 about-in text-left">
                                <div class="card">
                                    <div class="card-body">
                                        <i class="fas fa-anchor"></i>
                                        <h5 class="card-title"> Branch 1</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur elit
                                        </p>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-6 about-in text-left">
                                <div class="card">
                                    <div class="card-body">
                                        <i class="far fa-map"></i>
                                        <h5 class="card-title"> Branch 2</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur elit
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--//about-in-->
                    </div>
                </div>
                <!--/services-grids-->
                <div class="service-mid-sec mt-lg-5 mt-4">
                    <div class="middle-serve-content py-md-5 py-4">
                        <div class="row middle-grids">
                            <div class="col-lg-4 about-in middle-grid-info text-center">
                                <div class="card">
                                    <div class="card-body">
                                        <i class="far fa-lightbulb"></i>
                                        <h5 class="card-title">What we do</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 about-in middle-grid-info text-center">
                                <div class="card">
                                    <div class="card-body">
                                        <i class="fas fa-signal"></i>
                                        <h5 class="card-title"> Our Strategy</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 about-in middle-grid-info text-center">
                                <div class="card">
                                    <div class="card-body">
                                        <i class="far fa-clone"></i>
                                        <h5 class="card-title"> Our Projects</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--//services-grids-->
                <!--/progress-->
                <div class="row mt-lg-5 mt-4">
                    <div class="col-lg-6 about-right bar-grids">
                        <h2 class="mb-4">Our Skills & Projects</h2>
                        <p class="mb-5">Lorem ipsum dolor sit amet Neque porro quisquam est qui dolorem Lorem int ipsum dolor sit amet when an unknown printer took a galley of type.Vivamus id tempor felis. </p>
                        <h6>Communication<span> 85% </span></h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped active" style="width: 85%">
                            </div>
                        </div>
                        <h6>Social media marketing<span> 95% </span></h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped active" style="width: 95%">
                            </div>
                        </div>
                        <h6>Leadership<span>90% </span></h6>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped active" style="width: 90%">
                            </div>
                        </div>
                        <h6>Confidence<span>86% </span></h6>
                        <div class="progress prgs-w3agile-last">
                            <div class="progress-bar progress-bar-striped active" style="width: 86%">
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6 about-img">
                        <img src="images/ab1.jpg" alt="" class="img-fluid">
                    </div>
                </div>
                <!--//progress-->
            </div>
        </div>
    </section>
    <!--//banner-bottom-w3ls-->

    <section class="banner-bottom-w3ls pb-md-5 pb-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 about-right slider-right-con">
                    <h4 class="mb-4">Our Skills &amp; Projects</h4>
                    <p class="mb-5">Lorem ipsum dolor sit amet Neque porro quisquam est qui dolorem Lorem int ipsum dolor sit amet when an unknown printer. </p>
                    <div class="read mt-4">
                        <a href="about.html" class="btn">Read More</a>
                    </div>
                </div>
                <div class="col-lg-8 left-slider">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="item-review text-center">
                                <img src="images/ab.jpg" class="img-fluid" alt="" />
                                <h5>Some Text</h5>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-review text-center">
                                <img src="images/ab2.jpg" class="img-fluid" alt="" />
                                <h5>Some Text</h5>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-review text-center">
                                <img src="images/ab1.jpg" class="img-fluid" alt="" />
                                <h5>Some Text</h5>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-review text-center">
                                <img src="images/ab4.jpg" class="img-fluid" alt="" />
                                <h5>Some Text</h5>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-review text-center">
                                <img src="images/ab3.jpg" class="img-fluid" alt="" />
                                <h5>Some Text</h5>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-review text-center">
                                <img src="images/ab5.jpg" class="img-fluid" alt="" />
                                <h5>Some Text</h5>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-review text-center">
                                <img src="images/ab6.jpg" class="img-fluid" alt="" />
                                <h5>Some Text</h5>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-review text-center">
                                <img src="images/ab8.jpg" class="img-fluid" alt="" />
                                <h5>Some Text</h5>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-review text-center">
                                <img src="images/ab7.jpg" class="img-fluid" alt="" />
                                <h5>Some Text</h5>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!---->
    <!--gallery  -->
    <section class="gallery py-md-5 py-4">
        <div class="gallery-inner py-md-5 py-4">
            <h3 class="tittle text-center mb-md-5 mb-4">Latest Art Projects</h3>
            <ul class="portfolio-categ filter pb-5 mb-lg-3 text-center">
                <li class="port-filter all active">
                    <a href="#">All</a>
                </li>
                <li class="cat-item-1">
                    <a href="#" title="Category 1">category 1</a>
                </li>
                <li class="cat-item-2">
                    <a href="#" title="Category 2">category 2</a>
                </li>
                <li class="cat-item-3">
                    <a href="#" title="Category 3">category 3</a>
                </li>
                <li class="cat-item-4">
                    <a href="#" title="Category 4">category 4</a>
                </li>

            </ul>
            <ul class="portfolio-area clearfix">
                <li class="portfolio-item2" data-id="id-0" data-type="cat-item-4">
                    <span class="image-block img-hover">
                        <a class="image-zoom" href="images/ab.jpg" data-gal="prettyPhoto[gallery]">
                            <img src="images/ab.jpg" class="img-fluid " alt="">
                        </a>
                    </span>
                </li>
                <li class="portfolio-item2" data-id="id-1" data-type="cat-item-2">
                    <span class="image-block">
                        <a class="image-zoom" href="images/ab2.jpg" data-gal="prettyPhoto[gallery]">
                            <img src="images/ab2.jpg" class="img-fluid " alt="">
                        </a>
                    </span>
                </li>
                <li class="portfolio-item2" data-id="id-2" data-type="cat-item-1">
                    <span class="image-block">
                        <a class="image-zoom" href="images/ab1.jpg" data-gal="prettyPhoto[gallery]">
                            <img src="images/ab1.jpg" class="img-fluid " alt="">
                        </a>
                    </span>
                </li>
                <li class="portfolio-item2" data-id="id-4" data-type="cat-item-3">
                    <span class="image-block">
                        <a class="image-zoom" href="images/ab3.jpg" data-gal="prettyPhoto[gallery]">
                            <img src="images/ab3.jpg" class="img-fluid " alt="">
                        </a>
                    </span>
                </li>
                <li class="portfolio-item2" data-id="id-5" data-type="cat-item-2">
                    <span class="image-block">
                        <a class="image-zoom" href="images/ab4.jpg" data-gal="prettyPhoto[gallery]">
                            <img src="images/ab4.jpg" class="img-fluid " alt="">
                        </a>
                    </span>
                </li>
                <li class="portfolio-item2" data-id="id-7" data-type="cat-item-1">
                    <span class="image-block">
                        <a class="image-zoom" href="images/ab6.jpg" data-gal="prettyPhoto[gallery]">
                            <img src="images/ab6.jpg" class="img-fluid " alt="">
                        </a>
                    </span>
                </li>
                <li class="portfolio-item2" data-id="id-7" data-type="cat-item-1">
                    <span class="image-block">
                        <a class="image-zoom" href="images/ab8.jpg" data-gal="prettyPhoto[gallery]">
                            <img src="images/ab8.jpg" class="img-fluid " alt="">
                        </a>
                    </span>
                </li>
                <li class="portfolio-item2" data-id="id-7" data-type="cat-item-1">
                    <span class="image-block">
                        <a class="image-zoom" href="images/ab5.jpg" data-gal="prettyPhoto[gallery]">
                            <img src="images/ab5.jpg" class="img-fluid " alt="">
                        </a>
                    </span>
                </li>
            </ul>
            <!--end portfolio-area -->
        </div>
        <!-- //gallery container -->
    </section>
    <!-- //gallery -->
    <!-- stats -->

    <section class="banner-bottom-w3ls pb-md-5 pb-4">
        <div class="stats-in-content pb-md-5 pb-4">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-7 left-slider">

                        <div class="row stats-ig-gd">
                            <div class="col-md-4 stats-img">
                                <img src="images/ab.jpg" class="img-fluid " alt="">
                            </div>
                            <div class="col-md-4 stats-img">
                                <img src="images/ab3.jpg" class="img-fluid " alt="">
                            </div>
                            <div class="col-md-4 stats-img">
                                <img src="images/ab9.jpg" class="img-fluid " alt="">
                            </div>

                        </div>

                    </div>
                    <div class="col-lg-5 about-right slider-right-con stats-left">
                        <h4 class="mb-4">Our Stats</h4>
                        <p class="mt-3">Lorem ipsum dolor sit amet Neque porro quisquam est qui dolorem Lorem int ipsum dolor sit amet. </p>
                        <div class="stats_info counter_grid my-3">
                            <div class="icon">
                                <i class="fa fa-home" aria-hidden="true"></i>

                            </div>
                            <div class="icon_info_stats">
                                <p class="counter">545 </p>
                                <h3>Interior Designs</h3>
                            </div>
                            <div class="clearfix"> </div>

                        </div>
                        <div class="stats_info counter_grid">
                            <div class="icon">
                                <i class="far fa-smile"></i>

                            </div>
                            <div class="icon_info_stats">
                                <p class="counter">250 </p>
                                <h3>Happy Clients</h3>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- //stats -->
    <!-- /testimonials -->
    <div class="testimonials pb-lg-5 pb-4">
        <div class="testimonials-inner container pb-lg-4 pb-3">
            <h3 class="tittle text-center mb-md-5 mb-4">Happy Clients</h3>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="testimonials_grid center">
                            <div class="testimonials_grid-inn">
                                <img src="https://scontent.frmq2-2.fna.fbcdn.net/v/t1.0-9/17760156_785322551630193_338818161902734388_n.jpg?_nc_cat=107&_nc_sid=85a577&_nc_ohc=LM0ZEC4c8xQAX9p5kKW&_nc_ht=scontent.frmq2-2.fna&oh=2fffd4e55f79bee40457889000715249&oe=5EFBB3CC" alt=" " class="img-responsive" />
                                <div class="test_social_pos">
                                    <ul class="social_list1">
                                        <li>
                                            <a href="https://www.facebook.com/profile.php?id=100004573657684&__tn__=%2Cd-]-h-R&eid=ARCEa8HuSDyylesbOWeIXXIJoIwTJabcvc1Jga6fXgr7CNOEeeaayWtd4IWL3WshZwsaJve8-eOr2Rfc" class="facebook1">
                                                <i class="fab fa-facebook-f"></i>

                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <h3>HOMO
                                <span>MASTERHO</span>
                            </h3>
                            <label>FCU heyyeyaaeyaaaeyaeyaa</label>
                            <p>輸贏?</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonials_grid text-center">
                            <div class="testimonials_grid-inn">
                                <img src="https://scontent.frmq2-1.fna.fbcdn.net/v/t31.0-1/p160x160/10481671_790436254408697_6828546382807568617_o.jpg?_nc_cat=111&_nc_sid=dbb9e7&_nc_ohc=jXxAG-OpWWIAX9qUb01&_nc_ht=scontent.frmq2-1.fna&_nc_tp=6&oh=14609a6f3b4c1178a6de49d57f915812&oe=5EFB1E70" alt=" " class="img-responsive" />
                                <div class="test_social_pos">
                                    <ul class="social_list1">
                                        <li>
                                            <a href="https://www.facebook.com/jvfslkj" class="facebook1">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <h3>HOMO獸
                                <span>BIGHOMO</span>
                            </h3>
                            <label>FCU BEAUTIFUL</label>
                            <p>HO~~~~~~~~~~~MO~~~~~~~~~~~</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonials_grid">
                            <div class="testimonials_grid-inn">
                                <img src="https://scontent.frmq2-2.fna.fbcdn.net/v/t1.0-1/12990953_1162954067056943_7188202262797789669_n.jpg?_nc_cat=107&_nc_sid=dbb9e7&_nc_ohc=gymh9wuM7d4AX8LsgKk&_nc_ht=scontent.frmq2-2.fna&oh=fbd1d5419814fbdea83e5084622fccd9&oe=5EFA9AA4" alt=" " class="img-responsive" />
                                <div class="test_social_pos">
                                    <ul class="social_list1">
                                        <li>
                                            <a href="https://www.facebook.com/profile.php?id=100000270819569" class="facebook1">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <h3>高 HO
                                <span>哈哈哈</span>
                            </h3>
                            <label>NO HOMO</label>
                            <p>I am not HOMO</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonials_grid">
                            <div class="testimonials_grid-inn">
                                <img src="images/team4.jpg" alt=" " class="img-responsive" />
                                <div class="test_social_pos">
                                    <ul class="social_list1">
                                        <li>
                                            <a href="https://www.facebook.com/tony.nien.1207/timeline?lst=100000202900940%3A100002387738613%3A1591145551" class="facebook1">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <h3>卑鄙粘之峻
                                <span>0號or1號</span>
                            </h3>
                            <label>FCU DP(DespicablePerson)</label>
                            <p>有夠卑鄙</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonials_grid">
                            <div class="testimonials_grid-inn">
                                <img src="images/team5.png" alt=" " class="img-responsive" />
                                <div class="test_social_pos">
                                    <ul class="social_list1">
                                        <li>
                                            <a href="https://www.facebook.com/profile.php?id=100000202900940&ref=bookmarks" class="facebook1">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <h3>HO怪
                                <span>騙人的吧</span>
                            </h3>
                            <label>艾恩葛朗特</label>
                            <p>幫我稱10秒</p>
                        </div>
                    </div>
                    <a class="carousel-control-prev test" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="fas fa-long-arrow-alt-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next test" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="fas fa-long-arrow-alt-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>

                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- //testimonials -->


    <!--/footer-->
    <footer class="footer-main-w3layouts py-md-5 py-4">
        <div class="container-fluid px-lg-5 px-3">
            <div class="row">
                <div class="col-lg-5 footer-grid-w3ls">
                    <h3 class="mb-4">About Us</h3>
                    <p>Lorem ipsum dolor sit amet, Cras blandit nibh ut pretium elementum. Duis bibendum convallis nunc a dictum. Quisque ac ipsum porta, ultrices metus sit amet, cursus nisl. Duis aliquet varius sem sit amet tempus. Curabitur vitae dui bibendum. </p>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <h3 class="text-capitalize mb-3">Connect With Social</h3>
                            <p><span class="fab fa-twitter"></span> twitter/@my_website</p>
                            <p><span class="fab fa-instagram"></span> instagram/@my_website</p>
                            <p><span class="fab fa-youtube mb-5"></span> youtube/@my_website</p>
                            <a href="#" class="facebook-footer mr-2"><span class="fab mr-1 fa-facebook-f"></span> Facebook</a>
                            <a href="#" class="twitter-footer"><span class="fab mr-1 fa-twitter"></span> Twitter</a>
                        </div>
                        <div class="col-md-6">
                            <h3 class="mb-4">Address</h3>
                            <address class="mb-0">
                                <p class="mb-2"><i class="fas fa-map-marker-alt"></i> 8088H 5th Street Parking, King <br>Block, New York City.</p>
                                <p><i class="fas mr-1 fa-phone"></i> +12 445 8453 8088</p>
                                <p><i class="fas mr-1 fa-fax"></i> +11 997 2040 9436 </p>
                                <p><i class="far mr-1 fa-envelope-open"></i> <a href="mailto:info@example.com">info@example.com</a></p>
                            </address>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 footer-grid-w3ls">
                    <h3 class="mb-4">Instagram</h3>
                    <div class="blog-grids row mb-3">
                        <div class="col-md-4 blog-grid-left">
                            <a href="single.html">
                                <img src="images/banner1.jpg" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="col-md-8 blog-grid-right">
                            <h5>
                                <a href="single.html">Lorem ipsum dolor sit amet . Maecenas male non felis convallis nunc </a>
                            </h5>
                            <div class="sub-meta">
                                <span>
                                    <i class="far fa-clock"></i> 10 June, 2018</span>
                            </div>
                        </div>
                    </div>
                    <div class="blog-grids row mb-3">
                        <div class="col-md-4 blog-grid-left">
                            <a href="single.html">
                                <img src="images/banner2.jpg" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="col-md-8 blog-grid-right">
                            <h5>
                                <a href="single.html">Lorem ipsum dolor sit amet . Maecenas male non felis convallis nunc </a>
                            </h5>
                            <div class="sub-meta">
                                <span>
                                    <i class="far fa-clock"></i> 22 June, 2018</span>
                            </div>
                        </div>
                    </div>
                    <div class="blog-grids row mb-3">
                        <div class="col-md-4 blog-grid-left">
                            <a href="single.html">
                                <img src="images/banner3.jpg" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="col-md-8 blog-grid-right">
                            <h5>
                                <a href="single.html">Lorem ipsum dolor sit amet . Maecenas male non felis convallis nunc </a>
                            </h5>
                            <div class="sub-meta">
                                <span>
                                    <i class="far fa-clock"></i> 23 June, 2018</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 footer-grid-w3ls">
                    <h3 class="mb-4">We Offer</h3>
                    <ul>
                        <li><i class="fas mr-1 fa-long-arrow-alt-right"></i> Blandit nibh ut pretium elementum.</li>
                        <li><i class="fas mr-1 fa-long-arrow-alt-right"></i> Convallis nunc a dictum ipsum.</li>
                        <li><i class="fas mr-1 fa-long-arrow-alt-right"></i> Ultrices metus sit amet, cursus.</li>
                    </ul>
                    <h3 class="mt-4 mb-4">Newsletter</h3>
                    <p class="mb-3">Subscribe to Our Newsletter to get News, Amazing Offers &amp; More</p>
                    <form action="#" method="post">
                        <input type="email" name="Email" placeholder="Enter your email..." required="">
                        <button class="btn1"><i class="far fa-paper-plane"></i></button>
                        <div class="clearfix"> </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="copyright-w3layouts mt-md-5 mt-4 text-center">
            <p>© 2018 Inwardly . All Rights Reserved | Design by <a href="http://www.W3Layouts.com" target="_blank">W3Layouts</a></p>
        </div>
    </footer>
    <!-- //footer -->
    <!--model-forms-->
    <!--/Login-->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header text-left">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="login px-4 mx-auto mw-100">
                        <h5 class="text-left mb-4">請登入</h5>
                        <form method="post" id="loginForm" onsubmit="return enter()" action="loginac.php">
                            <div class="form-group">
                                <label class="mb-2">使用者名稱</label>
                                <input type="account" name="account" class="form-control" id="account">
                            </div>
                            <div class="form-group">
                                <label class="mb-2">密碼</label>
                                <input type="password" name="password" class="form-control" id="password">
                            </div>
                            <div class="form-check mb-2">
                                <input type="checkbox" class="form-check-input" id="remember">
                                <label class="form-check-label" for="exampleCheck1">記住帳密</label>
                            </div>
                            <button type="submit" class="btn btn-primary mb-4">登入</button>
                            <p class="text-left pb-4">
                                <a href="#" data-toggle="modal" data-target="#exampleModalCenter2"> 沒有帳號?點擊開始註冊</a>
                            </p>
                        </form>
                        <script type="text/javascript">
                            function enter() {
                                var account = document.getElementById("account").value; //獲取form中的使用者名稱 
                                var password = document.getElementById("password").value;
                                var regex = /^[/s] $/; //宣告一個判斷使用者名稱前後是否有空格的正規表示式 
                                if (regex.test(account) || account.length == 0) { //判定使用者名稱的是否前後有空格或者使用者名稱是否為空 
                                    alert("使用者名稱格式不對");
                                    return false;
                                }
                                if (regex.test(password) || password.length == 0) { //同上述內容 
                                    alert("密碼格式不對");
                                    return false;
                                }
                                return true;
                            };
                            window.onload = function() {
                                var oForm = document.getElementById('loginForm');
                                var oUser = document.getElementById('account');
                                var oPswd = document.getElementById('password');
                                var oRemember = document.getElementById('remember');
                                //頁面初始化時,如果帳號密碼cookie存在則填充 
                                if (getCookie('user') && getCookie('pswd')) {
                                    oUser.value = getCookie('user');
                                    oPswd.value = getCookie('pswd');
                                    oRemember.checked = true;
                                }
                                //複選框勾選狀態發生改變時,如果未勾選則清除cookie 
                                oRemember.onchange = function() {
                                    if (!this.checked) {
                                        delCookie('user');
                                        delCookie('pswd');
                                    }
                                };
                                //表單提交事件觸發時,如果複選框是勾選狀態則儲存cookie 
                                oForm.onsubmit = function() {
                                    if (remember.checked) {
                                        setCookie('user', oUser.value, 7); // 儲存帳號到cookie,有效期7天 
                                        setCookie('pswd', oPswd.value, 7); //儲存密碼到cookie,有效期7天 
                                    }
                                };
                            };
                            //設定cookie 
                            function setCookie(name, value, day) {
                                var date = new Date();
                                date.setDate(date.getDate() + day);
                                document.cookie = name + '=' + value + ';expires=' + date;
                            };
                            //獲取cookie 
                            function getCookie(name) {
                                var reg = RegExp(name + '=([^;]+)');
                                var arr = document.cookie.match(reg);
                                if (arr) {
                                    return arr[1];
                                } else {
                                    return '';
                                }
                            };
                            //刪除cookie
                            function delCookie(name) {
                                setCookie(name, null, -1);
                            };

                            function register() {
                                window.location.href = "register.html"; //跳轉到註冊頁面 
                            }
                        </script>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--//Login-->
    <!--/Register-->
    <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header text-left">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="login px-4 mx-auto mw-100">
                        <h5 class="text-left mb-4">Register Now</h5>
                        <form action="#" method="post">
                            <div class="form-group">
                                <label>First name</label>

                                <input type="text" class="form-control" id="validationDefault01" placeholder="" required="">
                            </div>
                            <div class="form-group">
                                <label>Last name</label>
                                <input type="text" class="form-control" id="validationDefault02" placeholder="" required="">
                            </div>

                            <div class="form-group">
                                <label class="mb-2">Password</label>
                                <input type="password" class="form-control" id="password1" placeholder="" required="">
                            </div>
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" class="form-control" id="password2" placeholder="" required="">
                            </div>

                            <button type="submit" class="btn btn-primary submit mb-4">Register</button>
                            <p class="text-left pb-4">
                                <a href="#">By clicking Register, I agree to your terms</a>
                            </p>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--//Register-->

    <!--//model-form-->

    <!--//model-form-->
    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <script src="js/search.js"></script>
    <!-- /dropdown nav -->
    <script>
        $(document).ready(function() {
            $(".dropdown").hover(
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->
    <!-- Banner Responsiveslides -->
    <script src="js/responsiveslides.min.js"></script>
    <script>
        // You can also use "$(window).load(function() {"
        $(function() {
            // Slideshow 4
            $("#slider3").responsiveSlides({
                auto: true,
                pager: true,
                nav: false,
                speed: 500,
                namespace: "callbacks",
                before: function() {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function() {
                    $('.events').append("<li>after event fired.</li>");
                }
            });

        });
    </script>
    <!-- // Banner Responsiveslides -->
    <!-- stats -->
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.countup.js"></script>
    <script>
        $('.counter').countUp();
    </script>
    <!-- //stats -->
    <!-- carousel -->
    <script src="js/owl.carousel.js"></script>
    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 1,
                        nav: false
                    },
                    900: {
                        items: 2,
                        nav: false
                    },
                    1000: {
                        items: 3,
                        nav: true,
                        loop: false,
                        margin: 0
                    }
                }
            })
        })
    </script>
    <!-- //carousel -->
    <!-- Smooth-Scrolling-JavaScript -->
    <script src="js/easing.js"></script>
    <script src="js/move-top.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll, .navbar li a, .footer li a").click(function(event) {
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //Smooth-Scrolling-JavaScript -->
    <script>
        $(document).ready(function() {
            /*
            						var defaults = {
            				  			containerID: 'toTop', // fading element id
            							containerHoverID: 'toTopHover', // fading element hover id
            							scrollSpeed: 1200,
            							easingType: 'linear' 
            				 		};
            						*/

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>

    <!-- //Smooth-Scrolling-JavaScript -->
    <!-- jQuery-Photo-filter-lightbox-Gallery-plugin -->
    <!--// end-smoth-scrolling -->
    <script src="js/jquery-1.7.2.js"></script>
    <script src="js/jquery.quicksand.js"></script>
    <script src="js/script.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <!-- //jQuery-Photo-filter-lightbox-Gallery-plugin -->

    <!-- //js -->
    <script src="js/bootstrap.js"></script>

</body>

</html>