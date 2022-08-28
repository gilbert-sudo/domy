<?php 
require_once 'database.php';

$id = $_GET['id'];
$score = $_GET['score'];

$result = $conn->query("SELECT count(*) as total from score");
$data= $result->fetch();
$lineID = $data['total']+1;

if ($id == "p1") {
    $sql = "INSERT INTO `score` (`id`, `p1`, `p2`, `p3`) VALUES ('$lineID', '$score', '0', '0')";
} elseif ($id == "p2") {
    $sql = "INSERT INTO `score` (`id`, `p1`, `p2`, `p3`) VALUES ('$lineID', '0', '$score', '0')";
} else {
    $sql = "INSERT INTO `score` (`id`, `p1`, `p2`, `p3`) VALUES ('$lineID', '0', '0', '$score')";
}


$variable = $conn->prepare($sql);
$variable = $variable->execute();



$sql1 = "select sum(p1) from score";
$q1 = $conn->query($sql1);
$row1 = $q1->fetchAll();

$sql2 = "select sum(p2) from score";
$q2 = $conn->query($sql2);
$row2 = $q2->fetchAll();

$sql3 = "select sum(p3) from score";
$q3 = $conn->query($sql3);
$row3 = $q3->fetchAll();

if ($row1[0][0] > 119 || $row2[0][0] > 119 || $row3[0][0] > 119) {
    $victory = 1;
}else {
    $victory = 0;
}
$state = "success";
$res = array(
    'state' => $state,
    'victory' => $victory
);
echo json_encode($res);
