<!-- <?php
require dirname(__DIR__).'/config/connect.php';
$result = "";
$pointsFinal = 0;
$result .= $_POST['question1'];
$result .= "-";
$result .= $_POST['question2'];
echo $result;
echo(" + nb question : " . $_POST['nbQuestion']);

$result = explode("-", $result);
var_dump($result);
foreach($result as $answer){
$points = explode(":",$answer);
var_dump($points);
$pointsFinal += intval($points[1]);
}
echo "point final : " . $pointsFinal;
$query = "INSERT INTO `questions` (`questionID`, `name`, `categoryID`) VALUES (NULL, 'tututututu', '3');";
$stmt = $db->prepare($query);
try {
    $stmt->execute();
} catch (PDOException $e) {
    print "Error! : " . $e->getMessage() . "<br/>";
    die();
}



die();
?> -->
<?php
var_dump($_POST);
 ?>
