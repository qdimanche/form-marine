<?php
require dirname(__DIR__).'/config/connect.php';
$query = "DELETE FROM results";
    $stmt = $db->prepare($query);
    try {
      $stmt = $stmt->execute();
              }
     catch (PDOException $e) {
        echo 'Error : ' . $e->getMessage() . '<br/>';
    }
header('Location: ../resultsList.php');