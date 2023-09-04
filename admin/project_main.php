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
    <title>Project Maintenance</title>
</head>
<body>
    <?php include '../admin/navbar.php'; ?>
    <main class="main p-5 m-0" style="min-height: 190vh; color: #313131;">
    <!-- HEADER -->
        <div class="shadow w-100 m-0 p-3 pt-1 position-absolute header_container d-flex">
            <button type="button" id="back_btn" class="btn mt-2" onclick="goBack()">
                <i class="fa-solid fa-circle-arrow-left fa-2xl"></i>
            </button>
            <h3 class="h3 p-3 mt-1 pt-1 pb-1 m-3 mb-0 head_title">Project Maintenance</h3>
        </div>
    <!-- CONTENT -->
        <div class="content_main p-3 mt-0 pt-5 position-absolute shadow" style="width: 85%">
            <table class="table">
                <thead>
                    <tr class="head_title">
                        <th><h4 class="h4 p-3 mt-0 pt-0 pb-3 mb-0 text-start">List of Projects</h4></th>
                        <th class="text-center">
                        <div class=" mt-1  icon_container pb-3">
                            <a href="#" class="text-dark mx-1"><i class="fa-solid fa-download fa-lg"></i></a>
                            <a href="#" class="text-dark"><i class="fa-solid fa-print fa-lg"></i></a>
                        </div>
                        </th>
                    </tr>
                </thead>
            </table>
            <table class="table table-striped table-centered mb-0" style="color: #313131">
            <thead>
                <tr>
                    <th>Permit Number</th>
                    <th>Project Name</th>
                    <th>Type of Project</th>
                    <th>Project Engineer</th>
                    <th>Status</th>
                    <th>Project Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>MDQ-2023-001</td>
                    <td>Project NAME 1</td>
                    <td>Project NAME 1</td>
                    <td>Engr. Name</td>
                    <td><span class="badge bg-primary">On-going</span></td>
                    <td>10/01/2023</td>
                    <td>
                        <a href="#" class="text-dark"><i class="fa-solid fa-building-lock"></i></a>
                        &nbsp<a href="#" class="text-dark"><i class="fa-solid fa-eye"></i></a>
                        &nbsp<a href="#" class="text-dark"><i class="fa-solid fa-user-pen"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>MDQ-2023-002</td>
                    <td>Project NAME 2</td>
                    <td>Project NAME 2</td>
                    <td>Engr. Name</td>
                    <td><span class="badge bg-primary">On-going</span></td>
                    <td>10/01/2023</td>
                    <td>
                        <a href="#" class="text-dark"><i class="fa-solid fa-building-lock"></i></a>
                        &nbsp<a href="#" class="text-dark"><i class="fa-solid fa-eye"></i></a>
                        &nbsp<a href="#" class="text-dark"><i class="fa-solid fa-user-pen"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>MDQ-2023-003</td>
                    <td>Project NAME 3</td>
                    <td>Project NAME 3</td>
                    <td>Engr. Name</td>
                    <td><span class="badge bg-success">Finished</span></td>
                    <td>10/01/2023</td>
                    <td>
                        <a href="#" class="text-dark"><i class="fa-solid fa-building-lock"></i></a>
                        &nbsp<a href="#" class="text-dark"><i class="fa-solid fa-eye"></i></a>
                        &nbsp<a href="#" class="text-dark"><i class="fa-solid fa-user-pen"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>MDQ-2023-004</td>
                    <td>Project NAME 4</td>
                    <td>Project NAME 4</td>
                    <td>Engr. Name</td>
                    <td><span class="badge bg-primary">On-going</span></td>
                    <td>10/01/2023</td>
                    <td>
                        <a href="#" class="text-dark"><i class="fa-solid fa-building-lock"></i></a>
                        &nbsp<a href="#" class="text-dark"><i class="fa-solid fa-eye"></i></a>
                        &nbsp<a href="#" class="text-dark"><i class="fa-solid fa-user-pen"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>MDQ-2023-005</td>
                    <td>Project NAME 5</td>
                    <td>Project NAME 5</td>
                    <td>Engr. Name</td>
                    <td><span class="badge bg-primary">On-going</span></td>
                    <td>10/01/2023</td>
                    <td>
                        <a href="#" class="text-dark"><i class="fa-solid fa-building-lock"></i></a>
                        &nbsp<a href="#" class="text-dark"><i class="fa-solid fa-eye"></i></a>
                        &nbsp<a href="#" class="text-dark"><i class="fa-solid fa-user-pen"></i></a>
                    </td>
                </tr>
            </tbody>
            </table>
            <div class="d-flex justify-content-end mt-3">
                <button class="btn btn-warning text-white shadow-sm"><a href="../admin/add_project.php" class="text-white text-decoration-none">Add Project</a></button>
            </div>
        </div>
    </main>
    <script src="../script/index.js"></script>
</body>
</html>