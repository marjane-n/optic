<!DOCTYPE html>
<html dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>ایران اپتیک</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="responsiveform.css">
    <link rel="stylesheet" media="screen and (max-width: 1200px) and (min-width: 601px)" href="responsiveform1.css"/>
    <link rel="stylesheet" media="screen and (max-width: 600px) and (min-width: 351px)" href="responsiveform2.css"/>
    <link rel="stylesheet" media="screen and (max-width: 350px)" href="responsiveform3.css"/>
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
    <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
    <script type="text/javascript" src="./js/bootstrap-filestyle.min.js"></script>
    <!-- cart -->
    <script src="js/simpleCart.min.js"></script>
</head>
<body>
<!--header-->
<?php
    include "header.php";
?><!--header-->

<!--form-->
<script language="JavaScript">
    <!--
    function UploadImage(Params, CallBack) {
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
            url: "./order.php",
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
    function formSubmitter(formTag, successmessageTag, failmessageTag) {
        if (document.getElementById("name").value.length == 0 || document.getElementById("contact").value.length == 0 || document.getElementById("explanation").value.length == 0) {
            document.getElementById(failmessageTag).style.display = 'block';
        }
        else {
            document.getElementById(successmessageTag).style.display = 'block';
            var formparams = {
                name: document.getElementById("name").value,
                email: document.getElementById("email").value,
                contact: document.getElementById("contact").value,
                datafile: document.getElementById("datafile").files[0],
                explanation: document.getElementById("explanation").value
            };
            UploadImage(formparams, function (data) {
                console.log(data);
                setTimeout(function () {
                document.getElementById(successmessageTag).style.display = 'none';
                document.getElementById("name").value='';
                document.getElementById("email").value='';
                document.getElementById("contact").value='';
                document.getElementById("explanation").value='';
                $(":file").filestyle('clear');

                }, 3000);
            })
        }
        setTimeout(function () {
            document.getElementById(failmessageTag).style.display = 'none';
        }, 3000);
    }
    // -->
</script>
<div id="envelope">
    <header>
        <h2>فرم سفارش کالا</h2>
        </br>
        <p>لطفا به طور خلاصه و کامل فرم زیر را پر کنید</p>
    </header>
    <hr>
    <form action="" name="orderform" method="post" enctype="multipart/form-data">
        <label>نام </label>
        <input type="text" id="name" name="name" width="100px;">
        <label>ایمیل </label>
        <input type="text" name="email" id="email">
        <label> شماره تماس </label>
        <input type="number" name="contact" id="contact">
        <label> آپلود فایل </label>
        <input type="file" class="filestyle" data-buttonText="جستجوی فایل" id="datafile">
        <br/>
        <label> شرح سفارش </label>
        <textarea name="message" rows="10" cols="15" id="explanation"></textarea>
        <div class="submitmessage">
            <p id="successmessage" style="display: none;">سفارش با موفقیت ثبت شد. کارشناسان ما در اسرع وقت با شما تماس
                می گیرند.</p>
            <p id="failmessage" style="display: none;"> وارد کردن نام, شماره تماس و شرح سفارش الزامی است. </p>
        </div>
        <input type="button" value="ارسال" id="send"
               onclick="formSubmitter('orderform', 'successmessage', 'failmessage')">
    </form>
    <script>
        $(":file").filestyle({buttonText: 'جستجوی فایل'});
    </script>
</div>
<!--form-->

<!--footer-->
<?php
include "footer.php";
?>
<!--footer-->

</body>
</html>