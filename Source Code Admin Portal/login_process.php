<?php
ob_start();
session_start();
if(isset($_POST['login']))
{
  $username = $_POST['username'];
	$password = Sha1($_POST['password']);
	$code = Sha1($_POST['code']);



	$db = mysqli_connect("localhost", "mccrewco_mcm", "Project69", "mccrewco_cars")  or die(mysqli_error($db));
	$q = "select * from admins where username='$username' and password='$password' and code='$code'";
	$results = mysqli_query($db, $q) or die(mysqli_error($db));
    $success_msg = "Succefully logged in";
    $error_msg = "Invalid login......Please register";

    if(mysqli_num_rows($results) > 0)
    {
        $_SESSION['username'] = $username;
			 	echo "<span style='color: #2ecc71;'>$success_msg</span>";
				sleep(1);
        header("Location:remove.php");
        exit(0);
    } else {
	    	echo "<span style='color: #e74c3c;'>$error_msg</span>";
    }
	}


ob_end_flush();
?>
