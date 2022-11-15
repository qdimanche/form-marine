<?php

require './connect.php';

$stmt = $db->prepare("Select `average` from results");
$stmt->execute();
echo $stmt;