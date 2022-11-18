<?php
require dirname(__DIR__).'/config/connect.php';
if ($_POST['id']) {
    $graduation = $_POST['nameBareme'];
    $arrayGraduation = str_split($graduation);
    $formatedGraduation = "";
    foreach ($arrayGraduation as $char) {
      if ($char == "'"){
        $char = "\'";
      }
      $formatedGraduation .= $char;
    }
    $graduationID = $_POST['id'];
    $id = intval($_POST['id']);
    $query = "UPDATE `graduations` SET `content`='$formatedGraduation' WHERE `graduationID`='$id'";
    echo $query;
    $stmt = $db->prepare($query);
    try {
        $res = $stmt->execute();
    } catch (PDOException $e) {
        print "Error! : " . $e->getMessage() . "<br/>";
        die();
    }
}
   header('Location: ../index.php');
