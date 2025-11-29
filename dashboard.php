<?php
  session_start();
  if(!isset($_SESSION['user'])) header("location: login.php");
  $user = $_SESSION['user'];
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DASHBOARD - Inventory Management System</title>
    <link rel="stylesheet" href="css/styles.css" />
     <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
  </head>

  <body>
    <div id="dashboardMainContainer">

       <?php include('partials/app_sidebar.php') ?>
      <!-- <div class="dashboard_sidebar" id="dashboard_slidebar">
        <h3 class="dashboard_logo" id="dashboard_logo">LMS</h3>
        <div class="dashboard_sidebar_user">
          <img src="images/image1.jpg" id="userimage" alt="User image." />

          <span id="username"><?= $user['first_name'] . ' ' . $user['last_name'] ?></span>

        </div>
        <div class="dashboard_sidebar_menus">
          <ul class="dashboard_menu_lists">
            <li class="menuActive">
              <a href=""
                ><i class="fa fa-dashboard"></i
                ><span class="menuText">DashBoard</span></a
              >
            </li>
            <li>
              <a href=""
                ><i class="fa-solid fa-bullhorn"></i
                ><span class="menuText">Campaigns</span></a
              >
            </li>
            <li>
              <a href=""
                ><i class="fa-solid fa-dollar-sign"></i
                ><span class="menuText">Revenue Management</span></a
              >
            </li>
            <li>
              <a href=""
                ><i class="fa-solid fa-receipt"></i
                ><span class="menuText">Accounts Recievable</span></a
              >
            </li>
            <li>
              <a href=""
                ><i class="fa-solid fa-gears"></i
                ><span class="menuText">Configuration</span></a
              >
            </li>
            <li>
              <a href=""
                ><i class="fa-solid fa-chart-line"></i
                ><span class="menuText">Stast</span></a
              >
            </li>
          </ul>
        </div>
      </div> -->

      <div class="dashboard_content_container" id="dashboard_content_container">

        <?php include('partials/app_topNav.php') ?>
        <!-- <div class="dashboard_topNav">
          <a href="" id="toggleBtn"><i class="fa fa-navicon"></i></a>

          <a href="database/logout.php" id="logoBtn"><i class="fa fa-power-off"></i> Log Out</a>

        </div> -->

        <div class="dashboard_content">
          <div class="dashboard_content_main"></div>
        </div>
      </div>
    </div>

    <script src="js/script.js"> </script>
  </body>
</html>
