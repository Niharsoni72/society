<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['login'])) 
  {
    $mobnum=$_POST['mobnum'];
	$password=md5($_POST['password']);
    $block=$_POST['block'];
    $flatno=$_POST['flatno'];
     //$sql ="SELECT * from tblallotment WHERE ContactNumber=:mobnum and password=:password and Block=:block and FlatNum=:flatno";
	      $sql ="SELECT ContactNumber,password from tblallotment WHERE ContactNumber=:mobnum and password=:password and Block=:block";
    $query=$dbh->prepare($sql);
    $query-> bindParam(':mobnum', $mobnum, PDO::PARAM_STR);
	$query-> bindParam(':password', $password, PDO::PARAM_STR);
    $query-> bindParam(':block', $block, PDO::PARAM_STR);
    $query-> bindParam(':flatno', $flatno, PDO::PARAM_STR);
	//print_r($query);exit;
    $query-> execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
	//print_r($results);
	$a= $query->rowCount();
	echo "$a";exit;
    if($query->rowCount() > 0)
{
foreach ($results as $result) {
$_SESSION['smsuid']=$result->ID;
$_SESSION['smspid']=$result->password;
$_SESSION['smsfuid']=$result->FlatNum;
$_SESSION['smsbuid']=$result->Block;
}

$_SESSION['login']=$_POST['mobnum'];
echo "<script type='text/javascript'> document.location ='dashboard.php'; </script>";
} else{
echo "<script>alert('Invalid Details');</script>";
}
}

?>
<!doctype html>
<html lang="en">

<head>
<title>Society Mentainence System || Login</title>

<!-- VENDOR CSS -->
<link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/vendor/animate-css/animate.min.css">
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
                                <p class="lead">Sign in to start your session</p>
                            </div>
                            <div class="body">
                                <form class="form-auth-small" action="" method="post">
                                    <div class="form-group">
                                        <label for="signin-email" class="control-label sr-only">Mobile Number</label>
                                        <input type="text" class="form-control" placeholder="Mobile Number" required="true" name="mobnum">
                                    </div>
									<div class="form-group">
                                        <label for="signin-email" class="control-label sr-only">Password</label>
                                        <input type="password" class="form-control" placeholder="Password" required="true" name="password">
                                    </div>
                                    <div class="form-group">
                                        <label for="signin-password" class="control-label sr-only">Block</label>
                                        <select type="text" name="block" id="block" value="" onChange="getblock(this.value)" class="form-control" required="true">
<option value="">Choose Block</option>
                                                        <?php 

$sql2 = "SELECT * from   tblblocks ";
$query2 = $dbh -> prepare($sql2);
$query2->execute();
$result2=$query2->fetchAll(PDO::FETCH_OBJ);

foreach($result2 as $row)
{          
    ?>  
<option value="<?php echo htmlentities($row->BlockName);?>"><?php echo htmlentities($row->BlockName);?></option>
 <?php } ?> 
            
                                                        
                                                    </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="signin-email" class="control-label sr-only">Flat Number</label>
                                        <input type="text" class="form-control" placeholder="Flat Number" required="true" name="flatno">
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
</body>
</html>