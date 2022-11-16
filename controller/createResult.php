<?php

require dirname(__DIR__).'/config/connect.php';
var_dump($_POST['nbQuestion']);
if (isset($_POST['nbQuestion'])) {
    $nbQuestion = intval($_POST['nbQuestion']);
    require_once dirname(__DIR__).'/controller/getAllQuestionIDs.php';
    var_dump($res);
    $value = "";
    $average = 0;
    $i = 1;
    foreach ($res as $questionID) {
      echo "Question " . $questionID . " : " . ($_POST["question" . $questionID]);
      $value .= $questionID . ":" . ($_POST["question" . $questionID]);
      if ($i != $nbQuestion){
        echo $i;
        echo $_POST['nbQuestion'];
        $value .= "-";
      }
      $average += intval($_POST["question" . $questionID]);
      $i++;
    }
    echo "average  : " . $average;
    echo "\rvalue : " . $value ;
    die();
    // $stmt = $db->prepare("INSERT INTO `results` (name) VALUES '$name'");
    // try {
    //     $res = $stmt->execute();
    // } catch (PDOException $e) {
    //     print "Error! : " . $e->getMessage() . "<br/>";
    //     die();
    }
?>
