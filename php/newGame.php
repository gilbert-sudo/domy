<?php 
require_once 'database.php';
$sql = "DELETE FROM score";
$result = $conn->query($sql);

$player1 = $_POST['p1'];
$player2 = $_POST['p2'];
$player3 = $_POST['p3'];

$sql_update = "UPDATE `players` SET `name` = '$player1' WHERE `players`.`id` = 1; UPDATE `players` SET `name` = '$player2' WHERE `players`.`id` = 2; UPDATE `players` SET `name` = '$player3' WHERE `players`.`id` = 3";

$request = $conn->prepare($sql_update);
$request = $request->execute();

header("Location: ../index.php?new=1");