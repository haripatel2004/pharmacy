<?php

$cus_sr_no = $_GET['id'];

include 'config.php';

$sql = "DELETE FROM rx_transfer WHERE Sr_No={$cus_sr_no}";
$result = mysqli_query($conn,$sql) or die("Query Unsuccessful.");

header("Location: http://localhost/pharmacy/transfer_rx_report.php");
mysqli_close($conn);

?>
