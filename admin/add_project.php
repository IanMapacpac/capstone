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
            <h3 class="h3 p-3 mt-1 pt-1 pb-1 m-3 mb-0 head_title">Add Project</h3>
        </div>
    <!-- CONTENT -->
        <div class="content_main p-5 mt-0 pt-5 position-absolute shadow" style="width: 60%">
            <form action="#" method="post" class="form-group">
                <div class="w-50 mb-2">
                    <label for="proj_type">Project Type <span class="text-danger">*</span></label>
                    <select name="proj_type" id="proj" class="form-select">
                        <option value="#" selected disabled></option>
                        <option value="">Water Infastructure</option>
                        <option value="">Transportation Infastructure</option>
                        <option value="">Bridge</option>
                        <option value="">Government institutions</option>
                        <option value="">Health Infastructure</option>
                        <option value="">Recreational Infastructure</option>
                    </select>
                </div>
                <div class="mb-2">
                    <input type="text" name="proj_name" id="proj_name" placeholder="Project Name" class="form-control">
                </div>
                <label class="">Project Location<span class="text-danger">*</span></label>
                <div class="form_container d-flex gap-1 mb-2">
                    <div class="col-4 m-0 p-0">
                        <input type="text" name="street" id="street" placeholder="Street" class=" form-control p-1" >
                    </div>
                    <div class="col-4 m-0 p-0">
                        <input type="text" name="barangay" id="barangay" placeholder="Barangay" class=" form-control p-1" >
                    </div>
                    <div class="col-4 m-0 p-0">
                        <input type="text" name="municipality" id="municipality" placeholder="Municipality" class=" form-control p-1" >
                    </div>
                </div>
                <label class="">Project Details<span class="text-danger">*</span></label>
                <div class="form_container d-flex gap-1 mb-2 mt-2">
                    <div class="col-6 m-0 p-0">
                        <input type="text" name="proj_desc" id="proj_desc" placeholder="Project Description" class=" form-control p-1" >
                    </div>
                    <div class="col-6 m-0 p-0">
                        <input type="text" name="amount" id="amount" placeholder="Project Amount" class=" form-control p-1" >
                    </div>
                </div>
                <div class="form_container d-flex gap-1 mb-2 mt-2">
                    <div class="col-6 m-0 p-0">
                        <input type="text" name="contractor" id="contractor" placeholder="Contractor" class=" form-control p-1" >
                    </div>
                    <div class="col-6 m-0 p-0">
                        <input type="text" name="con_name" id="con_name" placeholder="Contractor Owner's Name" class=" form-control p-1" >
                    </div>
                </div>
                <hr>
                <label class="">Project Date<span class="text-danger">*</span></label>
                <div class="form_container d-flex gap-1 mb-2">
                    <div class="col-6 m-0 p-0">
                        <label style="font-size: 8px;" for="start_date">Start Date<span class="text-danger">*</span></label>
                        <input type="date" name="start_date" id="datepicker" class=" form-control p-1" placeholder="Start Date">
                    </div>
                    <div class="col-6 m-0 p-0">
                        <label style="font-size: 8px;" for="cal_days">Calendar Days<span class="text-danger">*</span></label>
                        <input type="date" name="cal_days" id="cal_days" placeholder="Calendar days" class=" form-control p-1" >
                    </div>
                </div>
                <div class="form_container d-flex gap-1 mb-2 mt-2">
                    <div class="col-6 m-0 p-0">
                        <label style="font-size: 8px;" for="targ_com">Target Date of Completion<span class="text-danger">*</span></label>
                        <input type="date" name="targ_com" id="tard_com" class=" form-control p-1" >
                    </div>
                    <div class="col-6 m-0 p-0">
                        <label style="font-size: 8px;" for="rev_date">Revised Date of Completion<span class="text-danger">*</span></label>
                        <input type="date" name="rev_date" id="rev_date" class=" form-control p-1" >
                    </div>
                </div>
                <div class="form_container d-flex gap-1 mb-2 mt-2">
                    <div class="col-6 m-0 p-0">
                        <label style="font-size: 8px;" for="comp_date">Date of Completion<span class="text-danger">*</span></label>
                        <input type="date" name="com_date" id="com_date" class=" form-control p-1" >
                    </div>
                    <div class="col-6 m-0 p-0">
                        <label style="font-size: 8px;" for="act_days">Actual Accomplishment as of date<span class="text-danger">*</span></label>
                        <input type="date" name="act_days" id="act_days" class=" form-control p-1" >
                    </div>
                </div>
                <button class="btn btn-primary mt-3" type="submit">&nbsp Submit &nbsp</button>
            </form>
        </div>
    </main>
    <script>
        $(document).ready(function() {
    $('#datepicker').datepicker({
    format: 'dd/mm/yyyy',
    autoclose: true,
    placeholder: 'Date of Birth'
    });
});
    </script>
    <script src="../script/index.js"></script>
</body>
</html>