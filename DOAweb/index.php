<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DOA Department of Agriculture</title>
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .typing-container {
            text-align: center;
            padding: 20px;
        }

        .typing-text {
            font-size: 24px;
            overflow: hidden;
            white-space: nowrap;
            border-right: 3px solid #333;
            animation: typing 6s steps(40) infinite;
            color: white;
            font-size: 25px;
            font-weight: bold;
        }

        @keyframes typing {
            0% {
                width: 0;
            }
            100% {
                width: 100%;
            }
        }
    </style>

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
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
</div>
<!--nav bar end-->



<!--Slide show start-->

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators (optional) -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!--Heading start-->
    <section id="hero">
        <h1>Welcome to the Agrofarmflow Eco-Farming Web Application</h1>
    </section>
    <!--Heading end-->

    <!-- Slides -->
    <div class="carousel-inner">
        <div class="search-container">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <form class="form-inline">
                            <div class="form-group mx-sm-3">
                                <input type="text" class="form-control" id="custom-search" placeholder="Hi!  what you want 'Search' here">
                            </div>
                            <button type="submit" class="btn btn-primary">Search</button>
                        </form>

                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 offset-md-3 typing-container">
                                    <p class="typing-text">Are you new user? please register first... </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item active">
            <img src="https://images.pexels.com/photos/68590/pexels-photo-68590.jpeg?auto=compress&cs=tinysrgb&w=1600" alt="Image 1">
        </div>
        <div class="carousel-item">
            <img src="https://images.pexels.com/photos/128402/pexels-photo-128402.jpeg?auto=compress&cs=tinysrgb&w=1600" alt="Image 2">
        </div>
        <div class="carousel-item">
            <img src="https://images.pexels.com/photos/39511/purple-grapes-vineyard-napa-valley-napa-vineyard-39511.jpeg?auto=compress&cs=tinysrgb&w=1600" alt="Image 3">
        </div>

    </div>
</div>
<!--Slide show end-->



<!--main article start-->

<div class="card mb-3">
    <img src="https://images.pexels.com/photos/5808/food-healthy-vegetables-village.jpg?auto=compress&cs=tinysrgb&w=1600" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Welcome To Agrofarmflow Holdings (Pvt) Ltd</h5>
        <p class="card-text">Agrofarm Holdings (Pvt) Ltd presents a comprehensive range of agriculture inputs, covering different types of fertilizer mixtures, high quality seeds, Eco friendly chemical, Organic Animal feed additives, Organic liquid fertilizer and Agri equipments.
            One of the key strengths of our company is the ability to import from globally accepted suppliers who possess an excellent record in terms of their product of qualities, services & corporate social responsibilities.
            Through a team of qualified and committed work force, Agrofarm Holdings (Pvt) Ltd is ready to take on new challenges and reach greater heights in the coming years, presenting a comprehensive range of high quality seeds, eco friendly fertilizer, eco friendly veterinary Products and profitable harvesting equipments.</p>
        <p class="card-text"><small class="text-body-secondary">Last updated 1 month ago</small></p>
    </div>
</div>



<!--main article end-->



<!--Card view Start-->








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
                                <li><a href="index.html"><i class="fa-solid fa-house fa-xl" style="color: #ffffff;"></i>Home</a></li>
                                <li><a href="about.php"><i class="fa-solid fa-globe fa-xl  " style="color: #ffffff;"></i>About</a></li>
                                <li><a href="#"><i class="fa-regular fa-gear fa-xl" style="color: #ffffff;"></i> Services</a></li>
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
<script src="script/main.js"></script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/6508c0eb0f2b18434fd93dd4/1hal336df';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->
</body>
</html>