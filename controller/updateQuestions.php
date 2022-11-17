<?php

var_dump($_POST);
require dirname(__DIR__).'/config/connect.php';
if ($_POST['question']) {
    $question = $_POST['question'];
    $categoryID = $_POST['categoriesID'];
    $id = intval($_POST['id']);
    var_dump($id);
    $stmt = $db->prepare("UPDATE `questions` SET `questionID`='$id',`name`='$question',`categoryID`='$categoryID'");
    try {
        $res = $stmt->execute();
    } catch (PDOException $e) {
        print "Error! : " . $e->getMessage() . "<br/>";
        die();
    }
}
$query = "SELECT LAST_INSERT_ID()";
$lastId = $db->prepare($query);
try {
   $lastId->execute();
} catch (PDOException $e) {
   print "Error! : " . $e->getMessage() . "<br/>";
   die();
}
$res = $lastId->fetch();
$lastIdQuestion = $res;

for ($i = 1; $i <= 4; $i++) {
   if ($_POST['response' . $i] && $_POST['bareme' . $i]) {
       $response = $_POST['response' . $i];
       $value = $_POST['bareme' . $i];
       $insertAnswer = $db->prepare("UPDATE answers SET (name, value, questionID) VALUES ('$response', '$value', '$lastIdQuestion[0]')");
       try {
           $res = $insertAnswer->execute();
       } catch (PDOException $e) {
           echo "Erreur : " . $e->getMessage() . "<br/>";
       }
   }
   //header('Location: ../index.php');
}