<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die("No way!");
//    echo "No way!";
//    exit();
}

$sid = filter_input(INPUT_POST, 'sid', FILTER_VALIDATE_INT);
$asignment = filter_input(INPUT_POST, 'assignment', FILTER_SANITIZE_SPECIAL_CHARS);
$hw_report = filter_input(INPUT_POST, 'hw_report', FILTER_SANITIZE_SPECIAL_CHARS);

if (!$sid || !$asignment || !$hw_report) {
    header("Location: index.php?error=" . urlencode("missing parameter"));
    exit();
}



if (!is_dir($sid)) {
    mkdir($sid);
}

file_put_contents("$sid/{$asignment}.txt", $hw_report);

if (is_uploaded_file($_FILES['hw']['tmp_name'])) {
    move_uploaded_file($_FILES['hw']['tmp_name'], "$sid/$asignment");
} else {
    echo "No uploaded file???";
}

header("Location: result.php?sid=$sid&asignment=$asignment")

?>
