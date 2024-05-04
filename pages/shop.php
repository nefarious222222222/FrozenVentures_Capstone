<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FrozenVentures</title>
  <link rel="icon" type="image/x-icon" href="../assets/images/logo.png" />
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="../assets/styles/shop.css" />
</head>

<body>
  <nav>
    <div class="title-container hsButton">
      <img src="../assets/images/logo.png" alt="Logo" />
      <h1>FrozenVentures</h1>
    </div>

    <div class="search-bar">
      <input type="text" placeholder="Ice Cream So Good" />
      <button><i class="bx bx-search-alt-2"></i></button>
    </div>

    <div class="nav-buttons">
      <button class="cs-button csButton">
        <i class="bx bxs-cart"></i>
      </button>
      <button class="cs-button hsButton">
        <i class="bx bxs-home-alt-2"></i>
      </button>
      <button class="sign-button sisButton">
        Sign In
      </button>
      <button class="sign-button susButton">
        Sign Up
      </button>
    </div>
  </nav>

  <section class="hero">
    <div class="first-container">
      <img src="../assets/images/0.jpg" alt="Sheesh" />
    </div>
  </section>

  <section class="tf-container">
    <div class="text-container">
      <h2>Shop</h2>

      <p>Venture the various flavors</p>
    </div>

    <div class="filter-container">
      <button>All</button>
      <button>Chocolate</button>
      <button>Mancha</button>
      <button>Vanilla</button>
      <button>Rocky Road</button>
      <button>Cookies n' Cream</button>
      <button>No Peanuts</button>
    </div>
  </section>

  <section class="product-catalog">
    <div class="product-container">
      <img src="../assets/images/1.jpg" alt="AysKrim" />

      <div class="text-container">
        <h3>Chocolate</h3>
        <p>Tahee</p>
        <p>$79.99</p>
      </div>

      <div class="button-container">
        <button class="cart-button csButton"><i class="bx bxs-cart-add"></i></button>
        <button class="buy-button bsButton" id="buyButton">Buy Now</button>
      </div>
    </div>

    <div class="product-container">
      <img src="../assets/images/2.jpg" alt="AysKrim" />

      <div class="text-container">
        <h3>Vanilla</h3>
        <p>IceCream 4Ever</p>
        <p>$59.99</p>
      </div>

      <div class="button-container">
        <button class="cart-button csButton"><i class="bx bxs-cart-add"></i></button>
        <button class="buy-button bsButton" id="buyButton">Buy Now</button>
      </div>
    </div>

    <div class="product-container">
      <img src="../assets/images/3.jpg" alt="AysKrim" />

      <div class="text-container">
        <h3>Rocky Road</h3>
        <p>Ays Krim So Gud</p>
        <p>$49.99</p>
      </div>

      <div class="button-container">
        <button class="cart-button csButton"><i class="bx bxs-cart-add"></i></button>
        <button class="buy-button bsButton" id="buyButton">Buy Now</button>
      </div>
    </div>

    <div class="product-container">
      <img src="../assets/images/4.jpg" alt="AysKrim" />

      <div class="text-container">
        <h3>Matcha</h3>
        <p>Daemoo</p>
        <p>$69.99</p>
      </div>

      <div class="button-container">
        <button class="cart-button csButton"><i class="bx bxs-cart-add"></i></button>
        <button class="buy-button bsButton" id="buyButton">Buy Now</button>
      </div>
    </div>
  </section>

  <section class="page-selector">
    <div class="prev-container">
      <button><i class="bx bx-left-arrow-alt"></i> Previous</button>
    </div>

    <div class="page-viewer">
      <p>1,</p>
      <p>2,</p>
      <p>3,</p>
      <p>...</p>
    </div>

    <div class="next-contianer">
      <button>Next <i class="bx bx-right-arrow-alt"></i></button>
    </div>
  </section>

  <footer>
    <div class="about-container">
      <div class="logo-container">
        <img src="../assets/images/logo.png" alt="Logo" />
        <h1>FrozenVentures</h1>
      </div>

      <p>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate
        neque veniam perferendis nihil fuga, corporis quidem voluptatum iusto,
        modi quod minus mollitia maxime inventore ad recusandae iure deserunt
        laborum sint!
      </p>
    </div>

    <div class="contact-container">
      <h4>Contact Us</h4>

      <p>#420 Weederoo Street Showbu City</p>

      <p>frozenventures@icecream.com</p>

      <p>+63 9069420911</p>
    </div>

    <div class="social-container">
      <h4>Follow Us</h4>

      <div class="container">
        <div class="fb-container">
          <i class="bx bxl-facebook-square"></i>
          <p>@FrozenVentures</p>
        </div>

        <div class="ig-container">
          <i class="bx bxl-instagram-alt"></i>
          <p>@FrozenVentures</p>
        </div>

        <div class="twitter-container">
          <i class="bx bxl-twitter"></i>
          <p>@FrozenVentures</p>
        </div>
      </div>
    </div>
  </footer>

  <script defer src = "../assets/js/shop-router.js"></script>
</body>
</html>