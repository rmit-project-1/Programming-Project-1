<?php
	if(isset($_POST['username']))
        $username = $_POST['username'];
	if(isset($_POST['password']))
        $password = $_POST['password'];

	$db = mysqli_connect("localhost", "root", "", "cars")  or die(mysqli_error($db));
	$q = "INSERT INTO user VALUES ('','$username', '$password')";
	mysqli_query($db, $q) or die(mysqli_error($db));

	header("Location:index.php");
?>
