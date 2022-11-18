<?php
var_dump($_POST);
require dirname(__DIR__).'/config/connect.php';
if ($_POST['question']) {
    $question = $_POST['question'];
    $arrayQuestion = str_split($question);
    $formatedQuestion = "";
    foreach ($arrayQuestion as $char) {
      if ($char == "'"){
        $char = "\'";
      }
      $formatedQuestion .= $char;
    }
    $categoryID = $_POST['categories'];
    $id = intval($_POST['id']);
    $query = "UPDATE `questions` SET `name`='$formatedQuestion',`categoryID`='$categoryID' WHERE `questionID`='$id'";
    var_dump($query);
    $stmt = $db->prepare($query);
    try {
        $res = $stmt->execute();
    } catch (PDOException $e) {
        print "Error! : " . $e->getMessage() . "<br/>";
        die();
    }
}
for ($i = 1; $i <= 4; $i++) {
   if ($_POST['answer' . $i] && $_POST['bareme' . $i]) {
       $response = $_POST['answer' . $i];
       $arrayResponse = str_split($response);
        $formatedResponse = "";
        foreach ($arrayResponse as $char) {
            if ($char == "'"){
              $char = "\'";
            }
            $formatedResponse .= $char;
        }
       $value = $_POST['bareme' . $i];
       $answerID = $_POST['answerID'.$i];
       $query = "UPDATE `answers` SET `name`='$formatedResponse',`value`='$value',`questionID`='$id' WHERE `answerID`='$answerID'";
var_dump($query);
       $insertAnswer = $db->prepare($query);
       try {
           $res = $insertAnswer->execute();
       } catch (PDOException $e) {
           echo "Erreur : " . $e->getMessage() . "<br/>";
       }
   }
   header('Location: ../index.php');
}