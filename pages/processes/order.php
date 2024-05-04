<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FrozenVentures</title>
  <link rel="icon" type="image/x-icon" href="../../assets/images/logo.png" />
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="../../assets/styles/order.css" />
</head>

<body>
  <nav>
    <div class="title-container hoButton">
      <img src="../../assets/images/logo.png" alt="Logo" />
      <h1>FrozenVentures</h1>
    </div>

    <div class="search-bar">
      <input type="text" placeholder="Ice Cream So Good" />
      <button><i class="bx bx-search-alt-2"></i></button>
    </div>

    <div class="nav-buttons">
      <button class="cs-button coButton">
        <i class="bx bxs-cart"></i>
      </button>
      <button class="cs-button hoButton">
        <i class="bx bxs-home-alt-2"></i>
      </button>
      <button class="sign-button sioButton">
        Sign In
      </button>
      <button class="sign-button suoButton">
        Sign Up
      </button>
    </div>
  </nav>

  <div class="order-container">
    <div class="top-container">
      <img src="../../assets/images/1.jpg" alt="" />

      <div class="right-container">
        <div class="tr-container">
          <div class="product-info">
            <h2>Rocky Road</h2>
            <p>Ays Krim So Gud</p>
          </div>

          <h2>$69.99</h2>
        </div>

        <div class="br-container">
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione
            delectus facere magni placeat fugiat itaque labore eaque sunt nemo
            inventore, illum adipisci ducimus aliquid quod! Doloribus
            perspiciatis eum aspernatur sequi!
          </p>

          <div class="sizes-container">
            <button>1st Size</button>
            <button>2nd Size</button>
            <button>3rd Size</button>
            <button>4th Size</button>
          </div>
        </div>
      </div>
    </div>

    <div class="bot-container">
      <div class="qty-container">
        <i class='bx bx-minus'></i>
        <h3>1</h3>
        <i class='bx bx-plus'></i>
      </div>

      <div class="button-container">
        <button class="coButton">Add to Cart</button>
        <button class="boButton">Buy Now</button>
      </div>
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

  <script defer src="../../assets/js/order-router.js"></script>
</body>
</html>