<?php
  ob_start();
  session_start();
  $page_title="MCM - Car Added";
  include 'includes/header.inc';
  $username = $_SESSION["username"];
  if(!isset($_SESSION['username']))
  	{
  			sleep(1);
  			header("Location:index.php");
  			exit(0);
  } else {

	echo "<script> $('#logout').css('display', 'block'); </script>";
  
}

?>

<div class="container">
  <br>
  <br>
  <div class="found_box">

    <h3>Car is added to the fleet</h3>
    <p>Car has been added to the fleet</p>
    <br>
    <a href="add.php" style="margin:0 auto; display: block; width: 200px;" class="btn btn-success">Return</a>
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
