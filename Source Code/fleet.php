<?php
  $page_title="TechARQ - Catelogue Page";
  include 'includes/header.inc';
  session_start();
?>
<br>

<div class="container catelog-tier1">

  <div class="catelog-title-tier1">
    <h6>Tier 1</h6>
  </div>
  <div class='card-group'>
  <?php
    $db = mysqli_connect("localhost","root","","cars") or die(mysqli_error());
    //Execute a query(select)
    $tier = "1";
      $q = "SELECT * FROM fleet WHERE (tier ='".$tier."' )";
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


    print"<div class='card'>";
      print"<img class='card-img-top' src='$valueImg' alt='Card image cap'>";
      print"<div class='card-block'>";
        print"<h5 class='card-title'>$valueMake $valueModel $valueYear</h5>";
        print"<span class='card-text'>Engine: $valueEngine <br>Power: $valuePower</span><br>";
        print"<span class='card-text'>Price: $valuePrice</span><br>";
        print"<span class='card-text'>Location: $valueLocation</span><br><br>";
        print"<a href='#' class='btn btn-success'>Book</a>";
      print"</div>";

    print"</div>";

}



?>
</div>
</div>
<br>

<div class="container catelog-tier2">

  <div class="catelog-title-tier2">
    <h6>Tier 2 </h6>
  </div>
  <div class='card-group'>
  <?php
    $db = mysqli_connect("localhost","root","","cars") or die(mysqli_error());
    //Execute a query(select)
    $tier = "2";
      $q = "SELECT * FROM fleet WHERE (tier ='".$tier."' )";
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


    print"<div class='card'>";
      print"<img class='card-img-top' src='$valueImg' alt='Card image cap'>";
      print"<div class='card-block'>";
        print"<h5 class='card-title'>$valueMake $valueModel $valueYear</h5>";
        print"<span class='card-text'>Engine: $valueEngine <br>Power: $valuePower</span><br>";
        print"<span class='card-text'>Price: $valuePrice</span><br>";
        print"<span class='card-text'>Location: $valueLocation</span><br><br>";
        print"<a href='#' class='btn btn-success'>Book</a>";
      print"</div>";

    print"</div>";

}



?>
</div>
</div>

<br>

<div class="container catelog-tier3">

  <div class="catelog-title-tier3">
    <h6>Tier 3 </h6>
  </div>
  <div class='card-group'>
  <?php
    $db = mysqli_connect("localhost","root","","cars") or die(mysqli_error());
    //Execute a query(select)
    $tier = "3";
      $q = "SELECT * FROM fleet LIMIT 4 WHERE (tier ='".$tier."' )";
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


    print"<div class='card'>";
      print"<img class='card-img-top' src='$valueImg' alt='Card image cap'>";
      print"<div class='card-block'>";
        print"<h5 class='card-title'>$valueMake $valueModel $valueYear</h5>";
        print"<span class='card-text'>Engine: $valueEngine <br>Power: $valuePower</span><br>";
        print"<span class='card-text'>Price: $valuePrice</span><br>";
        print"<span class='card-text'>Location: $valueLocation</span><br><br>";
        print"<a href='#' class='btn btn-success'>Book</a>";
      print"</div>";

    print"</div>";

}



?>
</div>
</div>
<br>



</div>
<?php
include 'includes/footer.inc';
?>
