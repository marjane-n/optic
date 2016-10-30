<?php
/**
 * Created by PhpStorm.
 * User: msd
 * Date: 9/11/16
 * Time: 10:56 PM
 */

if (isset($_POST["username"]) && isset($_POST["password"])) {
    try {
        $db = new mysqli("localhost:3306", "root", "1234");
        $T = mysqli_fetch_all($db->query("SELECT * FROM optics.Users WHERE username='" . $_POST["username"] . "' AND password='" . $_POST["password"] . "';"));
        if (count($T) == 0) {
            echo "Failed";
        } else {
            echo $T[0][3];
        }
    } catch (Exception $E) {
        echo $E;
    }
} else {
    echo "Failed";
}
?>