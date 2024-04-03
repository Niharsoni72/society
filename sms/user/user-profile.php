<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!doctype html>
<html lang="en">

<head>
    <title>Society Maintenance System || User Profile</title>

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
                            <h2>User Profile</h2>
                        </div>
                        <div class="col-lg-7 col-md-4 col-sm-12 text-right">
                            <ul class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="dashboard.php"><i class="icon-home"></i></a></li>
                                <li class="breadcrumb-item active">User Profile</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h2>User Profile</h2>
                            </div>
                            <div class="body">
                                <?php
                                $flatnum = $_SESSION['smsfuid'];
                                $sql = "SELECT * FROM tblallotment WHERE FlatNum = :flatnum";
                                $query = $dbh->prepare($sql);
                                $query->bindParam(':flatnum', $flatnum, PDO::PARAM_STR);
                                $query->execute();
                                $results = $query->fetchAll(PDO::FETCH_OBJ);
                                $cnt = 1;
                                if ($query->rowCount() > 0) {
                                    foreach ($results as $row) { ?>
                                        <form id="basic-form" method="post">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" name="name" value="<?php echo $row->Name; ?>" class="form-control" required='true'>
                                            </div>

                                            <div class="form-group">
                                                <label>Contact Number</label>
                                                <input type="text" name="mobilenumber" value="<?php echo $row->ContactNumber; ?>" class="form-control" maxlength='10' required='true'>
                                            </div>
                                            <div class="form-group">
                                                <label>Emergency Contact Number</label>
                                                <input type="text" name="emobilenumber" value="<?php echo $row->EContactnum; ?>" class="form-control" maxlength='10' required='true'>
                                            </div>
                                            <div class="form-group">
                                                <label>Block</label>
                                                <input type="text" name="block" value="<?php echo $row->Block; ?>" class="form-control" readonly='true'>
                                            </div>
                                            <div class="form-group">
                                                <label>Flat Number</label>
                                                <input type="text" name="flatno" value="<?php echo $row->FlatNum; ?>" class="form-control" readonly='true'>
                                            </div>
                                            <div class="form-group">
                                                <label>No. of Member</label>
                                                <input type="text" name="Noofmember" value="<?php echo $row->Noofmember; ?>" class="form-control" required='true'>
                                            </div>
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" name="add" value="<?php echo $row->Address; ?>" class="form-control" required='true'>
                                            </div>
                                            <div class="form-group">
                                                <label>Allotment Date</label>
                                                <input type="text" name="" value="<?php echo $row->AllotmentDate; ?>" readonly="true" class="form-control">
                                            </div>
                                    <?php $cnt = $cnt + 1;
                                    }
                                } ?>
                                    <br>
                                    <!-- <button type="submit" class="btn btn-primary" name="submit" id="submit">Update</button> -->
                                        </form>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>

</body>

</html>