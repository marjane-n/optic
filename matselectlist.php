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
<div id="envelope">
    <header>
        <h2>فرم سفارش کالا</h2>
        </br>
        <p>کد کالاهای مورد نیاز خود را وارد کنید</p>
    </header>
    <hr>
    <table id="Table" style="width: 70%; margin: auto;">
        <tr>
            <th style="font-family: chaapaarak, 'chaapaarak', Serif !important;text-align: center" colspan="3">کالاهای
                انتخاب شده
            </th>
        </tr>
        <tr>
            <th style="font-family: chaapaarak, 'chaapaarak', Serif !important;text-align: center">تعداد</th>
            <th style="font-family: chaapaarak, 'chaapaarak', Serif !important;text-align: center">نام</th>
            <th style="font-family: chaapaarak, 'chaapaarak', Serif !important;text-align: center">حذف</th>
        </tr>
    </table>
    <script type="text/javascript">
        var AllMats = null;
        function InitMats(CallBack) {
            function readTextFile(file, callback) {
                var rawFile = new XMLHttpRequest();
                rawFile.open("GET", file, false);
                rawFile.onreadystatechange = function () {
                    if (rawFile.readyState === 4) {
                        if (rawFile.status === 200 || rawFile.status == 0) {
                            var allText = rawFile.responseText;
                            callback(allText);
                        }
                    }
                };
                rawFile.send(null);
            }

            readTextFile("./js/tempJson.txt", function (data) {
                AllMats = JSON.parse(data);
                CallBack();
            });
        }
        function RemoveMat(A) {
            $("#" + A.toUpperCase()).remove();
        }
        function AddMaterial(A, B) {
            if (!AllMats) {
                InitMats(AddMaterial.bind(this, A, B));
                return;
            }
            var TEl = $("#Table");
            var data = AllMats;
            var K = A.toUpperCase();
            var TK1, TK2, TK3, TK4;
            var C1 = true, C2 = true, C3 = true, C4 = true;
            for (var k1 in data) {
                for (var k2 in data[k1]) {
                    for (var k3 in data[k1][k2]) {
                        for (var k4 in data[k1][k2][k3]) {
                            if (data[k1][k2][k3][k4]["Names"].hasOwnProperty(K)) {
                                TK1 = k1;
                                TK2 = k2;
                                TK3 = k3;
                                TK4 = k4;
                                C1 = C2 = C3 = C4 = false;
                                break;
                            }
                            if (!C4) {
                                break;
                            }
                        }
                        if (!C3) {
                            break;
                        }
                    }
                    if (!C2) {
                        break;
                    }
                }
                if (!C1) {
                    break;
                }
            }
            if (!C1) {
                if ($("#" + A.toUpperCase()).length == 0) {
                    TEl.append("<tr id='" + A.toUpperCase() + "'><th>" + B + "</th><th><a href='./single.php?cat0=" + TK1 + "&cat1=" + TK2 + "&cat2=" + TK3 + "&cat3=" + TK4 + "&name=" + K + "'>" + A.toUpperCase() + "</a></th><th style='font-family: chaapaarak, \"chaapaarak\", Serif !important;text-align: center'><span style='font-family: chaapaarak, \"chaapaarak\", Serif !important;text-align: center; cursor: pointer' onclick='RemoveMat(\"" + A + "\")'>حذف</span></th></tr>");
                } else {
                    $("#" + A.toUpperCase()).remove();
                    TEl.append("<tr id='" + A.toUpperCase() + "'><th>" + B + "</th><th><a href='./single.php?cat0=" + TK1 + "&cat1=" + TK2 + "&cat2=" + TK3 + "&cat3=" + TK4 + "&name=" + K + "'>" + A.toUpperCase() + "</a></th><th style='font-family: chaapaarak, \"chaapaarak\", Serif !important;text-align: center'><span style='font-family: chaapaarak, \"chaapaarak\", Serif !important;text-align: center; cursor: pointer' onclick='RemoveMat(\"" + A + "\")'>حذف</span></th></tr>");
                }
            } else {
                TEl.append("<tr id='" + A.toUpperCase() + "'><th>" + B + "</th><th>" + A.toUpperCase() + "</th><th style='font-family: chaapaarak, \"chaapaarak\", Serif !important;text-align: center'><span style='font-family: chaapaarak, \"chaapaarak\", Serif !important;text-align: center; cursor: pointer' onclick='RemoveMat(\"" + A + "\")'>حذف</span></th></tr>");
            }
        }
    </script>
    <form action="" name="orderform" method="post" enctype="multipart/form-data">
        <label>ایمیل </label>
        <input type="text" name="email" id="email">
        <label> شماره تماس </label>
        <input type="tel" name="contact" id="contact">
        <br/>
        <label>کد و تعداد کالا</label><br/>
        <input type="text" class="matstyle" id="MatName" style="margin-left: 15px;">
        <input type="number" class="matstyle" id="MatNumber" min="1" value="1">
        <br/>
        <div class="submitmessage">
            <p id="successmessage" style="display: none;">سفارش با موفقیت ثبت شد. کارشناسان ما در اسرع وقت با شما تماس
                می گیرند.</p>
            <p id="failmessage" style="display: none;"> وارد کردن نام, شماره تماس الزامی است. </p>
        </div>
        <div class="Buttons" style="display: inline-flex; width: 100%">
            <input type="button" value="افزودن" id="send" style="width: calc(50% - 10px); margin-left: 10px;"
                   onclick="AddMaterial($('#MatName').val(), $('#MatNumber').val())">
            <input type="button" value="ارسال" id="send" style="width: calc(50% - 10px); margin-right: 10px;"
                   onclick="SendOrder"/>
        </div>
    </form>
    <script>
        function SendOrder() {
            console.log("Send");
        }
        //        $(":file").filestyle({buttonText: 'جستجوی فایل'});
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