<?php 

include('../Includes/config.php');


$result = mysqli_query($con, 'SELECT SUM(payable) AS value_sum FROM transaction WHERE status = "PROCESSED"'); 
$row = mysqli_fetch_assoc($result); 
echo '$'.$sum = $row['value_sum'];

?>