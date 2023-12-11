<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Residence List</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
    table,th,td
    {
        border:1px solid black;
        border-collapse:collapse;
    }
    th,td
    {
       
        padding-left:20px;
        padding-right:25px;
        padding-top:10px;
        padding-bottom:10px;
        color:black;
        font-family:Times new Roman;
    }
  </style>
  </head>
  <body>
    

    <!-- END nav -->

   	
   	<section class="ftco-section contact-section">
      <div class="container">
        
        <div class="row block-9 no-gutters">
       

          <div class="col-lg-6 d-flex">
          <table border="1">
              <tr>
              <th>Residence no </th>
                <th>Residence name</th>
                <th>Pincode</th>
                <th>Phone number</th>
                <th>Amount</th>
                <th>Payment Status</th>
              </tr>
              <?php
              include 'dbconnection.php';
              $sq=mysqli_query($con,"select * from tbl_residence");
              while($a=mysqli_fetch_array($sq))
              {
                ?>
                <tr>
                <td><?php echo $a['rid'];?></td>

                <td><?php echo $a['rname'];?></td>
                <td><?php echo $a['pincode'];?></td>
                <td><?php echo $a['pno'];?></td>
                <td><?php echo $a['pay'];?></td>
                <td><a href="paystatus.php?id=<?php echo $a['rid'];?>" style="color:red; font-size:18px; font-weight:bold;">Paid</a></td>
                    </tr>
                    <?php
              }
              ?>
            </table>
          </div>
        </div>
      </div>

    </section>


 

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
  <script>
    function check()
    {
        var letters=/^[A-Za-z]+$/; 
        var numbers=/^[0-9]+$/;
        if(!document.getElementById("name").value.match(letters))
        {
            alert('Input Alphabets for name!!!');
            return false;
        }
        else if(!document.getElementById("place").value.match(letters))
        {
            alert('Input Alphabets for place !!');
            return false;
        }
        else if(!document.getElementById("pincode").value.match(numbers))
        {
          alert('Input Numbers for Pincode');
          return false;
        }
        else if(!document.getElementById("cno").value.match(numbers))
        {
          alert('Input digits for contact');
          return false;
        }
        
        else
        {
            return true;
        }
    }
</script>
</html>

    
