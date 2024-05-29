<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>PETS</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <script src="https://code.jquery.com/jquery-3.7.1.slim.js" integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.css" />
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container ms-auto">
        <div class="navbar">
            <div class="logo"><a href="home.php" class="logo d-flex align-items-center">
        <span class="d-none d-lg-block"><i class="fa-solid fa-dog"></i> PetHouse </span>
      </a></div>
      <div class="heading mx-4">
        <h1 class="headingss mt-2">Appointment</h1>
      </div>
            <div class="but">
                <!-- Large Modal -->
        <button type="button" class="btn btn1 mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#largeModal">
            Add Appointment
        </button>
        

        <div class="modal fade" id="largeModal" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">You Can Add New Appointment</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        
                    <form method="POST" action="">
                        <div class="row d-flex">
                            <div class="col-lg-6">

                            
                        
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Customer I'd</label>
                            <input type="text" name="customer_id" class="form-control" id="exampleInputPassword1">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">STATUS</label>
                            <input type="text" name="status" class="form-control" id="exampleInputPassword1">
                        </div>
                        
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">TYPE</label>
                            <input type="text" name="type" class="form-control" id="exampleInputPassword1">
                        </div>
                    
                        
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">START DATE</label>
                            <input type="text" name="start_datetime" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                    
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">END DATE</label>
                            <input type="text" name="end_datetime" class="form-control" id="exampleInputPassword1">
                        </div>
                        
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">DOG WALKER</label>
                            <input type="text" name="dog_walkers" class="form-control" id="exampleInputPassword1">
                        </div>

                            </div>
                            <div class="col-lg-6">
                             
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">COST ESTIMATE</label>
                            <input type="text" name="cost_eestimate" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">TIME SPENT</label>
                            <input type="text" name="time_spent" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">INVOICE N</label>
                            <input type="text" name="invoice_number" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">MILEGE BEFORE</label>
                            <input type="text" name="milege_before" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">MILEGE AFTER</label>
                            <input type="text" name="milege_after" class="form-control" id="exampleInputPassword1">
                        </div>
                            </div>
                        
                        <button type="submit" class="btn btn1">Submit</button>

                        </div>

                   </form>
                    
                    </div>
                </div>
            </div>
        </div><!-- End Large Modal-->
            </div>
        </div>
        <section class="section dashboard" style="background-color:  #3e4f6f; padding: 10px; border-radius: 4px; text-align:center; color:white;">

            <table id="myTable" class="display mx-auto" style="background-color: #f5f5f5; padding: 10px; border-radius: 9px; text-align:center; color :black;">
                <thead>
                <tr>
                <th>Customer Id</th>
                <th> Status</th>
                <th> Type</th>
                <th> Start Date</th>
                <th> End Date</th>
                <th> Dog Walkers</th>
                <th>Cost Estimate</th>
                <th>Time Spent</th>
                <th>Invoice No</th>
                <th>Milege Before</th>
                <th>Milege After</th>
            </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Active</td>
                        <td>Dog</td>
                        <td>25-1-2017</td>
                        <td>Animal</td>
                        <td>Male</td>
                        <td>Male</td>
                        <td>Male</td>
                        <td>Male</td>
                        <td>Male</td>
                        <td>Male</td>
                    </tr>
                </tbody>
            </table>
            <script>
                let table = new DataTable('#myTable');
            </script>
        </section>
    </div>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>