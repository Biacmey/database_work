<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>傳送驗證信</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content=" Inwardly Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
        Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
        // window.onload = function() {
        //     if (!!window.performance && window.performance.navigation.type === 1) {
        //         window.location.reload();
        //         alert("請從登入處進入頁面")
        //         window.history.back(1);
        //     }
        //     if (!!window.performance && window.performance.navigation.type === 2) {
        //         window.location.reload();
        //         alert("請從登入處進入頁面")
        //         window.history.back(1);
        //     }
        // };
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
    <?php session_start(); ?>
</head>

<body>

    <!-- banner -->
    <section class="banner-inner" id="home">
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
                            <li class="nav-item cool">
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
                            if (!isset($_SESSION["account"])) {
                            ?>
                                <li class="nav-item active cool">
                                    <!--顯示登入/註冊按鈕-->
                                    <a class="nav-link" href="login.php">登入/註冊</a>
                                </li>
                            <?php
                            }
                            ?>
                            <!--Blog
						</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="blog.html">Blog Page</a>
                                    <a class="dropdown-item" href="single.html">Single page</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="404.html">404</a>
                                </div>
                            </li>

                            <li class="nav-item cool">
                                <a class="nav-link" href="contact.html">Contact</a>
                            </li>-->
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
        <!-- banner -->
        <div class="bs-slider-overlay-inner"></div>
    </section>
    <!-- //banner -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.php">首頁</a>
        </li>
        <li class="breadcrumb-item">
            <a href="login.php">登入</a>
        </li>
        <li class="breadcrumb-item active">忘記密碼</li>
    </ol>
    <!--main-->
    <section>
        <div class="callbacks_container">
            <ul class="rslides" id="slider3">
                <li>
                    <div class="slider-info">
                        <div class="container" style="padding: 1rem 0 0 0;min-height:700px;">
                            <?php
                            //判斷COOKIE內是否有資料，有就顯示登入/註冊
                            if (!isset($_SESSION["code"])) {
                            ?>
                                <form action="forgetpswd.php" method="post" id="ForgetPawdForm">
                                    <fieldset>
                                        <legend> 找回密碼 : </legend>
                                        <hr style = "border-top:2px solid #939496;">
                                        <p style="color:black;font-size:1.2em;margin-bottom:10px;">輸入您註冊時輸入的電話或信箱，以找回密碼:</p>
                                        <label><input type="radio" id="phonebutton" name="model" value="phonebutton" required style="margin:10px;padding-left:20px;padding-right:20px;" onclick='displayShow_phone()' checked>電話</label>
                                        <label><input type="radio" id="emailbutton" name="model" value="emailbutton" style="margin:10px;padding-left:20px;padding-right:20px;" onclick='displayShow_email()'>信箱</label>
                                        <input type="tel" id="phone" name="phone" maxlength="10" title="09開頭R，哥" style="display:block" class="form-control input-lg" placeholder="Phone number" tabindex="1" pattern="[0]{1}[9]{1}[0-9]{8}">
                                        <input type="email" id="email" name="email" style="display:none" class="form-control input-lg" placeholder="Email" tabindex="1" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                                        <?php
                                        if (!empty($_GET['error'])) {
                                            $error = $_GET['error'];
                                            if ($error == 1) {
                                                echo "<font color = 'red'>這個信箱並沒有辦過帳號喔 Σ(°Д°;</font><br>";
                                            }
                                            if ($error == 2) {
                                                echo "<font color = 'red'>這個電話並沒有辦過帳號喔 Σ(°Д°;</font><br>";
                                            }
                                        }
                                        ?>
                                        <hr>
                                        <div class="row">
                                            <div class="col-xs-6 col-md-6">
                                                <input type="submit" name="submit" value="傳送驗證信" class="btn btn-primary btn-block btn-lg" tabindex="2" style="display:block;">
                                            </div>
                                        </div>
                                        <script type="text/javascript">
                                            function displayShow_phone() {
                                                var phone = document.getElementById("phone");
                                                var email = document.getElementById("email");
                                                phone.style.display = "block";
                                                phone.type = "tel";
                                                email.style.display = "none";
                                                email.type = "hidden";
                                            }

                                            function displayShow_email() {
                                                var phone = document.getElementById("phone");
                                                var email = document.getElementById("email");
                                                phone.style.display = "none";
                                                phone.type = "hidden";
                                                email.style.display = "block";
                                                email.type = "email";
                                            }
                                        </script>
                                    </fieldset>
                                </form>
                            <?php
                            } else {
                            ?>
                                <h4 style="font-size: 2em;width: 57%;">你已經登入囉</h4>
                                <h4 style="font-size: 2em;width: 57%;"><a href="javascript:history.back(1)">返回</a></h4>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>

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