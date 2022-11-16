<?php

require dirname(__DIR__).'/config/connect.php';
var_dump($_POST['nbQuestion']);
if (isset($_POST['nbQuestion'])) {
  echo "rzararza";
    $nbQuestion = intval($_POST['nbQuestion']);
    var_dump($nbQuestion);
    for ($i=1; $i < $nbQuestion+1; $i++) {
      echo "Question " . $i . " : " . ($_POST["question" . $i]);
        }
    // $stmt = $db->prepare("INSERT INTO `results` (name) VALUES '$name'");
    // try {
    //     $res = $stmt->execute();
    // } catch (PDOException $e) {
    //     print "Error! : " . $e->getMessage() . "<br/>";
    //     die();
     }
?>
