<?php
  include 'includes/header.inc';
  session_start();
?>



<?php
if(isset($_POST['submit']))
{


if(isset($_POST['location']))
      $location = $_POST['location'];

if(isset($_POST['tier']))
      $tier = $_POST['tier'];


print "Locaion: " . $location;


$db = mysqli_connect("localhost","root","","cars") or die(mysqli_error());

print"<div class='container'>"
print"<div class='found_box'>"
print"<h4>Dream Cars Available</h4">
$q = "SELECT * FROM fleet WHERE (location ='".$location."' AND tier ='".$tier."' AND avil ='".true."')";
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
      print"<a href='#' class='btn btn-primary'>View</a>";
      print"<a href='#' class='btn btn-success'>Book</a>";
    print"</div>";

  print"</div>";
}
}
?>
</div>
</div>
</div>
<?php
  include 'includes/footer.inc';
?>
