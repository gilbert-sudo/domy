<?php 
require_once '../php/database.php';
$id = $_GET['id'];
$sql = "SELECT name FROM players WHERE id = $id";
$result = $conn->query($sql);
$data= $result->fetch();
$grand = strtoupper($data[0]);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Felicitation</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
        <div class="modal">
      <!--     <span class="emoji">👏</span> -->
          <span class="emoji round">🏆</span>
          <h1>Maty, Tena mafy ilay <?= $grand ?> e😎</h1>
          <a href="../index2.php?victory=1&id=<?=$id?>" class="modal-btn">Misaotra e!</a>
        </div>
        <div id="confetti-wrapper">
        </div>
      </div>
      <script src="app.js"></script>
</body>
</html>