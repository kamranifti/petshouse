<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>APPOINTMENTS</title>
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

    <style>
        body {
            background-color: #f5f5f5;
        }
    </style>
    <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <div class="container ms-auto">
        <div class="navbar">
            <div class="logo"><a href="home.php" class="logo d-flex align-items-center">
                    <span class="d-none d-lg-block"><i class="fa-solid fa-dog"></i> PetHouse</span>
                </a></div>
            <div class="heading mx-4">
                <h1 class="headingss mt-2">APPOINTMENTS</h1>
            </div>
            <div class="but">
                <!-- Large Modal -->
                <button type="button" class="btn btn-primary mt-3 mb-3 add-btn mx-1" data-bs-toggle="modal" data-bs-target="#largeModal">
                    Add Appointments
                </button>


                <div class="modal fade" id="largeModal" tabindex="-1">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Large Modal</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Non omnis incidunt qui sed occaecati magni asperiores est mollitia. Soluta at et reprehenderit. Placeat autem numquam et fuga numquam. Tempora in facere consequatur sit dolor ipsum. Consequatur nemo amet incidunt est facilis. Dolorem neque recusandae quo sit molestias sint dignissimos.
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
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
                        <th style="padding: 1px; text-align:center;">data 1</th>
                        <th style="padding: 10px; text-align:center;">data 2</th>
                        <th style="padding: 10px; text-align:center;">data 3</th>
                        <th style="padding: 10px; text-align:center;">data 4</th>
                        <th style="padding: 10px; text-align:center;">data 5</th>
                        <th style="padding: 10px; text-align:center;">data 6</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>faisal 1 Data 1</td>
                        <td>rayan 1 Data 2</td>
                        <td>rayan 1 Data 2</td>
                        <td>rayan 1 Data 2</td>
                        <td>rayan 1 Data 2</td>
                        <td>rayan 1 Data 2</td>
                    </tr>
                    <tr>
                        <td>gulbaz 2 Data 1</td>
                        <td>murtaza 2 Data 2</td>
                        <td>rayan 1 Data 2</td>
                        <td>rayan 1 Data 2</td>
                        <td>rayan 1 Data 2</td>
                        <td>rayan 1 Data 2</td>
                    </tr>
                    <tr>
                        <td>faisal 1 Data 1</td>
                        <td>rayan 1 Data 2</td>
                        <td>rayan 1 Data 2</td>
                        <td>rayan 1 Data 2</td>
                        <td>rayan 1 Data 2</td>
                        <td>rayan 1 Data 2</td>
                    </tr>
                    <tr>
                        <td>faisal 1 Data 1</td>
                        <td>rayan 1 Data 2</td>
                        <td>rayan 1 Data 2</td>
                        <td>rayan 1 Data 2</td>
                        <td>rayan 1 Data 2</td>
                        <td>rayan 1 Data 2</td>
                    </tr>
                    <tr>
                        <td>faisal 1 Data 1</td>
                        <td>rayan 1 Data 2</td>
                        <td>rayan 1 Data 2</td>
                        <td>rayan 1 Data 2</td>
                        <td>rayan 1 Data 2</td>
                        <td>rayan 1 Data 2</td>
                    </tr>
                    <tr>
                        <td>faisal 1 Data 1</td>
                        <td>rayan 1 Data 2</td>
                        <td>rayan 1 Data 2</td>
                        <td>rayan 1 Data 2</td>
                        <td>rayan 1 Data 2</td>
                        <td>rayan 1 Data 2</td>
                    </tr>
                    <tr>
                        <td>faisal 1 Data 1</td>
                        <td>rayan 1 Data 2</td>
                        <td>rayan 1 Data 2</td>
                        <td>rayan 1 Data 2</td>
                        <td>rayan 1 Data 2</td>
                        <td>rayan 1 Data 2</td>
                    </tr>
                    <tr>
                        <td>faisal 1 Data 1</td>
                        <td>rayan 1 Data 2</td>
                        <td>rayan 1 Data 2</td>
                        <td>rayan 1 Data 2</td>
                        <td>rayan 1 Data 2</td>
                        <td>rayan 1 Data 2</td>
                    </tr>
                    <tr>
                        <td>faisal 1 Data 1</td>
                        <td>rayan 1 Data 2</td>
                        <td>rayan 1 Data 2</td>
                        <td>rayan 1 Data 2</td>
                        <td>rayan 1 Data 2</td>
                        <td>rayan 1 Data 2</td>
                    </tr>
                    <tr>
                        <td>faisal 1 Data 1</td>
                        <td>rayan 1 Data 2</td>
                        <td>rayan 1 Data 2</td>
                        <td>rayan 1 Data 2</td>
                        <td>rayan 1 Data 2</td>
                        <td>rayan 1 Data 2</td>
                    </tr>
                    <tr>
                        <td>faisal 1 Data 1</td>
                        <td>rayan 1 Data 2</td>
                        <td>rayan 1 Data 2</td>
                        <td>rayan 1 Data 2</td>
                        <td>rayan 1 Data 2</td>
                        <td>rayan 1 Data 2</td>
                    </tr>
                    <tr>
                        <td>faisal 1 Data 1</td>
                        <td>rayan 1 Data 2</td>
                        <td>rayan 1 Data 2</td>
                        <td>rayan 1 Data 2</td>
                        <td>rayan 1 Data 2</td>
                        <td>rayan 1 Data 2</td>
                    </tr>
                    <tr>
                        <td>faisal 1 Data 1</td>
                        <td>rayan 1 Data 2</td>
                        <td>rayan 1 Data 2</td>
                        <td>rayan 1 Data 2</td>
                        <td>rayan 1 Data 2</td>
                        <td>rayan 1 Data 2</td>
                    </tr>
                    <tr>
                        <td>faisal 1 Data 1</td>
                        <td>rayan 1 Data 2</td>
                        <td>rayan 1 Data 2</td>
                        <td>rayan 1 Data 2</td>
                        <td>rayan 1 Data 2</td>
                        <td>rayan 1 Data 2</td>
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