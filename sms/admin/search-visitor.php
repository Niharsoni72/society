<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['smsaid'] == 0)) {
    header('location:logout.php');
} else {



?>
    <!doctype html>
    <html lang="en">

    <head>
        <title>Society Maintenance System || Search Visitor</title>

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
        <style>
            body {
                background-image: url('../img/vistor.jpg');
                /* Replace 'path/to/your/image.jpg' with the actual path to your image */
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
            }
        </style>
    </head>

    <body class="theme-blue">

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
                                <h2 style="font-weight: bold; color: black;">Search Visitor</h2>
                            </div>

                            <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                                <ul class="breadcrumb justify-content-end">
                                    <li class="breadcrumb-item"><a href="dashboard.php"><i class="icon-home"></i></a></li>
                                    <li class="breadcrumb-item active">Search Visitor</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="header">

                                    <form id="basic-form" method="post">
                                        <div class="form-group">
                                            <label>Search by Name or Mobile Number</label>
                                            <input id="searchdata" type="text" name="searchdata" required="true" class="form-control">
                                        </div>

                                        <br>
                                        <button type="submit" class="btn btn-primary" name="search" id="submit">Search</button>
                                    </form>
                                    <?php
                                    if (isset($_POST['search'])) {

                                        $sdata = $_POST['searchdata'];
                                    ?>
                                        <h4 align="center">Result against "<?php echo $sdata; ?>" keyword </h4>
                                </div>
                                <div class="body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                                            <thead>
                                                <tr>
                                                    <th>S.NO</th>
                                                    <th>Visitor Name</th>
                                                    <th>Contact Number</th>
                                                    <th>Whom To Visit</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $sql = "SELECT * from tblvisitor where VisitorName like '$sdata%'||MobileNumber like '$sdata%'";
                                                $query = $dbh->prepare($sql);
                                                $query->execute();
                                                $results = $query->fetchAll(PDO::FETCH_OBJ);

                                                $cnt = 1;
                                                if ($query->rowCount() > 0) {
                                                    foreach ($results as $row) {               ?>
                                                        <tr>
                                                            <td><?php echo htmlentities($cnt); ?></td>
                                                            <td><?php echo htmlentities($row->VisitorName); ?>
                                                            </td>
                                                            <td><?php echo htmlentities($row->MobileNumber); ?></td>
                                                            <td><?php echo htmlentities($row->WhomtoMeet); ?></td>
                                                            <td> <a href="view-visitor-detail.php?editid=<?php echo htmlentities($row->ID); ?>">View Details</a></td>
                                                        </tr>

                                            </tbody>

                                            <tfoot>
                                                <tr>
                                                    <th>S.NO</th>
                                                    <th>Visitor Name</th>
                                                    <th>Contact Number</th>
                                                    <th>Whom To Visit</th>
                                                    <th>Action</th>
                                                </tr>
                                            <?php
                                                        $cnt = $cnt + 1;
                                                    }
                                                } else { ?>
                                            <tr>
                                                <td colspan="8"> No record found against this search</td>

                                            </tr>

                                    <?php }
                                            } ?>
                                            </tfoot>
                                        </table>
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
    </body>

    </html>
<?php }  ?>