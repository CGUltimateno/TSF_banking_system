<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></link>
    <title>TSF Bank</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section>
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" id="brand" href="index.php">TSF BANK</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-grow-1">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link flex-grow-1"  href="allcustomers.php">View All Customers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="sendmoney.php">Transfer Money</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="transactions.php">Transfers History</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="row container text-center custom-row1">
        <div class="col-lg-6 row-1">
            <h1 class="title">Welcome to TFS Bank</h1>
        </div>
        <div class="col-lg-6">
            <img class="money" src="image.png" alt="money">
        </div>
    </div>
</section>
<section class="services">
<div class="container">
    <h1 class="services-title">Our Services</h1>
    <div class="row services-row">
        <div class="col services-col">
            <h3>View all Customers</h3>
            <p>Show all Customers.</p>
            <button class="btn" style="background-color: #ffb93f;" onclick="window.location.href = 'allcustomers.php';">View Customers</button>
        </div>
        <div class="col services-col">
            <h3>Transfer Money</h3>
            <p>Transfer your money to another account</p>
            <button class="btn" style="background-color: #ffb93f;" onclick="window.location.href = 'sendmoney.php';">Transfer</button>
        </div>
        <div class="col services-col">
            <h3>Transaction History</h3>
            <p>View all your previous Transactions.<p>
                <button class="btn" style="background-color: #ffb93f;" onclick="window.location.href = 'transactions.php';">Transactions</button>

        </div>
    </div>
</div>
</section>
<section class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3>The Sparks Foundation</h3>
            </div>
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
