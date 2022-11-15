<?php

require dirname(__DIR__).'/config/connect.php';
if ($_POST['categoriesName']) {
    $name = $_POST['categoriesName'];
    $stmt = $db->prepare("INSERT INTO `categories` (name) VALUES '$name'");
    $res = $stmt->execute();
    if ($res) {
        header();
    }
} else {
    header();
}
?>