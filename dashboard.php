<?php
  // start the session.
  session_start();
  $user = $_SESSION['user'];
  
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DASHBOARD - Inventory Management System</title>
    <link rel="stylesheet" href="css/styles.css" />
    <script
      src="https://kit.fontawesome.com/3703a612af.js"
      crossorigin="anonymous"
    ></script>
  </head>

  <body>
    <div id="dashboardMainContainer">
      <div class="dashboard_sidebar" id="dashboard_slidebar">
        <h3 class="dashboard_logo" id="dashboard_logo">LMS</h3>
        <div class="dashboard_sidebar_user">
          <img src="images/image1.jpg" id="userimage" alt="User image." />
          <span><?= $user['first_name'] . ' ' . $user['last_name'] ?></span>
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
      </div>

      <div class="dashboard_content_container" id="dashboard_content_container">
        <div class="dashboard_topNav">
          <a href="" id="toggleBtn"><i class="fa fa-navicon"></i></a>
          <a href="" id="logoBtn"><i class="fa fa-power-off"></i> Log Out</a>
        </div>

        <div class="dashboard_content">
          <div class="dashboard_content_main"></div>
        </div>
      </div>
    </div>

    <script>
      var sideBarOpen = true;

      toggleBtn.addEventListener("click", (event) => {
        event.preventDefault();

        if (sideBarOpen) {
          dashboard_slidebar.style.width = "10%";
          dashboard_slidebar.style.transition = "0.3s all";
          dashboard_content_container.style.width = "90%";
          dashboard_logo.style.fontSize = "60px";
          userimage.style.width = "40px";
          username.style.fontSize = "15px";

          menuIcons = document.getElementsByClassName("menuText");
          // console.log(menuIcons);
          for (var i = 0; i < menuIcons.length; i++) {
            menuIcons[i].style.display = "none";
          }

          document.getElementsByClassName(
            "dashboard_menu_lists"
          )[0].style.textAlign = "center";
          sideBarOpen = false;
        } else {
          dashboard_slidebar.style.width = "20%";
          dashboard_content_container.style.width = "80%";
          dashboard_logo.style.fontSize = "80px";
          userimage.style.width = "80px";
          username.style.fontSize = "30px";

          menuIcons = document.getElementsByClassName("menuText");
          // console.log(menuIcons);
          for (var i = 0; i < menuIcons.length; i++) {
            menuIcons[i].style.display = "inline-block";
          }

          document.getElementsByClassName(
            "dashboard_menu_lists"
          )[0].style.textAlign = "left";
          sideBarOpen = true;
        }
      });
    </script>
  </body>
</html>
