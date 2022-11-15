<?php

try {
    $db = new PDO('mysql:host=localhost;dbname=formmarine', 'root', '');
} catch (PDOException $e) {
    print "Error! : " . $e->getMessage() . "<br/>";
    die();
}