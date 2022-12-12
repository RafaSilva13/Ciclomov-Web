<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ciclomov</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <style>
    body{
      background-color: rgb(247, 255, 251);
    }

    a{
      text-decoration: none;
    }

    .progress-bar{
      background-color: rgb(100, 200, 168);
    }
    
    .progress{
      height: 7px;
    }

    .card{
      transition: all .2s ease-in-out;
      box-shadow: 4px 4px 10px rgb(220, 220, 220);
    }
    .card:hover{
      transform: scale(1.05);
      box-shadow: 8px 8px 10px rgb(215, 215, 215);
    }
  </style>

</head>

<body>
  <!-- navbar  -->
  <nav class="navbar navbar-expand-lg " style="background-color: rgb(30, 170, 170);">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="img/logo.png" alt="" style="width:37px;"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php" style="color: white;">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="pontos.php" style="color: white;">Pontos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="sobre.php" style="color: white;">Sobre nós</a>
          </li>
        </ul>
        <form class="d-flex gap-4" role="search">
          <a class="btn btn-light btn-sm btnlogin" href="login.php?t=l" type="button">Login</a>
        </form>
      </div>
    </div>
  </nav>

</html>
<!-- fim da navbar  -->
<!-- script  -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>