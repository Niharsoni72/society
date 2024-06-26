<?php
session_start();
error_reporting(0);
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'smsdb5');
// Establish database connection.
try {
    $dbh = new PDO(
        "mysql:host=" . DB_HOST . ";port=3306;dbname=" . DB_NAME,
        DB_USER,
        DB_PASS,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'")
    );
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}


?>
<!doctype html>
<html lang="en">

<head>
    <title>Society Mentainence System || Dashboard</title>

    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/vendor/animate-css/animate.min.css">
    <link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css">
    <link rel="stylesheet" href="../assets/vendor/parsleyjs/css/parsley.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/color_skins.css">

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


                        </div>
                        <div class="row">
                            <?php
                            $uid = $_SESSION['smsuid'];
                            $sql2 = "SELECT * from   tblallotment where ID=:uid";
                            $query2 = $dbh->prepare($sql2);
                            $query2->bindParam(':uid', $uid, PDO::PARAM_STR);
                            $query2->execute();
                            $result2 = $query2->fetchAll(PDO::FETCH_OBJ);
                            foreach ($result2 as $row) {
                            ?>
                                <h1 style="text-align: center ;color: black"> Welcome to Society Management System!! <?php echo htmlentities($row->Name); ?></h1>
                            <?php } ?>



                            <div class="banner-content col-lg-16 col-md-14">
                                <div class="content">

                                    <img class="content-image img-fluid d-block mx-auto" src="../img/society2.jpeg" alt="">

                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                        <ul class="breadcrumb justify-content-end">
                            <li class="breadcrumb-item"><a href="dashboard.php"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ul>
                    </div> -->
                </div>
            </div>

        </div>



    </div>
    </div>

    </div>

    <!-- Javascript -->
    <script src="assets/bundles/libscripts.bundle.js"></script>
    <script src="assets/bundles/vendorscripts.bundle.js"></script>

    <script src="../assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
    <script src="../assets/vendor/parsleyjs/js/parsley.min.js"></script>

    <script src="assets/bundles/mainscripts.bundle.js"></script>
    <script src="assets/bundles/morrisscripts.bundle.js"></script>
    <script>
        $(function() {
            // validation needs name of the element
            $('#food').multiselect();

            // initialize after multiselect
            $('#basic-form').parsley();
        });
    </script>
</body>

</html>

<?php  ?>