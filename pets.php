<?php

require_once "database.php";

$obj = new Database();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['name']) && isset($_POST['status']) && isset($_POST['dob']) && isset($_POST['species']) && isset($_POST['gender']) && isset($_POST['color']) && isset($_POST['weight']) && isset($_POST['notes'])) {
        $name = $_POST['name'];
        $status = $_POST['status'];
        $dob = $_POST['dob'];
        $species = $_POST['species'];
        $gender = $_POST['gender'];
        $color = $_POST['color'];
        $weight = $_POST['weight'];
        $notes = $_POST['notes'];

        // Check if the user already exists
        $isExist = $obj->checkUserExist("pets", "name", "name = '{$name}'");

        if ($isExist) {
            echo "<div class='alert alert-primary try-again'>
            <strong>User Already Exists</strong>
            </div>";
        } else {
            $value = [
                "name" => $name,
                "status" => $status,
                "dob" => $dob,
                "species" => $species,
                "gender" => $gender,
                "color" => $color,
                "weight" => $weight,
                "notes" => $notes
            ];

            // Insert the data
            if ($obj->insert("pets", $value)) {
                header("Location: pets.php");
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
                    <span class="d-none d-lg-block"><i class="fa-solid fa-dog"></i> PetHouse</span>
                </a></div>
            <div class="heading mx-4">
                <h1 class="headingss mt-2">PETS</h1>
            </div>
            <div class="but">
                <!-- Large Modal -->
                <button type="button" class="btn btn1 mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#largeModal">
                    ADD PET
                </button>

                <div class="modal fade" id="largeModal" tabindex="-1">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">You Can Add New Pet</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="">
                                    <div class="row d-flex">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="name" class="form-label">Name</label>
                                                <input type="text" name="name" class="form-control" id="name" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="status" class="form-label">STATUS</label>
                                                <input type="text" name="status" class="form-control" id="status" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="dob" class="form-label">Date Of Birth</label>
                                                <input type="date" name="dob" class="form-control" id="dob" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="species" class="form-label">SPECIES</label>
                                                <input type="text" name="species" class="form-control" id="species" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="gender" class="form-label">GENDER</label>
                                                <input type="text" name="gender" class="form-control" id="gender" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="color" class="form-label">Color</label>
                                                <input type="text" name="color" class="form-control" id="color" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="weight" class="form-label">WEIGHT</label>
                                                <input type="text" name="weight" class="form-control" id="weight" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="notes" class="form-label">NOTES</label>
                                                <input type="text" name="notes" class="form-control" id="notes" required>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn1">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div><!-- End Large Modal -->
            </div>
        </div>
        <section class="section dashboard" style="background-color: #3e4f6f; padding: 10px; border-radius: 4px; text-align:center; color:white;">
            <?php

            require_once "database.php";

            $objj = new Database();

            $objj->select("pets", "*", null, null, null);
            $data = $objj->getResult();

            echo "<table id='myTable' class='display mx-auto' style='background-color: #f5f5f5; padding: 10px; border-radius: 9px; text-align:center; color :black;'>";
            echo "
            <thead>
                    <tr>
                  <th style='padding: 10px; text-align:center;'>Name</th>
                  <th style='padding: 10px; text-align:center;'>Status</th>
                  <th style='padding: 10px; text-align:center;'>DOB</th>
                  <th style='padding: 10px; text-align:center;'>Species</th>
                  <th style='padding: 10px; text-align:center;'>Gender</th>
                  <th style='padding: 10px; text-align:center;'>Color</th>
                  <th style='padding: 10px; text-align:center;'>Weight</th>
                  <th style='padding: 10px; text-align:center;'>Notes</th>
                </tr>
                </thead>
                ";

            if (!empty($data)) {
                foreach ($data as $pet) {
                    echo "<tr>";
                    echo "<td style='padding: 10px; text-align:center;'>{$pet['name']}</td>";
                    echo "<td style='padding: 10px; text-align:center;'>{$pet['status']}</td>";
                    echo "<td style='padding: 10px; text-align:center;'>{$pet['dob']}</td>";
                    echo "<td style='padding: 10px; text-align:center;'>{$pet['species']}</td>";
                    echo "<td style='padding: 10px; text-align:center;'>{$pet['gender']}</td>";
                    echo "<td style='padding: 10px; text-align:center;'>{$pet['color']}</td>";
                    echo "<td style='padding: 10px; text-align:center;'>{$pet['weight']}</td>";
                    echo "<td style='padding: 10px; text-align:center;'>{$pet['notes']}</td>";
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