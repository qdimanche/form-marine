<?php

require dirname(__DIR__).'/config/connect.php';
if ($_POST['categoriesName']) {
    $name = $_POST['categoriesName'];
    $query = "INSERT INTO `categories`(`categoryID`, `name`) VALUES (NULL, '" . $name . "')";
    echo $query;
    $stmt = $db->prepare($query);
    try {
        $res = $stmt->execute();
    } catch (PDOException $e) {
        print "Error! : " . $e->getMessage() . "<br/>";
        die();
    }
}
?>
