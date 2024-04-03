<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

// Check if form is submitted
if (isset($_POST['submit'])) {
    $noticeTitle = $_POST['noticetitle'];
    $noticeDesc = $_POST['noticedesc'];
    $noticeDateTime = $_POST['noticedate'];

    // Prepare and execute the SQL query to insert notice details into the database
    $sql = "INSERT INTO notice (noticetitle, noticedesc, noticedate) VALUES (:noticetitle, :noticedesc, :noticedate)";
    $query = $dbh->prepare($sql);
    $query->bindParam(':noticetitle', $noticeTitle, PDO::PARAM_STR);
    $query->bindParam(':noticedesc', $noticeDesc, PDO::PARAM_STR);
    $query->bindParam(':noticedate', $noticeDateTime, PDO::PARAM_STR);

    if ($query->execute()) {
        // Success message if notice is added successfully
        echo "<script>alert('Notice added successfully');</script>";
    } else {
        // Error message if notice is not added
        echo "<script>alert('Failed to add notice');</script>";
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <title>Add Notice</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Include custom CSS -->
    <style>
        body {
            /* Set background image */
            background-image: url('../img/notice.jpg');
            /* Background image properties */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            /* Additional styles */
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            height: 100%;
        }

        .container {
            margin-top: 50px;
        }

        .card {
            border-radius: 15px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            margin: 20px;
            padding: 20px;
            background-color: #f2f2f2;
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

<body>
<div class="container">
    <h2 class="mb-4 notice-heading">Add Notice</h2>
    <!-- Notice form -->
    <form method="post" action="">
        <div class="form-group">
            <label for="noticetitle"><strong>Notice Title:</strong></label>
            <input type="text" class="form-control" id="noticetitle" name="noticetitle" placeholder="Enter Notice Title" required>
        </div>
        <div class="form-group">
            <label for="noticedesc"><strong>Notice Description:</strong></label>
            <textarea class="form-control" id="noticedesc" name="noticedesc" rows="4" placeholder="Enter Notice Description" required></textarea>
        </div>
        <div class="form-group">
            <label for="noticedate"><strong>Notice Date and Time:</strong></label>
            <input type="datetime-local" class="form-control" id="noticedate" name="noticedate" required>
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
</div>
    <!-- Back to Home button -->
    <div class="text-center mt-4">
        <a href="dashboard.php" class="btn btn-primary">Back to Home</a>
    </div>


    <!-- Include Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
