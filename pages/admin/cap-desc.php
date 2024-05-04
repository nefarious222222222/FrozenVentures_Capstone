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
    <link rel="stylesheet" href="../../assets/styles/cap-desc.css" />
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
          <li>
            <a href="admin.php">
              <span class="icon"><i class="bx bxs-check-shield"></i></span>
              <span class="title">Admin Page</span>
            </a>
          </li>
          <li class="hovered">
            <a href="#">
              <span class="icon"><i class="bx bxs-mobile"></i></span>
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
            <a href="sys-capab.php">
              <span class="icon"><i class="bx bxs-cuboid"></i></span>
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

      <div class="description-container">
        <div class="container">
          <div class="img-container">
            <img src="../../assets/images/desc1.png" alt="123" />
          </div>

          <div class="td-container">
            <h4><span>FrozenVentures:</span> System Description</h4>

            <p>
              FrozenVentures seeks to transform the ice cream distribution
              industry by offering an all-in-one platform. This innovative
              platform streamlines operations, enhances customer experience, and
              facilitates business growth through the integration of
              cutting-edge features and intelligent data usage. The primary
              objective is to develop a web-based application portal that
              seamlessly incorporates SMS technology, enabling efficient
              transaction management while prioritizing customer safety and
              satisfaction.
            </p>
          </div>

          <div class="card-container">
            <h3>Benefits of <span>FrozenVentures</span></h3>

            <div class="cards">
              <div class="card">
                <p>Streamlined Operations</p>
              </div>

              <div class="card">
                <p>Enhanced Customer Experience</p>
              </div>

              <div class="card">
                <p>Scalability and Flexibility</p>
              </div>

              <div class="card">
                <p>Competitive Advantage</p>
              </div>
            </div>
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
  </body>
</html>
