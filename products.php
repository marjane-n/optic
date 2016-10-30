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
    <title>Swim Wear a E-Commerce online Shopping Category Flat Bootstrap Responsive Website Template | Products ::
        w3layouts</title>
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
    if (!isset($_GET["cat0"])) {
        foreach ($js as $v => $v2) {
            $_GET["cat0"] = $v;
            break;
        }
    }
    if (!isset($_GET["cat1"])) {
        foreach ($js[$_GET['cat0']] as $v => $v2) {
            $_GET["cat1"] = $v;
            break;
        }
    }
    if (!isset($_GET["cat2"])) {
        foreach ($js[$_GET["cat0"]][$_GET["cat1"]] as $v => $v2) {
            $_GET["cat2"] = $v;
            break;
        }
    }
    if (!isset($_GET["cat3"])) {
        foreach ($js[$_GET["cat0"]][$_GET["cat1"]][$_GET["cat2"]] as $v => $v2) {
            $_GET["cat3"] = $v;
            break;
        }
    }
    if (!isset($_GET["Dia"])) {
        foreach ($js[$_GET["cat0"]][$_GET["cat1"]][$_GET["cat2"]][$_GET["cat3"]] as $v => $v2) {
            $_GET["Dia"] = $v;
            break;
        }
    }
    if (!isset($_GET["l"])) {
        $_GET["l"] = 3;
    }
echo "<script type='text/javascript'>
    var cat0 = '" . $_GET['cat0'] . "';
    var cat1 = '" . $_GET['cat1'] . "';
    var cat2 = '" . $_GET['cat2'] . "';
    var cat3 = '" . $_GET['cat3'] . "';
    var Dia  = '" . $_GET['Dia']  . "';
    var l = '" . $_GET['l'] . "';</script>"
?>
<!--header-->
<div class="content">
    <div class="product-model">
        <div class="container">

            <h2><?php echo $_GET['cat3']; ?></h2>
            <div class="col-md-9 product-model-sec">
                <?php
                if (true) {
                    $temp = 0;
                    foreach ($js[$_GET["cat0"]][$_GET["cat1"]][$_GET["cat2"]][$_GET["cat3"]][$_GET["Dia"]] as $v => $v2) {
                        echo '<a href="single.php?cat0=' . $_GET['cat0'] . '&cat1=' . $_GET['cat1'] . '&cat2=' . $_GET['cat2'] . '&cat3=' . $_GET['cat3'] . '&Dia=' . $_GET["Dia"]. '&name=' . $v  . '">' .
                '<div class="product-grid">
                    <div class="more-product"><span> </span></div>
                    <div class="product-img b-link-stripe b-animate-go  thickbox">
                        <img src="./image/' . $v2["image"] . '" class="img-responsive" alt="">
                        <div class="b-wrapper">
                            <h4 class="b-animate b-from-left  b-delay03">
                                <button> +</button>
                            </h4>
                        </div>
                    </div>
            </a>
            <div class="product-info simpleCart_shelfItem">
                <div class="product-info-cust prt_name">
                    <h4 style="font-family: serif !important;">' . $v . '</h4>
                    <span class="item_price">$' . $v2["price"] . '</span>
                    <input type="text" class="item_quantity" value="1"/>
                    <input type="button" class="item_add items" value="+">
                    <div class="clearfix"></div>
                </div>
            </div></div>';
                        $temp += 1;
                        if ($temp > 150)
                            break;
                    }
                }
                ?>
            </div>
            <div class="rsidebar span_1_of_left">
                <section class="sky-form">
                    <div class="product_right">
                        <h4 class="m_2"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Categories
                        </h4>
                        <?php
                        $C0 = $_GET['cat0'];
                        $C1 = $_GET['cat1'];
                        foreach ($js[$_GET['cat0']][$_GET['cat1']] as $v => $v2) {
                            echo "<div class='tab1'><ul class='place'><li class='sort'>" . $v . "</li>
                    <li class='by'><img src='images/do.png' alt=''></li>
                    <div class='clearfix'></div>";
                            echo "<div class='single-bottom'>";
                            foreach ($v2 as $v3 => $v4) {
                                echo "<a href='" . "products.php?cat0=$C0&cat1=$C1&cat2=$v&cat3=$v3&l=3" . "'><p>$v3</p></a>";
                            }
                            echo "</div>";
                        }
                        ?>
                        <script>
                            $(document).ready(function () {
                                $(".tab1 .single-bottom").hide();
                                $(".tab2 .single-bottom").hide();
                                $(".tab3 .single-bottom").hide();
                                $(".tab4 .single-bottom").hide();
                                $(".tab5 .single-bottom").hide();

                                $(".tab1 ul").click(function () {
                                    $(".tab1 .single-bottom").slideToggle(300);
                                    $(".tab2 .single-bottom").hide();
                                    $(".tab3 .single-bottom").hide();
                                    $(".tab4 .single-bottom").hide();
                                    $(".tab5 .single-bottom").hide();
                                })
                                $(".tab2 ul").click(function () {
                                    $(".tab2 .single-bottom").slideToggle(300);
                                    $(".tab1 .single-bottom").hide();
                                    $(".tab3 .single-bottom").hide();
                                    $(".tab4 .single-bottom").hide();
                                    $(".tab5 .single-bottom").hide();
                                })
                                $(".tab3 ul").click(function () {
                                    $(".tab3 .single-bottom").slideToggle(300);
                                    $(".tab4 .single-bottom").hide();
                                    $(".tab5 .single-bottom").hide();
                                    $(".tab2 .single-bottom").hide();
                                    $(".tab1 .single-bottom").hide();
                                })
                                $(".tab4 ul").click(function () {
                                    $(".tab4 .single-bottom").slideToggle(300);
                                    $(".tab5 .single-bottom").hide();
                                    $(".tab3 .single-bottom").hide();
                                    $(".tab2 .single-bottom").hide();
                                    $(".tab1 .single-bottom").hide();
                                })
                                $(".tab5 ul").click(function () {
                                    $(".tab5 .single-bottom").slideToggle(300);
                                    $(".tab4 .single-bottom").hide();
                                    $(".tab3 .single-bottom").hide();
                                    $(".tab2 .single-bottom").hide();
                                    $(".tab1 .single-bottom").hide();
                                })
                            });
                        </script>
                        <!-- script -->
                </section>

                <?php
                    echo '<section class="sky-form">
        <h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Diameter</h4>
        <div class="row row1 scroll-pane">
        <div class="col col-4">';
                $Temp = 0;
                foreach ($js[$_GET["cat0"]][$_GET["cat1"]][$_GET["cat2"]][$_GET["cat3"]] as $v => $v2) {
                        if ($_GET["Dia"] == $v) {
                            echo "<div class='single-bottomSi'><a  style='color: gold' href='products.php?" . "cat0=" . $_GET["cat0"] . "&cat1=" . $_GET["cat1"] . "&cat2=" . $_GET["cat2"] . "&cat3=" . $_GET["cat3"] . "&l=3&Dia=" . $v . "'><i></i>$v</a></div>";
                        } else{
                            echo "<div class='single-bottomSi'><a href='products.php?" . "cat0=" . $_GET["cat0"] . "&cat1=" . $_GET["cat1"] . "&cat2=" . $_GET["cat2"] . "&cat3=" . $_GET["cat3"] . "&l=3&Dia=" . $v . "'><i></i>$v</a></div>";
                        }
                        $Temp += 1;
                }
                    echo '</div></div></section>';
                ?>
                <?php
                foreach ($tags as $t => $a) {
                    echo '<section class="sky-form">
        <h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>' . $t . '</h4>
        <div class="row row1 scroll-pane">
        <div class="col col-4">';
                    foreach ($a as $c) {
                        echo "<label class='checkbox'><input type='checkbox' name='checkbox'><i></i>$c</label>";
                    }
                    echo '</div></div></section>';
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