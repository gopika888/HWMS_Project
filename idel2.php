<?php
include 'dbconnection.php';
$id=$_GET['id2'];
$sq=mysqli_query($con,"delete from tbl_collector where cid='$id'");
echo "<script>alert('Deleted');window.location='add_coll.php';</script>";
?>
    