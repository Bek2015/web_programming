<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die("No way!");
//    echo "No way!";
//    exit();
}

if (isset($_POST['sid'])) {
    $sid = $_POST['sid'];
}
$sid = filter_input(INPUT_POST, 'sid');
$asignment = filter_input(INPUT_POST, 'assignment');
$hw = filter_input(INPUT_POST, 'hw');

if (!$sid || !$asignment || !$hw) {
    header("Location: index.php?error=" . urlencode("missing parameter"));
    exit();
}



if (!is_dir($sid)) {
    mkdir($sid);
}

file_put_contents("$sid/{$asignment}.txt", $hw);

header("Location: result.php?sid=$sid&asignment=$asignment")

?>
