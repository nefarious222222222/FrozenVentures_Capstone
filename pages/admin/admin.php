<?php
require("../../server/checksign.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FrozenVentures</title>
    <link
      rel="shortcut icon"
      href="../../assets/images/logo.png"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="../../assets/styles/all-admin.css" />
    <link rel="stylesheet" href="../../assets/styles/admin.css">
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="sidebar-container">
      <div class="navigation active">
        <ul>
          <li>
            <a href="#">
              <img src="../../assets/images/logo.png" alt="" />
              <span class="title"><h2>FrozenVentures</h2></span>
            </a>
          </li>
          <li class="hovered">
            <a href="#">
              <span class="icon"><i class='bx bxs-check-shield'></i></span>
              <span class="title">Admin Page</span>
            </a>
          </li>
          <li>
            <a href="cap-desc.php">
              <span class="icon"><i class='bx bxs-mobile' ></i></span>
              <span class="title">Capstone Description</span>
            </a>
          </li>
          <li>
            <a href="members.php">
              <span class="icon"><i class="bx bxs-group"></i></span>
              <span class="title">Members</span>
            </a>
          </li>
          <li>
            <a href="cap-desc.php">
              <span class="icon"><i class='bx bxs-cuboid' ></i></span>
              <span class="title">System Capabilities</span>
            </a>
          </li>
          <li>
            <a href="../../server/signout.php">
              <span class="icon"><i class="bx bx-log-out"></i></span>
              <span class="title">Sign Out</span>
            </a>
          </li>
        </ul>
      </div>
    </div>

    <div class="main-container">
        <div class="topbar">
          <div class="toggle">
            <i class="bx bx-menu"></i>
          </div>
  
          <div class="title">
            <h2>FrozenVentures</h2>
          </div>
  
          <div class="user">
            <img src="../../assets/images/logo.png" alt="" />
          </div>
        </div>

        <div class="admin-container">
          <div class="hero">
            <div class="left">
              <h2><span>FrozenVentures:</span>  An Online Portal For Ice Cream Distributors With SMS Technology</h2>
              <p>Our team of four - a backend developer, database admin, frontend developer, and system analyst - is diligently working to make FrozenVentures a platform that helps people easily access and enjoy their desired ice cream flavors and products.</p>
              <p>FrozenVentures is an innovative online platform revolutionizing the ice cream distribution industry. It offers a comprehensive web-based application portal with SMS technology, streamlining operations, enhancing customer experiences, and driving business growth through efficient distribution, personalized service, and data-driven insights.</p>
            </div>
            <div class="right">
              <img class="item item1" src="../../assets/images/admin1.jpg" alt="">
              <img class="item item2" src="../../assets/images/admin2.jpg" alt="">
              <img class="item item3" src="../../assets/images/admin3.jpg" alt="">
            </div>
          </div>
        </div>
    </div>

    <script>
      let toggle = document.querySelector(".toggle");
      let navigation = document.querySelector(".navigation");
      let main = document.querySelector(".main-container");

      toggle.onclick = function () {
        navigation.classList.toggle("active");
        main.classList.toggle("active");
      };

      let list = document.querySelectorAll(".navigation li");
      function activeLink() {
        list.forEach((item) => item.classList.remove("hovered"));
        this.classList.add("hovered");
      }
      list.forEach((item) => item.addEventListener("mouseover", activeLink));
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </body>
</html>
