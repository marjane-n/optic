<?php
function SaveFile($filename, $T)
{
    if (isset($_FILES[$filename])) {
        $file_name = $_FILES[$filename]['name'];
        $file_size = $_FILES[$filename]['size'];
        $file_tmp = $_FILES[$filename]['tmp_name'];
        $file_type = $_FILES[$filename]['type'];
        $file_ext = strtolower(end(explode('.', $_FILES[$filename]['name'])));

        $tar = dirname(__FILE__) . "/orders/" . (string)$T . "-" . $file_name;
        if (move_uploaded_file($file_tmp, $tar))
            return (string)$T . "-" . $file_name;
        else {
            return "Failed";
        }
    } else {
        return "Failed";
    }
}
$curT = (string)time();
if (isset($_POST["name"]) && isset($_POST["contact"]) && isset($_POST["explanation"])) {
    $IN = SaveFile("datafile", $curT);
    $F = fopen(dirname(__FILE__) . "/orders/" . $curT . "-order.txt", "w");
    fwrite($F, "نام : " . $_POST["name"] . "\n");
    fwrite($F, "موبایل : " . $_POST["contact"] . "\n");
    if (isset($_POST["email"])) {
        fwrite($F, "ایمیل : " . $_POST["email"] . "\n");
    }
    fwrite($F, "شرح : " . $_POST["explanation"] . "\n");
    fwrite($F, "ضمیمه : " . $IN . "\n");
    fclose($F);
    echo "Success";
} else {
    echo "Failed";
}
?>