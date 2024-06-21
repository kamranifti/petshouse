<?php 

require "database.php";

$obj = new Database();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['status']) && isset($_POST['phone']) && isset($_POST['address']) && isset($_POST['city']) && isset($_POST['province']) && isset($_POST['country']) && isset($_POST['postal_code']) && isset($_POST['type']) && isset($_POST['next_visit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $status = $_POST['status'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $province = $_POST['province'];
        $country = $_POST['country'];
        $postal_code = $_POST['postal_code'];
        $type = $_POST['type'];
        $next_visit = $_POST['next_visit'];

        // Check if the user already exists
        $isExist = $obj->checkUserExist("customers", "email", "email = '{$email}'");

        if ($isExist) {
            echo "<div class='alert alert-primary try-again'>
            <strong>customer Already Exists</strong>
            </div>";
        } else {
            $value = [
                "name" => $name,
                "email" => $email,
                "status" => $status,
                "phone" => $phone,
                "address" => $address,
                "city" => $city,
                "province" => $province,
                "country" => $country,
                "postal_code" => $postal_code,
                "type" => $type,
                "next_visit" => $next_visit
            ];

            // Insert the data
            if ($obj->insert("customers", $value)) {
                header("Location: customers.php");
                exit;
            } else {
                echo "<h2>Data NOT inserted</h2>";
            }
        }
    }
} 
?>


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
        <h1 class="headingss mt-2">CUSTOMERS</h1>
      </div>
            <div class="but">
                <!-- Large Modal -->
        <button type="button" class="btn btn1 mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#largeModal">
            Add Customer
        </button>
        

        <div class="modal fade" id="largeModal" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">You Can Add New Customer</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        
                    <form method="POST" action="">
                        <div class="row d-flex">
                            <div class="col-lg-6">

                            
                        
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">NAME</label>
                            <input type="text" name="name" class="form-control" id="exampleInputPassword1">
                        </div>

                        
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">EMAIL</label>
                            <input type="text" name="email" class="form-control" id="exampleInputPassword1">
                        </div>
                    

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">STATUS</label>
                            <input type="text" name="status" class="form-control" id="exampleInputPassword1">
                        </div>
                        
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">PHONE</label>
                            <input type="text" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                    
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label"> ADDRESS </label>
                            <input type="text" name="address" class="form-control" id="exampleInputPassword1">
                        </div>
                        
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">CITY</label>
                            <input type="text" name="city" class="form-control" id="exampleInputPassword1">
                        </div>
                            </div>
                            <div class="col-lg-6">
                             
                        
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">PROVINCE</label>
                            <input type="text" name="province" class="form-control" id="exampleInputPassword1">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">COUNTRY</label>
                            <input type="text" name="country" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">POSTAL CODE</label>
                            <input type="text" name="postal_code" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">TITLE</label>
                            <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">TYPE</label>
                            <input type="text" name="type" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">NEXT VISIT</label>
                            <input type="date" name="next_visit" class="form-control" id="exampleInputPassword1">
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
        <section class="section dashboard" style="background-color: #3e4f6f; padding: 10px; border-radius: 4px; text-align:center; color:white;">
            <?php

            require_once "database.php";

            $objj = new Database();

            $objj->select("customers", "*", null, null, null);
            $data = $objj->getResult();

            echo "<table id='myTable' class='display mx-auto' style='background-color: #f5f5f5; padding: 10px; border-radius: 9px; text-align:center; color :black;'>";
            echo "
            <thead>
                    <tr>
                  <th style='padding: 10px; text-align:center;'>Name</th>
                  <th style='padding: 10px; text-align:center;'>Email</th>
                  <th style='padding: 10px; text-align:center;'>Status</th>
                  <th style='padding: 10px; text-align:center;'>Phone</th>
                  <th style='padding: 10px; text-align:center;'>Address</th>
                  <th style='padding: 10px; text-align:center;'>City</th>
                  <th style='padding: 10px; text-align:center;'>Province</th>
                  <th style='padding: 10px; text-align:center;'>Country</th>
                  <th style='padding: 10px; text-align:center;'>Postal_code</th>
                  <th style='padding: 10px; text-align:center;'>Type</th>
                  <th style='padding: 10px; text-align:center;'>Next Visit</th>
                </tr>
                </thead>
                ";

            if (!empty($data)) {
                foreach ($data as $customer) {
                    echo "<tr>";
                    echo "<td style='padding: 10px; text-align:center;'>{$customer['name']}</td>";
                    echo "<td style='padding: 10px; text-align:center;'>{$customer['email']}</td>";
                    echo "<td style='padding: 10px; text-align:center;'>{$customer['status']}</td>";
                    echo "<td style='padding: 10px; text-align:center;'>{$customer['phone']}</td>";
                    echo "<td style='padding: 10px; text-align:center;'>{$customer['address']}</td>";
                    echo "<td style='padding: 10px; text-align:center;'>{$customer['city']}</td>";
                    echo "<td style='padding: 10px; text-align:center;'>{$customer['province']}</td>";
                    echo "<td style='padding: 10px; text-align:center;'>{$customer['country']}</td>";
                    echo "<td style='padding: 10px; text-align:center;'>{$customer['postal_code']}</td>";
                    echo "<td style='padding: 10px; text-align:center;'>{$customer['type']}</td>";
                    echo "<td style='padding: 10px; text-align:center;'>{$customer['next_visit']}</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='8' style='padding: 10px; text-align:center;'>No data available</td></tr>";
            }

            echo "</table>";
            ?>
            <script>
                $(document).ready(function() {
                    let table = new DataTable('#myTable');
                });
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