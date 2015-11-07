<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die("No way!");
//    echo "No way!";
//    exit();
}

$sid = filter_input(INPUT_POST, 'sid', FILTER_VALIDATE_INT);
$assignment = filter_input(INPUT_POST, 'assignment', FILTER_SANITIZE_SPECIAL_CHARS);
$hw_report = filter_input(INPUT_POST, 'hw_report', FILTER_SANITIZE_SPECIAL_CHARS);

// give session ID if it didn't exist
// open file for reading / writing
session_start();

// create a new session id on login, to prevent fixation.
session_regenerate_id();


if (!$sid || !$assignment || !$hw_report) {
    $_SESSION['error'] = "missing parameter";
    header("Location: index.php");
    exit();
}

$_SESSION['sid'] = $sid;
$_SESSION['assignment'] = $assignment;

if (!is_dir($sid)) {
    mkdir($sid);
}

file_put_contents("$sid/{$assignment}.txt", $hw_report);

header("Location: result.php")

?>
