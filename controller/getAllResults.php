<?php

require dirname(__DIR__).'/config/connect.php';

$stmt = $db->prepare("Select `average` from results");
try {
    $stmt->execute();
} catch (PDOException $e) {
    print "Error! : " . $e->getMessage() . "<br/>";
    die();
}
?>