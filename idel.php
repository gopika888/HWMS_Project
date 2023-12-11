<?php
include 'dbconnection.php';
$id=$_GET['id'];
$sq=mysqli_query($con,"delete from tbl_residence where rid='$id'");
echo "<script>alert('Deleted');window.location='add_res.php';</script>";
?>
    