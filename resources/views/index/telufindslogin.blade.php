<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Index</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>

<!-- navbar -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
  @import url('https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;700&display=swap');

  /* navbar css */
  .container {
    position: relative;
  }

  /* navbar css */
  .navbar {
    margin: auto;
    width: auto;
    justify-content: center;
  }

  .logo_1 {
    margin-left: 20px;
    justify-content: center;
  }

  .seller {
    margin-left: 20px;
    margin-right: 30px;
    padding-right: 30px;
  }

  .search {
    margin-right: 30px;
    margin-left: 20px;
  }


  .navbar-nav li.nav-item:hover a {
    color: #6f1109;
  }

  a {
    font-family: 'League Spartan', sans-serif;
    font-size: large;
  }

  .input-group {
    position: relative;
    background-color: #fff;
    /* warna background putih */
    border: 1px solid #ced4da;
    /* warna border */
    border-radius: 1;
    /* radius border */
  }

  .form-control {
    border: none;
    /* menghapus border pada input */
    border-radius: 1px;
    /* menghapus radius border pada input */
  }

  .buttonsearch {
    background-color: #fff;
    /* warna background putih */
    border: none;
    /* menghapus border pada button */
    border-radius: 0;
    /* menghapus radius border pada button */
    padding-top: 7px;
  }

  .buttonsearch:hover {
    background-color: #6f1109;
  }

  .buttonsearch:hover img {
    filter: invert(1);
    /* mengubah warna ikon pada efek hover */
  }
</style>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top" style="width: auto">
    <div class="container-fluid justify-content-center">
      <div class="logo_1">
        <a href="index.html">
          <img src="logo.png" alt="" width="200px">
        </a>
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item px-4 ms-2">
            <a class="nav-link fw-medium" href="thrifting.html">Thrifting</a>
          </li>

          <li class="nav-item seller">
            <a class="nav-link fw-medium" href="seller.html">Seller</a>
          </li>

          <form class="d-flex search" role="search" style="width: 380px;">
            <div class="input-group">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-sm border-start border-dark-subtle  buttonsearch" type="submit"
                  style="width: 45px;">
                  <img src="icon/search.png" alt="Search Icon" style="width: 28px">
                </button>
              </div>
            </div>
          </form>
          <li class="nav-item px-4 ms-2">
            <a class="nav-link fw-medium" href="/index-product/">Account</a>
          </li>

          <li class="nav-item px-4 ms-2">
            <a class="nav-link fw-medium" href="mybag.html">Bag</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
  <!-- end navbar -->

  <!-- header -->
  <header class="bg-custom">
    <div class="opening text-white">
      <h1>Welcome to </h1>
      <h1>Tel-U Finds</h1>
      <p>Find what you need</p>
      <p>with cheap price and negotiable</p>
    </div>
  </header>
  <!-- end header -->

  <!-- banner -->
  <div id="imageCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <!-- Image 1 -->
      <div class="carousel-item active">
        <img src="banner/banner1.png" class="d-block w-100" alt="Image 1">
      </div>
      <!-- Image 2 -->
      <div class="carousel-item">
        <img src="banner/banner2.png" class="d-block w-100" alt="Image 2">
      </div>
      <!-- Add more images as needed -->
    </div>
    <div class="control mt-3">
      <button class="carousel-control-prev" type="button" data-bs-target="#imageCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#imageCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

  <!-- end banner -->

  <!-- card category -->
  <div class="shop text-center py-3">
    <h5>Shop by Category</h5>
  </div>
  <div class="card-group card1-center py-4">
    <div class="px-4">
      <img src="categories/furniture.jpg" class="rounded-circle shadow-5-strong" alt="..." width="150px">
      <div class="card-body">
        <h5 class="card-title text-center card1">Furniture</h5>
      </div>
    </div>
    <div class="px-4">
      <a href="categorieselectronic.html">
        <img src="categories/electronic.jpg" class="rounded-circle shadow-5-strong" alt="..." width="150px">
      </a>
      <div class="card-body">
        <h5 class="card-title text-center card1">Electronic</h5>
      </div>
    </div>
    <div class="px-4">
      <img src="categories/accessories.jpg" class="rounded-circle shadow-5-strong" alt="..." width="150px">
      <div class="card-body">
        <h5 class="card-title text-center card1">Accessories</h5>
      </div>
    </div>
    <div class="px-4">
      <img src="categories/clothes.jpg" class="rounded-circle shadow-5-strong" alt="..." width="150px">
      <div class="card-body">
        <h5 class="card-title text-center card1">Clothes</h5>
      </div>
    </div>
    <div class="px-4">
      <a href="categoriesshoes.html">
        <img src="categories/shoes.jpg" class="rounded-circle shadow-5-strong" alt="..." width="150px">
      </a>
      <div class="card-body">
        <h5 class="card-title text-center card1">Shoes</h5>
      </div>
    </div>
    <div class="px-4">
      <img src="categories/books.jpg" class="rounded-circle shadow-5-strong" alt="..." width="150px">
      <div class="card-body">
        <h5 class="card-title text-center card1">Books</h5>
      </div>
    </div>
  </div>
  <!-- card category end -->

  <!-- card seller -->
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="shop pt-3 text-center text-white">
      <h5>Shop by Seller</h5>
    </div>
    <div class="carousel-inner py-4 text-center">
      <!-- Slide 1 -->
      <div class="cardsize">
        <div class="carousel-item active">
          <div class="card-group">
            <div class="card bg-custom1">
              <a href="sellerdetail.html">
                <img src="seller/seller1.jpg" class="card-img-top" alt="...">
              </a>
              <div class="card-body">
                <h5 class="card-title">Theresa Web</h5>
                <p class="card-text">Information System (2022)</p>
              </div>
            </div>
            <div class="card bg-custom1">
              <img src="seller/seller2.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Leslie Alexander</h5>
                <p class="card-text">Graphic Design (2020)</p>
              </div>
            </div>
            <div class="card bg-custom1">
              <img src="seller/seller3.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Kristin Watson</h5>
                <p class="card-text">Biochemistry (2021)</p>
              </div>
            </div>
            <div class="card bg-custom1">
              <img src="seller/seller4.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Robert Fox</h5>
                <p class="card-text">Computer Science (2020)</p>
              </div>
            </div>
            <div class="card bg-custom1">
              <img src="seller/seller5.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">John Doe</h5>
                <p class="card-text">Physics (2020)</p>
              </div>
            </div>
            <div class="card bg-custom1">
              <img src="seller/seller6.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Jackson Reed</h5>
                <p class="card-text">Psychology (2022)</p>
              </div>
            </div>
          </div>
        </div>
        <!-- Slide 2 -->
        <div class="carousel-item">
          <div class="card-group">
            <div class="card bg-custom1">
              <img src="seller/seller7.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Theresa Webb</h5>
                <p class="card-text">iochemistry (2021)</p>
              </div>
            </div>
            <div class="card bg-custom1">
              <img src="seller/seller8.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Olivia Martinez</h5>
                <p class="card-text">Civil Engineering (2021)</p>
              </div>
            </div>
            <div class="card bg-custom1">
              <img src="seller/seller9.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Ethan Turner</h5>
                <p class="card-text">Information System (2022)</p>
              </div>
            </div>
            <div class="card bg-custom1">
              <img src="seller/seller10.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Caleb Mitchell</h5>
                <p class="card-text">Physics (2020)</p>
              </div>
            </div>
            <div class="card bg-custom1">
              <img src="seller/seller11.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Mason Ross</h5>
                <p class="card-text">Sociology (2021)</p>
              </div>
            </div>
            <div class="card bg-custom1">
              <img src="seller/seller12.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Dylan Ward</h5>
                <p class="card-text">Political Science (2022)</p>
              </div>
            </div>
          </div>
        </div>
        <!-- Slide 3 -->
        <div class="carousel-item">
          <div class="card-group">
            <div class="card bg-custom1">
              <img src="seller/seller13.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Zoe Perry</h5>
                <p class="card-text">Information System (2022)</p>
              </div>
            </div>
            <div class="card bg-custom1">
              <img src="seller/seller14.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Jordan Simmons</h5>
                <p class="card-text">Political Science (2022)</p>
              </div>
            </div>
            <div class="card bg-custom1">
              <img src="seller/seller15.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Harper Price</h5>
                <p class="card-text">Graphic Design (2020)</p>
              </div>
            </div>
            <div class="card bg-custom1">
              <img src="seller/seller16.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Lucas Evans</h5>
                <p class="card-text">Chemistry (2021)</p>
              </div>
            </div>
            <div class="card bg-custom1">
              <img src="seller/seller17.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Lily Foster</h5>
                <p class="card-text">Economics (2020)</p>
              </div>
            </div>
            <div class="card bg-custom1">
              <img src="seller/seller18.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Nolan Sanders</h5>
                <p class="card-text">Linguistics (2021)</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="py-1">
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>
  <div class="button1 text-center pb-3">
    <a href="seller.html" type="button" class="btn btn-outline-light">View All</a>
  </div>

  <!-- New Arrival -->
  <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#productCarousel" data-bs-slide-to="0" class="active" aria-current="true"
        aria-label="Product Slide 1"></button>
      <button type="button" data-bs-target="#productCarousel" data-bs-slide-to="1"
        aria-label="Product Slide 2"></button>
    </div>
    <div class="shopna py-4 text-center">
      <h5>New Arrivals</h5>
    </div>
    <div class="carousel-inner custom-carousel text-center">
      <!-- Slide 1 -->
      <div class="cardsize px-5">
        <div class="carousel-item active">
          <div class="card-group">
            <!-- Product 1 -->
            <div class="card bg-custom2">
              <img src="products/book1.jpg" alt="..." width="250px">
              <div class="card-body">
                <h5 class="card-title card1"><b>LiberLit Book</b></h5>
                <p class="card1">Buku bekas berkualitas cocok untuk pecinta literatur</p>
                <h5 class="card1 price">IDR 20,000</h5>
              </div>
            </div>
            <!-- Product 2 -->
            <div class="card bg-custom2">
              <img src="products/closet1.jpg" alt="..." width="250px">
              <div class="card-body">
                <h5 class="card-title card1"><b>EcoSpace Wardrobe</b></h5>
                <p class="card1">Lemari bekas dengan desain kokoh dan fungsional</p>
                <h5 class="card1 price">IDR 150,000</h5>
              </div>
            </div>
            <!-- Product 3 -->
            <div class="card bg-custom2">
              <img src="products/desk1.jpg" alt="..." width="250px">
              <div class="card-body">
                <h5 class="card-title card1"><b>RetroCraft Desk</b></h5>
                <p class="card1">Meja bekas yang kokoh dan praktis memberikan ruang belajar yang nyaman</p>
                <h5 class="card1 price">IDR 100,000</h5>
              </div>
            </div>
            <!-- Product 4 -->
            <div class="card bg-custom2">
              <img src="products/dispenser1.jpg" alt="..." width="250px">
              <div class="card-body">
                <h5 class="card-title card1"><b>AquaEase Dispenser</b></h5>
                <p class="card1">Dispenser bekas yang masih berfungsi dengan baik</p>
                <h5 class="card1 price">IDR 50,000</h5>
              </div>
            </div>
          </div>
        </div>
        <!-- Slide 2 -->
        <div class="carousel-item">
          <div class="card-group">
            <!-- Product 5 -->
            <div class="card bg-custom2">
              <img src="products/iron1.jpg" alt="..." width="250px">
              <div class="card-body">
                <h5 class="card-title card1"><b>PressPro Garment Care</b></h5>
                <p class="card1">Setrika bekas dalam kondisi baik, membantu menjaga pakaian tetap rapi </p>
                <h5 class="card1 price">IDR 30,000</h5>
              </div>
            </div>
            <!-- Product 6 -->
            <div class="card bg-custom2">
              <img src="products/kettle1.jpg" alt="..." width="250px">
              <div class="card-body">
                <h5 class="card-title card1"><b>QuickHeat Electric Kettle</b></h5>
                <p class="card1">Kettle bekas berkualitas, cocok untuk memasak air panas</p>
                <h5 class="card1 price">IDR 40,000</h5>
              </div>
            </div>
            <!-- Product 7 -->
            <div class="card bg-custom2">
              <img src="products/rice1.jpg" alt="..." width="250px">
              <div class="card-body">
                <h5 class="card-title card1"><b>SteamMaster Rice Cooker</b></h5>
                <p class="card1"> Rice cooker bekas yang masih berfungsi dengan baik</p>
                <h5 class="card1 price">IDR 80,000</h5>
              </div>
            </div>
            <!-- Product 8 -->
            <div class="card bg-custom2">
              <img src="products/desk2.jpg" alt="..." width="250px">
              <div class="card-body">
                <h5 class="card-title card1"><b>CompactNook Table</b></h5>
                <p class="card1">Meja kecil bekas yang dapat digunakan sebagai meja samping</p>
                <h5 class="card1 price">IDR 60,000</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="under py-4">
        <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon custom-prev-icon-second" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon custom-prev-icon-second" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>

  <!-- footer -->
  <footer class="footer">
    <div class=" text-white">
      <div class="container py-2">
        <div class="row">
          <div class="col">
            <h5>TelU Finds</h5>
            <ul class="list-unstyled">
              <li><i>About TelU Fnds</i></li>
              <li><i>Privacy Policy</i></li>
              <li><i>Help Desk</i></li>
            </ul>
          </div>
          <div class="col">
            <h5>Popular Category</h5>
            <ul class="list-unstyled">
              <li><i>Accessories</i></li>
              <li><i>Furniture</i></li>
              <li><i>Clothes</i></li>
            </ul>
          </div>
          <div class="col">
            <h5>Sell With US</h5>
            <ul class="list-unstyled">
              <li><i>Seller Guideline</i> </li>
              <li><i>Seller List</i></li>
            </ul>
          </div>
          <div class="col">
            <h5>Follow Us</h5>
            <div class="followus">
              <a href="instagram.com">
                <img src="icon/instagram.png" alt="">
              </a>
              <a href="#">
                <img src="icon/facebook.png" alt="">
              </a>
              <a href="#">
                <img src="icon/whatsapp (1).png" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <div class="copy text-center text-white py-3">
    &copy;2023 TelUFinds. All rights reserved.
  </div>
  <!-- end footer -->
</body>
</html>