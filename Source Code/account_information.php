<?php
  ob_start();
  session_start();
  $page_title="TechARQ - My Account Page";
  include 'includes/header.inc';
  $username = $_SESSION["username"];
  if(!isset($_SESSION['username']))
    {
        sleep(1);
        header("Location:login.php");
        exit(0);
    }
?>
<br>
<br>

<div class="container">

  <div class="account_box">
      <h5>My Details</h5>
      <hr>

<?php

$db = mysqli_connect("localhost","mccrewco_mcm","Project69","mccrewco_cars") or die(mysqli_error());
$q = "SELECT * FROM users WHERE username ='".$username."' ";
$results = mysqli_query($db,$q) or die(mysqli_error());
    while ($row = mysqli_fetch_array($results))
    {
        $uname=$row["username"];
        $fname=$row["firstname"];
        $lname=$row["lastname"];
        $gender=$row["gender"];
        $dob=$row["dob"];
        $phone=$row["phone"];
        $email=$row["email"];
        $street=$row["street"];
        $suburb=$row["suburb"];
        $state=$row["state"];
        $postcode=$row["postcode"];
        $country=$row["country"];

            print "<span>User Name: $uname</span><br>";
            print "<span>First Name: $fname</span><br>";
            print "<span>Last Name: $lname</span><br>";
            print "<span>Gender: $gender</span><br>";
            print "<span>DOB: $dob</span><br>";
            print "<span>Phone: $phone</span><br>";
            print "<span>E-mail: $email</span><br>";
            print "<span>Street: $street</span><br>";
            print "<span>Suburb: $suburb</span><br>";
            print "<span>State: $state</span><br>";
            print "<span>Postcode: $postcode</span><br>";
            print "<span>Country: $country</span>";

    }


?>
  </div>


<br>
<br>

</div>



</div>

<?php
  include 'includes/footer.inc';
  ob_end_flush();
?>
