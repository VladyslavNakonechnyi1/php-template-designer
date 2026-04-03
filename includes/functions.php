<?php
// title
function get_title($page_name) {
    return htmlspecialchars($page_name) . " | Designer";
}

//redirect
function redirect($url) {
    header("Location: " . $url);
    exit();
}
?>