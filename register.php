<?php
/**
 * Created by PhpStorm.
 * User: msd
 * Date: 9/11/16
 * Time: 8:26 PM
 */
if (isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["email"])) {
    $db = new mysqli("localhost:3306", "root", "1234");
    try {
        echo $db->query("CREATE DATABASE optics;");
    } catch (Exception $E) {
        ;
    }
    try {
        $T = $db->query("CREATE TABLE optics.Users (username VARCHAR(255) UNIQUE , password VARCHAR(255), email VARCHAR(255), token VARCHAR(255));");
    } catch (Exception $E) {
        ;
    }
    $T = count(mysqli_fetch_all($db->query("SELECT * FROM optics.Users WHERE username='" . $_POST["username"] . "';")));
    if ($T == 0) {
        $token = md5($_POST["username"]);
        $T2 = $db->query("INSERT INTO optics.Users (username, password, email, token) VALUES ('" . $_POST["username"] . "', '" . $_POST["password"] . "', '" . $_POST["email"] . "', '" . $token . "');");
        echo $token;
    } else {
        echo "Failed";
    }
} else {
    echo "Failed";
}
?>