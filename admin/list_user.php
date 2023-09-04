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
        <div class="content_main p-3 mt-0 pt-5 position-absolute shadow w-75">
          <h4 class="h4 p-3 mt-0 pt-0 pb-3 mb-0 text-start head_title">Verified Users</h4>
          <table class="table table-striped table-centered mb-0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Type of User</th>
                    <th>Status</th>
                    <th>Date of Registration</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>USER NAME 1</td>
                    <td>Admin</td>
                    <td><span class="badge bg-primary">Active</span></td>
                    <td>10/01/2023</td>
                    <td>
                      <a href="#" class="text-dark"><i class="fa-solid fa-user-lock "></i></a>
                      &nbsp<a href="#" class="text-dark"><i class="fa-solid fa-eye"></i></a>
                      &nbsp<a href="#" class="text-dark"><i class="fa-solid fa-user-pen"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>USER NAME 2</td>
                    <td>Admin</td>
                    <td><span class="badge bg-primary">Active</span></td>
                    <td>10/01/2023</td>
                    <td>
                      <a href="#" class="text-dark"><i class="fa-solid fa-user-lock "></i></a>
                      &nbsp<a href="#" class="text-dark"><i class="fa-solid fa-eye"></i></a>
                      &nbsp<a href="#" class="text-dark"><i class="fa-solid fa-user-pen"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>USER NAME 3</td>
                    <td>User</td>
                    <td><span class="badge bg-danger">Inactive</span></td>
                    <td>10/01/2023</td>
                    <td>
                      <a href="#" class="text-dark"><i class="fa-solid fa-user-lock "></i></a>
                      &nbsp<a href="#" class="text-dark"><i class="fa-solid fa-eye"></i></a>
                      &nbsp<a href="#" class="text-dark"><i class="fa-solid fa-user-pen"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>USER NAME 4</td>
                    <td>User</td>
                    <td><span class="badge bg-primary">Active</span></td>
                    <td>10/01/2023</td>
                    <td>
                      <a href="#" class="text-dark"><i class="fa-solid fa-user-lock "></i></a>
                      &nbsp<a href="#" class="text-dark"><i class="fa-solid fa-eye"></i></a>
                      &nbsp<a href="#" class="text-dark"><i class="fa-solid fa-user-pen"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>USER NAME 5</td>
                    <td>User</td>
                    <td><span class="badge bg-primary">Active</span></td>
                    <td>10/01/2023</td>
                    <td>
                      <a href="#" class="text-dark"><i class="fa-solid fa-user-lock "></i></a>
                      &nbsp<a href="#" class="text-dark"><i class="fa-solid fa-eye"></i></a>
                      &nbsp<a href="#" class="text-dark"><i class="fa-solid fa-user-pen"></i></a>
                    </td>
                </tr>
            </tbody>
          </table>
          <div class="d-flex justify-content-end mt-3">
            <button class="btn btn-warning text-white shadow-sm"><a href="../admin/add_user.php" class="text-white text-decoration-none">Add User</a></button>
          </div>
        </div>
        <!-- TAble  Two -->
        <div class="content_main p-3 mt-0 pt-5 position-absolute shadow w-75" style="top: 45%;">
          <h4 class="h4 p-3 mt-0 pt-0 pb-3 mb-0 text-start head_title">Registered Users</h4>
          <table class="table table-striped table-centered mb-0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Type of User</th>
                    <th>Status</th>
                    <th>Date of Registration</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>USER NAME 1</td>
                    <td>Admin</td>
                    <td><span class="badge bg-primary">On-Process</span></td>
                    <td>10/01/2023</td>
                    <td>
                      <a href="#" class="text-dark"><i class="fa-solid fa-rotate-left"></i></a>
                      &nbsp<a href="#" class="text-dark"><i class="fa-solid fa-eye"></i></a>
                      &nbsp<a href="#" class="text-dark"><i class="fa-solid fa-user-pen"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>USER NAME 2</td>
                    <td>Admin</td>
                    <td><span class="badge bg-primary">On-Process</span></td>
                    <td>10/01/2023</td>
                    <td>
                      <a href="#" class="text-dark"><i class="fa-solid fa-rotate-left"></i></a>
                      &nbsp<a href="#" class="text-dark"><i class="fa-solid fa-eye"></i></a>
                      &nbsp<a href="#" class="text-dark"><i class="fa-solid fa-user-pen"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>USER NAME 3</td>
                    <td>User</td>
                    <td><span class="badge bg-danger">Returned</span></td>
                    <td>10/01/2023</td>
                    <td>
                      <a href="#" class="text-dark"><i class="fa-solid fa-rotate-left"></i></a>
                      &nbsp<a href="#" class="text-dark"><i class="fa-solid fa-eye"></i></a>
                      &nbsp<a href="#" class="text-dark"><i class="fa-solid fa-user-pen"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>USER NAME 4</td>
                    <td>User</td>
                    <td><span class="badge bg-primary">On-Process</span></td>
                    <td>10/01/2023</td>
                    <td>
                      <a href="#" class="text-dark"><i class="fa-solid fa-rotate-left"></i></a>
                      &nbsp<a href="#" class="text-dark"><i class="fa-solid fa-eye"></i></a>
                      &nbsp<a href="#" class="text-dark"><i class="fa-solid fa-user-pen"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>USER NAME 5</td>
                    <td>User</td>
                    <td><span class="badge bg-primary">On-Process</span></td>
                    <td>10/01/2023</td>
                    <td>
                      <a href="#" class="text-dark"><i class="fa-solid fa-rotate-left"></i></a>
                      &nbsp<a href="#" class="text-dark"><i class="fa-solid fa-eye"></i></a>
                      &nbsp<a href="#" class="text-dark"><i class="fa-solid fa-user-pen"></i></a>
                    </td>
                </tr>
            </tbody>
          </table>
          <div class="d-flex justify-content-end mt-3">
            <button class="btn btn-warning text-white shadow-sm">Add User</button>
          </div>
        </div>
    </main>
    <script src="../script/index.js"></script>
</body>
</html>