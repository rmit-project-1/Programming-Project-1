<?php
  ob_start();
  session_start();
  $page_title="MCM - Change Password Page";
  include 'includes/header.inc';
  if(isset($_SESSION['username']))
    {
        sleep(1);
        header("Location:account.php");
        exit(0);
} 

?>

<br>

<div class="container">
 
  <div class="login_box">

    <h4 style="padding-bottom:10px; color: #ccc">Forgot My Password</h4>
    <p style="color: #ccc">Enter your email address to reset your password.</p>

<?php

if(isset($_POST['reset']))
{
  
  $getemail = ($_POST['email']);
  
  $db = mysqli_connect("localhost","mccrewco_mcm","Project69","mccrewco_cars") or die(mysqli_error());
  $q = "SELECT * FROM users WHERE (email ='".$getemail."')";
  $results = mysqli_query($db,$q) or die(mysqli_error());



  while ($row = mysqli_fetch_array($results))
  {
    
    $username = $row['username'];
    $email = $row['email'];

    if($getemail == $email) 
    {
      $pass = rand();
      $passenc = sha1($pass);
      $resetpass = "UPDATE users SET password = '$passenc' WHERE (email ='".$email."')";

      mysqli_query($db,$resetpass) or die(mysqli_error());
      $message =
      "Hi $username,

Your password has been reset. Your password is below.
$pass

This is only a temparoy password. We recommend setting a better password. 
Please login into your account and set your password.

Regards,

Mega Cars Melbourne HQ";

      mail($email, 'Reset Passwprd - MCM', $message, 'From: reset@mcm.mccrrew.com.au');

      echo "<span style='color: #2ecc71;'>Password has been reset.(Check your email)</span>";

    } else {
      echo "<span style='color: #e74c3c;''>Emails Don't Exist.</span>";
    }


  }

}

    ?>
    <form method='post' class='login_form' action=''>
      <input class='login_input' type='email' placeholder='Email' name='email' required>
      <br>
      <button class='login_button btn btn-primary' name='reset' type='submit'>Reset Password</button>
      <br>
    </form>


  </div>
</div>
</div>

<?php
  include 'includes/footer.inc';
  ob_end_flush();

?>

