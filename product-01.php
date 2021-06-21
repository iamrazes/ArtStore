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
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    

    <title>ArtStore | Buy High Quality Arts</title>
  </head>
  <body>
  
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
                  <a href="shop.php" class="nav-link px-2 text-white">Shop</a>
                </li>
                <li>
                  <a href="gallery.php" class="nav-link px-2 text-white"
                    >Gallery</a
                  >
                </li>
                <li>
                  <a href="contact.php" class="nav-link px-2 text-white"
                    >Contact</a
                  >
                </li>
                <li>
                  <a href="about.php" class="nav-link px-2 text-white"
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
                  href="login.php"
                  type="button"
                  class="btn btn-outline-light me-2"
                  >Login</a
                >
                <a 
                  href="signup.php" 
                  type="button" 
                  class="btn btn-warning"
                  >Sign-up</a
                >
              </div>
            </div>
          </div>
        </div>
      </nav>
    </header>

<section class="bg-white">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-5 mt-5">
                    <div class="card mb-3">
                        <img class="card-img img-fluid" src="assets/img/image/products/product01.jpg" alt="Card image cap" id="product-detail">
                    </div>
                </div>
                <!-- col end -->
                <div class="col-lg-7 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="h2">Bandit</h1>
                            <p class="h3 py-2">$69.00</p>
                            <p class="py-2">
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-secondary"></i>
                                <span class="list-inline-item text-dark">Rating 4.0 | 0 Comments</span>
                            </p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>Artist:</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong>Guweiz</strong></p>
                                </li>
                            </ul>

                            <h6>Description:</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temp incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse. Donec condimentum elementum convallis. Nunc sed orci a diam ultrices aliquet interdum quis nulla.</p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>Avaliable :</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-muted"><strong>Prints</strong></p>
                                </li>
                            </ul>

                            <h6>Specification:</h6>
                            <ul class="list-unstyled pb-3">
                                <li>Lorem ipsum dolor sit</li>
                                <li>Amet, consectetur</li>
                                <li>Adipiscing elit,set</li>
                                <li>Duis aute irure</li>
                                <li>Ut enim ad minim</li>
                                <li>Dolore magna aliqua</li>
                                <li>Excepteur sint</li>
                            </ul>

                            <form action="" method="GET">
                                <input type="hidden" name="product-title" value="Activewear">
                                <div class="row">
                                    <div class="col-auto">
                                        <ul class="list-inline pb-3">
                                            <li class="list-inline-item">Size :
                                                <input type="hidden" name="product-size" id="product-size" value="S">
                                            </li>
                                            <li class="list-inline-item"><span class="btn btn-secondary btn-size">A4</span></li>
                                            <li class="list-inline-item"><span class="btn btn-secondary btn-size">A3</span></li>
                                            <li class="list-inline-item"><span class="btn btn-secondary btn-size">B4</span></li>
                                            <li class="list-inline-item"><span class="btn btn-secondary btn-size">B3</span></li>
                                        </ul>
                                    </div>
                                    <div class="col-auto">
                                        <ul class="list-inline pb-3">
                                            <li class="list-inline-item text-right">
                                                Quantity :
                                                <input type="hidden" name="product-quanity" id="product-quanity" value="1">
                                            </li>
                                            <li class="list-inline-item"><span class="btn btn-secondary" id="btn-minus">-</span></li>
                                            <li class="list-inline-item"><span class="badge bg-secondary" id="var-value">1</span></li>
                                            <li class="list-inline-item"><span class="btn btn-secondary" id="btn-plus">+</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <div class="col d-grid">
                                        <button type="submit" class="btn btn-warning btn-lg" name="submit" value="buy">Buy</button>
                                    </div>
                                    <div class="col d-grid">
                                        <button type="submit" class="btn btn-warning btn-lg" name="submit" value="addtocard">Add To Cart</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Close Content -->


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
                          <li><a class="text-decoration-none" href="shop.php">Prints</a></li>
                          <li><a class="text-decoration-none" href="shop.php">NFT's</a></li>
                          <li><a class="text-decoration-none" href="shop.php">Accesories</a></li>
                          <li><a class="text-decoration-none" href="shop.php">Souvenir</a></li>  
                          <li><a class="text-decoration-none" href="shop.php">Gifts</a></li>
                      </ul>
                  </div>
  
                  <div class="col-md-4 pt-5">
                      <h2 class="h2 text-light border-bottom pb-3 border-light">Further Info</h2>
                      <ul class="list-unstyled text-light footer-link-list">
                          <li><a class="text-decoration-none" href="index.php">Home</a></li>
                          <li><a class="text-decoration-none" href="about.php">About Us</a></li>
                          <li><a class="text-decoration-none" href="contact.php">Shop Locations</a></li>
                          <li><a class="text-decoration-none" href="contact.php">FAQs</a></li>
                          <li><a class="text-decoration-none" href="contact.php">Contact</a></li>
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