<?php
  $page_title="TechARQ - Change Password Page";
  include 'includes/header.inc';
  session_start();
  $username = $_SESSION["username"];
?>

<div class="container">

  <div class="change_pass_box">
    <h5>Change My Password</h5>
    <br>
<?php

if(isset($_POST['change']))
{

  $oldpassword = Sha1($_POST['oldpassword']);
  $newpassword = Sha1($_POST['newpassword']);
  $cnewpassword= Sha1($_POST['cnewpassword']);

  $db = mysqli_connect("localhost","root","","cars") or die(mysqli_error());

  $q = "SELECT * FROM users WHERE (username ='".$username."')";
  $results = mysqli_query($db,$q) or die(mysqli_error());
  while ($row = mysqli_fetch_array($results))
  {

    $oldpassworddb = $row['password'];

    if($oldpassword==$oldpassworddb) {

      if ($newpassword==$cnewpassword) {

        $changepass = "UPDATE users SET password = '$newpassword' WHERE (username ='".$username."')";
        mysqli_query($db,$changepass);


        echo "<span style='color: #e74c3c;'>Password changed sucessfully!!</span>";
      }else {
        echo "<span style='color: #e74c3c;'>New password don't match.</span>";
      }


    }else {
      echo "<span style='color: #e74c3c;'>Old password is incorrect.</span>";
  }


}
}

    if($username)
    {
      echo "
      <form method='post' class='login_form' action=''>
      <input class='login_input' type='password' placeholder='Old Password' name='oldpassword' >
      <br>
      <input class='login_input' type='password' placeholder='New Password' name='newpassword' >
      <br>
      <input class='login_input' type='password' placeholder='Confirm New Password' name='cnewpassword' >
      <br>
      <button class='login_button btn btn-primary' name='change' type='submit'>Change Password</button>
      <br>
      ";

    } else {
        sleep(1);
        header("Location:login.php");
        exit(0);
}



?>



  </div>
</div>

</div>

<?php
  include 'includes/footer.inc';
?>
