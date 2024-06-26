<?php
require ("../../server/signup.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FrozenVentures</title>
  <link rel="icon" type="image/x-icon" href="../../assets/images/logo.png" />
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="../../assets/styles/sign.css" />
</head>
<body>
  <div class="sign-in-container">
    <div class="image-container">
      <img class="sign-image" src="../../assets/images/1.jpg" alt="Background" />
    </div>

    <form class="form-container" action="../../server/signup.php" method="post">
      <div class="title-container" onclick="window.location.href='../../index.php'">
        <img src="../../assets/images/logo.png" alt="logo" />
        <h1>FrozenVentures</h1>
      </div>

      <div class="su-container">
        <div class="name-container">
          <div class="input-container">
            <h4>First Name:</h4>
            <input type="text" name="fname" required/>
          </div>

          <div class="input-container">
            <h4>Last Name:</h4>
            <input type="text" name="lname" required/>
          </div>
        </div>

        <div class="contact-container">
          <div class="input-container">
            <h4>Username:</h4>
            <input type="text" name="username" required/>
          </div>

          <div class="input-container">
            <h4>Email:</h4>
            <input type="email" name="email" required/>
          </div>
        </div>

        <div class="info-container">
          <div class="input-container">
            <h4>Contact Number:</h4>
            <input type="tel" id="phone" name="phone" minlength="11" maxlength="11" pattern="[0-9]{11}" placeholder="0912***6789" required/>
          </div>

          <div class="input-container">
            <h4>Gender:</h4>
            <select name="gender">
              <option value="Male">Male</option>
              <option value="Female">Female</option>
              <option value="NA">Rather not say</option>
            </select>
          </div>
        </div>

        <div class="input-container">
          <h4>Address:</h4>
          <input type="text" class="address" name="address" required/>
        </div>

        <div class="password-container">
          <div class="input-container">
            <div class="container">
              <h4>Password:</h4>
              <div class="bx-container">
                <i class="bx bx-show" onclick="showPass('password1')"></i>
                <i class="bx bxs-hide" onclick="hidePass('password1')"></i>
              </div>
            </div>
            <input id="password1" class="password" type="password" name="pass1" required/>
          </div>

          <div class="input-container">
            <div class="container">
              <h4>Confirm Password:</h4>
              <div class="bx-container">
                <i class="bx bx-show" onclick="showPass('password2')"></i>
                <i class="bx bxs-hide" onclick="hidePass('password2')"></i>
              </div>
            </div>
            <input id="password2" class="password" type="password" name="pass2" required/>
          </div>
        </div>
      </div>

      <div class="button-container">
        <button onclick="showSL()">Sign Up</button>
        <p>Already Have An Account? <a href="sign-in.php">Sign In</a></p>
      </div>

      <div class="other-sign">
        <div class="text-container">
          <div class="line"></div>
          <p>Or Sign Up With</p>
          <div class="line"></div>
        </div>

        <div class="social-container">
          <button><i class="bx bxl-google"></i></button>
        </div>
      </div>
    </form>
  </div>

  <script>
    function showPass(id) {
      let show = document.querySelector("#" + id).previousElementSibling.querySelector(".bx-show");
      let hide = document.querySelector("#" + id).previousElementSibling.querySelector(".bxs-hide");
      let pass = document.getElementById(id);
      show.style.display = "none";
      hide.style.display = "block";
      pass.type = "text";
    }

    function hidePass(id) {
      let show = document.querySelector("#" + id).previousElementSibling.querySelector(".bx-show");
      let hide = document.querySelector("#" + id).previousElementSibling.querySelector(".bxs-hide");
      let pass = document.getElementById(id);
      hide.style.display = "none";
      show.style.display = "block";
      pass.type = "password";
    }

    const numberInput = document.querySelector('#phone');
    numberInput.addEventListener('input', () => {
    const inputValue = numberInput.value;
    const nonNumericRegex = /[^0-9]/g;

    if (nonNumericRegex.test(inputValue)) {
      numberInput.value = inputValue.replace(nonNumericRegex, '');
    }
});
  </script>
</body>

</html>