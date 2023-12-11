<?php
include 'dbconnection.php';
$n=$_POST['name'];
$e=$_POST['email'];
$c=$_POST['cno'];
$adr=$_POST['address'];
$ps=$_POST['password'];
$s=mysqli_query($con,"select * from tbl_user where email='$e'");
$r=mysqli_fetch_array($s);
$em=$r['email'];
if($e==$em)
{
    echo "<script>alert('Already Registered');window.location='user.php';</script>";
}
else
{
    $sql=mysqli_query($con,"insert into tbl_user(name,email,cono,address,password)values('$n','$e','$c','$adr','$ps')");
    $q=mysqli_query($con,"select max(usid) as uid from tbl_user");
    $rt=mysqli_fetch_array($q);
    $uid=$rt['uid'];
    $sq=mysqli_query($con,"insert into tbl_login(uid,uname,upass,utype)values('$uid','$e','$ps','User')");
    echo "<script>alert('Successfully Registered');window.location='login.php';</script>";
}
?>