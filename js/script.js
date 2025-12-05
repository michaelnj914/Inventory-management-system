var sideBarOpen = true;

toggleBtn.addEventListener("click", (event) => {
  event.preventDefault();

  if (sideBarOpen) {
    dashboard_slidebar.style.width = "10%";
    dashboard_slidebar.style.transition = "0.3s all";
    dashboard_content_container.style.width = "90%";
    dashboard_logo.style.fontSize = "55px";
    userimage.style.width = "40px";
    username.style.fontSize = "15px";

    menuIcons = document.getElementsByClassName("menuText");
    // console.log(menuIcons);
    for (var i = 0; i < menuIcons.length; i++) {
      menuIcons[i].style.display = "none";
    }

    document.getElementsByClassName("dashboard_menu_lists")[0].style.textAlign =
      "center";
    sideBarOpen = false;
  } else {
    dashboard_slidebar.style.width = "15%";
    dashboard_content_container.style.width = "90%";
    dashboard_logo.style.fontSize = "70px";
    userimage.style.width = "55px";
    username.style.fontSize = "20px";

    menuIcons = document.getElementsByClassName("menuText");
    // console.log(menuIcons);
    for (var i = 0; i < menuIcons.length; i++) {
      menuIcons[i].style.display = "inline-block";
    }

    document.getElementsByClassName("dashboard_menu_lists")[0].style.textAlign =
      "left";
    sideBarOpen = true;
  }
});
