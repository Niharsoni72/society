<?php
session_start();
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'smsdb');

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
                    <div class="mobile-logo"><a href="dashboard.php"><img src="../assets/images/logo-icon.svg" alt="Mplify"></a></div>
                    <div class="auth-right">
                        <div class="card">
                            <div class="header">
                                <p class="lead">Sign in to start your session</p>
                            </div>
                            <div class="body">
                                <form class="form-auth-small" action="" method="post">
                                    <div class="form-group">
                                        <label for="signin-email" class="control-label sr-only">Flat Number</label>
                                        <input type="text" class="form-control" placeholder="Flat Number" required="true" name="flatnum">
                                    </div>
                                    <div class="form-group">
                                        <label for="signin-password" class="control-label sr-only">Password</label>
                                        <input type="password" class="form-control" placeholder="Password" required="true" name="password">
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" name="login">LOGIN</button>
                                    <div class="bottom">
                                        <span class="helper-text m-b-10"><i class="fa fa-home"></i> <a href="../index.php">Back Home</a></span>
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
    <script>
        <?php
        // Display error if it exists
        if (isset($error)) {
            echo 'alert("' . $error . '");';
        }
        ?>
    </script>
</body>

</html>
