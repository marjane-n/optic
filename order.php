<?php
function SendEmail($message, $filename) {
    $path = "./orders/";
    $file = $path . $filename;
    $content = file_get_contents( $file);
    $content = chunk_split(base64_encode($content));
    $uid = md5(uniqid(time()));
    $name = basename($file);
    $from_mail = "info@iranoptics.com";
    $replyto = $from_mail;
// header
    $header  = "From: IranOptics.ir " . $from_mail . ">\r\n";
    $header .= "Reply-To: " . $replyto . "\r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-Type: multipart/mixed; boundary=\"".$uid."\"\r\n\r\n";

// message & attachment
    $nmessage = "--".$uid."\r\n";
    $nmessage .= "Content-type:text/plain; charset=windows-1256\r\n";
    $nmessage .= "Content-Transfer-Encoding: 16bit\r\n\r\n";
    $nmessage .= $message."\r\n\r\n";
    $nmessage .= "--".$uid."\r\n";
    $nmessage .= "Content-Type: application/octet-stream; name=\"".$filename."\"\r\n";
    $nmessage .= "Content-Transfer-Encoding: base64\r\n";
    $nmessage .= "Content-Disposition: attachment; filename=\"".$filename."\"\r\n\r\n";
    $nmessage .= $content."\r\n\r\n";
    $nmessage .= "--".$uid."--";
    $mailto = "msdpcalali@gmail.com";
    $subject = "order";
    if (mail($mailto, $subject, $nmessage, $header)) {
        return true; // Or do something here
    } else {
        return false;
    }
}
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
    $tempStr = "نام : " . $_POST["name"] . "\n" . "موبایل : " . $_POST["contact"] . "\n";
    if (isset($_POST["email"])) {
        $tempStr .= "ایمیل : " . $_POST["email"] . "\n";
    }
    $tempStr .= "شرح : " . $_POST["explanation"] . "\n" . "ضمیمه : " . $IN . "\n";
    fwrite($F, $tempStr);
    fclose($F);
    SendEmail($tempStr, $IN);
    echo "Success";
} else {
    echo "Failed";
}
?>