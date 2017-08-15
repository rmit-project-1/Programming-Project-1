<?php
	$page_title="Register";
    include("include/header.inc");
?>
<!--Start of main Content-->
<div id="main_wrapper_r">
<div id="register_form">
    <form method="post" action="signup_process.php">
    	<fieldset>
    		<legend>Register</legend>
       	 		Userame:<br /><input type="text" name="username" /><br />
        		Password:<br /><input type="password" name="password" rows="20" cols="30" /><br /><br/>
        		<input type="submit" value="Submit" />
        </fieldset>
    </form>
 </div>
</div>
<!--end of main content-->
<?php
	include("include/footer.inc");
?>
