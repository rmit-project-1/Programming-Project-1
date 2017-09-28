<?php
ob_start();
session_start();
$username = $_SESSION["username"];
if(!isset($_SESSION['username']))
  {
      sleep(1);
      header("Location:index.php");
      exit(0);
  }

if(isset($_POST['make']))
      $make = $_POST['make'];

if(isset($_POST['model']))
      $model = $_POST['model'];

if(isset($_POST['year']))
      $year = $_POST['year'];

if(isset($_POST['engine']))
      $engine = $_POST['engine'];

if(isset($_POST['power']))
      $power = $_POST['power'];

if(isset($_POST['location']))
			$location = $_POST['location'];

if(isset($_POST['tier']))
			$tier = $_POST['tier'];

if(isset($_POST['cost']))
      $cost = $_POST['cost'];

if ($tier == 1) {
    move_uploaded_file($_FILES['image']['tmp_name'], '../mcm.mccrew.com.au/img/cars/tier 1/'.$_FILES['image']['name']);
    $image = 'img/cars/tier 1/'.$_FILES['image']['name'];
} elseif ($tier == 2) {
    move_uploaded_file($_FILES['image']['tmp_name'], '../mcm.mccrew.com.au/img/cars/tier 2/'.$_FILES['image']['name']);
    $image = 'img/cars/tier 2/'.$_FILES['image']['name'];
} elseif ($tier == 3) {
    move_uploaded_file($_FILES['image']['tmp_name'], '../mcm.mccrew.com.au/img/cars/tier 3/'.$_FILES['image']['name']);
    $image = 'img/cars/tier 2/'.$_FILES['image']['name'];
}

$db = mysqli_connect("localhost", "mccrewco_mcm","Project69", "mccrewco_cars")  or die(mysqli_error($db));
$q = "insert into fleet values( null, '$tier', '$make', '$year', '$model', '$engine', '$power', '$image', 0, '$cost', '$location')";
mysqli_query($db, $q) or die(mysqli_error($db));

header("Location:add_done.php");

?>
