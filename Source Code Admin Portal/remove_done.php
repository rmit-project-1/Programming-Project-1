<?php
  ob_start();
  session_start();
  $page_title="MCM - Removed";
  include 'includes/header.inc';
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

?>

<div class="container">
  <br>
  <br>
  <div class="found_box">

    <h3>Removed</h3>
    <p><?php echo "Car ID: " . $id . " Has been removed."; ?></p>
    <br>
    <a href="remove.php" style="margin:0 auto; display: block; width: 200px;" class="btn btn-danger">Return</a>
    <br>


  </div>

</div>

<br>
<br>
</div>

<?php
}
  include 'includes/footer.inc';

ob_end_flush();
?>
