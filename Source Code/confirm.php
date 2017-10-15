<?php
  session_start();
  $page_title="TechARQ - Log In Page";
  include 'includes/header.inc';

?>


<div class="container">



  <div class="account_box">

    <h3>Email Confirmation</h3>
    <hr>
    
    <?php 

	$db = mysqli_connect("localhost","mccrewco_mcm","Project69","mccrewco_cars") or die(mysqli_error());


	$username = $_GET['username'];
	$code = $_GET['code'];

	$q = "SELECT * FROM users WHERE username ='".$username."' ";
	$results = mysqli_query($db,$q) or die(mysqli_error());
    while ($row = mysqli_fetch_array($results))

    { 
    	 
    	$usercode = $row['usercode'];

    }
    if ($code == $usercode) {
    	

    	$q = "UPDATE users SET confirmed = 1";
		mysqli_query($db,$q) or die(mysqli_error());
		echo "<br><span style='padding-left:20px; color:#27ae60l';>Thank you. Your email has been confirmed.</span><br>";

    } else {

    	echo "Error ";
    }

     ?>


	</div>

</div>


</div>





<?php

  include 'includes/footer.inc';
  ob_end_flush();
?>
