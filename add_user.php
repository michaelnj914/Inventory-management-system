<?php
  session_start();
  if(!isset($_SESSION['user'])) header("location: login.php");
  $_SESSION['table'] = 'users';
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

      <div class="dashboard_content_container" id="dashboard_content_container">
        
        <?php include('partials/app_topNav.php') ?>

        <div class="dashboard_content">

          <div class="row">
            <div class="column column-5">
              <div class="dashboard_content_main">
                <div class="userAddFormContainer">
                  <form action="database/add.php" method="POST" class="appForm">
                    <div class="appFormInputContainer">
                      <label for="first_name">First Name</label>
                      <input type="text" id="first_name" class="appFormInput" name="first_name">
                    </div>
                    <div class="appFormInputContainer">
                      <label for="last_name">Last Name</label>
                      <input type="text" id="last_name" class="appFormInput" name="last_name">
                    </div>
                    <div class="appFormInputContainer">
                      <label for="email">Email</label>
                      <input type="text" id="email" class="appFormInput" name="email">
                    </div>
                    <div class="appFormInputContainer"> 
                      <label for="password">password</label>
                      <input type="password" id="password" class="appFormInput" name="password">
                    </div>
                    <button type="submit" class="appBtn"><i class="fa fa-plus"></i> Add User</button>
                  </form>
                  <?php
                      if(isset($_SESSION['response'])) {
                          $reponse_message = $_SESSION['response']['message'];
                          $is_success = $_SESSION['response']['success'];
                  ?>
                      <div class="responseMessage">
                        <p class="responseMessage <?= $is_success ?
                        'responseMessage_sucess' : 'responseMessage_error' ?>">
                          <?=  $reponse_message ?>
                        </p>
                      </div>
                  <?php unset($_SESSION['response']); } ?>

                </div>
              </div>
            </div>

            <div class="column column-7">
                      
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="js/script.js"></script>
  </body>
</html>
