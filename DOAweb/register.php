<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
  <link rel="stylesheet" href="styles/register.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<!--main-view start-->
<div class="container-fluid">
  <div class="row">
    <div class="main-bg">
      <!--<img id="main-bg" src="https://cdn.pixabay.com/photo/2016/09/21/04/46/barley-field-1684052_1280.jpg" alt="">
--><div id="myCarousel1" class="carousel slide" data-ride="carousel">
      <!-- Slides -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="video-container">
            <video class="video" autoplay loop muted>
              <source src="video/The%20Farmer.mp4" type="video/mp4">
              Your browser does not support the video tag.
            </video>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>
<!--main-view end-->

<!--Nav bar start-->
<div class="container-fluid" >
  <div class="row">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="nav-outer">
      <a class="navbar-brand " ><img src="https://www.agrofarmflow.com/uploads-ssl.webflow.com/5e5717f4fa858f1cafb8c9cc/5e59a0c0a67bd6d170e34c37_FarmFundrLogo-01.png" alt="" ></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Our Products
                </a>
                <div class="dropdown-menu" aria-labelledby="servicesDropdown">
                    <a class="dropdown-item" href="#">Vegetables Seeds</a>
                    <a class="dropdown-item" href="#">Flower Seeds</a>
                    <a class="dropdown-item" href="#">Agro Chemicals</a>
                    <a class="dropdown-item" href="#">Agri Equipments</a>
                </div>
            </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</div>

<!--nav bar end-->

<!--Register box Start-->

<selection>
  <div class="registration-box">
      <?php
      if (isset($_POST["submit"])) {
          $firstName = $_POST["firstname"];
          $lastName = $_POST["lastname"];
          $email = $_POST["email"];
          $password = $_POST["password"];
          $passwordRepeat = $_POST["repeat_password"];

          $passwordHash = password_hash($password, PASSWORD_DEFAULT);

          $errors = array();

          if (empty($firstName) OR empty($lastName) OR empty($email) OR empty($password) OR empty($passwordRepeat)) {
              array_push($errors,"All fields are required");
          }
          if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              array_push($errors, "Email is not valid");
          }
          if (strlen($password)<4) {
              array_push($errors,"Password must be at least 8 charactes long");
          }
          if ($password!==$passwordRepeat) {
              array_push($errors,"Password does not match");
          }
          require_once "connection.php";
          $sql = "SELECT * FROM farmers WHERE email = '$email'";
          $result = mysqli_query($conn, $sql);
          $rowCount = mysqli_num_rows($result);
          if ($rowCount>0) {
              array_push($errors,"Email already exists!");
          }
          if (count($errors)>0) {
              foreach ($errors as  $error) {
                  echo "<div class='alert alert-danger'>$error</div>";
              }
          }else{

              $sql = "INSERT INTO farmers (frist_name, last_name, email, password) VALUES ( ?, ?, ?, ? )";
              $stmt = mysqli_stmt_init($conn);
              $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
              if ($prepareStmt) {
                  mysqli_stmt_bind_param($stmt,"ssss",$firstName, $lastName,  $email, $passwordHash);
                  mysqli_stmt_execute($stmt);

                  echo "<div class='alert alert-success'>You are registered successfully.</div>";
              }else{
                  die("Something went wrong");
              }
          }


      }
      ?>
    <form action="register.php" method="post">
      <h1>Register</h1>

      <div class="input-box">
        <input type="text" name="firstname" required>
        <label>First Name</label>
      </div>

      <div class="input-box">
        <input type="text" name="lastname" required>
        <label>Last Name</label>
      </div>

      <div class="input-box">
        <input type="email" name="email" required>
        <label>Email</label>
      </div>


      <div class="input-box">
        <input type="password" name="password" required>
        <label>Password</label>
      </div>

      <div class="input-box">
        <input type="password" name="repeat_password" required>
        <label>Re-Enter Password</label>
      </div>



      <button type="submit" name="submit">Register</button>
      <div class="Regiter-Link">
        <p>Are you already registerd ? <a href="login.php"> Login</a></p>

      </div>

    </form>
  </div>
</selection>

<!--Register Box end-->

<!--footer start-->

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <footer class="footer">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <h4>Contact Us </h4>
              <p>Email: <a href="agrofarmflow@gmail.com"> agrofarmflow@gmail.com</a> </p>
              <p>Phone: <a href="0767668187"> 076 766 8187</a></p>
              <img src="https://www.agrofarmflow.com/uploads-ssl.webflow.com/5e5717f4fa858f1cafb8c9cc/5e59a0c0a67bd6d170e34c37_FarmFundrLogo-01.png" alt="" >
            </div>
            <div class="col-md-4">
              <h4>Quick Links</h4>
              <ul class="list-unstyled">
                <li><a href="index.php"><i class="fa-solid fa-house fa-xl" style="color: #ffffff;"></i>Home</a></li>
                <li><a href="about.php"><i class="fa-solid fa-globe fa-xl  " style="color: #ffffff;"></i>About</a></li>
                <li><a href="#"><i class="fa-regular fa-gear fa-xl" style="color: #ffffff;"></i>Services</a></li>
                <li><a href="contact.php"><i class="fa-solid fa-address-book fa-xl" style="color: #ffffff;"></i>Contact</a></li>
              </ul>
            </div>
            <div class="col-md-4">
              <h4>Follow Us</h4>
              <a href="#"><i class="fa-brands fa-facebook fa-beat fa-2xl" style="color: #045df6;"></i></a>
              <a href="#"><i class="fa-brands fa-twitter fa-flip fa-2xl" style="color: #00ccff;"></i></a>
              <a href="#"><i class="fa-brands fa-linkedin fa-bounce fa-2xl" style="color: #3e69b1;"></i></a>
            </div>
          </div>
          <div class="container" id="copyright">
            <div class="row">
              <div class="col-md-6" align="right" >
                <p>&copy; 2023 All rights reserved. Kavindu Indumina Web Development Company</p>
              </div>
              <div class="col-md-6 text-md-right" align="left">
                <p>Terms of Service | Privacy Policy</p>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
</div>

<!--footer end-->


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/51babe4472.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>