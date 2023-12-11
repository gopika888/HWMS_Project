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

    <!-- carousel 
    <div id="carouselExample" class="carousel slide">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img
            src="images/img1.jpg"
            class="d-block w-100"
            alt="height=50; width=40;"
          />
        </div>
        <div class="carousel-item">
          <img src="images/img2.jpg" class="d-block w-100" alt="..." />
        </div>
        <div class="carousel-item">
          <img src="images/img3.jpg" class="d-block w-100" alt="..." />
        </div>
      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#carouselExample"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#carouselExample"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

     carousel end -->


    <section class="ftco-section contact-section">
      <div class="container" style="margin-left: 40%;">
        
        <div class="row block-9 no-gutters">
          <div class="col-lg-6 order-md-last d-flex">
            <form action="login_action.php" method="post" onsubmit="return check();" class="bg-light p-5 contact-form">
              <div class="form-group">
                <input type="text" name="uname" class="form-control" require id="" placeholder="Enter Username">
              </div>
              <!-- <div class="form-group">
                <input type="text" name="email" class="form-control" required placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="tel" name="cno" class="form-control" id="" pattern="[0-9]{10}" placeholder="Contarct Number" required maxlength="10" minlength="10">
              </div>
              <div class="form-group">
                <input type="text" name="ano" class="form-control" id="" pattern="[0-9]{12}" placeholder="Aadhar Number" required maxlength="12" minlength="12">
              </div>
              <div class="form-group">
                <textarea name="address" id="" cols="30" rows="7" class="form-control" placeholder="Address"></textarea>
              </div> -->
              <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password Here" required>
              </div>
              <div class="form-group">
                <input type="submit" value="LOGIN" class="btn btn-primary py-3 px-5">
              </div>
             
            </form>
          
          </div>

          <!-- <div class="col-lg-6 d-flex">
          	<div id="map" class="bg-white"></div>
          </div> -->
        </div>
      </div>
    </section>



    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>

  <script>
    function check() {
    var emailRegex = /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Z|a-z]{2,}$/;
    var numbers = /^[0-9]+$/;

    var email = document.getElementById("uname").value;
    var password = document.getElementById("password").value;

    if (!email.match(emailRegex)) {
        alert('Input a valid email address for name!!!');
        return false;
    } else if (!password.match(numbers)) {
        alert('Input digits for password');
        return false;
    } else {
        return true;
    }
}
</html>
