<?php
  session_start();
  include 'includes/header.inc';
  if(isset($_SESSION['username']))
  {
	echo "<script> $('#logout').css('display', 'block'); </script>";
  }


    if(!isset($_SESSION['hire'])){
    {
        $_SESSION['hire'] = array();
    }
    }
?>
<br>
  <div class="container">
    <div class="search_box">
      <h4>Search for your dream car today.</h4>
      <span>Date: </span><?php echo $current_date ?>
      <form method="post" class="search_from" action="">
      <table>
        <tr>
          <td>
            <select class="search_input" type="text" name="location"  tabindex="0">
                <option value="Any" selected="">Pick Location</option>
                <option value="West Melbourne">West Melbourne</option>
                <option value="South Melbourne">South Bank</option>
                <option value="North Melbourne">North Melbourne</option>
                <option value="Port Melbourne">Port Meblourne</option>
                <option value="Richmond">Richmond</option>
          </td>
          <td>
            <select class="search_input" type="text" name="tier"  tabindex="0">
                <option value="Any">Tier</option>
                <option value="1">Tier 1</option>
                <option value="2">Tier 2</option>
                <option value="3">Tier 3</option>
          </td>
        </tr>
      </table>
      <table>
        <tr>
          <td>
            <button class="search_button btn btn-primary" type="submit" name="submit">Search</button>
          </td>
        </tr>
      </table>

    </div>
  </div>

  <?php
  if(isset($_POST['submit']))
  {

  if(isset($_POST['location']))
        $location = $_POST['location'];

  if(isset($_POST['tier']))
        $tier = $_POST['tier'];





  $db = mysqli_connect("localhost","mccrewco_mcm","Project69","mccrewco_cars") or die(mysqli_error());

  print"<div class='container'>";
  print"<div class='found_box'>";
  print"<h4>Dream Cars Available</h4>";
  print "<span>Locaion: " . $location . "<br>Tier: " . $tier . "</span><br>";
  $q = "SELECT * FROM fleet WHERE (location ='".$location."' AND tier ='".$tier."' AND booked ='".false."')";
      $results = mysqli_query($db,$q) or die(mysqli_error());

      while ($row = mysqli_fetch_array($results))
                        {
                            $valueId=$row["id"];
                            $valueMake=$row["make"];
                            $valueYear=$row["year"];
                            $valueModel=$row["model"];
                            $valueEngine=$row["engine"];
                            $valuePower=$row["power"];
                            $valueImg=$row["img"];
                            $valuePrice=$row["cost"];
                            $valueLocation=$row["location"];



    print"<table>";
    print"<tr>";
      print"<td>";
      print"<img class='card-img-top' src='$valueImg' alt='Card image cap'>";
      print"</td>";
      print"<td>";
        print"<h5>$valueMake $valueModel $valueYear</h5>";
        print"<span>Engine: $valueEngine <br>Power: $valuePower</span><br>";
        print"<span>Price: $valuePrice Per Day</span><br>";
        print"<span>Location: $valueLocation</span><br>";
        print"<a href='book.php?id=$valueId' class='btn btn-success'>Book</a>";
      print"</td>";
      print"</tr>";

    print"</table>";

  }

  print"</div>";
  print"</div>";
  }
  ?>

<br>
</div>

<?php
  include 'includes/footer.inc';
?>
