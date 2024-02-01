<?php
$allowedKeys = array("1234", "5678", "abcd");
if (isset($_GET['key'])) {
    $key = $_GET['key'];
    if (in_array($key, $allowedKeys)) {
        ob_start(); // Start output buffering
        header("Location: main.php");
        ob_end_flush(); // Flush the output buffer
        exit;
    } else {
        echo 'Key Is Wrong<br>Wait 3 Seconds';
    }
}
?>