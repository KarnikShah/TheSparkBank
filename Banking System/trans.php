<?php
require('connection.inc.php');

if (isset($_POST['submit'])) {
    $sname = $_POST['sname'];
    $rname = $_POST['rname'];
    $amount = $_POST['amount'];
    $upi = $_POST['upi'];
    $check_upi = mysqli_query($con, "select * from users where name='$sname'");
    $row = mysqli_fetch_assoc($check_upi);
    $upi_pin = $row['upi_pin'];
    $curr_balance = $row['balance'];
    $reciver = mysqli_query($con, "select * from users where name='$rname'");
    $row_rec = mysqli_fetch_assoc($reciver);
    $user_id=$row['id'];
    $reciver_id = $row_rec['id'];
    $reciver_name = $row_rec['name'];
    $reciver_customer_id = $row_rec['customer_id'];
    $reciver_account_no = $row_rec['account_number'];

    if ($upi_pin == $upi) {
        if ($amount > $curr_balance) { ?>
            <script>
                alert('Insufficient Balance');
                window.location.href = 'transact.php';
            </script>
        <?php } else if ($amount <= 0) {
        ?>
            <script>
                alert('Please Enter Valid Amount');
                window.location.href = 'transact.php';
            </script>
        <?php
        } else {

            $sql = mysqli_query($con, "UPDATE USERS SET balance= balance-$amount  where name='$sname'");
            $update_sql = mysqli_query($con, "UPDATE USERS SET balance= balance+$amount  where name='$rname'");
            $insert = mysqli_query($con, "INSERT INTO `transaction` (`user_id`, `reciver_id`,`name`,`customer_id`,`account_no`,`ammount`) VALUES ('$user_id', '$reciver_id','$reciver_name','$reciver_customer_id','$reciver_account_no','$amount')"); ?>
            <script>
                // alert('Amount Has Successfully Transfer :)');
                window.location.href = 'success.php';
            </script>
        <?php }
    } else { ?>
        <script>
            alert('Please Enter Valid UPI Pin No');
            window.location.href = 'transact.php';
        </script>
<?php }
} else {
    echo 'error';
}
?>