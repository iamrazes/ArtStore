<?php
include_once 'header.php'
?>

<main class="bg-dark">

  <!--Carousel-->
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="assets/img/image/carousel/crs01.jpg" class="d-block show-image" />
        <div class="container">
          <div class="carousel-caption text-start">
            <h1 id="shadow">Masterpieces.</h1>
            <p id="shadow">
              Some representative placeholder content for the first slide of
              the carousel.
            </p>
            <p>
              <a class="btn btn-lg btn-warning" href="signup.php">Sign up today</a>
            </p>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <img src="assets/img/image/carousel/crs02.jpg" class="d-block show-image bd-placeholder-img " />
        <div class="container">
          <div class="carousel-caption">
            <h1 id="shadow">Another example headline.</h1>
            <p id="shadow">
              Some representative placeholder content for the second slide
              of the carousel.
            </p>
            <p>
              <a class="btn btn-lg btn-warning" href="about.php">Learn more</a>
            </p>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <img src="assets/img/image/carousel/crs03.jpg" class="d-block show-image" />
        <div class="container">
          <div class="carousel-caption text-end">
            <h1 id="shadow">Gorgeous Collection.</h1>
            <p id="shadow">
              Some representative placeholder content for the third slide of
              this carousel.
            </p>
            <p>
              <a class="btn btn-lg btn-warning" href="gallery.php">Browse gallery</a>
            </p>
          </div>
        </div>
      </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="visually-hidden">Next</span>
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </button>
  </div>

  <!--Jumbotron-->

  <div class="container py-4">
    <div class="p-5 mb-4 rounded-3" id="shadow" style="background-image: url(assets/img/image/jumbo/jumbo1.jpg); background-size: 100%">
      <div class="container-fluid py-5 text-light">
        <h1 class="display-5 fw-bold">Thousand of Masterpieces</h1>
        <p class="col-md-8 fs-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <a href="about.php"><button class="btn btn-warning btn-lg" type="button">Learn More</button></a>
      </div>
    </div>

    <div class="row align-items-md-stretch">
      <div class="col-md-6">
        <div class="h-100 p-5 text-white bg-dark rounded-3" id="shadow" style="background-image: url(assets/img/image/jumbo/jumbo2.jpg); background-size: 100%">
          <h2>Become a Seller</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <a href="signup.php"><button class="btn btn-outline-light" type="button">Sign Up</button></a>
        </div>
      </div>
      <div class="col-md-6">
        <div class="h-100 p-5 text-white bg-dark rounded-3" id="shadow" style="background-image: url(assets/img/image/jumbo/jumbo3.jpg); background-size: 100%">
          <h2>Check our Collections</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <a href="gallery.php"><button class="btn btn-outline-light" type="button">Gallery</button></a>
        </div>
      </div>
    </div>

</main>

<?php
include_once 'footer.php'
?>