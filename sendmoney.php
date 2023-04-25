<? include 'allcustomers.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Send Money</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <style>
        .formin {
            border-radius: 30px;
            width: 380px;
            height: 50px;
            padding: 5px 5px 5px 15px;
        }
        #brand{
            font-size: 30px;
            color: purple;
        }
        td {
            padding-top: 10px;
            padding-bottom: 10px;
        }
        .navbar-nav > li {
            margin-right: 1rem;
            margin-left: 1rem;
            flex: 1;
            text-align: center;
        }
        h1{
            text-align: center;
        }
        .container-1{
            text-align: center;
            max-width: 400px;
            margin: auto;
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
<div class="container container-1">
    <div>
        <h1>Transfer Money</h1>
    </div>
    <br>
    <div style=" backdrop-filter: blur(5px);  border-radius:5px;">
        <form action="sendmoney.php" method="post">
            <table>
                <tr>
                    <td><input type="text" class="formin form-control" name="accno1" placeholder="Sender's Account Number"
                               value="<?php if(isset($_GET['accountno'])){echo $_GET['accountno'];}?>"></td>
                </tr>
                <tr>
                    <td><input type="text" class="formin form-control" name="amount" placeholder="Amount"></td>
                </tr>
                <tr>
                    <td><input type="text" class="formin form-control" name="accno2" placeholder="Receiver's Account Number"></td>
                </tr>
            </table>
            <br><input class="btn mybtn btn-success" type="submit" value="Transfer">
        </form>
    </div>
</div>
<?php
$conn = mysqli_connect("localhost", "root", "12345", "bank");
if (!$conn){
    die("Connection failed" . mysqli_connect_error());
}
else{
    if($_SERVER['REQUEST_METHOD']== 'POST'){
        $sender =$_POST['accno1'];
        $amount = $_POST['amount'];
        $receiver = $_POST['accno2'];

        $checkquery ="SELECT current_balance FROM customer where account_no='$sender'";
        $check = mysqli_query($conn, $checkquery);
        $avail = mysqli_fetch_assoc($check)['current_balance'];
        if ($avail >= $amount){
            $sql1 ="UPDATE customer SET current_balance = current_balance - $amount WHERE account_no='$sender'";
            $sql2 ="UPDATE customer SET current_balance = current_balance + $amount WHERE account_no='$sender'";
            $result1 = mysqli_query($conn, $sql1);
            $result2 = mysqli_query($conn, $sql2);
            if($result1 && $result2){
                echo'<div class="alert alert-success align-items-center text-center" style="width:50%;" role="alert">
                <div>
                <h2><i class="fas fa-check-circle"></i>
                Amount Transferred Successfully!</h2></div>
                </div>
                </div>';
                $transfersql =  "INSERT INTO `transactions` (`sender`, `receiver`, `amount`, `status`,`Dat`) VALUES ('$sender', '$receiver', '$amount', 'failed',current_timestamp())";
                $transferact =mysqli_query($conn, $transfersql);
            }else{
                echo'<div class="alert alert-danger d-flex align-items-center" role="alert">
                <div>
                <i class="fas fa-times-circle"></i>
                Something went wrong
                </div>
               </div>';
                $transfersql =  "INSERT INTO `transactions` (`sender`, `receiver`, `amount`, `status`,`Dat`) VALUES ('$sender', '$receiver', '$amount', 'failed',current_timestamp())";
                $transferact =mysqli_query($conn, $transfersql);
            }
        }
    }
}
?>
</body>
</html>
