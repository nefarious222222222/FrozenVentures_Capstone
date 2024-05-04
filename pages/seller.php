<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FrozenVentures</title>
    <link
      rel="shortcut icon"
      href="../assets/images/logo.png"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="../assets/styles/seller.css" />
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
              <img src="../assets/images/logo.png" alt="" />
              <span class="title"><h2>FrozenVentures</h2></span>
            </a>
          </li>
          <li class="hovered">
            <a href="#">
              <span class="icon"><i class="bx bxs-dashboard"></i></span>
              <span class="title">Dashboard</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="icon"><i class="bx bxs-group"></i></span>
              <span class="title">Customers</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="icon"><i class="bx bxs-box"></i></span>
              <span class="title">Inventory</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="icon"><i class="bx bxs-chat"></i></span>
              <span class="title">Messages</span>
            </a>
          </li>
          <li>
            <a href="#">
              <span class="icon"><i class="bx bxs-cog"></i></span>
              <span class="title">Settings</span>
            </a>
          </li>
          <li>
            <a href="#">
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

        <div class="search">
          <label>
            <input type="text" placeholder="Search Here" />
            <i class="bx bx-search-alt-2"></i>
          </label>
        </div>

        <div class="user">
          <img src="../assets/images/logo.png" alt="" />
        </div>
      </div>

      <h2 class="title-container">Dashboard</h2>

      <div class="cards">
        <div class="card">
          <div class="value">
            <div class="numbers">100</div>
            <div class="card-name">Total Sales</div>
          </div>
          <div class="icon">
            <i class="bx bx-money-withdraw"></i>
          </div>
        </div>

        <div class="card">
          <div class="value">
            <div class="numbers">100</div>
            <div class="card-name">Total Orders</div>
          </div>
          <div class="icon">
            <i class="bx bxs-package"></i>
          </div>
        </div>

        <div class="card">
          <div class="value">
            <div class="numbers">100</div>
            <div class="card-name">Total Visitors</div>
          </div>
          <div class="icon">
            <i class="bx bx-show"></i>
          </div>
        </div>

        <div class="card">
          <div class="value">
            <div class="numbers">Php 100,200</div>
            <div class="card-name">Total Earnings</div>
          </div>
          <div class="icon">
            <i class="bx bx-money"></i>
          </div>
        </div>
      </div>

      <div class="graph-box">
        <div class="box">
          <canvas id="myChart"></canvas>
        </div>
        <div class="box">
          <canvas id="myEarning"></canvas>
        </div>
      </div>

      <div class="orders">
        <div class="recent-orders">
          <div class="card-header">
            <h2>Recent Orders</h2>
            <a href="#" class="view-button">View All</a>
          </div>

          <table>
            <thead>
              <tr>
                <td>Name</td>
                <td>Price</td>
                <td>Product</td>
                <td>Payment</td>
                <td>Status</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Eleven</td>
                <td>Php 25.99</td>
                <td>Mancha</td>
                <td>Gcash</td>
                <td><span class="status delivered">Delivered</span></td>
              </tr>
              <tr>
                <td>Mike Wheeler</td>
                <td>Php 19.99</td>
                <td>Vanilla</td>
                <td>COD</td>
                <td><span class="status processing">Processing</span></td>
              </tr>
              <tr>
                <td>Dustin Henderson</td>
                <td>Php 39.99</td>
                <td>Rocky Road</td>
                <td>Gcash</td>
                <td><span class="status delivered">Delivered</span></td>
              </tr>
              <tr>
                <td>Will Byers</td>
                <td>Php 14.99</td>
                <td>Chocolate</td>
                <td>COD</td>
                <td><span class="status delivered">Delivered</span></td>
              </tr>
              <tr>
                <td>Lucas Sinclair</td>
                <td>Php 29.99</td>
                <td>Mancha</td>
                <td>COD</td>
                <td><span class="status processing">Processing</span></td>
              </tr>
              <tr>
                <td>Max Mayfield</td>
                <td>Php 9.99</td>
                <td>Vanilla</td>
                <td>Gcash</td>
                <td><span class="status delivered">Delivered</span></td>
              </tr>
              <tr>
                <td>Jim Hopper</td>
                <td>Php 49.99</td>
                <td>Rocky Road</td>
                <td>Gcash</td>
                <td><span class="status delivered">Delivered</span></td>
              </tr>
              <tr>
                <td>Jonathan Byers</td>
                <td>Php 34.99</td>
                <td>Chocolate</td>
                <td>Gcash</td>
                <td><span class="status processing">Processing</span></td>
              </tr>
              <tr>
                <td>Nancy Wheeler</td>
                <td>Php 7.99</td>
                <td>Vanilla</td>
                <td>Gcash</td>
                <td><span class="status delivered">Delivered</span></td>
              </tr>
              <tr>
                <td>Steve Harrington</td>
                <td>Php 59.99</td>
                <td>Mancha</td>
                <td>COD</td>
                <td><span class="status delivered">Delivered</span></td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="recent-customers">
          <div class="card-header">
            <h2>Recent Customers</h2>
          </div>

          <table>
            <tr>
              <td width="60px">
                <div class="image-box">
                  <img src="../assets/images/1.jpg" alt="" />
                </div>
              </td>
              <td>
                <h4>Mike Wheeler<br /><span>Balanga City</span></h4>
              </td>
            </tr>
            <tr>
              <td width="60px">
                <div class="image-box">
                  <img src="../assets/images/2.jpg" alt="" />
                </div>
              </td>
              <td>
                <h4>Eleven<br /><span>Orani</span></h4>
              </td>
            </tr>
            <tr>
              <td width="60px">
                <div class="image-box">
                  <img src="../assets/images/3.jpg" alt="" />
                </div>
              </td>
              <td>
                <h4>Dustin Henderson<br /><span>Orion</span></h4>
              </td>
            </tr>
            <tr>
              <td width="60px">
                <div class="image-box">
                  <img src="../assets/images/4.jpg" alt="" />
                </div>
              </td>
              <td>
                <h4>Will Byers<br /><span>Samal</span></h4>
              </td>
            </tr>
            <tr>
              <td width="60px">
                <div class="image-box">
                  <img src="../assets/images/3.jpg" alt="" />
                </div>
              </td>
              <td>
                <h4>Lucas Sinclair<br /><span>Hermosa</span></h4>
              </td>
            </tr>
            <tr>
              <td width="60px">
                <div class="image-box">
                  <img src="../assets/images/4.jpg" alt="" />
                </div>
              </td>
              <td>
                <h4>Max Mayfield<br /><span>Balanga City</span></h4>
              </td>
            </tr>
            <tr>
              <td width="60px">
                <div class="image-box">
                  <img src="../assets/images/1.jpg" alt="" />
                </div>
              </td>
              <td>
                <h4>Jim Hopper<br /><span>Mariveles</span></h4>
              </td>
            </tr>
            <tr>
              <td width="60px">
                <div class="image-box">
                  <img src="../assets/images/2.jpg" alt="" />
                </div>
              </td>
              <td>
                <h4>Jonathan Byers<br /><span>Limay</span></h4>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.2/dist/chart.umd.min.js"></script>
    <script src="../assets/js-chart/my-chart.js"></script>
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
