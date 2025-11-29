  <div class="dashboard_sidebar" id="dashboard_slidebar">
        <h3 class="dashboard_logo" id="dashboard_logo">LMS</h3>
        <div class="dashboard_sidebar_user">
          <img src="images/image1.jpg" id="userimage" alt="User image." />

          <span id="username"><?= $user['first_name'] . ' ' . $user['last_name'] ?></span>

        </div>
        
        <div class="dashboard_sidebar_menus">
          <ul class="dashboard_menu_lists">
            <!--class="menuActive"-->
            <li>
              <a href="./dashboard.php"
                ><i class="fa fa-dashboard"></i
                ><span class="menuText">DashBoard</span></a
              >
            </li>
            <li>
              <!-- <i class="fa fa-user-times" aria-hidden="true"></i> -->
              <a href="./add_user.php"
                ><i class="fa fa-user-plus"></i
                ><span class="menuText">Add User</span></a
              >
            </li>
           
          </ul>
        </div>
        <!---Sidebar-->

      </div>