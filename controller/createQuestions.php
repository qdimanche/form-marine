<?php

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
    $categoryId = $_POST['categories'];
    $query = "INSERT INTO `questions`(`name`, `categoryID`) VALUES ('$formatedQuestion','$categoryId')";
    $stmt = $db->prepare($query);
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
    $lastIdQuestion = $lastId->fetch();
} catch (PDOException $e) {
    print "Error! : " . $e->getMessage() . "<br/>";
    die();
}
for ($i = 1; $i <= 4; $i++) {
    if ($_POST['response' . $i] && $_POST['bareme' . $i]) {
        $response = $_POST['response' . $i];
        $arrayResponse = str_split($response);
        $formatedResponse = "";
        foreach ($arrayResponse as $char) {
            if ($char == "'"){
              $char = "\'";
            }
            $formatedResponse .= $char;
          }
        $value = $_POST['bareme' . $i];
        $query = "INSERT INTO answers (name, value, questionID) VALUES ('$formatedResponse', '$value', '$lastIdQuestion[0]')";
        $insertAnswer = $db->prepare($query);
        try {
            $res = $insertAnswer->execute();
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage() . "<br/>";
        }
    }
    header('Location: ../questionsList.php');
}
