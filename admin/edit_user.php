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
    <title>Admin Maintenance</title>
</head>
<body>
    <?php include '../admin/navbar.php'; ?>
    <main class="main p-0 m-0" style="min-height: 190vh;">
    <!-- HEADER -->
        <div class="shadow w-100 m-0 p-3 pt-1 position-absolute header_container d-flex">
            <button type="button" id="back_btn" class="btn mt-2" onclick="goBack()">
                <i class="fa-solid fa-circle-arrow-left fa-2xl"></i>
            </button>
            <h3 class="h3 p-3 mt-1 pt-1 pb-1 m-3 mb-0 head_title">User Maintenance</h3>
        </div>
    <!-- CONTENT -->
        <div class="content_main p-3 mt-0 pt-5 position-absolute d-flex flex-wrap justify-content-center shadow w-75">
            <div class="profile_edit-one w-25">
                <div class="position-relative mx-auto text-center">
                    <img src="../src/Pinterest.jpg" class="rounded-circle mb-3" style="width: 90px;"alt="Avatar" />
                    <h5 class="mb-2"><strong>John Doe</strong></h5>
                    <p class="text-muted">Admin</p>
                </div>
                <div class="card p-0 m-0">
                    <div class="card-header m-0 p-0">
                        <h5 class="h5 bg-warning p-3 text-white m-0">Edit Profile</h5>
                    </div>
                    <div class="card-body p-1 btn text-start border-bottom">
                        <a href="#" class="btn">Change Password</a>
                    </div>
                    <div class="card-body p-1 btn text-start border-bottom">
                        <a href="#" class="btn">Add User</a>
                    </div>
                    <div class="card-body p-1 btn text-start">
                        <a href="#" class="btn">Deactivate User</a>
                    </div>
                </div>
            </div>
            <div class="w-75 profile_form">
                <div class="form_header mb-3 w-25">
                    <h3 class="h3">Edit Profile</h3>
                </div>
                <h6 class="h6">Personal Information <span class="text-danger">*</span></h6>
                <form action="#" method="post">
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
    </main>

    <script src="../script/index.js"></script>
</body>
</html>