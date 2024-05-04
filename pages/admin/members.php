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
    <link rel="stylesheet" href="../../assets/styles/members.css" />
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
          <li class="hovered">
            <a href="#">
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

      <div class="members-container">
        <div class="card-container">
          <div class="card card1">
            <div class="card-header">
              <img src="../../assets/images/member2.jpg" alt="" />

              <div class="text-container">
                <h3>Vince Jeremy P. Canaria</h3>
                <p><span>@vjpcanaria</span></p>
              </div>
            </div>

            <div class="card-body">
              <p>
                As the frontend developer, I, Vince Jeremy P. Canaria, will
                create the engaging user interface for FrozenVentures.
              </p>
            </div>

            <div class="card-footer">
              <p><span>10:59 PM · Apr 25, 2024</span></p>
              <button onclick="showMember1()">View More</button>
            </div>
          </div>

          <div class="card card2">
            <div class="card-header">
              <img src="../../assets/images/member4.jpg" alt="" />

              <div class="text-container">
                <h3>Joschua G. Ordonio</h3>
                <p><span>@jgordonio</span></p>
              </div>
            </div>

            <div class="card-body">
              <p>
                As the database admin, I, Joschua G. Ordonio, will manage the
                database operations for FrozenVentures.
              </p>
            </div>

            <div class="card-footer">
              <p><span>7:20 AM · Apr 26, 2024</span></p>
              <button onclick="showMember2()">View More</button>
            </div>
          </div>

          <div class="card card3">
            <div class="card-header">
              <img src="../../assets/images/member1.jpg" alt="" />

              <div class="text-container">
                <h3>Edzel John R. Angeles</h3>
                <p><span>@ejrangeles</span></p>
              </div>
            </div>

            <div class="card-body">
              <p>
                In my role as the backend developer, I, Edzel John R. Angeles,
                will ensure the seamless functionality of FrozenVentures.
              </p>
            </div>

            <div class="card-footer">
              <p><span>9:56 PM · Apr 21, 2024</span></p>
              <button onclick="showMember3()">View More</button>
            </div>
          </div>

          <div class="card card4">
            <div class="card-header">
              <img src="../../assets/images/member3.jpg" alt="" />

              <div class="text-container">
                <h3>Rhis Miguel A. Dela Cruz</h3>
                <p><span>@rmadelacruz</span></p>
              </div>
            </div>

            <div class="card-body">
              <p>
                In my capacity as the system analyst, I, Rhis Miguel A. Dela
                Cruz, will analyze and design the system architecture for
                FrozenVentures.
              </p>
            </div>

            <div class="card-footer">
              <p><span>8:01 AM · Apr 24, 2024</span></p>
              <button onclick="showMember4()">View More</button>
            </div>
          </div>
        </div>
      </div>

      <div class="member-details">
        <div class="card-container">
          <div class="card card1" id="card1">
            <div class="img-card">
              <img src="../../assets/images/member2.jpg" alt="" />
            </div>

            <div class="info-card">
              <div class="first-info">
                <p><span>Name:</span> Vince Jeremy P. Canaria</p>
                <p><span>Gender:</span> Male</p>
                <p><span>Age:</span> 20 Years Old</p>
              </div>

              <div class="second-info">
                <p><span>Address:</span> Cupang Proper Balanga City, Bataan</p>
                <p><span>Email:</span> vjpcanaria@bpsu.edu.ph</p>
                <p><span>Role:</span> Frontend Developer</p>
              </div>
            </div>

            <div class="role-card">
              <p><span>Frontend Developer</span></p>
              <p>
                As the frontend developer for FrozenVentures, my key
                responsibilities will include designing and implementing an
                engaging, responsive, and cross-browser compatible user
                interface. I will collaborate with designers to translate their
                concepts into functional UIs, optimize performance, integrate
                with backend systems, maintain clean code, conduct testing and
                debugging, stay updated with the latest technologies, and
                effectively communicate across teams to deliver exceptional user
                experiences.
              </p>
            </div>

            <div class="button-container">
              <button onclick="closeMember1()">Close</button>
            </div>
          </div>

          <div class="card card2" id="card2">
            <div class="img-card">
              <img src="../../assets/images/member4.jpg" alt="" />
            </div>

            <div class="info-card">
              <div class="first-info">
                <p><span>Name:</span> Joschua G. Ordonio</p>
                <p><span>Gender:</span> Male</p>
                <p><span>Age:</span> 21 Years Old</p>
              </div>

              <div class="second-info">
                <p><span>Address:</span> Cataning Balanga City, Bataan</p>
                <p><span>Email:</span> jgordonio@bpsu.edu.ph</p>
                <p><span>Role:</span> Database Admin</p>
              </div>
            </div>

            <div class="role-card">
              <p><span>Database Admin</span></p>
              <p>
                As the database admin for FrozenVentures, my primary
                responsibility is to ensure the integrity, security, and
                efficient operation of the company's database systems. I will
                design and implement robust database schemas, optimize
                performance through maintenance tasks, implement security
                measures, and develop backup and disaster recovery strategies.
                Additionally, I will collaborate with developers and analysts on
                data integration, ETL processes, and documentation. My expertise
                will contribute to the reliability and scalability of
                FrozenVentures' database systems, supporting data-driven
                decision-making and overall business objectives.
              </p>
            </div>

            <div class="button-container">
              <button onclick="closeMember2()">Close</button>
            </div>
          </div>

          <div class="card card3" id="card3">
            <div class="img-card">
              <img src="../../assets/images/member1.jpg" alt="" />
            </div>

            <div class="info-card">
              <div class="first-info">
                <p><span>Name:</span> Edzel John R. Angeles</p>
                <p><span>Gender:</span> Male</p>
                <p><span>Age:</span> 23 Years Old</p>
              </div>

              <div class="second-info">
                <p><span>Address:</span> Sapa Samal, Bataan</p>
                <p><span>Email:</span> ejrangeles@bpsu.edu.ph</p>
                <p><span>Role:</span> Backend Developer</p>
              </div>
            </div>

            <div class="role-card">
              <p><span>Backend Developer</span></p>
              <p>
                As the backend developer for FrozenVentures, I will be
                responsible for developing and maintaining the server-side
                logic, APIs, and services that power the application's core
                functionality. I will ensure data integrity and security through
                robust authentication, authorization, and data validation
                processes. Collaborating with frontend developers and database
                administrators, I will integrate systems and facilitate smooth
                data exchange. My focus will be on delivering secure, scalable,
                and high-performance backend architectures, adhering to best
                practices, and implementing comprehensive testing strategies.
                Effective communication and collaboration across teams will be
                vital to align objectives and resolve issues.
              </p>
            </div>

            <div class="button-container">
              <button onclick="closeMember3()">Close</button>
            </div>
          </div>

          <div class="card card4" id="card4">
            <div class="img-card">
              <img src="../../assets/images/member3.jpg" alt="" />
            </div>

            <div class="info-card">
              <div class="first-info">
                <p><span>Name:</span> Rhis Miguel A. Dela Cruz</p>
                <p><span>Gender:</span> Male</p>
                <p><span>Age:</span> 20 Years Old</p>
              </div>

              <div class="second-info">
                <p><span>Address:</span> Ibaba Samal, Bataan</p>
                <p><span>Email:</span> rmadelacruz@bpsu.edu.ph</p>
                <p><span>Role:</span> System Analyst</p>
              </div>
            </div>

            <div class="role-card">
              <p><span>System Analyst</span></p>
              <p>
                As the system analyst for FrozenVentures, I will play a crucial
                role in analyzing business requirements and designing an
                efficient and scalable system architecture aligned with the
                company's goals. My responsibilities will include gathering and
                analyzing requirements from stakeholders, designing the overall
                system architecture, evaluating and selecting appropriate
                technologies, developing data models and database designs,
                modeling business processes and workflows, ensuring system
                integration and interoperability, assessing risks and proposing
                mitigation strategies, creating comprehensive documentation, and
                collaborating closely with cross-functional teams. Through my
                expertise and problem-solving skills, I will contribute to the
                development of a robust system architecture that meets
                FrozenVentures' needs and supports its long-term growth.
              </p>
            </div>

            <div class="button-container">
              <button onclick="closeMember4()">Close</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="../../assets/js/members.js"></script>
  </body>
</html>
