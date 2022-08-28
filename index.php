<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Snippet - BBBootstrap</title>
  <link href="#" rel="stylesheet" />
  <link href="#" rel="stylesheet" />
  <script type="text/javascript" src="#"></script>
  <style>
    ::-webkit-scrollbar {
      width: 8px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
      background: #f1f1f1;
    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
      background: #888;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
      background: #555;
    }

    * {
      padding: 0;
      margin: 0;
    }

    body {
      background-color: #000000;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .img-wrapper {
      max-width: 150px;
      position: relative;
    }

    .img-wrapper img {
      width: 100px;
      height: 100px;
      display: block;
      border-radius: 50%;
    }

    .img-wrapper::before {
      content: "";
      position: absolute;
      inset: -15px;
      border: 6px solid #000000;
      border-top-color: #fff;
      border-bottom-color: #fff;
      border-radius: 50%;
      z-index: -1;
      animation: spin 3s linear infinite;
    }

    @keyframes spin {
      to {
        transform: rotate(360deg);
      }
    }
  </style>
</head>

<body className="snippet-body">
  <div class="img-wrapper">
    <img src="logo.png" />
  </div>
  <script type="text/javascript" src="#"></script>
  <script type="text/javascript" src="#"></script>
  <script type="text/javascript" src="#"></script>
  <script type="text/javascript" src="#"></script>
  <?php
  if (isset($_GET['new'])) {
  ?>
    <script type="text/javascript">
      setTimeout(function() {
        window.location.href = "index2.php";
      }, 1000); //run this after 3 seconds
    </script>
  <?php
  } else {
  ?>
    <script type="text/javascript">
      setTimeout(function() {
        window.location.href = "index2.php";
      }, 2000); //run this after 3 seconds
    </script>
  <?php
  }

  ?>
  <script type="text/javascript">
    setTimeout(function() {
      window.location.href = "index2.php";
    }, 2000); //run this after 3 seconds
  </script>
  <script type="text/javascript">
    var myLink = document.querySelector('a[href="#"]');
    myLink.addEventListener("click", function(e) {
      e.preventDefault();
    });
  </script>
</body>

</html>