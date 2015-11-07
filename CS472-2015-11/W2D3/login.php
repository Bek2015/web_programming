<?php

require 'db.php';

$user = filter_input(INPUT_POST, "user");
$pass = filter_input(INPUT_POST, "pass");

$stmt = $db->prepare("SELECT * FROM user WHERE user = :user AND pass = :pass");
$stmt->execute(array(":user" => $user, ":pass" => $pass));

$row = $stmt->fetch();
if ($row) {
    $remember = filter_input(INPUT_POST, "remember");
    if ($remember) {
        setcookie("username", $user, time() + 60*60*24*31, "/W2D3/");
    } else {
        setcookie("username", "", time() -1, "/W2D3/" );
    }
    
    header("Location: cars.php?user=" . urldecode($row['user']));
} else {
    header("Location: index.php?error=Incorrect+user+or+pass");
}