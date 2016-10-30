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
    if (!isset($_GET["cat0"])) {
        foreach ($js as $v => $t) {
            $_GET["cat0"] = $v;
            break;
        }
    }
    if (!isset($_GET["cat1"])) {
        foreach ($js[$_GET["cat0"]] as $v => $t) {
            $_GET["cat1"] = $v;
            break;
        }
    }
    if (!isset($_GET["cat2"])) {
        foreach ($js[$_GET["cat0"]][$_GET["cat1"]] as $v => $t) {
            $_GET["cat2"] = $v;
            break;
        }
    }
    if (!isset($_GET["cat3"])) {
        foreach ($js[$_GET["cat0"]][$_GET["cat1"]][$_GET["cat2"]] as $v => $t) {
            $_GET["cat3"] = $v;
            break;
        }
    }
    ?>
    <title><?php echo $_GET["cat3"]; ?></title>
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
echo "<script type='text/javascript'>
    var cat0 = '" . $_GET['cat0'] . "';
    var cat1 = '" . $_GET['cat1'] . "';
    var cat2 = '" . $_GET['cat2'] . "';
    var cat3 = '" . $_GET['cat3'] . "';</script>"
?>
<script src="./js/main.js"></script>
<script type="text/javascript">
    var SelectedTags = {};
    function MakeTables() {
        var TablesElement = $("#Tables");
        var Temp = AllMats[cat0][cat1][cat2][cat3]["TagHash"];
        var Content = "";
        var Titles = ["Docs", "Name", "Universal", "Price (IRR)"];
        for (var T in Temp) {
            if (!(TagsLength(AllTags) == TagsLength(SelectedTags) || TagsLength(SelectedTags) == 0)) {
                var IfShow = true;
                for (var L in SelectedTags) {
                    var TIfShow = SelectedTags[L].length == 0;
                    for (var M in SelectedTags[L]) {
                        if (T.indexOf(SelectedTags[L][M]) != -1) {
                            TIfShow = true;
                            break;
                        }
                    }
                    IfShow &= TIfShow;
                }
                if (!IfShow) {
                    continue;
                }
            }
            Content += "<h5 style='font-family: Serif !important; font-weight: bold; margin-bottom: 10px;'>" + T + "</h5>";
            Content += "<table>";
            Content += "<tr>";
            for (var T2 in Titles) {
                Content += '<th>' + Titles[T2] + '</th>';
            }
            Content += "</tr>";
            for (var T2 in Temp[T]) {
                var Link = '<a href="single.php?cat0=' + cat0 + '&cat1=' + cat1 + '&cat2=' + cat2 + '&cat3=' + cat3 + '&name=' + Temp[T][T2]["name"] + '">';
                Content += "<tr>";
                Content += '<th class="fileth"><a href="./file/' + Temp[T][T2]["file"] + '.zip"><img src="./images/zipicon.png"/></a></th>';
                Content += "<th>" + Link + Temp[T][T2]["name"] + "</th>";
                Content += "<th>" + Temp[T][T2]["desc"] + "</th>";
                Content += "<th>" + parseFloat(Temp[T][T2]["price"]) * 39930 * 1.25 + "</th>";
                if (T2 == 0) {
                    Content += '<th class="tempth" rowspan="' + Temp[T].length + '"><img src="./image/' + Temp[T][T2]["inf"] + '" class="infimage"/><img src="./images/info.png" class="infoicon" /></th>';
                }
                Content += "</tr>";
            }
            Content += "</table>";
            Content += "<br/>";
        }
        TablesElement.html(Content);
    }
    $(document).ready(function () {
        MakeTables();
    })
</script>
<!--header-->
<div class="content">
    <div class="product-model">
        <div class="container">
            <h2><?php echo $_GET['cat3']; ?></h2>
            <div class="col-md-9 product-model-sec" id="Tables">
                <!--<?php
                if (true) {
                    $temp = 0;
                    foreach ($js[$_GET["cat0"]][$_GET["cat1"]][$_GET["cat2"]][$_GET["cat3"]]["TagHash"] as $v => $v4) {
                        echo "<h5 style='font-weight: bold; margin-bottom: 10px;'>$v</h5>";
                        echo "<table>";
                        $T = Array("Docs", "Name", "Universal", "Price (IRR)");
                        echo "<tr>";
                        foreach ($T as $k)
                            echo "<th>" . $k . "</th>";
                        echo "</tr>";
                        $ls = 0;
                        foreach ($v4 as $v5) {
                            $link = '<a href="single.php?cat0=' . $_GET['cat0'] . '&cat1=' . $_GET['cat1'] . '&cat2=' . $_GET['cat2'] . '&cat3=' . $_GET['cat3'] . '&name=' . $v5["name"] . '">';
                            echo "<tr>";
                            echo "<th class='fileth'><a href='./file/" . $v5["file"] . ".zip'><img src='./images/zipicon.png'/></a>";
                            echo "<th>$link" . $v5["name"] . "</a></th>";
                            echo "<th>" . $v5["desc"] . "</th>";
                            echo "<th>" . $v5["price"] * 1.25 * 39930 . "</th>";
                            if ($ls == 0)
                                echo "<th class='tempth' rowspan='" . count($v4) . "'><img class='infimage' src='./image/" . $v5["inf"] . "'/><img class='infoicon' src='./images/info.png'/></th>";
                            echo "</tr>";
                            $ls += 1;
                        }
                        echo "</table>";
                        echo "<br/>";
                    }
                }
                ?>-->
            </div>
            <!--<?php
            echo '<section class="sky-form">
        <h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Diameter</h4>
        <div class="row row1 scroll-pane">
        <div class="col col-4">';
            $Temp = 0;
            foreach ($js[$_GET["cat0"]][$_GET["cat1"]][$_GET["cat2"]][$_GET["cat3"]] as $v => $v2) {
                if ($_GET["Dia"] == $v) {
                    echo "<div class='single-bottomSi'><a  style='color: gold' href='products.php?" . "cat0=" . $_GET["cat0"] . "&cat1=" . $_GET["cat1"] . "&cat2=" . $_GET["cat2"] . "&cat3=" . $_GET["cat3"] . "&l=3&Dia=" . $v . "'><i></i>$v</a></div>";
                } else {
                    echo "<div class='single-bottomSi'><a href='products.php?" . "cat0=" . $_GET["cat0"] . "&cat1=" . $_GET["cat1"] . "&cat2=" . $_GET["cat2"] . "&cat3=" . $_GET["cat3"] . "&l=3&Dia=" . $v . "'><i></i>$v</a></div>";
                }
                $Temp += 1;
            }
            echo '</div></div></section>';
            ?> -->
            <div class="rsidebar span_1_of_left">
                <?php
                foreach ($tags as $t => $a) {
                    echo '<section class="sky-form">
        <h4><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>' . $t . '</h4>
        <div class="row row1 scroll-pane">
        <div class="col col-4">';
                    foreach ($a as $c) {
                        echo "<label class='checkbox' style='font-family: Serif !important;'><input type='checkbox' name='checkbox' onchange='TagSelect(this, \"" . $c . "\", \"" . $t . "\")'><i></i>$c</label>";
                    }
                    echo '</div></div></section>';
                }
                ?>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function TagSelect(element, Tag, FTag) {
        if (!SelectedTags.hasOwnProperty(FTag)) {
            SelectedTags[FTag] = [];
        }
        if (element.checked)
            SelectedTags[FTag].push(Tag);
        else
            SelectedTags[FTag].splice(SelectedTags[FTag].indexOf(Tag), 1);
        console.log(SelectedTags);
        MakeTables();
    }
</script>
<!---->
<!--footer-->
<?php
include "footer.php";
?>
<!--footer-->

</body>
</html>