<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.0/chart.min.js" integrity="sha512-7U4rRB8aGAHGVad3u2jiC7GA5/1YhQcQjxKeaVms/bT66i3LVBMRcBI9KwABNWnxOSwulkuSXxZLGuyfvo7V1A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="../style/content_style.css">
    <title>User Profile</title>
</head>
<body>
    <div style="background: url(../src/bg-main.jpeg)" class="header_profile pt-2 m-0" >
        <!-- MAIN NAV -->
        <nav class="navbar-expand-lg  navbar" >
            <div class="container">
                <div class="navbar-brand p-0 m-0 ">
                    <img src="../src/logo2.png" alt="" srcset="" width="80" height="80">
                </div>
            
                <div class="collapse navbar-collapse" id="collapsibleNavbar" >
                    <div class="mx-auto"></div>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link text-white nav-link-ltr mx-2" href="">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white nav-link-ltr mx-2" href="">Project</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white nav-link-ltr mx-2" href="">Logout</a>
                            </li>
                        </ul>
                </div>
            </div>
        </nav>
    </div>
    <section class="profile-section">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="../src/Pinterest.jpg" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                            <h5 class="my-3">John Smith</h5>
                            <p class="text-muted mb-1">Project Engineer</p>
                            <p class="text-muted mb-4">Tanza, Boac, Marinduque</p>
                            <div class="d-flex justify-content-center mb-2">
                                <button type="button" class="btn btn-warning text-white">Add Project</button>
                                <button type="button" class="btn btn-outline-warning ms-1 ">Edit Profile</button>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4 mb-lg-0">
                        <div class="card-body p-0">
                            <ul class="list-group list-group-flush rounded-3">
                                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                    <p class="mb-0">Full Name</p>
                                    <p class="mb-0">John Smith</p>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                    <p class="mb-0">Email</p>
                                    <p class="mb-0">johnsmith@gmail.com</p>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                    <p class="mb-0">Phone Number</p>
                                    <p class="mb-0">090909099</p>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                    <p class="mb-0">Address</p>
                                    <p class="mb-0">Tanza, Boac, Marinduque</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body p-5">
                            <form action="#" method="post" class="'form-control">
                                <h1 class=" head_title mb-3 mt-3">Edit Profile</h1>
                            <div class="form_container p-1 d-flex gap-1 pt-0 mt-0">
                        <div class="col-4 m-0 p-0" name="per_info">
                            <input type="text" name="first_name" id="name" placeholder="First Name" class=" form-control p-1" >
                        </div>
                        <div class="col-4 m-0 p-0">
                            <input type="text" name="last_name" id="name" placeholder="Last Name" class=" form-control p-1" >
                        </div>
                        <div class="col-4 m-0 p-0">
                            <input type="text" name="mid_name" id="name" placeholder="Middle Name" class=" form-control p-1" >
                        </div>
                    </div>
                    <div class="form_container p-1 d-flex gap-1 pt-0 mt-0 mb-0 pb-0">
                        <div class="col-4 m-0 p-0">
                            <select name="prefix" id="prefix" class="form-control p-1">
                                <option value="" selected disabled>Prefix</option>
                                <option value="" >Prefix</option>
                                <option value="" >Prefix</option>
                                <option value="" >Prefix</option>
                            </select>
                        </div>
                        <div class="col-4 m-0 p-0">
                            <input type="date" name="birth" id="birth" placeholder="Birthdate" class=" form-control p-1" >
                        </div>
                        <div class="col-4 m-0 p-0">
                            <input type="text" name="gender" id="gender" placeholder="Gender" class=" form-control p-1" >
                        </div>
                        </div>
                        <div class="w-50 p-1 mt-0 pt-1 pb-0 d-block justify-content-center">
                            <label for="v_id">Valid ID <span class="text-danger">*</span></label>
                            <input type="file" name="v_id" id="v_id" placeholder="Valid ID" class=" form-control p-1" >
                        </div>
                        <label class="p-2 pb-0">Full Address <span class="text-danger">*</span></label>
                        <div class="form_container p-1 d-flex gap-1 pt-0 mt-0">
                            <div class="col-4 m-0 p-0" name="per_info">
                                <input type="text" name="barangay" id="barangay" placeholder="Barangay" class=" form-control p-1" >
                            </div>
                            <div class="col-4 m-0 p-0">
                                <input type="text" name="municipality" id="municipality" placeholder="Municipality" class=" form-control p-1" >
                            </div>
                            <div class="col-4 m-0 p-0">
                                <input type="text" name="province" id="province" placeholder="Province/City" class=" form-control p-1" >
                            </div>
                        </div>
                        <hr class="m-2">
                    <h6 class="h6 p-2 pb-1">Contact Information <span class="text-danger">*</span></h6>
                    <div class="form_container p-1 d-flex gap-1 pt-0 mt-0 ">
                        <div class="col-6 m-0 p-0" name="per_info">
                            <input type="text" name="contact_num" id="contact_num" placeholder="Contact Number" class=" form-control p-1" >
                        </div>
                        <div class="col-6 m-0 p-0">
                            <input type="email" name="email" id="email" placeholder="Email Address" class=" form-control p-1" >
                        </div>
                    </div>
                    <div class="w-50 p-1 mt-0 pt-1 pb-2 d-block justify-content-center">
                            <label for="username">Account Information<span class="text-danger">*</span></label>
                            <input type="text" name="username" id="username" placeholder="Username" class=" form-control p-1" >
                    </div>
                    <div class="form_container p-1 d-flex gap-1 pt-0 mt-0 ">
                        <div class="col-6 m-0 p-0" name="per_info">
                            <input type="text" name="contact_num" id="contact_num" placeholder="Contact Number" class=" form-control p-1" >
                        </div>
                        <div class="col-6 m-0 p-0">
                            <input type="email" name="email" id="email" placeholder="Email Address" class=" form-control p-1" >
                        </div>
                    </div>
                    <div class="mt-3 mb-4 m-2">
                        <button class="p-2 btn shadow btn-warning text-white">Save Changes</button>
                    </div>
                            </form>
                        </div>
                    </div>
                </div>
                
                
            </div>
        </div>
    </section>
    <div class="sidebar ">
        <div class="toggle-btn">
                <span></span>
                <span></span>
                <span></span>
            </div>
        <div class="links text-justify">
        <h2 class="m-3">Menu</h2>
        <hr>
        <a href="#" class="link">
            Profile
        </a>
        
        <a href="#" class="link">
            Project
        </a>
        
        <a href="#" class="link">
            Logout
        </a>
    </div>
    <script src="../script/index.js"></script>
    <script>
        document.querySelector('.toggle-btn').addEventListener('click', function() {
        document.querySelector('.sidebar').classList.toggle('active');
    });
    </script>
</body>
</html>