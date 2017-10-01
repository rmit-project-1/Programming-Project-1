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

} else {
echo "<script> $('#logout').css('display', 'block'); </script>";

}

?>

<br>

<br>


<div class="container">



  <div class="account_box">

    <h3>My Account</h3>

    <div class="my_account">

      <h5>My Account Information</h5>

      <hr>

      <ul>

        <a class="account_link" href="account_information.php"><li>My Account Information</li></a>

        <a class="account_link" href="change_password.php"><li>Change Password</li></a>

      </ul>

    </div>

    <div class="my_order">

      <h5>My Bookings</h5>

      <hr>

      <ul>

        <a class="account_link" href="account_booking.php"><li>My Booking History</li></a>

      </ul>

    </div>



    <br>

  </div>





<br>

<br>



</div>







</div>



<?php

  include 'includes/footer.inc';

?>