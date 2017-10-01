<?php
	
if(isset($_POST['login']))
{
	if(isset($_POST['username'])) $username = $_POST['username'];
	if(isset($_POST['password'])) $password = $_POST['password'];

	$passwordenc = sha1($password);

	$db = mysqli_connect("localhost", "mccrewco_mcm", "Project69", "mccrewco_cars")  or die(mysqli_error($db));
	$q = "select * from users where username='$username' and password='$passwordenc'";
	$results = mysqli_query($db, $q) or die(mysqli_error($db));

    if(mysqli_num_rows($results) > 0)
    {
        $_SESSION['username'] = $username;
        header("Location:account.php");
        exit(0);
    } else {
	echo "<span style='color: #e74c3c;'>Invalid Username & Password</span>";
}
}
?>
