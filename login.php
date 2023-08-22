<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&family=Raleway:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css">
    <title>Login Page</title>
</head>
<body>
    <div class=" container-fluid p-0  m-0 row main_container w-100">
        <!-- FIRST SECTION -->
        <div class="section_one-container bg-dark col-8 pt-5">
            <div class="lc-block me-lg-5 p-5">
                <div  class="text-white text_container">
                    <img src="src/logo2.png" alt="logo" width="80" height="80">
                    <h1 class="display-1 pb-3 fw-bolder main_text text-white">EDGE</h1>
                    <div class="pb-3 txt_container w-75">
                        <p class="text_span h1">Executive</p><p class=" text_span h1">Dashboard for</p>
                    </div>
                    <div class="pb-3 txt_container sub_text ">
                        <p class="text_span h1">Governor’s</p> <p class="text_span h1">Evaluation</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- SECOND SECTION -->
        <div class="section_two-container col-4">
            <div class=" nav_container" >
                <ul class="navbar-nav nav_container-link">
                    <li class="nav-item"><a class="nav-link icon" href="index.php"><i class="fa-solid fa-house fa-xl"></i></a></li>
                    <li class="nav-item"><a class="nav-link icon" href="login.php"><i class="fa-solid fa-user fa-xl"></i></a></li>
                    <li class="nav-item"><a class="nav-link icon" href="signup.php"><i class="fa-solid fa-user-plus fa-xl"></i></a></li>
                </ul>
            </div>
        </div>
        <!-- LOGIN SECTION -->
        <div class="login_container p-3 pt-5 mt-5 ">
            <h3 class="log_text h2 fw-bold p-3 ">Login</h3>
            <hr class="w-25 divider mb-5 m-3 mt-0">
            <form action="#" method="post" class="p-3 pb-5 pt-2">
                <div class="input-field">
                    <input type="text" required spellcheck="false" id="uName" name="uName">
                    <label for="">Enter Username</label>
                </div>
                <br>
                <div class="input-field input-group">
                    <input type="password" required  id="pass" name="pass">
                    <i class="fa-regular fa-eye" onclick='showPass()' id="eye"></i>
                    <label for="">Enter Password</label>
                </div>
                <a href="#" class="text-decoration-none link__txt mb-3 text-primary ">Forgot Password?</a>
                <br>
                <button type="submit" name="login" id="login" class="btn btn-warning text-white w-100 btn__log mt-4 ">&nbsp<i class="fa-solid fa-right-to-bracket"></i> &nbsp Login &nbsp</button>
            </form>
        </div>
    </div>
    <script src="script/index.js"></script>
</body>
</html>