<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: form.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
    crossorigin="anonymous"
  />
  <title>Fashion Sneak</title>

  <style>
    body {
      background-image: url("images/backgroundd.jpg");
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
    }
  </style>

</head>
<body class="bg-dark">
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand ms-5" href="#">
        <img
          src="images/fashionn.png"
          alt=" "
          style="max-width: 150px; height: 100px; border-radius: 50%;"
        />
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarTogglerDemo02"
        aria-controls="navbarTogglerDemo02"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0 justify-content-center">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="product.php">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
        </ul>
        <form class="d-flex">
          <a href="logout.php" class="btn btn-outline-warning me-2">
            Logout
          </a>
        </form>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row">
      <div class="col mb-5">
        <h1 class="text-light display-4 fw-bolder my-5">Elevate Your Style with Fashion Sneak's Trendsetting Footwear</h1>
        <h3 class="text-light lh-base">Step into the world of Fashion Sneak</h3>
        <h3 class="text-light lh-base mb-5">and discover the perfect blend of fashion-forward designs and unbeatable comfort.</h3>
        <button type="button" class="btn btn-outline-warning active btn-lg me-4">Order Now</button>
        <button type="button" class="btn btn-outline-warning btn-lg">Learn About Us</button>
      </div>
      <div class="col">
      </div>
    </div>
    <style>
      .col h3 {
        font-style: italic;
      }
    </style>
    <div class="border border-primary p-3 border-warning" style="background-color: black;">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" style="width: 60%; margin: auto;">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/shoee1.jpg" class="d-block mx-auto" style="width: 75%; height: 75%;" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Sneaker Trends: What's Hot on Your Feet</h5>
              <p> Stay ahead of the fashion curve with our guide to the latest sneaker trends. </p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/shoee2.jpg" class="d-block mx-auto" style="width: 75%; height: 75%;" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Step into Style: The Evolution of Sneakers</h5>
              <p>Explore the fascinating journey of sneakers, from their humble beginnings as simple canvas shoes to their status as icons of fashion and culture today. </p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/shoee3.jpg" class="d-block mx-auto" style="width: 75%; height: 75%;" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Sneakerhead Essentials: Building Your Collection</h5>
              <p>Calling all sneaker enthusiasts! Dive into the world of sneaker collecting and learn how to curate the ultimate lineup of kicks. </p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    
  <script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"
  ></script>
</body>
</html>
