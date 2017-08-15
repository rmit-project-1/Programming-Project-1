<?php
	if(isset($_POST['username'])) $username = $_POST['username'];
	if(isset($_POST['password'])) $password = $_POST['password'];



	$db = mysqli_connect("localhost", "root", "", "cars")  or die(mysqli_error($db));
	$q = "select * from user where username='$username' and password='$password'";
	$results = mysqli_query($db, $q) or die(mysqli_error($db));
    $success_msg = "Succefully logged in";
    $error_msg = "Ivalid login......Please register";

    if(mysqli_num_rows($results) > 0)
    {
        session_start();
        $_SESSION['username'] = $username;
        header("Location:index.php");
        echo "<p>$success_msg</p>";
        exit(0);
    }
    echo "<p>$error_msg</p>";
    header("Location:signup.php");

?>
