<?php 
include('../db_connect.php');

$id=$_POST['id'];

$query = "SELECT * FROM `status_of_infrastructure` where id=?";

$stmt = mysqli_prepare($con, $query);
mysqli_stmt_bind_param($stmt,'s',$id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$row['govtPercentage']=number_format((($row['govt_existing']*100)/$row['govt_total']), 2, '.', '');
$row['aidedPercentage']=number_format((($row['aided_existing']*100)/$row['aided_total']), 2, '.', '');
$row['privatePercentage']=number_format((($row['private_existing']*100)/$row['private_total']), 2, '.', '');
$row['otherPercentage']=number_format((($row['other_existing']*100)/$row['other_total']), 2, '.', '');

echo json_encode($row);
?>