<?php
  ob_start();
  session_start();
  $page_title="MCM - Booking";
  include 'includes/header.inc';
  $username = $_SESSION["username"];
  if(!isset($_SESSION['username']))
    {
        sleep(1);
        header("Location: login.php");
        exit(0);
      } else {
	echo "<script> $('#logout').css('display', 'block'); </script>";
        if(!isset($_SESSION['hire']))
        {
          $_SESSION['hire'] = array();
        }
        $id = $_GET['id'];
        $_SESSION['hire'] = $id;
}
?>


<div class="container">
  <div class="book_box">
    <h4>Booking Portal</h4>

    <form method="post" class="book_from" action="booking_process.php">
    <table>
      <tr>
        <td>
          <span>Pick Up Date:</span>
          <input class="book_input" type="text" name="pickdate" id="datepicker1">
        </td>
        <td>
          <span>Drop Off Date:</span>
          <input class="book_input" type="text" name="dropdate" id="datepicker2">
        </td>
      </tr>
      <tr>
        <td>
          <span>Drop Off location:</span>
          <select class="book_input" type="text" name="droplocation"  tabindex="0">
              <option value="West Melbourne">West Melbourne</option>
              <option value="South Melbourne">South Bank</option>
              <option value="North Melbourne">North Melbourne</option>
              <option value="Port Melbourne">Port Meblourne</option>
              <option value="Richmond">Richmond</option>
        </td>
      </tr>
    </table>
    <span>Selected Vehicle</span>
    <?php
    $db = mysqli_connect("localhost","mccrewco_mcm","Project69","mccrewco_cars") or die(mysqli_error());
    $q = "SELECT * FROM fleet WHERE (id = $id)";
      $results = mysqli_query($db,$q) or die(mysqli_error());

      while ($row = mysqli_fetch_array($results))
                        {
                            $valueMake=$row["make"];
                            $valueYear=$row["year"];
                            $valueModel=$row["model"];
                            $valueEngine=$row["engine"];
                            $valuePower=$row["power"];
                            $valueImg=$row["img"];
                            $valuePrice=$row["cost"];
                            $valueLocation=$row["location"];
                            $_SESSION["picklocation"]=$row["location"];


    print"<table class='selected_car'>";
    print"<tr>";
      print"<td>";
      print"<img class='card-img-top' src='$valueImg' alt='Card image cap'>";
      print"</td>";
      print"<td>";
        print"<h5>$valueMake $valueModel $valueYear</h5>";
        print"<span>Engine: $valueEngine <br>Power: $valuePower</span><br>";
        print"<span>Price: $valuePrice Per Day</span><br>";
        print"<span>Location: $valueLocation</span><br>";
      print"</td>";
      print"</tr>";

    print"</table>";
  }
    ?>

    <button class="book_button btn btn-primary" type="Book">Book</button>
    </form>
  </div>
</div>
        </div>

<?php
  include 'includes/footer.inc';
  ob_end_flush();
?>
