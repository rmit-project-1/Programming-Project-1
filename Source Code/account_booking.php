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
      <h5>My Bookings</h5>
      <hr>
      <table>
        <tr >
          <td style="background: #7f8c8d;">Id</td>
          <td style="background: #7f8c8d;">User Name</td>
          <td style="background: #7f8c8d;">Pick Up Date</td>
          <td style="background: #7f8c8d;">Drop Off Date</td>
          <td style="background: #7f8c8d;">Pick Up location</td>
          <td style="background: #7f8c8d;">Drop Off location</td>
          <td style="background: #7f8c8d;">Car Id</td>
        </tr>

<?php
$db = mysqli_connect("localhost","mccrewco_mcm","Project69","mccrewco_cars") or die(mysqli_error());
$q = "SELECT * FROM booking WHERE custname ='".$username."' ";
$results = mysqli_query($db,$q) or die(mysqli_error());
    while ($row = mysqli_fetch_array($results))
    {
        $id=$row["id"];
        $username=$row["custname"];
        $pickdate=$row["pickdate"];
        $dropdate=$row["dropdate"];
        $picklocal=$row["picklocation"];
        $droplocal=$row["droplocation"];
        $carid=$row["carid"];

        echo "<tr>
                <td>$id</td>
                <td>$username</td>
                <td>$pickdate</td>
                <td>$dropdate</td>
                <td>$picklocal</td>
                <td>$droplocal</td>
                <td>$carid</td>
              </tr>";


        $db1 = mysqli_connect("localhost","mccrewco_mcm","Project69","mccrewco_cars") or die(mysqli_error());
        $q1 = "SELECT * FROM fleet WHERE (id = $carid)";
        $results1 = mysqli_query($db1,$q1) or die(mysqli_error());

        while ($row = mysqli_fetch_array($results1))
          {
            $valueMake=$row["make"];
            $valueYear=$row["year"];
            $valueModel=$row["model"];
            $valueEngine=$row["engine"];
            $valuePower=$row["power"];
            $valueImg=$row["img"];

         echo"<tr>
                <td colspan='3'>
                <img class='card-img-top' src='$valueImg' alt='Card image cap'>
                </td>
                <td colspan='4'>
                <h5>$valueMake $valueModel $valueYear</h5>
                <span>Engine: $valueEngine <br>Power: $valuePower</span><br>
                </td>
            </tr>

                  ";
      }





}

?>
  </table>
  <br>
  </div>

<br>
<br>

</div>



</div>

<?php
  include 'includes/footer.inc';
  ob_end_flush();
?>
