<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--Bootstrap 5-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/headers.css" />
    <link rel="stylesheet" href="assets/css/map.css">
    <link rel="stylesheet" href="assets/css/footer.css">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/icons/favicon.ico">

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
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
                  href="signin.php"
                  type="button"
                  class="btn btn-outline-light me-2"
                  >Login</a
                >
                <a href="signup.php" type="button" class="btn btn-warning"
                  >Sign-up</a
                >
              </div>
            </div>
          </div>
        </div>
      </nav>
    </header>

<main class="bg-dark">

      <section class="py-4 text-center container">
        <div class="row py-lg-5">
          <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light text-light">Contact Us</h1>
            <p class="lead  text-light">
              Something short and leading about the collection below—its
              contents, the creator, etc. Make it short and sweet, but not too
              short so folks don’t simply skip over it entirely.
            </p>
            <p>
              <a href="shop.php" class="btn btn-warning my-2">Go to Shopping</a>
              <a href="index.php" class="btn btn-secondary my-2">Back Home</a>
            </p>
          </div>
        </div>
      </section>

  <div id="mapid" style="width: 100%; height: 400px;"></div>
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
  <script>
    var mymap = L.map('mapid').setView([-23.013104, -43.394365, 13], 13);

    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        maxZoom: 18,
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
            '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1
    }).addTo(mymap);

    L.marker([-23.013104, -43.394365, 13]).addTo(mymap)
        .bindPopup("<b>ArtStore</b> Main Office<br />Location.").openPopup();

    mymap.scrollWheelZoom.disable();
    mymap.touchZoom.disable();
</script>e();
  </script>

   <div class="container py-1 bg-dark">
    <div class="row py-5">
        <form class="col-md-9 m-auto" role="form" method="POST" action="./contact-process.php">
            <div class="row">
                <div class="form-group col-md-6 mb-3">
                    <label for="inputname" class="text-white">Name</label>
                    <input type="text" class="form-control mt-1" id="name" name="name" placeholder="Name">
                </div>
                <div class="form-group col-md-6 mb-3">
                    <label for="inputemail" class="text-white">Email</label>
                    <input type="email" class="form-control mt-1" id="email" name="email" placeholder="Email">
                </div>
            </div>
            <div class="mb-3">
                <label for="inputsubject" class="text-white">Subject</label>
                <input type="text" class="form-control mt-1" id="subject" name="subject" placeholder="Subject">
            </div>
            <div class="mb-3">
                <label for="inputmessage" class="text-white">Message</label>
                <textarea class="form-control mt-1" id="message" name="message" placeholder="Message" rows="8"></textarea>
            </div>
            <div class="row">
                <div class="col text-end mt-2">
                    <button type="submit" class="btn btn-warning btn-lg px-3">Let’s Talk</button>
                </div>
            </div>
        </form>
    </div>
</div>

    </main>

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
