<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FrozenVentures</title>
  <link rel="icon" type="image/x-icon" href="../../assets/images/logo.png" />
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="../../assets/styles/billing.css" />
</head>

<body>
  <nav>
    <div class="title-container hbButton">
      <img src="../../assets/images/logo.png" alt="Logo" />
      <h1>FrozenVentures</h1>
    </div>

    <div class="search-bar">
      <input type="text" placeholder="Ice Cream So Good" />
      <button><i class="bx bx-search-alt-2"></i></button>
    </div>

    <div class="nav-buttons">
      <button class="cs-button cbButton">
        <i class="bx bxs-cart"></i>
      </button>
      <button class="cs-button hbButton">
        <i class="bx bxs-home-alt-2"></i>
      </button>
      <button class="sign-button sibButton">
        Sign In
      </button>
      <button class="sign-button subButton">
        Sign Up
      </button>
    </div>
  </nav>

  <div class="billing-container">
    <div class="header-container">
      <h1>Billing</h1>
      <button class="obButton"><i class='bx bxs-left-arrow-alt'></i> Back to Order</button>
    </div>

    <div class="left-container">
      <div class="customer-container">
        <h2>Customer Information</h2>

        <div class="customer-info">
          <div class="name">
            <h3>Name:</h3>
            <p>James Bond</p>
          </div>

          <div class="contact">
            <h3>Contact Number:</h3>
            <p>0969420911</p>
          </div>

          <div class="address">
            <h3>Address:</h3>
            <p>#911 Twin Bakod Bacolod</p>
          </div>
        </div>
      </div>

      <div class="order-container">
        <h2>Order Information</h2>

        <div class="order-info">
          <div class="product">
            <h3>Product Name:</h3>
            <p>Rocky Road</p>
          </div>

          <div class="quantity">
            <h3>Quantity:</h3>
            <p>1</p>
          </div>
        </div>
      </div>

      <div class="shipping-container">
        <h2>Shipping Information</h2>

        <div class="shipping-info">
          <div class="shipping">
            <h3>Shipping Option:</h3>
            <p>Get by April 1-3</p>
          </div>

          <div class="payment">
            <h3>Payment:</h3>
            <p>Cash On Delivery</p>
          </div>
        </div>
      </div>
    </div>

    <div class="right-container">
      <div class="prices-container">
        <h2>Order Summary</h2>

        <div class="price price1">
          <p>Product Price</p>
          <h4>$69.99</h4>
        </div>

        <div class="price price2">
          <p>Shipping Fee</p>
          <h4>$2.99</h4>
        </div>

        <div class="price price3">
          <p>Total</p>
          <h4>$71.98</h4>
        </div>
      </div>

      <button>Confirm Purchase</button>
    </div>
  </div>

  <footer>
    <div class="about-container">
      <div class="logo-container">
        <img src="../../assets/images/logo.png" alt="Logo" />
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

  <script defer src="../../assets/js/billing-router.js"></script>
</body>
</html>