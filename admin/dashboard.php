<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/content_style.css">
    <title>Dashboard</title>
</head>
<body>
    <?php include '../admin/navbar.php'; ?>
    <main class="main">
        <h1 class="h1 p-2 text-white pb-1 m-4">Dashboard</h1>
        <img src="../src/bg-main.jpeg" alt="" srcset="" width="100%" height="30%" class="bg_image p-0 m-0">
        <div class="card_container position-absolute  container-fluid row gap-3 p-5 pb-0 pt-0 flex-wrap">
            <div class="col card_content">
                <div class="row pt-3 text-center">
                    <div class="col"><h1 class="fw-bold display-3 text-warning">69</h1></div>
                    <div class="col pt-3"><i class="fa-solid fa-building fa-2xl"></i></div>
                </div>
                <h6 class="p-3 pt-2 pb-0">Completed Projects</h6>
            </div>
            <div class="col card_content">
                <div class="row pt-3 text-center">
                        <div class="col"><h1 class="fw-bold display-3 text-warning">30</h1></div>
                        <div class="col pt-3"><i class="fa-solid fa-person-digging fa-2xl"></i></div>
                    </div>
                    <h6 class="p-3 pt-2 pb-0">On-going Projects</h6>
                </div>
            <div class="col card_content">
            <div class="row pt-3 text-center">
                    <div class="col"><h1 class="fw-bold display-3 text-warning">3</h1></div>
                    <div class="col pt-3"><i class="fa-solid fa-building-circle-arrow-right fa-2xl"></i></div>
                </div>
                <h6 class="p-3 pt-2 pb-0">Delayed Projects</h6>
            </div>
            <div class="col card_content">
            <div class="row pt-3 text-center">
                    <div class="col"><h1 class="fw-bold display-3 text-warning">56</h1></div>
                    <div class="col pt-3"><i class="fa-solid fa-users fa-2xl"></i></div>
                </div>
                <h6 class="p-3 pt-2 pb-0">Registered Users</h6>
            </div>
        </div>
    </main>
</body>
</html>