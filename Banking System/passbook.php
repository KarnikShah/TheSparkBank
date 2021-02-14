<?php
require('connection.inc.php');

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $sql = mysqli_query($con, "select * from users where id='$id'");
  $row = mysqli_fetch_assoc($sql);
  $name = $row['name'];
  $number = $row['number'];
  $acno = $row['account_number'];
  $cid = $row['customer_id'];
  $email = $row['email'];
  $passbook = mysqli_query($con, "select * from transaction where user_id='$id'");
  $num = mysqli_num_rows($passbook);
}
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
  <link rel="stylesheet" href="style passbook.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(126, 38, 126);">
    <div class="container">
      <a class="navbar-brand" href="index.php"><i class="fas fa-money-check-alt"></i> The Spark Bank</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          <a class="nav-link" href="customer.php">Back</a>
          <a class="nav-link" href="#">Contact Us</a>
        </div>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row ml-1" style="margin-top: 0px;">
      <h2><b>Profile</b></h2>
    </div>
    <div class="row mb-3">
      <div class="col-md-4">
        <div class="card" style="width: 27rem; background-color: #bf77cb">
          <div class="card-body">
            <p class="card-text">
            <h5><b>NAME:&nbsp;&nbsp;&nbsp;<?php echo $name ?></b></h5>
            </p>
            <p class="card-text">
            <h5><b>CUSTOMER ID:&nbsp;&nbsp;&nbsp;<?php echo $cid ?></b></h5>
            </p>
            <p class="card-text">
            <h5><b>ACCOUNT NUMBER:&nbsp;&nbsp;&nbsp;<?php echo $acno ?></b></h5>
            </p>
            <p class="card-text">
            <h5><b>CONTACT NUMBER:&nbsp;&nbsp;&nbsp;<?php echo $number ?></b></h5>
            </p>
            <p class="card-text">
            <h5><b>EMAIL:&nbsp;&nbsp;&nbsp;<?php echo $email ?></b></h5>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container text-center">
    <h3><b>Transaction Details</b></h3>
    <br>
    <?php if($num > 0){ ?>
    <div class="table-responsive mb-5">

      <table class='table table-bordered text-center'>

        <thead class="thead-dark">
          <tr>
            <th scope="col" colspan="3">RECEIVER</th>

            <th scope="col" rowspan="2">TRANSACTION AMOUNT</th>

            <th scope="col" rowspan="2">DATE</th>

          </tr>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">NAME</th>
            <th scope="col">ACCOUNT NUMBER</th>

          </tr>
        </thead>

        <tbody>
          <?php while ($row = mysqli_fetch_assoc($passbook)) { ?>
            <tr>
              <td><?php echo $row['customer_id'] ?></td>
              <td><?php echo $row['name'] ?></td>
              <td><?php echo $row['account_no'] ?></td>
              <td><?php echo $row['ammount'] ?></td>
              <td><?php echo $row['added_on'] ?></td>
            </tr>
          <?php } ?>
        </tbody>

      </table>
    </div>
    <?php } 
      else{  echo"NO TRANSACTION TILL NOW"; } ?>
      
  </div>
  
</body>

</html>