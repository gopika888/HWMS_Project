<?php
include 'dbconnection.php';
$r=$_POST['c_id'];
$rn=$_POST['w_id'];
$pc=$_POST['c_name'];
$ph=$_POST['a_no'];
$a=$_POST['c_no'];
$sq=mysqli_query($con,"insert into tbl_collector(cid,wid,cname,ano,cno)values('$r','$rn','$pc','$ph','$a')");
echo "<script>alert('Successfully Added');window.location='add_coll.php';</script>";
?>