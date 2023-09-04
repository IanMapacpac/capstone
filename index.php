<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&family=Raleway:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css">
    <title>Landing Page</title>
</head>
<body>
<header>
        <!-- MAIN NAV -->
        <nav class="navbar-expand-lg p-md-1 navbar navbar-dark bg-dark ">
            <div class="container">
                <div class="navbar-brand p-0 m-0 ">
                    <img src="src/logo2.png" alt="" srcset="" width="80" height="80">
                </div>
            
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <div class="mx-auto"></div>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link text-white nav-link-ltr mx-2" href="#main">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white nav-link-ltr mx-2" href="#about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white nav-link-ltr mx-2" href="#contact">Contact</a>
                            </li>
                        </ul>
                </div>
            </div>
        </nav>
</header>
    <!--- SIDEBAR --->
    <div class="sidebar ">
        <div class="toggle-btn">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="links text-justify">
            <h2 class="m-3">Menu</h2>
            <hr>
            <a href="#main" class="link">
                <i class="fa-solid fa-house"></i>
                Home
            </a>
            <a href="#about" class="link">
                <i class="fa-solid fa-address-card"></i>
                About
            </a>
            <a href="#contact" class="link">
                <i class="fa-solid fa-phone"></i>
                Contacts
            </a>
        </div>
    </div>
<!-- MAIN CONTENT -->
    <main class="container-fluid hero_container pt-0 mt-0 " id="main" style="background: url(src/bg-main.jpeg);">
        <div>
            <div class="row">
                <div class="col-md-7 section_hero">
                    <div class="lc-block me-lg-5">
                        <div  class="text-white">
                            <h1 class="display-1 pb- fw-bolder main_text text-white">EDGE</h1>
                            <div class="pb-3 txt_container ">
                                <p class="text_span h1">Executive</p><p class=" text_span h1">Dashboard for</p>
                            </div>
                            <div class="pb-3 txt_container sub_text ">
                                <p class="text_span h1">Governor’s</p> <p class="text_span h1">Evaluation</p>
                            </div>
                        </div>
                    </div>
                    <div class="lc-block pt-2 px-0">
                        <a class="btn btn-warning mt-2 text-white " href="login.php" role="button">Login</a> &nbsp
                        <a class="btn btn-outline-warning text-white mt-2" href="signup.php" role="button">Sign Up</a>
                    </div>
                </div>
                <div class="col-md-5 my-auto pt-5">
                    <div class="lc-block pt-5">
                        <div class="ratio ratio-1x1 img_gov" lc-helper="video-embed">
                            <img src="src/gov_2.png" alt="gov image" srcset="" class="w-75 h-75 img-fluid">
                        </div>
                    </div>
                </div>
            </div>
    </main>
    <!-- DIVIDER -->
    <nav class="navbar-expand-lg divider p-3 mb-0 container-fluid"></nav>
    <!-- MAIN SECTION -->
    <section class="section m-5 mt-0 pt-4 " id="about">
        <h1 class="display-3 text-center pb-5 mb-5">About Us</h1>
        <div class="section_container row hidden pb-3" id="hidden" >
            <div class="img_container col-xl-4 col-lg-4 col-md-4 mt-1 ">
                <div class="img">
                    <img src="src/engr_1.jpg" class="img-fluid img-front-one animation">
                </div>
            </div>
            <div class=" col-xl-8 col-lg-8 col-md-8 ">
                <h1 class="h1 pb-3 animation">Our Mission</h1>
                <p class="p_txt pb-3 animation">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta iusto impedit assumenda nobis nisi veritatis! <span id="dots">...</span><span id="more">Perferendis modi libero sit dicta officia numquam nisi. Quas natus inventore soluta quidem mollitia expedita.</span></p>
                <button class="btn btn-warning  text-white animation" onclick="myFunction()" id="moreBtn" type="button">Read More..</button>
            </div>
        </div>
        <div class="section_container row mt-5  hidden" id="hidden">
                <div class=" col-xl-8 col-lg-8 col-md-8 mb-3 ">
                    <h1 class="h1 pb-3 animation_two">Our Vision</h1>
                    <p class="p_txt pb-3 animation_two">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta iusto impedit assumenda nobis nisi veritatis!<span id="dot">...</span><span id="moree"> Perferendis modi libero sit dicta officia numquam nisi. Quas natus inventore soluta quidem mollitia expedita.</span></p>
                    <button class="btn btn-warning  text-white animation_two" onclick="btnMore()" id="more_Btn" type="button">Read More..</button>
                </div>
                <div class="img_container col-xl-4 col-lg-4 col-md-4 ">
                    <div class="img img-two">
                        <img src="src/engr_2.jpg" class="img-fluid img-front animation_two">
                    </div>
                </div>
        </div>
        <div class="img-bg w-100">
        </div>
    </section>
    <!-- DIVIDER -->
    <nav class="navbar-expand-lg divider p-3 mb-0 container-fluid"></nav>
    <!-- FOOTER -->
    <footer class="text-center text-lg-start text-muted main_footer" id="contact">
    <section class="pt-3" >
        <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                <!-- Content -->
                <h6 class="text-uppercase fw-bold mb-4">
                    <i class="fas fa-gem me-3"></i>Company name
                </h6>
                <p >
                    Here you can use rows and columns to organize your footer content. Lorem ipsum
                    dolor sit amet, consectetur adipisicing elit.
                </p>
            </div>
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                <h6 class="text-uppercase fw-bold mb-4">
                    <i class="fas fa-gem me-3"></i>Company name
                </h6>
                <p >
                    Here you can use rows and columns to organize your footer content. Lorem ipsum
                    dolor sit amet, consectetur adipisicing elit.
                </p>
            </div>
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                <h6 class="text-uppercase fw-bold mb-4">
                    <i class="fas fa-gem me-3"></i>Company name
                </h6>
                <p >
                    Here you can use rows and columns to organize your footer content. Lorem ipsum
                    dolor sit amet, consectetur adipisicing elit.
                </p>
            </div>
        </div>
        </div>
    </section>
    <div class="text-center p-3 border-top" >
    <p class="text-center footer-text h6">Capitol Compound, Barangay Bangbangalon, Boac, Marinduque<br>
                Telephone Nos.: (042) 332-1490/(042) 332-0927/(042) 332-1913<br>
                Website: https://penromarinduque.gov.ph/<br>
                Email: penromarinduque@denr.gov.ph</p>
    </div>
    </footer>
    <!-- SCROLL UP BTN -->
    <button onclick="topFunction()" id="myBtn" title="Go to top" type="button"><i class="fa-solid fa-angles-up"></i></button>
    <script  src="script/index.js"></script>

    <script type="text/javascript">
        document.querySelector('.toggle-btn').addEventListener('click', function() {
            document.querySelector('.sidebar').classList.toggle('active');
        });
    </script>
</body>
</html>