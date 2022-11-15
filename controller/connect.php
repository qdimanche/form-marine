<?php

try {
    $db = new PDO('mysql:host=localhost;dbname=php-formv2', 'root', 'root');
} catch (PDOException $e) {
    print "Error! : " . $e->getMessage() . "<br/>";
    die();
}