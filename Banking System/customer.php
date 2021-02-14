<?php
require('connection.inc.php');

$sql = mysqli_query($con, "select * from users");
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
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style-customer.css">
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


    <div class="container text-center">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2><b>Customer Details</b></h2>
            </div>

            <div class="ml-auto">
                <div class="form-group">
                    <input class="form-control" type="text" name="" id="myInput" placeholder="Search customer" onkeyup="searchfun()">
                </div>
            </div>
            <div class="table-responsive mb-2">
                <!-- <br> -->
                <table class="table table-hover table-bordered text-center" id="myTable">

                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">NAME</th>
                            <th scope="col">CUSTOMER ID</th>
                            <th scope="col">ACCOUNT NUMBER</th>

                            <th scope="col">PROFILE AND PASSBOOK</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($sql)) { ?>
                            <tr>
                                <td><?php echo $row['name'] ?></td>
                                <td scope="row"><?php echo $row['customer_id'] ?></td>
                                <td><?php echo $row['account_number'] ?></td>

                                <td>
                                    <a href="passbook.php?id=<?php echo $row['id'] ?>"> <button type="button" class="btn btn-secondary btn-lg">Passbook</button></a>
                                </td>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
        <p>
            <button type="button" class="btn btn-success ml-auto" data-target="#exampleModalScrollable" data-toggle="modal">ADD USER</button>
            <a href="transact.php"><button type="button" class="btn btn-primary ml-auto">TRANSFER MONEY</button></a>
        </p>
    </div>

    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle"><b>New User Details</b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form role="form" method="POST" action="form.php">
                        <input type="hidden" name="_token" value="">

                        <div class="form-group">
                            <label class="control-label">Enter Full Name</label>
                            <div>
                                <input type="text" class="form-control input-lg" name="name" autocomplete="off" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Enter Account Number</label>
                            <div>
                                <input type="telephone" class="form-control input-lg" name="account-no" autocomplete="off" minlength="11" maxlength="11" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Enter Email Id</label>
                            <div>
                                <input type="email" class="form-control input-lg" name="email" autocomplete="off" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Enter Phone Number</label>
                            <div>
                                <input type="telephone" class="form-control input-lg" name="phno" autocomplete="off" minlength='10' maxlength='10' required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Enter Balance</label>
                            <div>
                                <input type="number" class="form-control input-lg" name="balance" autocomplete="off" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Enter PIN</label>
                            <div>
                                <input type="password" class="form-control input-lg" name="pin" autocomplete="off" minlength='6' maxlength='6' required>
                            </div>
                            <small>Set 6 digit Pin Number</small>
                        </div>

                        <div class="form-group">
                            <div>
                                <a href="new-user.php"><button type="submit" class="btn btn-success" name="submit">Add New User</button></a>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    
    <script>
        const searchfun = () => {

            let filter = document.getElementById('myInput').value.toUpperCase();
            let myTable = document.getElementById('myTable');
            let tr = myTable.getElementsByTagName('tr');

            for (var i = 0; i < tr.length; i++) {
                let td = tr[i].getElementsByTagName('td')[0];

                if (td) {
                    let textvalue = td.textcontent || td.innerHTML;

                    if (textvalue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";


                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }

        }
    </script>

</body>

</html>