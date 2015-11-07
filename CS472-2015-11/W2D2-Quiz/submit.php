<?php

$name = filter_input(INPUT_POST, "name");
$coming = filter_input(INPUT_POST, "coming");
$food = filter_input(INPUT_POST, "food");

file_put_contents("guests.txt", "$name,$coming,$food\n", FILE_APPEND);

header("Location: Thanks.html");