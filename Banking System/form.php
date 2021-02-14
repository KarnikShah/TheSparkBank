<?php
require('connection.inc.php');

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $acc_no = $_POST['account-no'];
    $email = $_POST['email'];
    $number = $_POST['phno'];
    $balance = $_POST['balance'];
    $pin = $_POST['pin'];
    $cid = $number.'@spark';

    $sql = mysqli_query($con, "INSERT INTO `users` (`name`, `account_number`, `email`, `number`, `balance`, `customer_id`,`upi_pin`) VALUES ('$name', '$acc_no', '$email', '$number', ' $balance', '$cid','$pin')");
?>
    <script>
        location.href = 'new-user.php';
    </script>
<?php
}
?>