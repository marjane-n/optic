<!--
Au<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html dir="rtl">
<head>
    <title>ایران اپتیک</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/owl.carousel.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Swim Wear Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
        setTimeout(hideURLbar, 0);
    }, false);
    function hideURLbar() {
        window.scrollTo(0, 1);
    } </script>
    <script src="js/jquery.min.js"></script>
    <!-- cart -->
    <script src="js/simpleCart.min.js"></script>
    <!-- cart -->
    <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
    <script src="js/imagezoom.js"></script>

    <!-- FlexSlider -->
    <script defer src="js/jquery.flexslider.js"></script>
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen"/>

    <script>
        // Can also be used with $(document).ready()
        $(window).load(function () {
            $('.flexslider').flexslider({
                animation: "slide",
                controlNav: "thumbnails"
            });
        });
    </script>


</head>
<body>
<!--header-->
<?php
    include "header.php";
?>
<!--header-->
<!--contact-->
<script language="JavaScript">
    function login(Params, CallBack) {
        var Temp = new FormData();
        for (var k in Params) {
            console.log(k);
            console.log(Params[k]);
            Temp.append(k, Params[k]);
        }
        var TCallBack = function (data) {
            console.log(data);
            CallBack(data);
        };
        $.ajax({
            url: "./login.php",
            type: "POST",
            data: Temp,
            mimeTypes: "multipart/form-data",
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                TCallBack(data);
            }, error: function () {
                console.log("failed");
            }
        });
    }

    function loginUser() {
        if (document.getElementById("pass").value.length == 0 || document.getElementById("uname").value.length == 0) {
            document.getElementById("logfailed").style.display = 'block';
        }
        else {
            var regparams = {
                username: document.getElementById("uname").value,
                password: document.getElementById("pass").value
            };
            login(regparams, function (data) {
                console.log(data);
                setTimeout(function () {
                    document.getElementById("uname").value = "";
                    document.getElementById("pass").value = "";
                }, 3000);

            });
        }
        setTimeout(function () {
            document.getElementById("logfailed").style.display = 'none';
        }, 3000);

    }
</script>
<div class="content">
    <div class="main-1">
        <div class="container">
            <div class="login-page">
                <div class="account_grid">
                    <div class="col-md-6 login-left">
                        <h2>کاربران جدید</h2>
                        <p>با ایجاد یک حساب کاربری می توانید در سایت سفارش طراحی قطعه ی اپتیکی جدید ثبت کنید و یا
                            کالاهای موجود را خریداری نمایید.</p>
                        <a class="acount-btn" href="account.html">ایجاد حساب کاربری</a>
                    </div>
                    <div class="col-md-6 login-right">
                        <h2>حساب کاربری دارید؟</h2>
                        <form action="" method="post" enctype="multipart/form-data">
                            <div>
                                <span>نام کاربری<label>*</label></span>
                                <input type="text" id="uname">
                            </div>
                            <div>
                                <span>رمز عبور<label>*</label></span>
                                <input type="password" id="pass">
                            </div>
                            <div id="loginops">
                                <p id="logfailed" style="display: none; color: red">نام کاربری یا رمز عبور نادرست است.</p>
                                <input type="button" value="ورود" onclick="loginUser()">
                            </div>
                        </form>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- login -->
<div class="subscribe">
    <div class="container">
        <div class="subscribe1">
            <h4>از آخرین محصولات ایران اپتیک مطلع شوید</h4>
        </div>
        <div class="subscribe2">
            <form>
                <input type="text" class="text" value="ایمیل" onfocus="this.value = '';"
                       onblur="if (this.value == '') {this.value = 'ایمیل';}">
                <input type="submit" value="اشتراک">
            </form>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!--footer-->
<?php
    include "footer.php";
?>
<!--footer-->
</body>
</html>