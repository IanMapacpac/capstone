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
                        <div class="card-body">
                            <div class="row">
                                <div class="col pb-1">
                                    <h3 class="h3 text-secondary">On-going Project</h3>
                                    <table class="table-borderless table">
                                        <tr>
                                            <th>Project Name:</th>
                                            <td>Project No. 1</td>
                                        </tr>
                                        <tr>
                                            <th>Project Number:</th>
                                            <td>MDQ-2023-001</td>
                                        </tr>
                                        <tr>
                                            <th>Location:</th>
                                            <td>Hupi, Sta Cruz, Marinduque</td>
                                        </tr>
                                        <tr>
                                            <th>Amount:</th>
                                            <td>100,000,000,</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col p-2 pb-1">
                                    <label for="proj_progress">Project Progress</label>
                                    <?php $val_range = 26; ?>
                                    <input type="range" name="proj_progress" id="" value="<?php echo $val_range;?>" disabled class="input-range">
                                <table class="table-borderless table mt-2">
                                        <tr>
                                            <th>Contractor:</th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Type of Project:</th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Start Date:</th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Target Date:</th>
                                            <td></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <hr>
                            <div class="row gap-1 p-3">
                                <button class="btn btn-warning col text-white">Add Project Progress</button>
                                <button class="btn btn-outline-warning col">View Project</button>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-body">
                            <h2 class="h2 text-secondary">Completed Projects</h2>
                            <table class="table table-striped">
                                <thead class="bg-warning text-white">
                                    <th>Name of Project</th>
                                    <th>Type of Project</th>
                                    <th>Date Completed</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Basketball Court</td>
                                        <td>Recreational Infastructure</td>
                                        <td>October 18, 2009</td>
                                    </tr>
                                    <tr>
                                        <td>Basketball Court</td>
                                        <td>Recreational Infastructure</td>
                                        <td>October 18, 2009</td>
                                    </tr>
                                </tbody>
                            </table>
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