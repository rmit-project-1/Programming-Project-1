<?php
  ob_start();
  session_start();
  $page_title="TechARQ - Sign Up Page";
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


<br><br>
<div class="container">
  <div class="signup_box">

    <form method="post" class="signup_form" action="add_process.php" enctype="multipart/form-data">
      <h2>Add A Car</h2>

              <h5>Car Details</h5>
              <input class="signup_input" type="text" placeholder="Make" name="make">
              <br>

              <input class="signup_input" type="text" placeholder="Model" name="model">
              <br>

              <select class="date_input" type="text" name="year"  tabindex="0">
                <option value="" selected="">Year</option>
                  <option value="2017">2017</option>
                  <option value="2016">2016</option>
                  <option value="2015">2015</option>
                  <option value="2014">2014</option>
                  <option value="2013">2013</option>
                  <option value="2012">2012</option>
                  <option value="2011">2011</option>
                  <option value="2010">2010</option>
              </select>
              <br>

              <input class="signup_input" type="text" placeholder="Engine" name="engine" >
              <br>

              <input class="signup_input" type="text" placeholder="Power (KW)" name="power" >
              <br>

              <input class="signup_input" type="file" placeholder="Image " name="image" >
              <br>

              <select class="search_input" type="text" name="location"  tabindex="0">
                  <option value="Any" selected="">Pick Location</option>
                  <option value="West Melbourne">West Melbourne</option>
                  <option value="South Melbourne">South Bank</option>
                  <option value="North Melbourne">North Melbourne</option>
                  <option value="Port Melbourne">Port Meblourne</option>
                  <option value="Richmond">Richmond</option>
              </select>
              <br>

              <select class="search_input" type="text" name="tier"  tabindex="0">
                  <option value="Any">Tier</option>
                  <option value="1">Tier 1</option>
                  <option value="2">Tier 2</option>
                  <option value="3">Tier 3</option>
              </select>
              <br>

              <input class="signup_input" type="text" placeholder="Cost ($)" name="cost" >
              <br>

        <button class="signup_button btn btn-success" type="submit">Add</button>

    </form>
  </div>




</div>
<br>

</div>
<?php
  include 'includes/footer.inc';
?>
