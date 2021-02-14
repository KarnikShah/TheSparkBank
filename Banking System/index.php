<?php
require('connection.inc.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Spark Bank</title>
    <link rel="icon" href="favicon.ico">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/38d46c5bcf.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
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
                    <a class="nav-link" href="transact.php">Transact Now</a>
                    <a class="nav-link" href="#">Contact Us</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row" style="margin-top: 80px;">
            <div class="col-lg-6">
                <div class="text-container">
                    <h1><span class="turquoise">Secure,</span> and Quick Money Transfer</h1>
                    <a class="btn-solid-lg" href="customer.php">CUSTOMER DETAILS</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="image-container">
                    <img class="img-fluid" src="1.png" alt="alternative">
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">

                </div>
                <div class="col-md-4">

                </div>
                <div class="col-md-4">
                    <div class="footer-col last">
                        <h4>Connect Us </h4>
                        <span class="fa-stack">
                            <a href="index.php">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="index.php">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>

                        <span class="fa-stack">
                            <a href="index.php">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="https://linkedin.com/in/karnik-shah12">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-linkedin-in fa-stack-1x"></i>
                            </a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="foter bg-dark shadow-lg">
			<h5>Karnik Shah &#169;</h5>
			<h6>&#9812; All Rights Reserved</h6>
    </div>

</body>

</html>