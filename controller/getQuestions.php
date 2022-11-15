<?php

require 'connect.php';

$stmt = $db->prepare("SELECT name FROM QUESTIONS");
$stmt->execute();
$data = $stmt->fetch();

foreach ($data as $question) {

}