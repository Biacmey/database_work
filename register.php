<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>註冊</title>
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
                            if (!isset($_SESSION["code"])) {
                            ?>
                                <li class="nav-item active cool">
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
        <li class="breadcrumb-item">
            <a href="login.php">登入</a>
        </li>
        <li class="breadcrumb-item active">註冊</li>
    </ol>
    <section>
        <div class="callbacks_container">
            <ul class="rslides" id="slider3">
                <li>
                    <div class="slider-info">
                        <div class="container" style="padding: 1rem 0 0 0;min-height:1400px;">
                            <form action="registerac.php" method="post" id="loginForm" onsubmit="return register()">
                                <fieldset>
                                    <legend>註冊帳號:</legend>
                                    <hr style="border-top:2px solid #939496;">
                                    <!--帳號-->
                                    <h4 style="font-size: 1.5em;width: 57%;margin-bottom:15px;">帳號
                                        <span style="font-size: 0.5em;width: 57%;margin-top:15px;margin-bottom:15px;">(大於6個字，低於20個字)</span></h4>
                                    <input type="text" name="account" id="account" pattern="[0-9A-Za-z]{6,20}" title="請輸入超過六個字，低於二十個字。且不要有特殊符號>_<" required class="form-control input-lg" placeholder="帳號" tabindex="1">
                                    <?php
                                    if (!empty($_GET['error'])) {
                                        $error = $_GET['error'];
                                        if ($error == 2) {
                                            echo "<font color = 'red'>輸入的帳號有人使用過了喔 ╮(╯_╰)╭ ，請換一個使用ヽ(●´∀`●)ﾉ</font><br>";
                                        }
                                    }
                                    ?>
                                    <!--密碼-->
                                    <h4 style="font-size: 1.5em;width: 57%;margin-top:15px;margin-bottom:15px;">密碼
                                        <span style="font-size: 0.5em;width: 57%;margin-top:15px;margin-bottom:15px;">(至少包含一個大寫字母，且大於6個字，低於20個字)</span></h4>
                                    <input type="password" name="password" id="password" pattern="(?=.*[A-Z]).[0-9A-Za-z]{5,20}" title="請輸入超過六個字，低於二十個字。要有一個大寫英文字，且不要有特殊符號>_<" required class="form-control input-lg" placeholder="密碼" tabindex="2">
                                    <!--確認密碼-->
                                    <h4 style="font-size: 1.5em;width: 57%;margin-top:15px;margin-bottom:15px;">確認密碼</h4>
                                    <input type="password" name="cpassword" id="cpassword" pattern="(?=.*[A-Z]).[0-9A-Za-z]{5,20}" title="請輸入超過六個字，低於二十個字。要有一個大寫英文字，且不要有特殊符號>_<" required class="form-control input-lg" placeholder="確認密碼" tabindex="3">
                                    <?php
                                    if (!empty($_GET['error'])) {
                                        $error = $_GET['error'];
                                        if ($error == 3) {
                                            echo "<font color = 'red'>您輸入的密碼不同喔 Σ(°Д°;</font><br>";
                                        }
                                    }
                                    ?>
                                    <!--姓名-->
                                    <h4 style="font-size: 1.5em;width: 57%;margin-top:15px;margin-bottom:15px;">姓名</h4>
                                    <input type="test" name="username" id="username" pattern=".{0,10}" title="10個字以內，霸脫" required class="form-control input-lg" placeholder="姓名" tabindex="4">
                                    <!--信箱-->
                                    <h4 style="font-size: 1.5em;width: 57%;margin-top:15px;margin-bottom:15px;">信箱</h4>
                                    <input type="email" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="a123@gmail.com" required class="form-control input-lg" placeholder="電子信箱" tabindex="5">
                                    <?php
                                    if (!empty($_GET['error'])) {
                                        $error = $_GET['error'];
                                        if ($error == 4) {
                                            echo "<font color = 'red'>這個信箱使用過ㄌヽ(`Д´)ノ </font><br>";
                                        }
                                    }
                                    ?>
                                    <!--手機電話-->
                                    <h4 style="font-size: 1.5em;width: 57%;margin-top:15px;margin-bottom:15px;">手機號碼</h4>
                                    <input type="tel" id="phone" name="phone" maxlength="10" pattern="[0]{1}[9]{1}[0-9]{8}" title="09開頭R，哥" required class="form-control input-lg" placeholder="手機號碼" tabindex="6">
                                    <?php
                                    if (!empty($_GET['error'])) {
                                        $error = $_GET['error'];
                                        if ($error == 1) {
                                            echo "<font color = 'red'>您的電話號碼使用過ㄌヽ(`Д´)ノ </font><br>";
                                        }
                                    }
                                    ?>
                                    <!--性別-->
                                    <h4 style="font-size: 1.5em;width: 57%;margin-top:15px;margin-bottom:15px;">性別</h4>
                                    <input type="radio" id="male" name="gender" value="男" required style="margin-top:5px;margin-bottom:5px;margin-left:7px;">
                                    <label for="male" style="padding-left:15px;padding-right:15px;">男</label>
                                    <input type="radio" id="female" name="gender" value="女" required>
                                    <label for="female" style="padding-left:15px;padding-right:15px;">女</label>
                                    <input type="radio" id="other" name="gender" value="其他" required>
                                    <label for="other" style="padding-left:15px;padding-right:15px;">其他</label>
                                    <!--出生日期-->
                                    <h4 style="font-size: 1.5em;width: 57%;margin-top:15px;margin-bottom:15px;">出生日期</h4>
                                    <input type="date" id="birthday" name="birthday" required value="2000-01-01" class="form-control input-lg" tabindex="7">
                                    <script>
                                        var today = new Date();
                                        var dd = today.getDate();
                                        var mm = today.getMonth() + 1; //January is 0!
                                        var yyyy = today.getFullYear();
                                        if (dd < 10) {
                                            dd = '0' + dd
                                        }
                                        if (mm < 10) {
                                            mm = '0' + mm
                                        }

                                        today = yyyy + '-' + mm + '-' + dd;
                                        document.getElementById("birthday").setAttribute("max", today);
                                    </script>
                                    <hr>
                                    <!--送出-->
                                    <div class="row">
                                        <div class="col-xs-6 col-md-6">
                                            <input type="submit" value="確認註冊" class="btn btn-primary btn-block btn-lg" tabindex="8" style="display:block;">
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
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