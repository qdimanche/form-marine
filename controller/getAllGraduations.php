<?php
require dirname(__DIR__).'/config/connect.php';
$query = "Select * from graduations";
$stmt = $db->prepare($query);
try {
    $stmt->execute();
} catch (PDOException $e) {
    print "Error! : " . $e->getMessage() . "<br/>";
    die();
}
$data = $stmt->fetchAll();
$res = [];
$i = 0;
foreach ($data as $graduations) {
    $id = $graduations['graduationID'];
    $min = $graduations['min'];
    $max = $graduations['max'];
    $content = $graduations['content'];
    $res[$i] = [$id,$min,$max,$content];
    $i++;
}
?>
