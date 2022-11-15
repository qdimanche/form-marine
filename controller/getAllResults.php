<?php

require dirname(__DIR__).'/config/connect.php';

$stmt = $db->prepare("Select `average` from results");
$stmt->execute();

?>