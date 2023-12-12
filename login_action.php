<!-- <?php
session_start();
include 'dbconnection.php';
$uname=$_POST['uname'];
$upass=$_POST['password'];
$t=mysqli_query($con,"select * from tbl_login where uname='$uname' and upass='$upass' ");
$a=mysqli_fetch_array($t);
session_start();    
if ($a['utype'] == "admin") {
    $_SESSION['uid'] = $a['uid'];
    echo "<script>alert('Welcome " . $a['uname'] . "');window.location='adminhome.php';</script>";
}

else if($a['utype']=="Collector")
{
    $_SESSION['uid']=$a['uid'];
    echo"<script>alert('Welcome User');window.location='collector.php';</script>";
}
else if($a['utype']=="User")
{
    $_SESSION['uid']=$a['uid'];
    echo"<script>alert('Welcome User');window.location='userhome.php';</script>";
}

else
{
   echo"<script>alert('Invalid Username or Password');window.location='index.html';</script>";
}

?> -->

<?php
session_start();
include 'dbconnection.php';

$uname = $_POST['uname'];
$upass = $_POST['password'];
$t = mysqli_query($con, "SELECT * FROM tbl_login WHERE uname='$uname' AND upass='$upass'");
$a = mysqli_fetch_array($t);

if ($a['utype'] == "admin") {
    $_SESSION['uid'] = $a['uid'];
    echo "<script>alert('Welcome " . $a['uname'] . "');window.location='adminhome.php';</script>";
} else if ($a['utype'] == "Collector") {
    $_SESSION['uid'] = $a['uid'];
    echo "<script>alert('Welcome User');window.location='collector.php';</script>";
} else if ($a['utype'] == "User") {
    $_SESSION['uid'] = $a['uid'];
    echo "<script>alert('Welcome User');window.location='user.php';</script>";
} else {
    echo "<script>alert('Invalid Username or Password');window.location='index.html';</script>";
}
?>