<?php

require dirname(__DIR__).'/config/connect.php';
if (isset($_POST['nbQuestion'])) {
    $nbQuestion = intval($_POST['nbQuestion']);
    require_once dirname(__DIR__).'/controller/getAllQuestionIDs.php';
    $value = "";
    $total = 0;
    $i = 1;
    foreach ($res as $questionID) {
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
    $date = date('d-m-y h:i:s');
    $query = "INSERT INTO results VALUES (NULL,'$value','$total','$content','$date');";
    $stmt = $db->prepare($query);
    try {
      $stmt = $stmt->execute();
              }
     catch (PDOException $e) {
        echo 'Error : ' . $e->getMessage() . '<br/>';
    }
  ?>
    <form id="hiddenForm" method="post" action="..\congrats.php">
    <input type="hidden" name="content" value="<?php echo $content ?>">
    <input type="hidden" name="total" value="<?php echo $total ?>">
    <input type="hidden" name="graduationID" value=<?php echo $graduationID ?>>
    </form>

    <script type="text/javascript">
    
      document.forms['hiddenForm'].submit();
    </script>
    <?php
}
?>
