<?php
include_once "$_SERVER[DOCUMENT_ROOT]/ArtStore/pages/header.php";
?>

<main>

  <section class="py-4 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Best Offers</h1>
        <p class="lead">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </p>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

        <div class="col">
          <div class="card shadow-sm">
            <img src="../../assets/img/image/products/product01.jpg" class="d-block show-image" />
            <title>Products</title>
            <rect width="100%" height="100%" fill="#55595c" />
            <text x="50%" y="50%" fill="#eceeef" dy=".3em">
              <div class="card-body text-center ">
                <p class="card-text"><b>"Bandit"</b><br> Artist : Guweiz</p>
                <div class="rating text-center text-warning">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star text-muted"></i>
                </div>
                <p class="card-text"><b>$ 42.0</b></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a href="pages/product-01.php">
                      <button type="button" class="btn btn-sm btn-outline-secondary" href="index.php">
                        <i class="text-dark fa fa-shopping-cart fa-lg"></i> Cart</button>
                    </a>
                  </div>
                  <li id="bullet">
                    <a class="text-dark" href="#love-it"><i class="fa fa-heart-o fa-lg"></i></a>
                    <a class="text-dark" href="#bookmark-it"><i class="fa fa-bookmark-o fa-lg"></i></a>
                  </li>
                </div>
              </div>
          </div>
        </div>

      </div>
    </div>

</main>

<?php
include_once "$_SERVER[DOCUMENT_ROOT]/ArtStore/pages/footer.php";
?>