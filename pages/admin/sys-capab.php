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
    <link rel="stylesheet" href="../../assets/styles/sys-capab.css">
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
          <li>
            <a href="cap-desc.php">
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
          <li class="hovered">
            <a href="#">
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

      <div class="capabilities-container">
        <h2><span>FrozenVentures:</span> System Capabilites</h2>

        <div class="capability-container">
          <div class="capability capab1">
            <div class="capab-header">
              <img src="../../assets/images/suggestion.png" alt="123" />
              <h4>Suggestion Module</h4>
            </div>

            <p>
              Allergy flavor suggestion module helps customers select suitable
              ice cream flavors based on their allergies, ensuring a safe and
              enjoyable experience.
            </p>
          </div>

          <div class="capability capab2">
            <div class="capab-header">
              <img src="../../assets/images/2dmapping.png" alt="123" />
              <h4>2D Mapping</h4>
            </div>

            <p>
              The 2D mapping feature allows efficient route planning for ice
              cream delivery, optimizing delivery times and ensuring timely
              service.
            </p>
          </div>

          <div class="capability capab3">
            <div class="capab-header">
              <img src="../../assets/images/promotion.png" alt="123" />
              <h4>Promotion System</h4>
            </div>

            <p>
              The promotion system enables the implementation of various
              promotional strategies, such as discounts and offers, to attract
              more customers and increase sales.
            </p>
          </div>

          <div class="capability capab3">
            <div class="capab-header">
              <img src="../../assets/images/inventory.png" alt="123" />
              <h4>Inventory Management</h4>
            </div>

            <p>
              Inventory management ensures that the right amount of ice cream is
              available at all times, minimizing stockouts and reducing wastage.
            </p>
          </div>

          <div class="capability capab4">
            <div class="capab-header">
              <img src="../../assets/images/order.png" alt="123" />
              <h4>Order Management</h4>
            </div>

            <p>
              Order management streamlines the ordering process, making it easy
              for customers to place orders and for staff to fulfill them
              promptly.
            </p>
          </div>

          <div class="capability capab5">
            <div class="capab-header">
              <img src="../../assets/images/sms.png" alt="123" />
              <h4>SMS Technology</h4>
            </div>

            <p>
              SMS technology allows for instant communication with customers,
              providing order updates, delivery notifications, and promotional
              messages directly to their phones.
            </p>
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
