<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>客製化商品</title>
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

                            <li class="nav-item active cool">
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
        <li class="breadcrumb-item active">客製化商品</li>
    </ol>
    <!-- contact -->
    <section class="banner-bottom-w3ls pt-lg-5 pt-md-3 pt-3">
        <div class="inner-sec-wthreelayouts pt-md-5 pt-md-3 pt-3">

            <div class="container">
                <div class="address row mb-5">
                    <div class="col-lg-4 address-grid-w3l">
                        <div class="row address-info">
                            <div class="col-md-3 address-left text-center">
                                <i class="far fa-map"></i>
                            </div>
                            <div class="col-md-9 address-right text-left">
                                <h6 class="ad-info text-uppercase mb-2">地址</h6>
                                <p> 台中市烏日區興祥街81號

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 address-grid-w3l">
                        <div class="row address-info">
                            <div class="col-md-3 address-left text-center">
                                <i class="far fa-envelope"></i>
                            </div>
                            <div class="col-md-9 address-right text-left">
                                <h6 class="ad-info text-uppercase mb-2">信箱</h6>
                                <p>
                                    <a href="mailto:example@email.com"> WE0923300924@example.com</a>
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 address-grid-w3l">
                        <div class="row address-info">
                            <div class="col-md-3 address-left text-center">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <div class="col-md-9 address-right text-left">
                                <h6 class="ad-info text-uppercase mb-2">電話</h6>
                                <p>+886 987 654 321</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d910.4573264726205!2d120.63757992922774!3d24.1074975231606!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34693c15ef2be389%3A0xe287e7e0503be8e9!2zNDE05Y-w5Lit5biC54OP5pel5Y2A6IiI56Wl6KGXODHomZ8!5e0!3m2!1szh-TW!2stw!4v1591499793125!5m2!1szh-TW!2stw" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

                    </div>
                    <div class="col-md-6 main_grid_contact">
                        <div class="form">
                            <h4 class="mb-4 text-left">客製化商品資料</h4>
                            <form action="upload.php" method="post" enctype="multipart/form-data">
                                <table>
                                <div class="form-group">
                                    <label class="my-2">數量</label>
                                    <input class="form-control" type="text" name="Quantity" placeholder="" required="">
                                </div>
                                <div class="form-group">
                                    <label>尺寸</label>
                                    <select name="size" class="form-control">
                                        　<option value="XL">XL</option>
                                        　<option value="L">L</option>
                                        　<option value="M">M</option>
                                        　<option value="S">S</option>
                                        </select>
                                </div>
                                <div class="form-group">
                                    <label>厚度</label>
                                    <select name="thick" class="form-control">
                                        　<option value="一般(薄款透氣)">一般(薄款透氣)</option>
                                        　<option value="毛巾底(底部加厚)">毛巾底(底部加厚)</option>
                                        </select>
                                </div>
                                <div class="form-group">
                                    <label>款式</label>
                                    <select name="style" class="form-control">
                                        　<option value="短襪">短襪</option>
                                        　<option value="長襪">長襪</option>
                                        　<option value="膝下">膝下</option>
                                        　<option value="膝上">膝上</option>
                                        </select>
                                </div>
                                <div class="form-group">
                                    <label>圖片</label>
                                    <br>
                                     <input type="file" name="profile" >
                                </div>
                                <div class="form-group">
                                    <label>信箱</label>
                                    <input class="form-control" type="email" name="email" placeholder="" required="">
                                </div>
                                <div class="input-group1">
                                    <input class="form-control" type="submit" value="提交" >
                                </div>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //contact -->
    
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
    <!-- /js -->
    <script src="js/bootstrap.js"></script>
    <!-- //js -->
</body>

</html> 