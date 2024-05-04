<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FrozenVentures</title>
  <link rel="icon" type="image/x-icon" href="../assets/images/logo.png" />
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="../assets/styles/cart.css" />
</head>

<body>
  <nav>
    <div class="title-container hcButton">
      <img src="../assets/images/logo.png" alt="Logo" />
      <h1>FrozenVentures</h1>
    </div>

    <div class="search-bar">
      <input type="text" placeholder="Ice Cream So Good" />
      <button><i class="bx bx-search-alt-2"></i></button>
    </div>

    <div class="nav-buttons">
      <button class="cs-button hcButton">
        <i class="bx bxs-home-alt-2"></i>
      </button>
      <button class="cs-button scButton">
        <i class="bx bxs-store-alt"></i>
      </button>

      <button class="sign-button sicButton">
        Sign In
      </button>
      <button class="sign-button sucButton">
        Sign Up
      </button>
    </div>
  </nav>

  <section class="cart-container">
    <h1>My Cart</h1>

    <div class="my-cart">
      <div class="label-container">
        <p class="item item1">Product</p>
        <p class="item item2">Price</p>
        <p class="item item3">Quantity</p>
        <p class="item item4">Total</p>
      </div>

      <div class="contain-container">
        <div class="product-container">
          <div class="product">
            <img src="../assets/images/1.jpg" alt="AysKrim" />

            <div class="description">
              <h3>Rocky Road</h3>
              <h4>Ays Krim So Gud</h4>
              <p>Gallon</p>
            </div>
          </div>

          <div class="price-container">
            <p>$69.99</p>
          </div>

          <div class="qty-container">
            <i class="bx bx-minus"></i>
            <p>1</p>
            <i class="bx bx-plus"></i>
          </div>

          <div class="total-container">
            <p>$69.99</p>
          </div>

          <div class="button-container">
            <i class="bx bxs-edit"></i>
            <i class="bx bxs-trash"></i>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="checkout-container">
    <div class="shipping-mode">
      <h2>Choose Shipping Mode:</h2>

      <form class="button-container">
        <input type="radio" name="shipping" value="pickup" id="pick-up" />
        <label for="pick-up">Store Pick Up<span>•</span><span>Free</span></label>

        <input type="radio" name="shipping" value="delivery" id="delivery" />
        <label for="delivery">Delivery<span>•</span><span>$2.99</span></label>
      </form>
    </div>

    <div class="total-container">
      <div class="sub-total">
        <p class="label">Sub Total</p>
        <p class="price">$69.99</p>
      </div>

      <div class="shipping">
        <p class="label">Shipping</p>
        <p class="price">$2.99</p>
      </div>

      <div class="line"></div>

      <div class="total">
        <p class="label">Total</p>
        <p class="price">$72.98</p>
      </div>

      <button class="cocButton">Check Out Now</button>
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

  <script defer src = "../assets/js/cart-router.js"></script>
</body>
</html>