<?php
require('connection.inc.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>The Spark Bank</title>
    <link rel="icon" href="favicon.ico">
    <script src="https://kit.fontawesome.com/38d46c5bcf.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style transact.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(126, 38, 126);">
        <div class="container">
            <a class="navbar-brand" href="index.php"><i class="fas fa-money-check-alt"></i> The Spark Bank</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    <a class="nav-link" href="customer.php">Customer Details</a>
                    <a class="nav-link" href="#">Contact Us</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center py-4">
                <h2><b>Transfer Money</b></h2>
            </div>

            <div class="col-md-6">
                <div class="form">
                    <form action="trans.php" method="POST">
                        <div class="form-group">
                            <label for="Sender"><i class="fa fa-user fa-1x" aria-hidden="true"></i> Sender Name</label>
                            <input type="text" class="form-control" id="sname" autocomplete="off" name="sname" onfocusout="myFunction()" required>
                        </div>
                        <div class="form-group">
                            <label for="Reciver"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Reciver Name</label>
                            <input type="text" class="form-control" autocomplete="off" id="rname" name="rname" onfocusout="resUpi()" required>
                        </div>

                        <div class="form-group">
                            <label for="Sender"><i class="fa fa-money" aria-hidden="true"></i> Current Balance</label>
                            <input type="text" class="form-control" id="current_balance" readonly required>
                        </div>

                        <div class="form-group">
                            <label for="Amount"><i class="fa fa-inr" aria-hidden="true"></i> Amount</label>
                            <input type="text" class="form-control" autocomplete="off" name="amount" required>
                        </div>

                        <div class="form-group">
                            <label for="Reciver"><i class="fa fa-id-card" aria-hidden="true"></i> Reciver ID</label>
                            <select name="" id="" class="form-control">
                                <option id="recuid" value=""></option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="Reciver"><i class="fa fa-key" aria-hidden="true"></i> PIN</label>
                            <input type="password" class="form-control" autocomplete="off" name="upi" required>
                            <small class="form-text text-muted">Please Enter Your 6 digit Pin Number</small>
                        </div>
                        <a href="success.php"><button class="btn btn-primary btn-bg" type="submit" name="submit"><b>Pay Now</b>

                            </button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        const myFunction = () => {
            let input = document.getElementById('sname').value;
            $.ajax({
                url: 'balance.php',
                type: 'POST',
                data: 'name=' + input,
                success: function(result) {
                    if (result != '0')
                        $('#current_balance').val(result);
                    else {
                        $('#current_balance').val('Please Enter Valid User Name');
                    }
                }

            });
        }
        const resUpi = () => {
            let rinput = document.getElementById('rname').value;
            $.ajax({
                url: 'upiid.php',
                type: 'POST',
                data: 'name=' + rinput,
                success: function(result) {
                    if (result != '0')
                        $('#recuid').html(result);
                    else {
                        $('#recuid').html('Please Enter Valid Reciever Name');
                    }

                }
            });
        }
    </script>
</body>

</html>