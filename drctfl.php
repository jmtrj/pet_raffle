<?php
if(!isset($_SERVER['HTTP_REFERER'])) {
    // Redirect user to homepage or show an error message
    header("Location: index.php");
    exit;
}
?>