<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules\bootstrap-icons\font\bootstrap-icons.css">
    <style>
      body {
      height: 100vh;
      margin: 0;
      padding: 0;
      background-image: url('img/bg.jpg'); 
      background-size: cover; 
      background-position: center; 
      color: white;
      }
        </style>
    <script src="node_modules\bootstrap\dist\js\bootstrap.bundle.min.js"></script>
    <title>Borgershop</title>
  </head>
  <body>
  
    <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary ">
      <div class="container-fluid">
          <img src="img/borger.png" style="max-width: 100px">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          </ul>
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Menu
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">HamBorger</a></li>
                  <li><a class="dropdown-item" href="#">Chicken Borger</a></li>
                  <li><a class="dropdown-item" href="#">Cheese Borger</a></li>
                  <li><a class="dropdown-item" href="#">Turkey Borger</a></li>
                  <li><a class="dropdown-item" href="#">Classic Borger</a></li>
                  <li><a class="dropdown-item" href="#">Veggie Borger</a></li>
                </ul>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="#">Contacts</a>
              </li>
          </ul>
          <form class="d-flex">
              <button class="btn btn-outline-success" href="#" type="submit">Login</button> &nbsp &nbsp
              <button class="btn btn-outline-success" href="#" type="submit">Sign up</button>
          </form>
          </div>
      </div>
      </nav>
  </header>
  <section>
    <br> <br>
  <div class="container">
    <div class="row">
      <div class="col headline">
        <h1 class="py-2 fs-1">“Food That Makes You Go "Mmmmm"”</h1>
      </div>
    </div>
    <div class="row">
      <div class="col buttons-container">
        <button class="btn btn-outline-success" type="submit">Order Now</button> &nbsp; &nbsp;
        <button class="btn btn-outline-success" type="submit">Learn About Us</button>
      </div>
    </div>
  </div>
  <br> <br> <br> <br>
  <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="3000">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-4">
              <div class="card border border-warning mb-3" style="background-color: bisque; max-width:540px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="img/ham.jpg" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">HamBorger &nbsp₱40</h5>
                      <p class="card-text">Yummy na, Masarap pa! <i class="bi bi-plus-circle-fill position-absolute" style="bottom: 10px; right: 10px;"></i></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card border border-warning mb-3" style="background-color: bisque; max-width:540px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="img/turkey.jpg" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Turkey Borger &nbsp ₱40</h5>
                      <p class="card-text">Yummy na, Masarap pa!<i class="bi bi-plus-circle-fill position-absolute" style="bottom: 10px; right: 10px;"></i></p>
                       
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card border border-warning mb-3" style="background-color: bisque; max-width:540px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="img/clasic.png" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Classic Borger &nbsp₱40</h5>
                      <p class="card-text">Yummy na, Masarap pa!<i class="bi bi-plus-circle-fill position-absolute" style="bottom: 10px; right: 10px;"></i></p>
                       
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="3000">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-4">
              <div class="card border border-warning mb-3" style="background-color: bisque;">
                <div class="row g-2">
                  <div class="col-md-4">
                    <img src="img/lamb.jpg" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Lamb Borger&nbsp₱40</h5>
                      <p class="card-text">Yummy na, Masarap pa!<i class="bi bi-plus-circle-fill position-absolute" style="bottom: 10px; right: 10px;"></i></p>
                       
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card border border-warning mb-3" style="background-color: bisque;">
                <div class="row g-2">
                  <div class="col-md-4">
                    <img src="img/chicken.jpg" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Chicken Borger&nbsp₱40</h5>
                      <p class="card-text">Yummy na, Masarap pa!<i class="bi bi-plus-circle-fill position-absolute" style="bottom: 10px; right: 10px;"></i></p>
                       
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card border border-warning mb-3" style="background-color: bisque;">
                <div class="row g-2">
                  <div class="col-md-4">
                    <img src="img/cheese.jpg" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Cheese Borger&nbsp₱40</h5>
                      <p class="card-text">Yummy na, Masarap pa!<i class="bi bi-plus-circle-fill position-absolute" style="bottom: 10px; right: 10px;"></i></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="carousel-item" data-bs-interval="3000">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-4">
              <div class="card border border-warning mb-3" style="background-color: bisque;">
                <div class="row g-2">
                  <div class="col-md-4">
                    <img src="img/veggie.jpg" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Veggie Borger&nbsp₱40</h5>
                      <p class="card-text">Yummy na, Masarap pa!<i class="bi bi-plus-circle-fill position-absolute" style="bottom: 10px; right: 10px;"></i></p>
                       
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card border border-warning mb-3" style="background-color: bisque;">
                <div class="row g-2">
                  <div class="col-md-4">
                    <img src="img/bacon.jpeg" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Bacon Borger&nbsp₱40</h5>
                      <p class="card-text">Yummy na, Masarap pa!<i class="bi bi-plus-circle-fill position-absolute" style="bottom: 10px; right: 10px;"></i></p>
                       
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card border border-warning mb-3" style="background-color: bisque;">
                <div class="row g-2">
                  <div class="col-md-4">
                    <img src="img/shawarma.avif" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Shawarma Borger&nbsp₱40</h5>
                      <p class="card-text">Yummy na, Masarap pa!<i class="bi bi-plus-circle-fill position-absolute" style="bottom: 10px; right: 10px;"></i></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev" style="margin-left:-15px;">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next" style="margin-right:-15px;">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>

</body>
</html>