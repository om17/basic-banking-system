<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="particles.js is a lightweight JavaScript library for creating particles.">
    <meta name="author" content="Vincent Garreau" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <link rel="stylesheet" media="screen" href="stylef.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">

    <title>contact form</title>
  </head>
  <body>
    <div class="header-background">
        <div id="nav" class="sticky-nav">
            <nav class="navbar navbar-expand-lg navbar-dark mi">
                <div class="container-fluid">
                <a class="navbar-brand" href="#" >Indian Bank</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <span></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="transaction.php">transfer money</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="transactionhistory.php">transaction history</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                    </ul>
                </div>
                </div>
            </nav>
        </div>
          <header class="page-header gradient">
              <div class="container pt-3">
                  <div class="row align-items-center justify-content-center">
                      <div class="col-md-6 heading text-center my-5">
                          <h3>Welcome To</h3>
                          <h1>Indian Bank</h1>
                      </div>
                      <div class="col-md-6 ">
                          <img src="nn.png" alt="header image" width="500px" height="400px" class="img"/>
                      </div>
                  </div>
              </div>
          </header>
          <div class="container nx">
            <div class="card" style="width: 18rem;">
                <img src="transfer.jpg" class="card-img-top" height="150px" width="250px" alt="Transfer">
                <div class="card-body">
                  <h5 class="card-title">transfer money</h5>
                  <p class="card-text">Transfer your money form our bank.</p>
                  <a href="transaction.php" class="btn btn-primary">Transaction</a>
                </div>
              </div>
              <div class="card" style="width: 18rem;">
                <img src="history.jpg" class="card-img-top" height="150px" width="250px" alt="Transaction History">
                <div class="card-body">
                  <h5 class="card-title">transaction history</h5>
                  <p class="card-text">check your transaction history.</p>
                  <a href="transactionhistory.php" class="btn btn-primary">History</a>
                </div>
              </div>
          </div>
    <footer class="footer">
        <div class="container">
            <h3>© Copyright 2021 Made by Om Sarangi</h3>
            <h3>Sparx Foundation Project</h3>
        </div>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
    <script src="main.js"></script>
  </body>
</html>