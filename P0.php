<!--
Au<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <?php
    include "mats.php";
    ?>
    <title>محصولات</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/owl.carousel.css" rel="stylesheet">
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
    <!-- cart -->
    <script src="js/simpleCart.min.js"></script>
    <!-- cart -->
    <!-- the jScrollPane script -->
    <script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
    <script type="text/javascript" id="sourcecode">
        $(function () {
            $('.scroll-pane').jScrollPane();
        });
    </script>
    <!-- //the jScrollPane script -->
    <link href="css/form.css" rel="stylesheet" type="text/css" media="all"/>
    <!-- the mousewheel plugin -->
    <script type="text/javascript" src="js/jquery.mousewheel.js"></script>
</head>
<body>
<!--header-->
<?php
include "header.php";
?>
<!--header-->
<div class="content">
    <div class="product-model">
        <div class="container">
            <script type="text/javascript">
                function SearchClick() {
                    console.log("salam");
                    var AllMats;
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
                        data = AllMats;
                        var K = document.getElementById("MatName").value;
                        console.log(K);
                        var TK1, TK2, TK3, TK4;
                        var C1 = true, C2 = true, C3 = true, C4 = true;
                        for (var k1 in data) {
                            console.log(k1);
                            for (var k2 in data[k1]) {
                                console.log(k2);
                                for (var k3 in data[k1][k2]) {
                                    console.log(k3);
                                    for (var k4 in data[k1][k2][k3]) {
                                        console.log(k4);
                                        console.log(data[k1][k2][k3][k4]);
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
                            window.open("./single.php?cat0=" + TK1 + "&cat1=" + TK2 + "&cat2=" + TK3 + "&cat3=" + TK4 + "&name=" + K, "_self");
                        } else {
                            alert("کالای مورد نظر یافت نشد");
                        }
                    });
                }
            </script>
            <a href="./matselectlist.php" style="margin: auto; text-decoration: none"><h2 id="matselectbutton">کد کالاها را برای ما بفرستید</h2></a><br>
            <h2>یا</h2>
            <h2>کالاهای مورد نظر خود را جستجو کنید</h2>
            <div class="col-md-12 product-model-sec">
                <?php
                foreach ($js as $v => $v2) {
                    echo '<a href="P1.php?cat0=' . $v . '">' .
                        '<div class="product-grid">
                    <div class="more-product"><span> </span></div>
                    <div class="product-img b-link-stripe b-animate-go  thickbox">
                        <img src="./images/g8.jpg' . '" class="img-responsive" alt="">
                    </div>
            </a>
            <div class="product-info simpleCart_shelfItem">
                <div class="product-info-cust prt_name">
                    <div class="item_price" style="font-size: 1.5em; width: 100%; text-align: center;">' . $v . '</span>
                    <div class="clearfix"></div>
                </div>
            </div></div>';
                }
                ?>
            </div>
        </div>
    </div>
</div>
<!---->
</div>
<!--footer-->
<?php
include "footer.php";
?>
<!--footer-->

</body>
</html>