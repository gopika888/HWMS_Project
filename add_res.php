<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Add Residence</title>
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

  </head>

  <style>
    table,th,td
    {
        border:1px solid black;
        border-collapse:collapse;
    }
    th,td
    {
       
        padding-left:25px;
        padding-right:35px;
        padding-top:10px;
        padding-bottom:10px;
        color:black;
        font-family:Times new Roman;
    }
  </style>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
  <body>
    

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img
            src="images/logo.png"
            alt="logo"
            style="height: 80px; width: 80px"
          />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"> </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.html"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-disabled="true" href="add_res.php">Add Residence</a>
            </li>

            <li class="nav-item">
              <a
                class="nav-link active"
                aria-disabled="true"
                href="add_coll.php"
                >Add Collector</a>
            </li>

            <li class="nav-item">
              <a
                class="nav-link active"
                aria-disabled="true"
                href="contactus.html"
                >Contactus</a
              >
            </li>
          </ul>
          
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

            <li class="nav-but">
              <a class="btn btn-outline-light" href="logout.php">Log Out</a>
            </li>
           
          </ul>
        </div>
      </div>
    </nav>

    <!-- ------------------------navbar end -------------------->
    

   	
   	<section class="ftco-section contact-section">
      <div class="container">
        
      <div class="row block-9 no-gutters">
      <div class="col-lg-6 order-md-last d-flex">
        <form action="res_action.php" method="post" onsubmit="return check();" class="bg-light p-5 contact-form">
          <div class="form-group">
            <input type="number" name="rno" class="form-control" require id="" placeholder="Residence Number">
          </div>
         
          <div class="form-group">
            <input type="text" name="rname" class="form-control" required placeholder="Residence Name">
          </div>
         
          <div class="form-group">
            <textarea  type="number" name="pincode" id="" cols="5" rows="1" class="form-control" placeholder="Pincode"></textarea>
          </div>

          <div class="form-group">
            <textarea type="number" name="phno" id="" cols="30" rows="1" class="form-control" placeholder="Phone number"></textarea>
          </div>

          <div class="form-group">
            <textarea type="number" name="amnt" id="" cols="30" rows="1" class="form-control" placeholder="Amount"></textarea>
          </div>
        
          <div class="form-group">
            <input type="submit" value="ADD" class="btn btn-primary py-3 px-5" name="submit">
          </div>
         
        </form>
     
      </div>

      <!-- <div class="col-lg-6 d-flex">
    
      </div> -->
    </div>
            <table>
            <tr>
                <th>Residence no </th>
                <th>Residence name</th>
                <th>Pincode</th>
                <th>Phone number</th>
                <th>Amount</th>
                <th>ACTION</th>
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
                <td><a href="idel.php?id=<?php echo $a['rid'];?>" style="color:red; font-size:18px; font-weight:bold;">Delete</a></td>
            </tr>    
            <?php
            }
            ?>
 </table>
      </div>

    </section>



  <!-- loader -->
 
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

  <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
    
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
    
