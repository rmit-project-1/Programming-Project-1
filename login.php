<?php
  $page_title="TechARQ - Log In Page";
  include 'includes/header.inc';
?>


<br><br>
<div class="container">
  <div class="login_box">

    <form method="post" class="login_form" action="login_process.php">
      <h2 style="color: #cccccc;" >Login</h2>
        <input class="login_input" type="text" placeholder="Username" name="username" >
        <br>

        <input class="login_input" type="password" placeholder="Password" name="password" >
        <br>

        <button class="login_button btn btn-primary" type="submit">Login</button>
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
?>
