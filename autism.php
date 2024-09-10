<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: ./auth/login.html");
    exit();
}

$name = $_SESSION['name'];
$email = $_SESSION['email'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/adhd.css">
    <link rel="stylesheet" href="./css/style.css">


    <!-- Favicon -->
    <link rel="icon" href="./img/logo.png" type="image/png">

    <!-- Google Web Fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Autism Game</title>
</head>

<body>



    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0 align-items-center" style="height: 45px;">
            <div class="col-lg-8 text-center text-lg-start mb-lg-0">
                <div class="d-flex flex-wrap">
                    <!-- <a href="#" class="text-light me-4"><i class="fas fa-map-marker-alt text-primary me-2"></i>Find A Location</a> -->
                    <a href="#" class="text-light me-4"><i class="fas fa-phone-alt text-primary me-2"></i>+01234567890</a>
                    <a href="#" class="text-light me-0"><i class="fas fa-envelope text-primary me-2"></i>Example@gmail.com</a>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-flex align-items-center justify-content-end">
                    <!-- Search Form -->
                    <form id="searchForm" class="search-form me-3" onsubmit="return false;">
                        <input type="text" id="searchInput" placeholder="Search...">
                        <button type="button" onclick="searchSite()">
                            <!-- Search icon SVG -->
                            <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="7" cy="7" r="5" stroke="#000" stroke-width="2" />
                                <line x1="11" y1="11" x2="15" y2="15" stroke="#000" stroke-width="2" />
                            </svg>
                        </button>
                    </form>
                    <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="btn btn-light btn-square border rounded-circle nav-fill me-0"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->
    <script src="search.js"></script>


    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
            <a href="index.php" class="navbar-brand p-0">
                <h1 class="text-primary m-0">
                    <img src="./img/logo.png" alt="Logo" class="logo">
                    <!-- <i class="fas fa-star-of-life me-3"></i> -->
                    Mind Matter
                </h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="#about" class="nav-item nav-link">About</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Lifestyle</a>
                        <div class="dropdown-menu m-0">
                            <a href="appointment.html" class="dropdown-item">Personality Quiz</a>
                            <a href="feature.html" class="dropdown-item">Career Test</a>
                            <a href="blog.html" class="dropdown-item">Stress Test</a>
                            <a href="team.html" class="dropdown-item">Lonliness Quiz</a>
                        </div>
                    </div>
                    <a href="#blog" class="nav-item nav-link">Articles</a>
                    <a href="testimonial.html" class="nav-item nav-link">Testimonials</a>
                    <a href="contact.html" class="nav-item nav-link">Contact Us</a>
                </div>
                <a href="appointment.html" target="_blank" class="btn btn-primary rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0">Book Appointment</a>
            </div>
        </nav>
    </div>


    <div class="card-container">
        <div class="card">
            <img src="./img/scenario.jpg" alt="Autism Image">
            <h2><br>Social Scenario</h2>
            <p class="simon-text">The Social Scenario Game sharpens social skills by immersing users in real-life situations, offering instant feedback
                and highlighting areas for improvement. It’s a powerful tool for those with autism, helping them navigate social interactions and
                potentially guiding them toward professional support.</p>
            <a href="./games/autism game/scenario.html" target="_blank" class="play-game">Play Game</a>
        </div>

        <div class="card">
            <img src="./img/facrec.png" alt="Autism Image">
            <h2><br>Expression Recognition</h2>
            <p class="mem-text">The game presents images of people displaying various facial expressions. The player identify the emotion
                displayed by selecting .Since individuals with autism may struggle with recognizing and interpreting facial expressions,
                the game tracks the player's responses.</p>
            <a href="./games/autism game/facerecog.html" target="_blank" class="play-game">Play Game</a>
        </div>
    </div>


    <!-- Footer Start -->
    <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="text-white mb-4"><i class="fas fa-star-of-life me-3"></i>Mind Matter</h4>
                        <p>Your go-to destination for engaging in insightful mental health games.We believe that assessing mental
                            health can be both informative and fun!
                        </p>
                        <!-- <div class="d-flex align-items-center">
                                <i class="fas fa-share fa-2x text-white me-2"></i>
                                <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div> -->
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="mb-4 text-white">Quick Links</h4>
                        <a href="#about"><i class="fas fa-angle-right me-2"></i> About Us</a>
                        <a href="contact.html"><i class="fas fa-angle-right me-2"></i> Contact Us</a>
                        <a href="appointment.html"><i class="fas fa-angle-right me-2"></i> Book Appointment</a>
                        <a href="#blog"><i class="fas fa-angle-right me-2"></i> Our Blog & News</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="mb-4 text-white">Our Services</h4>
                        <a href=""><i class="fas fa-angle-right me-2"></i> LifeStyle Related</a>
                        <a href=""><i class="fas fa-angle-right me-2"></i> Conditions Related</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <div class="footer-item d-flex flex-column">
                        <h4 class="mb-4 text-white">Contact Info</h4>
                        <a href=""><i class="fa fa-map-marker-alt me-2"></i> 123 Street, New York, USA</a>
                        <a href=""><i class="fas fa-envelope me-2"></i> mindmattergmail.com</a>
                        <a href=""><i class="fas fa-envelope me-2"></i> support@gmail.com</a>
                        <a href=""><i class="fas fa-phone me-2"></i> +012 345 67890</a>
                        <a href="" class="mb-3"><i class="fas fa-print me-2"></i> +012 345 67890</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-6 text-center text-md-start mb-md-0">
                    <span class="text-white"><a href="#"><i class="fas fa-copyright text-light me-2"></i>Mind Matter</a> All rights reserved.</span>
                </div>
                <!-- <div class="col-md-6 text-center text-md-end text-white"> -->
                <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                <!-- Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a class="border-bottom" href="https://themewagon.com">ThemeWagon</a> -->
                <!-- </div> -->
            </div>
        </div>
    </div>
    <!-- Copyright End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <!-- Template Javascript -->
    <script src="./js/main.js"></script>

</body>

</html>