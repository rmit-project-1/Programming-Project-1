<?php
  ob_start();
  session_start();
  $page_title="MCM - Car Booked";
  include 'includes/header.inc';
  $username = $_SESSION["username"];
  if(!isset($_SESSION['username']))

  	{

  			sleep(1);

  			header("Location:index.php");

  			exit(0);

  }



?>



<div class="container">

  <br>

  <br>

  <div class="found_box">



    <h3>Car is booked</h3>

    <p>You can go to your account booking history to check.</p>

    <br>

    <a href="account.php" style="margin:0 auto; display: block; width: 200px;" class="btn btn-primary">My Account</a>

    <br>



  </div>


</div>



<br>

<br>

</div>



<?php



  include 'includes/footer.inc';


ob_end_flush();

?>

