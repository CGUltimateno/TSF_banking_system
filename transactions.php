<?php
include_once 'config/conn.php';
$query ="select * from transactions";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transactions History</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <style>

        h1{
            text-align: center;
        }
        #brand{
            font-size: 30px;
            color: purple;
        }
        .title{
            font-size: 2.4rem;
            font-weight: 800;
        }
        .navbar-nav > li {
            margin-right: 1rem;
            margin-left: 1rem;
            flex: 1;
            text-align: center;
        }

        .content {
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 0.9em;
            min-width: 1000px;
            border-radius: 5px 5px 0 0;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
            margin-left: auto;
            margin-right: auto;
            margin-block: 3%;
        }

        .content thead tr {
            background-color: #52545a;
            color: #ffffff;
            text-align: left;
            font-weight: bold;
        }
        .content th,
        .content td {
            padding: 12px 15px;
        }

        .content tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }

        .content tbody tr.active-row {
            font-weight: bold;
            /* color: #2a478a; */
        }
        .btn-pri{
            background-color: #ffb93f !important;
            color: #2a478a !important;
            border: 1px solid black;
        }
        .title{
            font-size: 2.4rem;
            font-weight: 800;
            margin: 50px;
            text-align: center;
        }
        .lia{
            font-size: 1.1rem !important;
        }
        ul li{
            padding: 0 15px;}
        .footer{
            text-align: center;
            padding: 10px 0;
            background-color: #52545a;
            color: white;
        }

        .footer-title{
            font-size: 2.4rem;
            font-weight: 500;
        }
    </style>
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
</section>
   <h1 class="title">Transactions History</h1>
      <div class="table">
          <table class="content">
              <thead>
              <tr>
                  <th>Date & Time</th>
                  <th>Sender</th>
                  <th>Receiver</th>
                  <th>Amount</th>
                  <th>Status</th>
              </tr>
              </thead>
              <?php
              echo"<tbody>";
              while ($row = mysqli_fetch_assoc($result)){
                  echo '
                  <tr>
                    <td>'.$row['Dat'].'</td>
                    <td>'.$row['sender'].'</td>
                    <td>'.$row['receiver'].'</td>
                    <td>'.$row['amount'].'</td><td>'; ?>
                    <?php if ($row['status'] == "succeed"){ echo '<p style="color: green">Success</p>';}else{ echo'<p style="color: red">Failure</p>';}; ?>
                    <?php echo '</td></tr>';
              }
              echo "</tbody>";
              ?>
          </table>
      </div>
<section class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="footer-title">The Sparks Foundation</h3>
            </div>
        </div>
    </div>
</body>
</html>
