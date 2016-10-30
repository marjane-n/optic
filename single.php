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
    <title><?php echo $_GET["name"] ?></title>
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
    include "mats.php";
    $mat = $js[$_GET["cat0"]][$_GET["cat1"]][$_GET["cat2"]][$_GET["cat3"]]["Names"][$_GET["name"]];
?>
<!--header-->
<div class="content">
    <div class="single">
        <div class="container">
            <div class="single-grids">
                <div class="col-md-4 single-grid1">
                    <h2>account</h2>
                    <ul>
                        <li><a href="loginpage.php">login</a></li>
                        <li><a href="loginpage.php">Register</a></li>
                    </ul>
                </div>
                <div class="col-md-4 single-grid">
                    <div class="flexslider">
                        <ul class="slides">
                            <li data-thumb="image/<?php echo $mat["image"]; ?>">
                                <div class="thumb-image"><img src="image/<?php echo $mat["image"] ?>" data-imagezoom="true"
                                                              class="img-responsive"></div>
                            </li>
<!--                            <li data-thumb="images/si1.jpg">-->
<!--                                <div class="thumb-image"><img src="images/si1.jpg" data-imagezoom="true"-->
<!--                                                              class="img-responsive"></div>-->
<!--                            </li>-->
<!--                            <li data-thumb="images/si2.jpg">-->
<!--                                <div class="thumb-image"><img src="images/si2.jpg" data-imagezoom="true"-->
<!--                                                              class="img-responsive"></div>-->
<!--                            </li>-->
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 single-grid simpleCart_shelfItem">
                    <h3 style="font-family: Serif !important;"><?php echo $_GET["name"] ?></h3>
                    <p style="font-family: Serif !important;"><?php echo $mat["desc"] ?></p>

                    <div class="tag">
                        <p>Category : <a href="#" style="font-family: Serif !important;"><?php echo $_GET["cat0"] . ", " . $_GET["cat1"] . ", " . $_GET["cat2"] . ", " . $_GET["cat3"] ?></a></p>
                        <?php
                            foreach ($mat["tags"] as $k) {
                                echo '<p style="font-family: Serif !important;">'. $k["name"] . " : <a href='javascript:void(0)' style=\"font-family: Serif !important;\">" . $k["val"] . "</a></p>";
                            }
                        ?>
                    </div>
                    <div class="galry">
                        <div class="prices">
                            <h5 class="item_price" style="font-family: Serif !important;"><?php echo $mat["price"] * 1.25 * 39930 ?> (IRR)</h5>
                        </div>
<!--                        <div class="rating">-->
<!--                            <span>☆</span>-->
<!--                            <span>☆</span>-->
<!--                            <span>☆</span>-->
<!--                            <span>☆</span>-->
<!--                            <span>☆</span>-->
<!--                        </div>-->
                        <div class="clearfix"></div>
                    </div>
                    <p class="qty"> Qty : </p><input min="1" type="number" id="quantity" name="quantity" value="1"
                                                     class="form-control input-small">
                    <div class="btn_form">
                        <a href="#" class="add-cart item_add">Add to Card</a>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- collapse -->
    <div class="collpse">
        <div class="container">
            <div class="panel-group collpse" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                               aria-expanded="true" aria-controls="collapseOne">
                                Details
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                         aria-labelledby="headingOne">
                        <div class="panel-body" style="font-family: Serif !important;">
                            <?php
                                echo "Description : " . $mat["desc"] . "<br/>";
                                echo "Price (IRR): " . $mat["price"] * 1.25 * 39930 . "<br/>";
                                foreach ($mat["tags"] as $v) {
                                    echo $v["name"] . " : " . $v["val"] . "<br/>";
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                               href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                related files
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                            <?php
//                                $dir = "./file/" . $mat["file"] . "/";
//                                $files = scandir($dir);
//                                foreach ($files as $fn) {
//                                    if ($fn != "." && $fn != "..") {
//                                        echo "<a href='" . $dir . $fn . "'>$fn</a><br/>";
//                                    }
//                                }
                                echo "Documentation : <a href='./file/" . $mat["file"] . ".zip'>" . $mat["file"] . ".zip</a>";
                            ?>
                        </div>
                    </div>
                </div>
<!--                <div class="panel panel-default">-->
<!--                    <div class="panel-heading" role="tab" id="headingThree">-->
<!--                        <h4 class="panel-title">-->
<!--                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"-->
<!--                               href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">-->
<!--                                reviews (5)-->
<!--                            </a>-->
<!--                        </h4>-->
<!--                    </div>-->
<!--                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"-->
<!--                         aria-labelledby="headingThree">-->
<!--                        <div class="panel-body">-->
<!--                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad-->
<!--                            squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa-->
<!--                            nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid-->
<!--                            single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft-->
<!--                            beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice-->
<!--                            lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you-->
<!--                            probably haven't heard of them accusamus labore sustainable VHS.-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="panel panel-default">-->
<!--                    <div class="panel-heading" role="tab" id="headingFour">-->
<!--                        <h4 class="panel-title">-->
<!--                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"-->
<!--                               href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">-->
<!--                                help-->
<!--                            </a>-->
<!--                        </h4>-->
<!--                    </div>-->
<!--                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel"-->
<!--                         aria-labelledby="headingFour">-->
<!--                        <div class="panel-body">-->
<!--                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad-->
<!--                            squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa-->
<!--                            nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid-->
<!--                            single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft-->
<!--                            beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice-->
<!--                            lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you-->
<!--                            probably haven't heard of them accusamus labore sustainable VHS.-->
<!--                        </div>-->
<!--                    </div>-->
                </div>
            </div>
        </div>
    </div>
    <!-- collapse -->
<!--    <div class="related-products">-->
<!--        <div class="container">-->
<!--            <h3>Related Products</h3>-->
<!--            <div class="product-model-sec single-product-grids">-->
<!--                <div class="product-grid single-product">-->
<!--                    <a href="single.html">-->
<!--                        <div class="more-product"><span> </span></div>-->
<!--                        <div class="product-img b-link-stripe b-animate-go  thickbox">-->
<!--                            <img src="images/m1.jpg" class="img-responsive" alt="">-->
<!--                            <div class="b-wrapper">-->
<!--                                <h4 class="b-animate b-from-left  b-delay03">-->
<!--                                    <button> +</button>-->
<!--                                </h4>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </a>-->
<!--                    <div class="product-info simpleCart_shelfItem">-->
<!--                        <div class="product-info-cust prt_name">-->
<!--                            <h4>Product #1</h4>-->
<!--                            <span class="item_price">$187.95</span>-->
<!--                            <div class="ofr">-->
<!--                                <p class="pric1">-->
<!--                                    <del>Rs 280</del>-->
<!--                                </p>-->
<!--                                <p class="disc">[12% Off]</p>-->
<!--                            </div>-->
<!--                            <div class="clearfix"></div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="product-grid single-product">-->
<!--                    <a href="single.html">-->
<!--                        <div class="more-product"><span> </span></div>-->
<!--                        <div class="product-img b-link-stripe b-animate-go  thickbox">-->
<!--                            <img src="images/m2.jpg" class="img-responsive" alt="">-->
<!--                            <div class="b-wrapper">-->
<!--                                <h4 class="b-animate b-from-left  b-delay03">-->
<!--                                    <button> +</button>-->
<!--                                </h4>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </a>-->
<!--                    <div class="product-info simpleCart_shelfItem">-->
<!--                        <div class="product-info-cust prt_name">-->
<!--                            <h4>Product #1</h4>-->
<!--                            <span class="item_price">$187.95</span>-->
<!--                            <div class="ofr">-->
<!--                                <p class="pric1">-->
<!--                                    <del>Rs 280</del>-->
<!--                                </p>-->
<!--                                <p class="disc">[12% Off]</p>-->
<!--                            </div>-->
<!--                            <div class="clearfix"></div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="product-grid single-product">-->
<!--                    <a href="single.html">-->
<!--                        <div class="more-product"><span> </span></div>-->
<!--                        <div class="product-img b-link-stripe b-animate-go  thickbox">-->
<!--                            <img src="images/m3.jpg" class="img-responsive" alt="">-->
<!--                            <div class="b-wrapper">-->
<!--                                <h4 class="b-animate b-from-left  b-delay03">-->
<!--                                    <button> +</button>-->
<!--                                </h4>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </a>-->
<!--                    <div class="product-info simpleCart_shelfItem">-->
<!--                        <div class="product-info-cust prt_name">-->
<!--                            <h4>Product #1</h4>-->
<!--                            <span class="item_price">$187.95</span>-->
<!--                            <div class="ofr">-->
<!--                                <p class="pric1">-->
<!--                                    <del>Rs 280</del>-->
<!--                                </p>-->
<!--                                <p class="disc">[12% Off]</p>-->
<!--                            </div>-->
<!--                            <div class="clearfix"></div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="product-grid single-product">-->
<!--                    <a href="single.html">-->
<!--                        <div class="more-product"><span> </span></div>-->
<!--                        <div class="product-img b-link-stripe b-animate-go  thickbox">-->
<!--                            <img src="images/m4.jpg" class="img-responsive" alt="">-->
<!--                            <div class="b-wrapper">-->
<!--                                <h4 class="b-animate b-from-left  b-delay03">-->
<!--                                    <button> +</button>-->
<!--                                </h4>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </a>-->
<!--                    <div class="product-info simpleCart_shelfItem">-->
<!--                        <div class="product-info-cust prt_name">-->
<!--                            <h4>Product #1</h4>-->
<!--                            <span class="item_price">$187.95</span>-->
<!--                            <div class="ofr">-->
<!--                                <p class="pric1">-->
<!--                                    <del>Rs 280</del>-->
<!--                                </p>-->
<!--                                <p class="disc">[12% Off]</p>-->
<!--                            </div>-->
<!--                            <div class="clearfix"></div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="clearfix"></div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--footer-->
<?php
include "footer.php";
?>
<!--footer-->

</body>
</html>