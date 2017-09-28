<?php
ob_start();
session_start();
$username = $_SESSION["username"];
if(!isset($_SESSION['username']))
	{
			sleep(1);
			header("Location:index.php");
			exit(0);
	} else {
		if(!isset($_SESSION['remove']))
		{
			$_SESSION['remove'] = array();
		}
		$id = $_GET['id'];





			$db = mysqli_connect("localhost", "mccrewco_mcm","Project69", "mccrewco_cars")  or die(mysqli_error($db));
		  $q = "DELETE FROM fleet WHERE id='$id'";
		  mysqli_query($db, $q) or die(mysqli_error($db));

		 	header("Location:remove_done.php?id=$id");

	}



ob_end_flush();
?>
