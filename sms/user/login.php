<?php
session_start();
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'smsdb5');

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

if (isset($_POST['login'])) {
    $flatnum = $_POST['flatnum'];
    $password = $_POST['password'];

    $sql = "SELECT FlatNum, Password FROM tblflat WHERE FlatNum=:flatnum";
    $query = $dbh->prepare($sql);
    $query->bindParam(':flatnum', $flatnum, PDO::PARAM_STR);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);

    // Check if the entered password matches the MD5 hashed password
    if ($query->rowCount() > 0 && md5($password) == $result['Password']) {
        $_SESSION['smsfuid'] = $result['FlatNum'];
        $_SESSION['login'] = $flatnum;
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Invalid Flat Number or Password";
    }
}

if (isset($_POST['changePassword'])) {
    $flatnum = $_SESSION['smsfuid'];
    $oldPassword = $_POST['oldPassword'];
    $newPassword = $_POST['newPassword'];
    $confirmPassword = $_POST['confirmPassword'];

    // Fetch the user's current password from the database
    $sql = "SELECT Password FROM tblflat WHERE FlatNum=:flatnum";
    $query = $dbh->prepare($sql);
    $query->bindParam(':flatnum', $flatnum, PDO::PARAM_STR);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);

    // Check if the entered old password matches the password in the database
    if ($query->rowCount() > 0 && md5($oldPassword) == $result['Password']) {
        // Check if the new password and confirm password match
        if ($newPassword == $confirmPassword) {
            // Update the password in the database
            $hashedNewPassword = md5($newPassword);
            $updateSql = "UPDATE tblflat SET Password=:password WHERE FlatNum=:flatnum";
            $updateQuery = $dbh->prepare($updateSql);
            $updateQuery->bindParam(':password', $hashedNewPassword, PDO::PARAM_STR);
            $updateQuery->bindParam(':flatnum', $flatnum, PDO::PARAM_STR);
            $updateQuery->execute();

            // Inform the user that the password has been successfully changed
            echo "<script>alert('Password changed successfully.');</script>";
        } else {
            // Inform the user that the new password and confirm password don't match
            echo "<script>alert('New password and confirm password do not match.');</script>";
        }
    } else {
        // Inform the user that the old password is incorrect
        echo "<script>alert('Incorrect old password.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Society Maintenance System || Login</title>
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/color_skins.css">
</head>

<body class="theme-blue">
    <!-- WRAPPER -->
    <div id="wrapper">
        <div class="vertical-align-wrap">
            <div class="vertical-align-middle auth-main">
                <div class="auth-box">
                    <div class="mobile-logo"><a href="login.php"><img src="../assets/images/logo-icon.svg" alt="Mplify"></a></div>
                    <div class="auth-left">
                        <div class="left-top">
                            <span>Society Mgmt System</span>
                        </div>
                        <div class="left-slider">
                            <img src="../assets/images/login/1.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="auth-right">
                        <div class="card">
                            <div class="header">
                                <p class="lead">Login</p>
                            </div>

                            <div class="body">
                                <form class="form-auth-small" action="" method="post">
                                    <div class="form-group">
                                        <label for="signin-email" class="control-label sr-only">Flat Number</label>
                                        <input type="text" class="form-control" placeholder="Flat Number" required="true" name="flatnum">
                                    </div>
                                    <div class="form-group">
                                        <label for="signin-password" class="control-label sr-only">Block</label>
                                        <select type="text" name="block" id="block" value="" onChange="getblock(this.value)" class="form-control" required="true">
                                            <option value="">Choose Block</option>
                                            <?php
                                            $sql2 = "SELECT * FROM tblblocks";
                                            $query2 = $dbh->prepare($sql2);
                                            $query2->execute();
                                            $result2 = $query2->fetchAll(PDO::FETCH_OBJ);

                                            foreach ($result2 as $row) { ?>
                                                <option value="<?php echo htmlentities($row->BlockName); ?>"><?php echo htmlentities($row->BlockName); ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="signin-password" class="control-label sr-only">Password</label>
                                        <input type="password" class="form-control" placeholder="Password" required="true" name="password">
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" name="login">LOGIN</button>
                                    <div class="bottom">
                                        <span class="helper-text m-b-10"><i class="fa fa-home"></i> <a href="../index.php">Back To Home</a></span>
                                        <span class="helper-text m-b-10"><i class="fa fa-key"></i> <a href="#" data-toggle="modal" data-target="#changePasswordModal">Change Password</a></span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END WRAPPER -->

    <!-- Change Password Modal -->
    <div class="modal fade" id="changePasswordModal" tabindex="-1" role="dialog" aria-labelledby="changePasswordModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="changePasswordModalLabel">Change Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="oldPassword">Old Password</label>
                            <input type="password" class="form-control" id="oldPassword" name="oldPassword" required>
                        </div>
                        <div class="form-group">
                            <label for="newPassword">New Password</label>
                            <input type="password" class="form-control" id="newPassword" name="newPassword" required>
                        </div>
                        <div class="form-group">
                            <label for="confirmPassword">Confirm New Password</label>
                            <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
                        </div>
                        <button type="submit" class="btn btn-primary" name="changePassword">Change Password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
                                                