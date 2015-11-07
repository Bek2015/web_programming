<?php

require 'db.php';

$user = filter_input(INPUT_POST, "user");
$pass = filter_input(INPUT_POST, "pass");

//$user = $db->quote($user);
//$pass = $db->quote($pass);
$sql = "SELECT * FROM user WHERE user = '$user' AND pass = '$pass'";
echo $sql;

$stmt = $db->query($sql);
$row = $stmt->fetch();
if ($row) {
    //echo good;
    header("Location: cars.php?user=" . urldecode($row['user']));
} else {
    //echo bad;
    header("Location: index.php?error=Incorrect+user+or+pass");
}