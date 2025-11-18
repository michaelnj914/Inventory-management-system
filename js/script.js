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

    document.getElementsByClassName("dashboard_menu_lists")[0].style.textAlign =
      "center";
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

    document.getElementsByClassName("dashboard_menu_lists")[0].style.textAlign =
      "left";
    sideBarOpen = true;
  }
});
