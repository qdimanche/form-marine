<?php

require dirname(__DIR__).'/config/connect.php';
if (isset($_POST['nbQuestion'])) {
    $nbQuestion = intval($_POST['nbQuestion']);
    require_once dirname(__DIR__).'/controller/getAllQuestionIDs.php';
    $value = "";
    $total = 0;
    $i = 1;
    foreach ($res as $questionID) {
      echo "Question " . $questionID . " : " . ($_POST["question" . $questionID]);
      $value .= $questionID . ":" . ($_POST["question" . $questionID]);
      if ($i != $nbQuestion){
        $value .= "-";
      }
      $total += intval($_POST["question" . $questionID]);
      $i++;
    }
    require_once dirname(__DIR__).'/controller/getAllGraduations.php';
    foreach ($res as $graduation) {
      $min = $graduation['1'];
      $max = $graduation['2'];
      if ($total >= $min && $total <= $max){
        $content = $graduation['3'];
        $graduationID = $graduation['0'];
      }
    }
    ?>

<?php
}
?>
