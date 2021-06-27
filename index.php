<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Bootstrap 5 -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/headers.css" />
  <link rel="stylesheet" href="assets/css/carousel.css" />
  <link rel="stylesheet" href="assets/css/footer.css">
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel="stylesheet" href="assets/css/shop.css">
  <link rel="stylesheet" href="assets/css/map.css">
  <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/icons/favicon.ico">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


  <title>ArtStore | Buy High Quality Arts</title>
</head>

<body>

  <header>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <div class="container-fluid">
        <div class="container">
          <div class="
                d-flex
                flex-wrap
                align-items-center
                justify-content-center justify-content-lg-start
              ">
            <a href="index.php" class="
                  d-flex
                  align-items-center
                  mb-2 mb-lg-0
                  text-white text-decoration-none
                ">
              <img class="bi me-2" width="33" height="33" src="assets/img/icons/logo.png">
            </a>
            <ul class="
                  nav
                  col-12 col-lg-auto
                  me-lg-auto
                  mb-2
                  justify-content-center
                  mb-md-0
                ">
              <li>
                <a href="index.php" class="nav-link px-2 text-white">Home</a>
              </li>
              <li>
                <a href="pages/shop/" class="nav-link px-2 text-white">Shop</a>
              </li>
              <li>
                <a href="pages/gallery/" class="nav-link px-2 text-white">Gallery</a>
              </li>
              <li>
                <a href="pages/contact/" class="nav-link px-2 text-white">Contact</a>
              </li>
              <li>
                <a href="pages/about/" class="nav-link px-2 text-white">About</a>
              </li>
            </ul>
            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
              <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search" />
            </form>
            <div class="text-end">
              <?php
              if (isset($_SESSION['email']) && isset($_SESSION['password'])) {
                echo '<a href="./includes/logout.php" type="button" class="btn btn-warning me-2">Logout</a>
                <a href="./pages/profile/" type="button" class="btn btn-outline-light "><li class="fa fa-user"></li></a>';
              } else {
                echo '<a href="pages/login/" type="button" class="btn btn-outline-light me-2">Login</a>
                  <a href="pages/signup/" type="button" class="btn btn-warning">Sign-up</a>';
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>

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
                <a class="btn btn-lg btn-warning" href="pages/about/">Learn more</a>
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
                <a class="btn btn-lg btn-warning" href="pages/gallery/">Browse gallery</a>
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

    <!-- Responsive left-aligned hero with image -->
    <div class="container py-4">
      <div class="row flex-lg-row-reverse align-items-center g-5 py-5 pb-1 pt-1">
        <div class="col-10 col-sm-8 col-lg-6">
          <img src="assets/img/image/carousel/crs02.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
        </div>
        <div class="col-lg-6">
          <h1 class="display-5 fw-bold lh-1 mb-3 pb-1 text-white ">Produced by amazing artist around the globe</h1>
          <p class="lead text-white">Lorem ipsum dolor sit amet consectetur adipiscing elit fusce, aptent est egestas enim dictum justo sodales nunc, cum sociis nam pharetra himenaeos mattis convallis.</p>
          <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            <a href="pages/shop/"><button type="button" class="btn btn-warning btn-lg px-4 me-md-2">Go to Shopping</button></a>
            <a href="pages/gallery/"><button type="button" class="btn btn-outline-light btn-lg px-4">Gallery</button></a>
          </div>
        </div>
      </div>
    </div>

    <!-- Features -->
    <div class="container px-4 py-5 pt-1" id="hanging-icons">
      <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
        <div class="col d-flex align-items-start">
          <div class="icon-square bg-light text-dark flex-shrink-0 me-3 ">
            <svg class="bi" width="1em" height="1em">
              <use xlink:href="#toggles2" />
            </svg>
          </div>
          <div>
            <h2 class="text-white">Print</h2 class="text-white">
            <p class="text-white">Lorem ipsum dolor sit amet consectetur adipiscing, elit aliquam quisque dui inceptos per, habitasse in dictumst tristique vehicula.</p>
            <a href="#" class="btn btn-warning">Learn More</a>
            </a>
          </div>
        </div>
        <div class="col d-flex align-items-start">
          <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
            <svg class="bi" width="1em" height="1em">
              <use xlink:href="#cpu-fill" />
            </svg>
          </div>
          <div>
            <h2 class="text-white">NFT</h2 class="text-white">
            <p class="text-white">Lorem ipsum dolor sit amet consectetur adipiscing, elit aliquam quisque dui inceptos per, habitasse in dictumst tristique vehicula.</p>
            <a href="#" class="btn btn-warning">Learn More</a>
            </a>
          </div>
        </div>
        <div class="col d-flex align-items-start">
          <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
            <svg class="bi" width="1em" height="1em">
              <use xlink:href="#tools" />
            </svg>
          </div>
          <div>
            <h2 class="text-white">Merchandise</h2 class="text-white">
            <p class="text-white">Lorem ipsum dolor sit amet consectetur adipiscing, elit aliquam quisque dui inceptos per, habitasse in dictumst tristique vehicula.</p>
            <a href="#" class="btn btn-warning">Learn More</a>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Custom Cards : NEED TO BE UPDATED-->
    <div class="container px-4 py-5 pb-1" id="custom-cards">
      <h2 class="text-white" class="pb-2 text-white">Recent Product</h2 class="text-white">

      <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-2">
        <div class="col" style="height:450px">
          <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('admin/pages/products/uploads/product01.jpg');">
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
              <h2 class="text-white" class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Bandit</h2 class="text-white">
              <ul class="d-flex list-unstyled mt-auto">
                <li class="me-auto">
                  <img src="assets/img/icons/logo.png" alt="Bootstrap" width="32" height="32" class="rounded-circle">
                </li>
                <li class="d-flex align-items-center me-3">
                  <svg class="bi me-2" width="1em" height="1em">
                    <use xlink:href="#geo-fill" />
                  </svg>
                  <small>Guweiz</small>
                </li>
                <li class="d-flex align-items-center">
                  <svg class="bi me-2" width="1em" height="1em">
                    <use xlink:href="#calendar3" />
                  </svg>
                  <small>3d</small>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" width="100" height="400" style="background-image: url('admin/pages/products/uploads/product02.jpeg');">
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
              <h2 class="text-white" class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Pyon</h2 class="text-white">
              <ul class="d-flex list-unstyled mt-auto">
                <li class="me-auto">
                  <img src="assets/img/icons/logo.png" alt="Bootstrap" width="32" height="32" class="rounded-circle">
                </li>
                <li class="d-flex align-items-center me-3">
                  <svg class="bi me-2" width="1em" height="1em">
                    <use xlink:href="#geo-fill" />
                  </svg>
                  <small>먈</small>
                </li>
                <li class="d-flex align-items-center">
                  <svg class="bi me-2" width="1em" height="1em">
                    <use xlink:href="#calendar3" />
                  </svg>
                  <small>4d</small>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('admin/pages/products/uploads/product03.jpg');">
            <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
              <h2 class="text-white" class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Makima</h2 class="text-white">
              <ul class="d-flex list-unstyled mt-auto">
                <li class="me-auto">
                  <img src="assets/img/icons/logo.png" alt="Bootstrap" width="32" height="32" class="rounded-circle ">
                </li>
                <li class="d-flex align-items-center me-3">
                  <svg class="bi me-2" width="1em" height="1em">
                    <use xlink:href="#geo-fill" />
                  </svg>
                  <small>Neg</small>
                </li>
                <li class="d-flex align-items-center">
                  <svg class="bi me-2" width="1em" height="1em">
                    <use xlink:href="#calendar3" />
                  </svg>
                  <small>5d</small>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--Jumbotron-->
    <div class="container py-4">
      <div class="p-5 mb-4 rounded-3" id="shadow" style="background-image: url(assets/img/image/jumbo/jumbo1.jpg); background-size: 100%">
        <div class="container-fluid py-5 text-light">
          <h1 class="display-5 fw-bold">Thousand of Masterpieces</h1>
          <p class="col-md-8 fs-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <a href="pages/about/"><button class="btn btn-warning btn-lg" type="button">Learn More</button></a>
        </div>
      </div>

      <div class="row align-items-md-stretch">
        <div class="col-md-6">
          <div class="h-100 p-5 text-white bg-dark rounded-3" id="shadow" style="background-image: url(assets/img/image/jumbo/jumbo2.jpg); background-size: 100%">
            <h2 class="text-white">Become a Seller</h2 class="text-white">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <a href="signup.php"><button class="btn btn-outline-light" type="button">Sign Up</button></a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="h-100 p-5 text-white bg-dark rounded-3" id="shadow" style="background-image: url(assets/img/image/jumbo/jumbo3.jpg); background-size: 100%">
            <h2 class="text-white">Check our Collections ganteng</h2 class="text-white">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <a href="pages/gallery/"><button class="btn btn-outline-light" type="button">Gallery</button></a>
          </div>
        </div>
      </div>
    </div>


  </main>

  <footer class="bg-dark" id="footer">
    <div class="container">
      <div class="row">

        <div class="col-md-4 pt-5">
          <h2 class="text-white" class="h2 class=" text-white" text-warning border-bottom pb-3 border-light logo">ARTSTORE</h2 class="text-white">
          <ul class="list-unstyled text-light footer-link-list">
            <li>
              <i class="fa fa-map-marker fa-fw"></i>
              Jl. Sindanglaya
            </li>
            <li>
              <i class="fa fa-phone fa-fw"></i>
              <a class="text-decoration-none" href="tel:0895-6359-03620">0895-6359-03620</a>
            </li>
            <li>
              <i class="fa fa-envelope fa-fw"></i>
              <a class="text-decoration-none" href="mailto:mochrazesds@gmail.com">mochrazesds@gmail.com</a>
            </li>
          </ul>
        </div>

        <div class="col-md-4 pt-5">
          <h2 class="text-white" class="h2 class=" text-white" text-light border-bottom pb-3 border-light">Products</h2 class="text-white">
          <ul class="list-unstyled text-light footer-link-list">
            <li><a class="text-decoration-none" href="pages/shop/">Prints</a></li>
            <li><a class="text-decoration-none" href="pages/shop/">NFT's</a></li>
            <li><a class="text-decoration-none" href="pages/shop/">Accesories</a></li>
            <li><a class="text-decoration-none" href="pages/shop/">Souvenir</a></li>
            <li><a class="text-decoration-none" href="pages/shop/">Gifts</a></li>
          </ul>
        </div>

        <div class="col-md-4 pt-5">
          <h2 class="text-white" class="h2 class=" text-white" text-light border-bottom pb-3 border-light">Further Info</h2 class="text-white">
          <ul class="list-unstyled text-light footer-link-list">
            <li><a class="text-decoration-none" href="index.php">Home</a></li>
            <li><a class="text-decoration-none" href="pages/about/">About Us</a></li>
            <li><a class="text-decoration-none" href="pages/contact/">Shop Locations</a></li>
            <li><a class="text-decoration-none" href="pages/contact/">FAQs</a></li>
            <li><a class="text-decoration-none" href="pages/contact/">Contact</a></li>
          </ul>
        </div>

      </div>

      <div class="row text-light mb-4">
        <div class="col-12 mb-3">
          <div class="w-100 my-3 border-top border-light"></div>
        </div>
        <div class="col-auto me-auto">
          <ul class="list-inline text-left footer-icons">
            <li class="list-inline-item border border-light rounded-circle text-center">
              <a class="text-light text-decoration-none" target="_blank" href="http://facebook.com/"><i class="fa fa-facebook fa-lg"></i></a>
            </li>
            <li class="list-inline-item border border-light rounded-circle text-center">
              <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/"><i class="fa fa-instagram fa-lg fa-fw"></i></a>
            </li>
            <li class="list-inline-item border border-light rounded-circle text-center">
              <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/"><i class="fa fa-twitter fa-lg fa-fw"></i></a>
            </li>
            <li class="list-inline-item border border-light rounded-circle text-center">
              <a class="text-light text-decoration-none" target="_blank" href="https://www.linkedin.com/"><i class="fa fa-linkedin fa-lg fa-fw"></i></a>
            </li>
          </ul>
        </div>
        <div class="col-auto">
          <label class="sr-only" for="subscribeEmail"></label>
          <div class="input-group mb-2">
            <input type="text" class="form-control bg-dark border-light text-white" id="subscribeEmail" placeholder="Email address">
            <div class="input-group-text btn-warning">Subscribe</div>
          </div>
        </div>
      </div>
    </div>

    <div class="w-100 bg-dark py-3">
      <div class="container">
        <div class="row pt-2">
          <div class="col-12">
            <p class="text-left text-light">
              Copyright &copy; 2021 ArtStore
              | Designed by <a rel="sponsored" href="" target="_blank"></a>Muhammad Dagistan Silawane</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://unpkg.com/@popperjs/core@2.4.0/dist/umd/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>