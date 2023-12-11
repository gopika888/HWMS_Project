<?php
include 'dbconnection.php';
$r=$_POST['rno'];
$rn=$_POST['rname'];
$pc=$_POST['pincode'];
$ph=$_POST['phno'];
$a=$_POST['amnt'];
$sq=mysqli_query($con,"insert into tbl_residence(rid,rname,pincode,pno,pay)values('$r','$rn','$pc','$ph','$a')");
echo "<script>alert('Successfully Added');window.location='add_res.php';</script>";
?>