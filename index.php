<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--Bootstrap 5-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/headers.css" />
    <link rel="stylesheet" href="assets/css/carousel.css" />
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/icons/favicon.ico">

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">

    <title>ArtStore | Buy High Quality Arts</title>
  </head>
  <body>
    <!--Header-->
    <header>
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container-fluid">
          <div class="container">
            <div
              class="
                d-flex
                flex-wrap
                align-items-center
                justify-content-center justify-content-lg-start
              "
            >
              <a
                href="index.php"
                class="
                  d-flex
                  align-items-center
                  mb-2 mb-lg-0
                  text-white text-decoration-none
                "
              >
                <img 
                class="bi me-2"
                width="33"
                height="33"
                src="assets/img/icons/logo.png">
              </a>
              <ul
                class="
                  nav
                  col-12 col-lg-auto
                  me-lg-auto
                  mb-2
                  justify-content-center
                  mb-md-0
                "
              >
                <li>
                  <a href="index.php" class="nav-link px-2 text-white"
                    >Home</a
                  >
                </li>
                <li>
                  <a href="shop.html" class="nav-link px-2 text-white">Shop</a>
                </li>
                <li>
                  <a href="gallery.html" class="nav-link px-2 text-white"
                    >Gallery</a
                  >
                </li>
                <li>
                  <a href="contact.html" class="nav-link px-2 text-white"
                    >Contact</a
                  >
                </li>
                <li>
                  <a href="about.html" class="nav-link px-2 text-white"
                    >About</a
                  >
                </li>
              </ul>
              <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                <input
                  type="search"
                  class="form-control form-control-dark"
                  placeholder="Search..."
                  aria-label="Search"
                />
              </form>
              <div class="text-end">
                <a
                  href="signin.html"
                  type="button"
                  class="btn btn-outline-light me-2"
                  >Login</a
                >
                <a href="signup.html" type="button" class="btn btn-warning"
                  >Sign-up</a
                >
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
          <button
            type="button"
            data-bs-target="#myCarousel"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#myCarousel"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
          <button
            type="button"
            data-bs-target="#myCarousel"
            data-bs-slide-to="2"
            aria-label="Slide 3"
          ></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/img/crs01.jpg" class="d-block show-image" />
            <svg
              class="bd-placeholder-img"
              width="100%"
              height="100%"
              xmlns="http://www.w3.org/2000/svg"
              aria-hidden="true"
              preserveAspectRatio="xMidYMid slice"
              focusable="false"
            >
              <rect width="100%" height="100%" fill="#777" />
            </svg>
            <div class="container">
              <div class="carousel-caption text-start">
                <h1>Masterpieces.</h1>
                <p>
                  Some representative placeholder content for the first slide of
                  the carousel.
                </p>
                <p>
                  <a class="btn btn-lg btn-warning" href="signup.html"
                    >Sign up today</a
                  >
                </p>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <img src="assets/img/crs03.jpg" class="d-block show-image" />
            <svg
              class="bd-placeholder-img"
              width="100%"
              height="100%"
              xmlns="http://www.w3.org/2000/svg"
              aria-hidden="true"
              preserveAspectRatio="xMidYMid slice"
              focusable="false"
            >
              <rect width="100%" height="100%" fill="#777" />
            </svg>
            <div class="container">
              <div class="carousel-caption">
                <h1>Another example headline.</h1>
                <p>
                  Some representative placeholder content for the second slide
                  of the carousel.
                </p>
                <p>
                  <a class="btn btn-lg btn-warning" href="about.html"
                    >Learn more</a
                  >
                </p>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <img src="assets/img/crs02.jpg" class="d-block show-image" />
            <svg
              class="bd-placeholder-img"
              width="100%"
              height="100%"
              xmlns="http://www.w3.org/2000/svg"
              aria-hidden="true"
              preserveAspectRatio="xMidYMid slice"
              focusable="false"
            >
              <rect width="100%" height="100%" fill="#777" />
            </svg>
            <div class="container">
              <div class="carousel-caption text-end">
                <h1>Gorgeous Collection.</h1>
                <p>
                  Some representative placeholder content for the third slide of
                  this carousel.
                </p>
                <p>
                  <a class="btn btn-lg btn-warning" href="gallery.html"
                    >Browse gallery</a
                  >
                </p>
              </div>
            </div>
          </div>
        </div>

        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#myCarousel"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#myCarousel"
          data-bs-slide="next"
        >
          <span class="visually-hidden">Next</span>
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
      </div>

  <!--Jumbotron-->

  <div class="container py-4">    
     <div class="p-5 mb-4 rounded-3" id="shadow" style="background-image: url(assets/img/image/jumbo1.jpg); background-size: 100%">
      <div class="container-fluid py-5 text-light">
        <h1 class="display-5 fw-bold">Thousand of Masterpieces</h1>
        <p class="col-md-8 fs-4">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
        <a href="about.html"><button class="btn btn-warning btn-lg" type="button">Learn More</button></a>
      </div>
    </div>

    <div class="row align-items-md-stretch">
      <div class="col-md-6">
        <div class="h-100 p-5 text-white bg-dark rounded-3" id="shadow" style="background-image: url(assets/img/image/jumbo2.jpg); background-size: 100%">
          <h2>Become a Seller</h2>
          <p>Swap the background-color utility and add a `.text-*` color utility to mix up the jumbotron look. Then, mix and match with additional component themes and more.</p>
          <a href="signup.html"><button class="btn btn-outline-light" type="button">Sign Up</button></a>
        </div>
      </div>  
      <div class="col-md-6">
        <div class="h-100 p-5 text-white bg-dark rounded-3" id="shadow" style="background-image: url(assets/img/image/jumbo3.jpg); background-size: 100%">
          <h2>Check our Collection</h2>
          <p>Swap the background-color utility and add a `.text-*` color utility to mix up the jumbotron look. Then, mix and match with additional component themes and more.</p>
          <a href="gallery.html"><button class="btn btn-outline-light" type="button">Gallery</button></a>
        </div>
      </div>
  </div>

</main>

<!--Footer-->
      <footer class="bg-dark" id="footer">
          <div class="container">
              <div class="row">
  
                  <div class="col-md-4 pt-5">
                      <h2 class="h2 text-warning border-bottom pb-3 border-light logo">ARTSTORE</h2>
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
                      <h2 class="h2 text-light border-bottom pb-3 border-light">Products</h2>
                      <ul class="list-unstyled text-light footer-link-list">
                          <li><a class="text-decoration-none" href="shop.html">Prints</a></li>
                          <li><a class="text-decoration-none" href="shop.html">NFT's</a></li>
                          <li><a class="text-decoration-none" href="shop.html">Accesories</a></li>
                          <li><a class="text-decoration-none" href="shop.html">Souvenir</a></li>  
                          <li><a class="text-decoration-none" href="shop.html">Gifts</a></li>
                      </ul>
                  </div>
  
                  <div class="col-md-4 pt-5">
                      <h2 class="h2 text-light border-bottom pb-3 border-light">Further Info</h2>
                      <ul class="list-unstyled text-light footer-link-list">
                          <li><a class="text-decoration-none" href="index.php">Home</a></li>
                          <li><a class="text-decoration-none" href="about.html">About Us</a></li>
                          <li><a class="text-decoration-none" href="contact.html">Shop Locations</a></li>
                          <li><a class="text-decoration-none" href="contact.html">FAQs</a></li>
                          <li><a class="text-decoration-none" href="contact.html">Contact</a></li>
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
                              <a class="text-light text-decoration-none" target="_blank" href="http://facebook.com/"><i class="fa fa-facebook fa-lg fa-fw"></i></a>
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
                          <input type="text" class="form-control bg-dark border-light" id="subscribeEmail" placeholder="Email address">
                          <a href="index.php"><div class="input-group-text btn-warning">Subscribe</div></a>
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