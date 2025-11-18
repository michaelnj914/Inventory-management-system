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
    <script
      src="https://kit.fontawesome.com/3703a612af.js"
      crossorigin="anonymous"
    ></script>
  </head>

  <body>
    <div id="dashboardMainContainer">
    
      <?php include('partials/app_sidebar.php') ?>

      <div class="dashboard_content_container" id="dashboard_content_container">
        
        <?php include('partials/app_topNav.php') ?>

        <div class="dashboard_content">
          <div class="dashboard_content_main">
            <form action="" class="appForm">
              <div>
                <label for="first_name">First Name</label>
                <input type="text" id="first_name" name="first_name">
              </div>
              <div>
                <label for="last_name">Last Name</label>
                <input type="text" id="last_name" name="last_name">
              </div>
              <div>
                <label for="email">Email</label>
                <input type="text" id="email" name="email">
              </div>
              <div>
                <label for="password">password</label>
                <input type="password" id="password" name="password">
              </div>
              <button type="submit"><i class="fa fa-plus"></i> Add User</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <script src="js/script.js"></script>
  </body>
</html>
