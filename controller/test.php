<?php
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
die();
?>
