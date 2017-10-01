<?php
  session_start();
  $page_title="TechARQ - Log In Page";
  include 'includes/header.inc';
  if(isset($_SESSION['username']))
  {
	echo "<script> $('#logout').css('display', 'block'); </script>";
  }

?>





<br><br>

<div class="container">

  <div class="login_box">


    <form method="post" class="login_form" action="">

      <h2 style="color: #cccccc;" >Login</h2>

  	 <?php   include 'login_process.php'; ?>

        <input class="login_input" type="text" placeholder="Username" name="username" required>

        <br>



        <input class="login_input" type="password" placeholder="Password" name="password" required>

        <br>



        <button class="login_button btn btn-primary" name="login" type="submit">Login</button>

        <br>



        <input class="form-check-input" type="checkbox" checked="checked">  <span style="color: #cccccc;">Remember me</span>





    <div class="container" >

      <span style="color: #cccccc;" class="psw">Forgot your password? <a href="#">Click Here</a></span>

    </div>

    </form>

  </div>

</div>

<br>

</div>





<?php

  include 'includes/footer.inc';
  ob_end_flush();
?>

