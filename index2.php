<?php require_once 'php/database.php';
if (isset($_GET['victory']) && isset($_GET['id'])) {
  $victory = $_GET['victory'];
  $id = $_GET['id'];
} else {
  $victory = 0;
  $id = 0;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Domy-By GILBERT</title>
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>

<body>
  <div class="page">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Domy Gasy</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor01">
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="nav-link active" href="#">Tableau
                <span class="visually-hidden">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="developer.php">Développeur</a>
            </li>
          </ul>
          <!-- <form class="d-flex">
            <input
              class="form-control me-sm-2"
              type="text"
              placeholder="Search"
            />
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">
              Search
            </button>
          </form> -->
        </div>
      </div>
    </nav>
    <div class="container">
      <div class="col text-center">
        <h6 id="datation">Warning</h6>
      </div>
      <table class="table">
        <thead class="table-dark">
          <tr>
            <th scope="col">#</th>
            <?php
            $variable = $conn->query("SELECT * FROM players");
            $variable = $variable->fetchAll();
            foreach ($variable as $name) { ?>
              <th scope="col">
                <div class="col text-center">
                  <?= strtoupper($name['name']) ?>
                </div>
              </th>
            <?php
            }
            ?>
          </tr>
        </thead>
        <tbody>
          <?php
          $scores = $conn->query("SELECT * FROM score");
          $scores = $scores->fetchAll();
          foreach ($scores as $score) { ?>
            <tr>
              <th scope="row"><?= $score['id'] ?></th>
              <td>
                <div class="col text-center">
                  <?= $score['p1'] ?>
                </div>
              </td>
              <td>
                <div class="col text-center">
                  <?= $score['p2'] ?>
                </div>
              </td>
              <td>
                <div class="col text-center">
                  <?= $score['p3'] ?>
                </div>
              </td>
            </tr>
          <?php
          }
          ?>
          <tr>
            <th scope="row">Scores</th>
            <?php

            $sql1 = "select sum(p1) from score";
            $q1 = $conn->query($sql1);
            $row1 = $q1->fetchAll();

            $sql2 = "select sum(p2) from score";
            $q2 = $conn->query($sql2);
            $row2 = $q2->fetchAll();

            $sql3 = "select sum(p3) from score";
            $q3 = $conn->query($sql3);
            $row3 = $q3->fetchAll();

            ?>
            <td>
              <div class="col text-center">
                <?php
                if ($victory == 1 && $id == 1) {
                ?>
                  <button type="button" class="btn btn-success">
                    <?= $row1[0][0] ?>
                  </button>
                <?php
                } elseif ($victory == 1 && $id != 1) { ?>
                  <button type="button" class="btn btn-danger">
                    <?= $row1[0][0] ?>
                  </button> <?php
                          } else {
                            ?>
                  <button type="button" class="btn btn-dark">
                    <?= $row1[0][0] ?>
                  </button>
                  <button type="button" class="btn btn-success" onclick="addscore(1);">
                    +
                  </button>
                <?php
                          }
                ?>
              </div>
            </td>

            <td>
              <div class="col text-center">
                <?php
                if ($victory == 1 && $id == 2) {
                ?>
                  <button type="button" class="btn btn-success">
                    <?= $row2[0][0] ?>
                  </button>
                <?php
                } elseif ($victory == 1 && $id != 2) { ?>
                  <button type="button" class="btn btn-danger">
                    <?= $row2[0][0] ?>
                  </button> <?php
                          } else {
                            ?>
                  <button type="button" class="btn btn-dark">
                    <?= $row2[0][0] ?>
                  </button>
                  <button type="button" class="btn btn-success" onclick="addscore(2);">
                    +
                  </button>
                <?php
                          }
                ?>
              </div>
            </td>

            <td>
              <div class="col text-center">
                <?php
                if ($victory == 1 && $id == 3) {
                ?>
                  <button type="button" class="btn btn-success">
                    <?= $row3[0][0] ?>
                  </button>
                <?php
                } elseif ($victory == 1 && $id != 3) { ?>
                  <button type="button" class="btn btn-danger">
                    <?= $row3[0][0] ?>
                  </button> <?php
                          } else {
                            ?>
                  <button type="button" class="btn btn-dark">
                    <?= $row3[0][0] ?>
                  </button>
                  <button type="button" class="btn btn-success" onclick="addscore(3);">
                    +
                  </button>
                <?php
                          }
                ?>
              </div>
            </td>

          </tr>
      </table>
      <div class="new" align="center">

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          Lalao vavao +
        </button>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Lalao vaovao</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">

                <form class="card" action="php/newGame.php" method="POST">
                  <h5 class="card-title fw-400">Ireo hilalao</h5>

                  <div class="card-body">
                    <div class="form-group">
                      <input class="form-control" name="p1" type="text" placeholder="Ny lohavato">
                    </div>
                    <div class="form-group">
                      <input class="form-control" name="p2" type="text" placeholder="Ny faharoa">
                    </div>
                    <div class="form-group">
                      <input class="form-control" name="p3" type="text" placeholder="Ny fahatelo">
                    </div>
                    <button type="submit" class="btn btn-block btn-bold btn-success">Alefaso ary!</button>
                  </div>
                </form>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">aoka ihany</button>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</body>

<script src="https://bootswatch.com/_vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script>
  var today = new Date();
  var date =
    "Lalao ny " +
    today.getDate() +
    "/" +
    (today.getMonth() + 1) +
    "/" +
    today.getFullYear();

  document.getElementById("datation").innerHTML = date;
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="app.js"></script>

</html>