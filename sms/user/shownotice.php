<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!doctype html>
<html lang="en">

<head>
    <title>Society Maintenance System || View Bill</title>

    <head>


        <!-- VENDOR CSS -->
        <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/vendor/animate-css/animate.min.css">
        <link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">

        <!-- MAIN CSS -->
        <link rel="stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" href="assets/css/color_skins.css">
        <style>
            body {
                background-image: url('../img/notice.jpg');
                background-size: cover;
                /* Cover the entire viewport */
                background-position: center;
                /* Center the background image */
            }

            .breadcrumb-item.active strong {
                background-color: black;
                color: white;
                /* Optionally change text color to white for better visibility */
                padding: 5px 10px;
                /* Adjust padding as needed */
                border-radius: 5px;
                /* Optionally add rounded corners */
            }

            .card {
                border-radius: 30px;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
                transition: 0.3s;
                margin: 20px;
                padding: 20px;
                background-color: lightgray;
            }

            .card:hover {
                /* Increase brightness on hover */
                filter: brightness(150%);
            }

            .notice-heading {
                background-color: #000;
                /* Black background color */
                color: #fff;
                /* White text color */
                padding: 10px;
                /* Adjust padding as needed */
                border-radius: 20px;
                /* Rounded corners */
            }
        </style>
    </head>

<body class="theme-blue">
    <!-- WRAPPER -->
    <div id="wrapper">
        <div id="main-content">
            <div class="container-fluid">
                <div class="block-header">
                    <div class="row">
                        <div class="col-lg-5 col-md-8 col-sm-12">
                            <h2 class="notice-heading">Notices</h2> <!-- Add class "notice-heading" to the h2 element -->
                        </div>
                        <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                            <ul class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="dashboard.php"><i class="icon-home"></i></a></li>
                                <li class="breadcrumb-item active"><a href="dashboard.php"><strong>BACK TO HOME</strong></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>



            <!-- Display Notices -->
            <div class="row">
                <?php
                $sql = "SELECT * FROM notice ORDER BY noticedate DESC";
                $query = $dbh->prepare($sql);
                $query->execute();
                $results = $query->fetchAll(PDO::FETCH_OBJ);
                foreach ($results as $row) {
                ?>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="header">
                                <h2><?php echo $row->noticetitle; ?></h2>
                            </div>
                            <div class="body">
                                <p><?php echo $row->noticedesc; ?></p>
                                <p><strong>Date: </strong><?php echo date('M j, Y g:i A', strtotime($row->noticedate)); ?></p>
                                <!-- Add delete button -->
                                <form method="post" action="shownotice.php">
                                    <input type="hidden" name="notice_id" value="<?php echo $row->id; ?>">
                                    <!-- <button type="submit" class="btn btn-danger btn-sm">Delete</button> -->
                                </form>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

        </div>
    </div>

    <!-- Javascript -->
    <script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>