<?php
if(isset($_POST['username']))
      $username = $_POST['username'];

if(isset($_POST['password']))
      $password = $_POST['password'];

if(isset($_POST['email']))
      $email = $_POST['email'];

if(isset($_POST['firstname']))
      $firstname = $_POST['firstname'];

if(isset($_POST['lastname']))
      $lastname = $_POST['lastname'];

if(isset($_POST['gender']))
			$gender = $_POST['gender'];

if(isset($_POST['year']))
			$year = $_POST['year'];

if(isset($_POST['month']))
      $month = $_POST['month'];

if(isset($_POST['day']))
      $day = $_POST['day'];

if(isset($_POST['phone']))
      $phone = $_POST['phone'];

if(isset($_POST['street']))
      $street = $_POST['street'];

if(isset($_POST['suburb']))
      $suburb = $_POST['suburb'];

if(isset($_POST['state']))
      $state = $_POST['state'];

if(isset($_POST['postcode']))
      $postcode = $_POST['postcode'];

if(isset($_POST['country']))
      $country = $_POST['country'];

$dob = $day . '/' . $month . '/' . $year;

$db = mysqli_connect("localhost", "root","", "cars")  or die(mysqli_error($db));
$q = "insert into users values( null,'$username', Sha('$password'), '$email', '$firstname', '$lastname', '$gender', '$dob', '$phone', '$street', '$suburb', '$state', '$postcode', '$country', now())";
mysqli_query($db, $q) or die(mysqli_error($db));

header("Location:index.php");

?>
