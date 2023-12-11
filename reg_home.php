<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>HWMS:Household Waste Management System</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
    <style>
      .carousel img {
        margin: auto;
      }
      row::after {
        content: "";
        flex: auto;
      }
    </style>
  </head>
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
              <a class="nav-link active" href="aboutus.html">Aboutus</a>
            </li>

            <li class="nav-item">
              <a class="nav-link active" aria-disabled="true" href="">Blog</a>
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
              <a class="btn btn-outline-light" href="login.php">Login</a>
            </li>
            <li class="nav-but">
              <a class="btn btn-outline-light" href="user.php">Register</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- ------------------------navbar end -------------------->

    <!-- carousel -->


    <!-- carousel end -->


    <!---register ---> 
    <section class="ftco-section contact-section">
      <div class="container" style="margin-left: 34%">
        
        <div class="row block-9 no-gutters">
          <div class="col-lg-6 order-md-last d-flex">
            <form action="reg_act.php" method="post" onsubmit="return check();" class="bg-light p-5 contact-form">
              <div class="form-group">
                <input type="text" name="uname" class="form-control" require id="name" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text" name="email" class="form-control" required placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="tel" name="ph_no" class="form-control" id="" pattern="[0-9]{10}" placeholder="Contact Number" required maxlength="10" minlength="10">
              </div>
              <div class="form-group">
                <textarea name="address" id="" cols="30" rows="7" class="form-control" placeholder="Address"></textarea>
              </div>
              <div class="form-group">
                <input type="password" name="pwd" class="form-control" placeholder="Password Here" required>
              </div>
              <div class="form-group">
                <input type="submit" value="REGISTER" class="btn btn-primary py-3 px-5">
              </div>
             
            </form>
          
          </div>

          <!-- <div class="col-lg-6 d-flex">
          	<div id="map" class="bg-white"></div>
          </div> -->
        </div>
      </div>
    </section>
    
    
    <!---register end ---> 
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
