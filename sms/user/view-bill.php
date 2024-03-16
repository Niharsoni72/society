<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

?>

<?php
$flatnum = $_SESSION['smsfuid'];

$sql_flat = "SELECT * FROM tblflat WHERE FlatNum = :flatnum";
$query_flat = $dbh->prepare($sql_flat);
$query_flat->bindParam(':flatnum', $flatnum, PDO::PARAM_STR);
$query_flat->execute();
$result_flat = $query_flat->fetch(PDO::FETCH_OBJ);

if ($query_flat->rowCount() > 0) {
    $maintenance_charge = $result_flat->MCharge;
   
    
} else {
    echo "<p>No maintenance charge found for flat number " . $flatnum . "</p>";
}
?>



<!doctype html>

<head>
    <title>Society Maintenance System || View Bill</title>
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/vendor/animate-css/animate.min.css">
    <link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="../assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../assets/vendor/jquery-datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css">
    <link rel="stylesheet" href="../assets/vendor/jquery-datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css">
    <link rel="stylesheet" href="../assets/vendor/sweetalert/sweetalert.css" />

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/color_skins.css">
    <style>
        td.details-control {
            background: url('../assets/images/details_open.png') no-repeat center center;
            cursor: pointer;
        }

        tr.shown td.details-control {
            background: url('../assets/images/details_close.png') no-repeat center center;
        }
    </style>
</head>

    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img src="../assets/images/thumbnail.png" width="48" height="48" alt="Mplify"></div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- Overlay For Sidebars -->
    <div class="overlay" style="display: none;"></div>

    <div id="wrapper">
        <?php include_once('includes/header.php'); ?>
        <?php include_once('includes/sidebar.php'); ?>

        <div id="main-content">
            <div class="container-fluid">
                <div class="block-header">
                    <div class="row">
                        <div class="col-lg-5 col-md-8 col-sm-12">
                            <h2>View Bill</h2>
                        </div>
                        <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                            <ul class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="dashboard.php"><i class="icon-home"></i></a></li>
                                <li class="breadcrumb-item active">View Bill</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="header">
                                <h2>View Bill</h2>
                            </div>
                            <div class="body">
                                <div class="table-responsive">
                                    <?php
                                    $flatnum = $_SESSION['smsfuid'];

                                    $sql = "SELECT * FROM tblallotment WHERE FlatNum = :flatnum";
                                    $query = $dbh->prepare($sql);
                                    $query->bindParam(':flatnum', $flatnum, PDO::PARAM_STR);
                                    $query->execute();
                                    $results = $query->fetchAll(PDO::FETCH_OBJ);

                                    if ($query->rowCount() > 0) {
                                        foreach ($results as $row) {
                                            echo "<table border='1' class='table table-bordered'>";
                                            echo "<tr align='center'><td colspan='4' style='font-size:20px;color:blue'>Allotment Details</td></tr>";
                                            echo "<tr><th>Name</th><td>" . $row->Name . "</td><th>Contact Number</th><td>" . $row->ContactNumber . "</td></tr>";
                                            echo "<tr><th>Emergency Contact Number</th><td>" . $row->EContactnum . "</td><th>No of Members</th><td>" . $row->Noofmember . "</td></tr>";
                                            echo "<tr><th>Address</th><td colspan='3'>" . $row->Address . "</td></tr>";
                                            echo "<tr><th>Block</th><td>" . $row->Block . "</td><th>Flat Number</th><td>" . $row->FlatNum . "</td></tr>";
                                            echo "<tr><th>Allotment Date</th><td colspan='3'>" . $row->AllotmentDate . "</td></tr>";
                                            echo "</table>";
                                        }
                                    } else {
                                        echo "<p>No allotment details found.</p>";
                                    }

                                    $sql_bill = "SELECT * FROM tblbill WHERE FlatNum = :flatnum";
                                    $query_bill = $dbh->prepare($sql_bill);
                                    $query_bill->bindParam(':flatnum', $flatnum, PDO::PARAM_STR);
                                    $query_bill->execute();
                                    $results_bill = $query_bill->fetchAll(PDO::FETCH_OBJ);

                                    if ($query_bill->rowCount() > 0) {
                                        foreach ($results_bill as $row1) {
                                            echo "<h4 style='font-size:20px;color:blue' align='center'>Electricity Bill Detail</h4>";
                                            echo "<table border='1' class='table table-bordered'>";
                                            echo "<tr><th>Date of Bill</th><td colspan='3' style='color: red'>" . $row1->BillDate . "</td></tr>";
                                            echo "<tr><th>Unit Consumed</th><td>" . $row1->UnitCons . " * " . $row1->PricepUnit . " (Price Per Unit)</td></tr>";
                                            echo "<tr><th>Electricity Charge</th><td>" . $row1->Echarge . "</td></tr>";
                                            echo "<tr><th>Maintenance Charge</th><td>" . $maintenance_charge  . "</td></tr>";
                                            echo "<tr><th>Total Charge</th><td>" . ($maintenance_charge+ $row1->Echarge) . "</td></tr>";
                                            echo "</table>";
                                        }
                                    } else {
                                        echo "<p>No bill details found.</p>";
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Javascript -->
    <script src="assets/bundles/libscripts.bundle.js"></script>
    <script src="assets/bundles/vendorscripts.bundle.js"></script>

    <script src="assets/bundles/datatablescripts.bundle.js"></script>
    <script src="../assets/vendor/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
    <script src="../assets/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
    <script src="../assets/vendor/jquery-datatable/buttons/buttons.colVis.min.js"></script>
    <script src="../assets/vendor/jquery-datatable/buttons/buttons.html5.min.js"></script>
    <script src="../assets/vendor/jquery-datatable/buttons/buttons.print.min.js"></script>

    <script src="../assets/vendor/sweetalert/sweetalert.min.js"></script> <!-- SweetAlert Plugin Js -->


    <script src="assets/bundles/mainscripts.bundle.js"></script>
    <script src="assets/bundles/morrisscripts.bundle.js"></script>
    <script src="assets/js/pages/tables/jquery-datatable.js"></script>


</html>
<?php   ?>