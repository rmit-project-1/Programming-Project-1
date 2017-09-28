<?php
ob_start();
session_start();
$id = $_SESSION["hire"];
$picklocation = $_SESSION["picklocation"];
$username = $_SESSION["username"];
if(!isset($_SESSION['username']))
	{
			sleep(1);
			header("Location:login.php");
			exit(0);
} else {

$carid = $id;


	if(isset($_POST['pickdate'])) $pickdate = $_POST['pickdate'];
	if(isset($_POST['dropdate'])) $dropdate = $_POST['dropdate'];
	if(isset($_POST['droplocation'])) $droplocation = $_POST['droplocation'];

$time1 = strtotime($pickdate);
$time2 = strtotime($dropdate);
$pick = date( 'Y-m-d', $time1);
$drop = date( 'Y-m-d', $time2 );


  $db = mysqli_connect("localhost", "mccrewco_mcm","Project69", "mccrewco_cars")  or die(mysqli_error($db));
  $q = "insert into booking values(null, '$username' ,'$pick', '$drop', '$picklocation', '$droplocation', '$carid')";
  mysqli_query($db, $q) or die(mysqli_error($db));

header("Location:account.php");
}
ob_end_flush();
?>
