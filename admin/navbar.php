<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../style/nav.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <nav class="sidebar row">
        <p class="logo pt-3"><img src="../src/logo2.png" width="45px" height="50px" class=" m-2 mb-0 mt-0 col-3"><a href="#" class="col-9">&nbsp EDGE</a></p>

        <div class="menu-content">
            <ul class="menu-items p-0 m-0">
                <div class="menu-title p-0 m-0"><h2 class="p-3 pb-0">MENU</h2></div>
                <hr>
                    <li class="item">
                        <a href="#" class="p-3"><i class="fa-solid fa-chart-line"></i> &nbsp Dashboard</a>
                    </li>
                    <li class="item">
                      <div class="submenu-item p-3 row">
                        <span class="col-10"><i class="fa-sharp fa-solid fa-gear"></i> &nbsp Utilities</span>
                        <i class="fa-solid fa-chevron-right col-2"></i>
                      </div>
                      <ul class="menu-items submenu p-0 m-0">
                        <div class="menu-title p-3">
                          <i class="fa-solid fa-chevron-left"></i>
                          Maintenance
                        </div>
                        <li class="item">
                          <a href="#" class="p-3"><i class="fa-solid fa-user-pen"></i> &nbsp User Maintenance</a>
                        </li>
                        <li class="item">
                          <a href="#" class="p-3"><i class="fa-solid fa-gear"></i> &nbsp System Maintenance</a>
                        </li>
                        <li class="item">
                          <a href="#" class="p-3"><i class="fa-solid fa-building-shield"></i> &nbsp Project Maintenance</a>
                        </li>
                      </ul>
                    </li>
        </div>
        <footer>
              <p class="logo pt-3"><a href="#" class="col-9 logout">Logout</a></p>
        </footer>
    </nav>

    <nav class="navbar">
        <i class="fa-solid fa-bars" id="sidebar-close"></i>
    </nav>




<script type="text/javascript">
  const sidebar = document.querySelector(".sidebar");
const sidebarClose = document.querySelector("#sidebar-close");
const menu = document.querySelector(".menu-content");
const menuItems = document.querySelectorAll(".submenu-item");
const subMenuTitles = document.querySelectorAll(".submenu .menu-title");

sidebarClose.addEventListener("click", () => sidebar.classList.toggle("close"));

menuItems.forEach((item, index) => {
item.addEventListener("click", () => {
    menu.classList.add("submenu-active");
    item.classList.add("show-submenu");
        menuItems.forEach((item2, index2) => {
            if (index !== index2) {
            item2.classList.remove("show-submenu");
        }
        });
    });
});

subMenuTitles.forEach((title) => {
    title.addEventListener("click", () => {
        menu.classList.remove("submenu-active");
    });
});
</script>
</body>
</html>