<?php 
require ("server/usersign.php")
?>

<!DOCTYPE html>
<html lang="en"> 
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FrozenVentures</title>
    <link rel="icon" type="image/x-icon" href="assets/images/logo.png" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="assets/styles/index.css" />
  </head>
  <body>
    <nav>
      <div class="title-container">
        <img src="assets/images/logo.png" alt="Logo" />
        <h1>FrozenVentures</h1>
      </div>

      <div class="search-bar">
        <input type="text" placeholder="Ice Cream So Good">
        <button><i class='bx bx-search-alt-2' ></i></button>
      </div>

      <div class="nav-buttons">
        <button class="cs-button cart ciButton"><i class="bx bxs-cart"></i></button>
        <button class="cs-button store siButton"><i class="bx bxs-store-alt"></i></button>
        <?php echo $errorDiv; ?>
      </div>
    </nav>

    <section class="hero">
      <div class="first-container">
        <img src="assets/images/0.jpg" alt="Sheesh" />
      </div>

      <div class="second-container">
        <h2>Flavors</h2>
        <p>Vaious flavors to suit your preferences</p>
      </div>

      <div class="third-container">
        <img class="item1" src="assets/images/1.jpg" alt="" />
        <img class="item2" src="assets/images/2.jpg" alt="" />
        <img class="item3" src="assets/images/3.jpg" alt="" />
        <img class="item4" src="assets/images/4.jpg" alt="" />
      </div>
    </section>

    <section class="top-container">
      <div class="text-container">
        <h2>Top Products</h2>

        <div class="type-container">
          <p>Daily</p>
          <p>Weekly</p>
          <p>Monthly</p>
        </div>
      </div>

      <div class="top-products">
        <div class="product-container">
          <img src="assets/images/1.jpg" alt="product" />

          <div class="desc-container">
            <h3>Rocky Road</h3>
            <p>Ays Krim So Gud</p>
            <p>$49.99</p>
          </div>

          <div class="button-container">
            <button class="cart-button ciButton"><i class="bx bxs-cart-add"></i></button>
            <button class="buy-button biButton">Buy Now</button>
          </div>
        </div>

        <div class="product-container">
          <img src="assets/images/2.jpg" alt="product" />

          <div class="desc-container">
            <h3>Vanilla</h3>
            <p>IceCream 4Ever</p>
            <p>$59.99</p>
          </div>

          <div class="button-container">
            <button class="cart-button ciButton"><i class="bx bxs-cart-add"></i></button>
            <button class="buy-button biButton">Buy Now</button>
          </div>
        </div>

        <div class="product-container">
          <img src="assets/images/3.jpg" alt="product" />

          <div class="desc-container">
            <h3>Chocolate</h3>
            <p>Tahee</p>
            <p>$79.99</p>
          </div>

          <div class="button-container">
            <button class="cart-button ciButton"><i class="bx bxs-cart-add"></i></button>
            <button class="buy-button biButton">Buy Now</button>
          </div>
        </div>

        <div class="product-container">
          <img src="assets/images/4.jpg" alt="product" />

          <div class="desc-container">
            <h3>Mancha</h3>
            <p>Daemoo</p>
            <p>$69.99</p>
          </div>

          <div class="button-container">
            <button class="cart-button ciButton"><i class="bx bxs-cart-add"></i></button>
            <button class="buy-button biButton">Buy Now</button>
          </div>
        </div>
      </div>
    </section>

    <section class="more-container">
      <div class="tb-container">
        <h2>Need More Flavors?</h2>
        <p>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid
          nesciunt odio vitae quia recusandae expedita maxime ad dolor quisquam
          tempora velit fuga, officiis, dolorem repellendus! Nesciunt at
          incidunt possimus. Eum.
        </p>
        <button>More Flavors</button>
      </div>

      <img src="assets/images/5.png" alt="" />
    </section>

    <section class="service-container">
      <div class="text-container">
        <h2>Services</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, deserunt!</p>
      </div>

      <div class="services">
        <div class="service">
          <h3><i class='bx bxs-package' ></i> Delivery</h3>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
        </div>
  
        <div class="service">
          <h3><i class='bx bx-money' ></i> Payment</h3>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
        </div>
  
        <div class="service">
          <h3><i class='bx bxs-donate-heart' ></i> Inquiry</h3>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
        </div>
      </div>
    </section>

    <footer>
      <div class="about-container">
        <div class="logo-container">
          <img src="assets/images/logo.png" alt="Logo" />
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
    <script defer src = "assets/js/index-router.js"></script>
  </body>
</html>
