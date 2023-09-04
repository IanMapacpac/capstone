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
    <title>Dashboard</title>
</head>
<body>
    <?php include '../admin/navbar.php'; ?>
    <main class="main b-block gap-2" style="min-height: 190vh;">
        <h1 class="h1 p-2 text-white pb-1 m-4">Dashboard</h1>
        <img src="../src/bg-main.jpeg" alt="" srcset="" width="100%" height="15%" class="bg_image p-0 m-0 position-absolute">
        <!-- CARDS -->
        <div class="card_container-main position-absolute d-flex flex-wrap justify-content-center  p-0 gap-5 mb-3">
            <div class=" card p-4 mb-0 pt-2 shadow-sm">
                <div class="row pt-3 text-center">
                    <div class="col"><h1 class="fw-bold display-3 text-warning">69</h1></div>
                    <div class="col pt-3"><i class="fa-solid fa-building fa-2xl"></i></div>
                </div>
                <h6 class="p-1 pt-2 pb-0 ">Completed Projects</h6>
            </div>
            <div class="card p-4 mb-0 pt-2 shadow-sm">
                <div class="row pt-3 text-center">
                        <div class="col"><h1 class="fw-bold display-3 text-warning">30</h1></div>
                        <div class="col pt-3"><i class="fa-solid fa-person-digging fa-2xl"></i></div>
                    </div>
                    <h6 class="p-1 pt-2 pb-0">On-going Projects</h6>
            </div>
            <div class="card p-4  mb-0 pt-2 shadow-sm">
                <div class="row pt-3 text-center">
                    <div class="col"><h1 class="fw-bold display-3 text-warning">3</h1></div>
                    <div class="col pt-3"><i class="fa-solid fa-building-circle-arrow-right fa-2xl"></i></div>
                </div>
                <h6 class="p-1 pt-2 pb-0">Delayed Projects</h6>
            </div>
            <div class="card p-4  mb-0 pt-2 shadow-sm">
                <div class="row pt-3 text-center">
                    <div class="col"><h1 class="fw-bold display-3 text-warning">56</h1></div>
                    <div class="col pt-3"><i class="fa-solid fa-users fa-2xl"></i></div>
                </div>
                <h6 class="p-1 pt-2 pb-0">Registered Users</h6>
            </div>
            <div class="graph_container d-flex flex-wrap justify-content-center gap-2">
            <div class="p-0 graph_one-container shadow pb-2">
                <header class="bg-warning d-flex p-2">
                    <h4 class="h4 col-9 text-white mx-3">Finished Projects</h4>
                    <div class="col-2 d-flex gap-3 mt-1 icon_container">
                        <a href="#" class="text-white"><i class="fa-solid fa-download fa-lg"></i></a>
                        <a href="#" class="text-white"><i class="fa-solid fa-print fa-lg"></i></a>
                    </div>
                </header>
                <div class="d-flex">
                    <div class="main_text col-4">
                        <p class="h6 p-4 pb-0 ">Year with the Highest <br> Project Amount:</p>
                        <h2 class="h2 fw-bold p-4 pb-0 pt-0">2019</h3>
                        <br>
                        <p class="h6 p-4 pb-0 ">Year with the Highest <br> Project Amount:</p>
                        <h2 class="h2 fw-bold p-4 pb-0 pt-0">2019</h3>
                    </div>
                    <div class="chart col-9">

                    </div>
                </div>
                <br>
                <hr>
                <p class="text-end"><a href="#" class="p-3 text-dark report_link">Open Report</a></p>
            </div>
            <div class=" graph_two-container shadow">
            <header class="bg-warning p-2">
                <h4 class="h4 text-white">Types of Projects</h4>
            </header>
            <hr>
            <p class="text-end"><a href="#" class="p-3 text-dark report_link">Open Report</a></p>
            </div>
            <!-- Graph two -->
            <!-- <div class="d-flex justify-content-center flex-wrap m-0 gap-3 mt-3 graph__two-container">
                <div class="d-block two_container">
                    <div class="map_container p-0">
                        <h4 class="h4">Project Progress</h4>
                    </div>
                    <div class="project_container p-0">
                    <header class="bg-warning p-2">
                        <h5 class="h5 text-white">Types of Projects</h5>
                    </header>
                    </div>
                </div>
                <div class="side_container">
                    hi
                </div>
            </div> -->
        </div>
        </div>
    <button onclick="topFunction()" id="myBtn" title="Go to top" type="button"><i class="fa-solid fa-angles-up"></i></button>

    </main>

    <script src="../script/index.js"></script>
    <script src="../script/jquery-1.9.1.js"></script>
    <script src="../script/chart.min.js"></script>
</body>
</html>