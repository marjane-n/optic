<!DOCTYPE HTML>
<html>
<head>
    <?php
        include "mats.php";
        if (!isset($_GET["cat0"])) {
            foreach ($js as $v => $t) {
                $_GET["cat0"] = $v;
                break;
            }
        }
    ?>
    <title><?php echo $_GET["cat0"]; ?></title>
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

            <h2><?php echo $_GET["cat0"]; ?></h2>
            <div class="col-md-12 product-model-sec">
                <?php
                    foreach ($js[$_GET["cat0"]] as $v => $v2) {
                        echo '<a href="P2.php?cat0=' . $_GET["cat0"] . '&cat1=' . $v . '">' .
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